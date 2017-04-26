<?php
/**
 * @Author: anchen
 * @Date:   2017-04-25 15:14:15
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-04-25 15:22:20
 */

namespace UserBundle\Model;

use Symfony\Component\HttpFoundation\Request;

class UserModel
{

    public function validLogin(Request $request)
    {
        $session = $request->getSession();
        if (!empty($session->get('user_info'))) {
            return true;
        }
        return false;
    }

    public function isCsrfValid(Request $request)
    {
        $token = $request->get('_csrf_token');
        //SESSION
        $session = $request->getSession();

        //验证失败  返回首页
        if ($token != $session->get('_csrf/authenticate')) {
            return false;
        }
        return true;
    }
    
}
