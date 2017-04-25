<?php
/**
 * @Author: anchen
 * @Date:   2017-04-25 15:14:15
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-04-25 15:22:20
 */

namespace UserBundle\Model;

class UserModel extends BaseModel
{
    /**
     * 判断用户session
     */
    public function validLogin()
    {
//        $session = $this->getRequest()->getSession();
//        if (!empty($session->get('user_info'))) {
//            return $this->redirect($this->generateUrl('admin_index'));
//        }
//        return $this->redirect($this->generateUrl('user_login'));
    }

    public function isCsrfValid($request)
    {
//        $headers = $request->headers->all();
//        $referer = $headers['referer'][0];
//        $token = $request->get('_csrf_token');
//        //SESSION
//        $session = $this->getRequest()->getSession();
//        $sesReferer = $session->get('_security.secured_area.target_path');
//        //验证失败  返回首页
//        if ($referer != $sesReferer || $token != $session->get('_csrf/authenticate')) {
//            return $this->redirect($this->generateUrl('user_login'));
//        }
    }
    
}
