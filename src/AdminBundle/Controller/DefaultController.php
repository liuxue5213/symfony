<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        //用户信息session
        $session = $request->getSession();
        if ($session->get('user_info')) {
            $menu = $session->get('user_info');
            $par_key = implode(',', array_keys($menu['parent_menu']));
        } else {
            return $this->redirect($this->generateUrl('user_index'));
//            //默认显示
//            $menu = array(
//                'nickname' => 'JSID'.time(),
//                'menu' => array(array('系统设置'=>'setting/index')),
//                'parent_menu' => array(array('基本设置'=>'account/index')),
//            );
        }

        return $this->render('AdminBundle:Default:index.html.twig', array(
                'info' => $menu,
                'isParent' => $par_key
            )
        );
    }







}
