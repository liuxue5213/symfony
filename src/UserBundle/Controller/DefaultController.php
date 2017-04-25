<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Gregwar\Captcha\PhraseBuilder;
use Gregwar\Captcha\CaptchaBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use UserBundle\Entity\JsUser;
use UserBundle\Entity\JsLogRecord;
use Doctrine\ODM\PHPCR\Query\Builder\QueryBuilder;

class DefaultController extends Controller
{

    /**
     * 默认主页内容
     */
    public function indexAction()
    {
        echo '123';
        die;
//        $this->get('user.model')->validLogin();
//        return $this->redirect($this->generateUrl('user_login'));
//        return $this->render('UserBundle:Default:index.html.twig');
    }


    public function userIndexAction()
    {
//        $this->get('user.model')->validLogin();
//        return $this->redirect($this->generateUrl('user_login'));
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        // $user = new JsUser();
        // $form = $this->createFormBuilder($user)
        //     ->add('user_loginame','text')
        //     ->add('user_pass','password')
        //     ->getForm();
        // print_r($_vc);
        // exit;
//        $this->validLogin();
//        return $this->render('UserBundle:Default:index.html.twig',array(
//            // 'form' => $form->createView(),
//        ));
    }

    public function captchaAction(Request $request)
    {
        $width = intval($request->get('width')) ?: 130;  // 验证码图片的宽度
        $height = intval($request->get('height')) ?: 40;  // 验证码图片的高度
        $length = 5;  // 验证码字符的长度
        $no_effect = true;  // 是否忽略验证图片上的干扰线条
        $pharse = new PhraseBuilder();
        $captcha = new CaptchaBuilder($pharse->build($length));
        $image = $captcha->setIgnoreAllEffects($no_effect)->build($width, $height)->get();
        $captchaNo = $captcha->getPhrase();
        //设置session
        $session = $this->getRequest()->getSession();
        $session->set('captcha', $captchaNo);
        $res = new Response($image);
        $res->headers->set('content-type', 'image/jpeg');
        return $res;
    }

    public function postLoginAction(Request $request)
    {
        //判断验证码 TOKEN REFERER
        $this->isCsrfValid($request);
        $captcha = $request->get('captcha');
        $session = $this->getRequest()->getSession();
        if ($session->get('captcha') != $captcha) {
            // echo 'false';
            return $this->redirectToRoute('user_login', array('info' => 'captcha error',));
        }

        //解密数据
        $postData = $request->get('form-data');
        $func = $this->get('user.func');
        $arr = $func->php_decode('johnscott1989101', $postData);
        // $pwd = password_hash($arr['password'], PASSWORD_DEFAULT);

        //读取用户数据
        $em = $this->getDoctrine()->getManager();
        $dbInfo = $em->getRepository('UserBundle:JsUser')->findOneBy(array('userLoginame' => $arr['username']));

        //判断用户
        if (empty($dbInfo)) {
            return $this->redirectToRoute('user_login', array('info' => 'user not register'));
        }

        //判断密码
        if (password_verify($arr['password'], $dbInfo->getUserPass())) {
            //修改登录时间
            $dbInfo->setUserLastime(new \DateTime('now'));
            $em->flush();

            //加入日志
            $ip = $_SERVER['REMOTE_ADDR'];
            $info = "role:".$dbInfo->getUserRole()."登录系统";
            //DefaultController::addLog($info, $request->get('_controller'), '用户登录', $arr['username'], $ip);
            // die;
            //设置session
            $user_info = array(
                'id' => $dbInfo->getUserPass(),
                'nickname' => $dbInfo->getUserNickname(),
                'url' => $dbInfo->getUserUrl(),
            );
            $session->set('user_info', $user_info);
            return $this->redirect($this->generateUrl('admin_index'));
        } else {
            return $this->redirectToRoute('user_login', array('info' => 'password error'));
        }
    }

    /**
     * 添加日志方法
     *
     * @param string $info  权限角色
     * @param string $func  调用方法名
     * @param string $event 具体操作事件
     * @param string $name  用户名
     * @param string $ip    IP地址
     */
    public function addLog($info, $func, $event, $name, $ip)
    {
        // echo $info;
        // exit;
        // $log = new JsLogRecord();
        // $log->setOperationInfo($info);
        // $log->setFunctionName($func);
        // $log->setAddtime(new \DateTime('now'));
        // $log->setOperationType($event);
        // $log->setOperationName("用户名称：$name");
        // $log->setOperationIp("用户登录IP：$ip");
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($log);
        // $em->flush();
    }

    public function registerAction(Request $request)
    {
        //判断TOKEN  POST数据
        if ($request->get('form-data')) {
            // DefaultController::isCsrfValid($request);
            $postData = $request->get('form-data');
            $func = $this->get('user.func');
            $arr = $func->php_decode('johnscott1989101', $postData);
            // $arr = iconv('gbk', 'utf8', $arr);
            //判断解密的数据
            //if(empty($arr)){
            //    return $this->redirectToRoute($this->generateUrl('user_login'));
            //}

            print_r($arr);
            exit;

            // $em = $this->getDoctrine()->getManager();
            // $dbInfo = $em->getRepository('UserBundle:JsUser')->findOneBy(array('userLoginame' => $arr['username']));

            // if(!empty($dbInfo)){
            //     // return $this->redirectToRoute('user_register', array('info' => 'username is used'));
            // }

            //判断角色

            // $user = new JsUser();
            // $user->setUserLoginame($arr['username']);
            // $user->setUserNickname($arr['nickname']);
            // $user->setUserPass($arr['password']);
            // $user->setUserEmail($arr['email']);
            // $user->setUserUrl();
            // $user->setUserRegistered(new \DateTime('now'));
            // $user->setUserStatus(1);
            // $user->setUserLastime();
            // $user->setUserRole($role);
            // $em->persist($user);
            // $em->flush();


            // return $this->redirect($this->generateUrl('admin_index'));
            exit;
        }
        return $this->render('UserBundle:Default:register.html.twig', array(
            // 'form' => $form->createView(),
        ));
    }

    public function ajaxValidCaptchaAction(Request $request)
    {
        if (empty($request->get('cno'))) {
            return $this->redirect($this->generateUrl('user_login'));
        }
        $cno = $request->get('cno');
        $session = $this->getRequest()->getSession();
        if ($session->get('captcha') != $cno) {
            // return $this->redirectToRoute('user_login', array('info' => 'captcha error',));
            return new JsonResponse('10001');
        } else {
            return new JsonResponse('10000');
        }
    }

}
