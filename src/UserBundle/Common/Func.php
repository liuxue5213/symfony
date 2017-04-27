<?php
namespace UserBundle\Common;
class Func{

    public function php_encode($key, $str)
    {
        if (empty($key) || empty($str)) {
            return array('code' => 500);
        }
        $encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $key);
        return $encrypted;
    }
    
    public function php_decode($key, $str)
    {
        $arr_two = array();
        if (empty($key) || empty($str)) {
            return array('code' => 500);
        }

        $encryptedData = base64_decode($str);
        $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $encryptedData, MCRYPT_MODE_CBC, $key);
        $arr = explode('&', $decrypted);
        for ($i=0; $i<count($arr); $i++) {
            $arr_one[$i] = explode('=', $arr[$i]);
            $arr_two[$arr_one[$i][0]] = $arr_one[$i][1];
        }
        return $arr_two;
    }
}
