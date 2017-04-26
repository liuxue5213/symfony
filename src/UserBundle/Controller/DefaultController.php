<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Gregwar\Captcha\PhraseBuilder;
use Gregwar\Captcha\CaptchaBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use UserBundle\Entity\JsSystemUsers;
use UserBundle\Entity\JsSystemLogs;
use UserBundle\Entity\JsSystemMenus;
use Doctrine\ODM\PHPCR\Query\Builder\QueryBuilder;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

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
//        return $this->render('UserBundle:Default:index.html.twig');
    }


    public function userIndexAction(Request $request)
    {
        //判断用户是否已经登陆
        $isLogin = $this->get('user.model')->validLogin($request);
        if ($isLogin) {
            return $this->redirect($this->generateUrl('admin_index'));
        } else {
            return $this->render('UserBundle:Default:index.html.twig');
        }
    }

    public function loginAction(Request $request)
    {
//        $isLogin = $this->get('user.model')->validLogin($request);
//        if ($isLogin) {
//            return $this->redirect($this->generateUrl('admin_index'));
//        } else {
//            $user = new JsSystemUsers();
//            $form = $this->createFormBuilder($user)
//                ->add('user_loginame','text')
//                ->add('user_pass','password')
//                ->getForm();
//            return $this->render('UserBundle:Default:index.html.twig',array(
//             'form' => $form->createView(),
//            ));
//        }
    }

    public function logoutAction (Request $request)
    {
        $session = $request->getSession();
        if ($tmp = $session->get('user_info')) {
            //加入日志
            $info = "用户退出:".$tmp['username'];
            $this->addLog($info, $request->get('_controller'), '用户退出', $tmp['id']);

            //清除session
            $session->clear();
        }

        return $this->redirect($this->generateUrl('user_index'));
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
        $session = $request->getSession();
        $session->set('captcha', $captchaNo);
        $res = new Response($image);
        $res->headers->set('content-type', 'image/jpeg');
        return $res;
    }

    public function postLoginAction(Request $request)
    {
        //判断验证码 TOKEN REFERER
        $isVaild = $this->get('user.model')->isCsrfValid($request);
        if (!$isVaild) {
            return $this->redirect($this->generateUrl('user_index'));
        }

        //判断session
        $captcha = $request->get('captcha');
        $session = $request->getSession();
        if ($session->get('captcha') != $captcha) {
            return $this->render('UserBundle:Default:index.html.twig', array('info'=>'captcha error'));
//            return $this->redirectToRoute('user_login', array('info' => 'captcha error',));
        }

        //解密数据
        $postData = $request->get('form-data');
        $func = $this->get('user.func');
        $arr = $func->php_decode('johnscott1989101', $postData);
        // $pwd = password_hash($arr['password'], PASSWORD_DEFAULT);

        //读取用户数据
        $em = $this->getDoctrine()->getManager();
        $dbInfo = $em->getRepository('UserBundle:JsSystemUsers')->findOneBy(array('username' => $arr['username']));

        //判断用户
        if (empty($dbInfo)) {
            return $this->render('UserBundle:Default:index.html.twig', array('info' => 'user not register'));
        }

        //判断密码
        if (password_verify($arr['password'], $dbInfo->getPassword())) {
            $em->getConnection()->beginTransaction();
            try{
                //用户ID
                $user_id = $dbInfo->getId();

                //修改登录时间
                $dbInfo->setLastLoginDate(new \DateTime('now'));
                $em->flush();

                //获取用户菜单
                $rows = $this->get('database_connection')->fetchAssoc("select a.menu_ids,a.remark,c.is_open_use FROM js_system_roles a INNER JOIN js_system_user_role b ON a.id = b.role_id INNER JOIN js_system_users c ON c.id = b.user_id WHERE c.id = $user_id AND c.status = 1 AND b.is_del = 0 AND a.status = 1");
                $menus = $this->get('database_connection')->fetchAll("select id,menu_name,parent_id,menu_link,menu_sort,menu_type,menu_code from js_system_menus WHERE is_del = 0 order by menu_sort ASC");

                //用户角色名称
                $role_name = empty($rows['remark']) ? '' : $rows['remark'];
                $role_ids = empty($rows['menu_ids']) ? '' : explode(',', $rows['menu_ids']);
                $open_use = empty($rows['is_open_use']) ? 0 : $rows['is_open_use'];
                $nickname = empty($dbInfo->getNickname()) ? 'JSID'.time() : $dbInfo->getNickname();

                $tmp_menus = array();
                $tmp_two_menus = array();
                foreach ($menus as $val) {
                    if (empty($val['parent_id'])) {
                        if (in_array($val['id'], $role_ids) ) {
                            $tmp_menus[$val['id']][$val['menu_name']] = $val['menu_link'];
                        }
                    } else {
                        $tmp_two_menus[$val['parent_id']][$val['menu_name']] = $val['menu_link'];
                    }
                }

                //加入日志
                $info = "用户登录:".$arr['username'];
                $this->addLog($info, $request->get('_controller'), '用户登录', $dbInfo->getId());

                //设置session
                $user_info = array(
                    'id' => $user_id,
                    'nickname' => $nickname,
                    'username' => $dbInfo->getUsername(),
                    'role_name' => $role_name,
                    'open_use' => $open_use,
                    'menu' => $tmp_menus,
                    'parent_menu' => $tmp_two_menus,
                );
                $session->set('user_info', $user_info);

                $em->getConnection()->commit();
            }catch(\Exception $e){
                $em->getConnection()->rollback();
            }
            return $this->redirect($this->generateUrl('admin_index'));
        } else {
            return $this->render('UserBundle:Default:index.html.twig', array('info' => 'password error'));
        }
    }

    /**
     * 添加日志方法
     *
     * @param string $info  权限角色
     * @param string $func  调用方法名
     * @param string $event 具体操作事件
     * @param int $userId  用户ID
     */
    public function addLog($info, $func, $event, $userId)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $log = new JsSystemLogs();
        $log->setContent($info);
        $log->setFunctionName($func);
        $log->setCreateDate(new \DateTime('now'));
        $log->setOperationType($event);
        $log->setUserId($userId);
        $log->setIp($ip);
        $em = $this->getDoctrine()->getManager();
        $em->persist($log);
        $em->flush();
    }

    public function registerAction(Request $request)
    {
        $user = new JsSystemUsers();
        $form = $this->createFormBuilder($user)
            ->add('user_loginame','text')
            ->add('user_pass','password')
            ->getForm();

        //判断TOKEN  POST数据
        if ($request->get('form-data')) {
            $this->get('user.model')->isCsrfValid($request);
            $postData = $request->get('form-data');
            $func = $this->get('user.func');
            $arr = $func->php_decode('johnscott1989101', $postData);
            // $arr = iconv('gbk', 'utf8', $arr);
            //判断解密的数据
            //if(empty($arr)){
//            return $this->render('UserBundle:Default:index.html.twig');
            //    return $this->redirectToRoute($this->generateUrl('user_login'));
            //}

            print_r($arr);
            exit;

            // $em = $this->getDoctrine()->getManager();
            // $dbInfo = $em->getRepository('UserBundle:JsSystemUsers')->findOneBy(array('userLoginame' => $arr['username']));

            // if(!empty($dbInfo)){
            //     // return $this->redirectToRoute('user_register', array('info' => 'username is used'));
            // }

            //判断角色

            // $user = new JsSystemUsers();
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
        }
        return $this->render('UserBundle:Default:register.html.twig', array(
             'form' => $form->createView(),
        ));
    }

    public function ajaxValidCaptchaAction(Request $request)
    {
        if (empty($request->get('cno'))) {
            return $this->render('UserBundle:Default:index.html.twig');
        }
        $cno = $request->get('cno');
        $session = $request->getSession();

        if ($session->get('captcha') != $cno) {
            return new JsonResponse('10001');
        } else {
            return new JsonResponse('10000');
        }
    }

}
