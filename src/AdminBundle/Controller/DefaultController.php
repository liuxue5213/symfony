<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $menu = $this->getSessionInfo($request);
        if (empty($menu)) {
            return $this->redirect($this->generateUrl('user_index'));
        }
        $path = $this->getPath($request->getPathInfo());

        return $this->render(
            'AdminBundle:Default:index.html.twig',
            array(
                'path' => $path,
                'info' => $menu,
            )
        );
    }

    public function accountOpenAction(Request $request)
    {
        $menu = $this->getSessionInfo($request);
        if (empty($menu)) {
            return $this->redirect($this->generateUrl('user_index'));
        }
        $path = $this->getPath($request->getPathInfo());

        return $this->render(
            'AdminBundle:Setting:account.html.twig',
            array(
                'path' => $path,
                'info' => $menu,
            )
        );
    }


    public function getSessionInfo(Request $request)
    {
        //用户信息session
        $session = $request->getSession();
        if ($session->get('user_info')) {
            $menu = $session->get('user_info');
            $menu['isParent'] = array_keys($menu['parent_menu']);
        } else {
            $menu = array();
        }

        return $menu;
    }

    public function getPath($path)
    {
        return empty($path) ? '' : ltrim($path, '/');
    }





}
