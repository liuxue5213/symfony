<?php
namespace UserBundle\Common;
class Func{
    
    public function php_decode($key,$str){
        if(empty($key) || empty($str)){
            return $this->redirect($this->generateUrl('user_login'));
        }
        $encryptedData = base64_decode($str);
        $str = iconv('GBK', 'UTF-8//IGNORE', $str);
        $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $encryptedData, MCRYPT_MODE_CBC, $key);
        $arr=explode('&',$decrypted);
        for($i=0;$i<count($arr);$i++){
            $arr_one[$i]=explode('=',$arr[$i]);
            $arr_two[$arr_one[$i][0]]=$arr_one[$i][1];
        }
        return $arr_two;
    }


}
