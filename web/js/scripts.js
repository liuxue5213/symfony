/**
 * JS加密
 *
 * @param  {[type]} str [description]
 * @return {[type]}     [description]
 */
function navgeek_encode(str){
    var ng_key='johnscott1989101';
    var key=CryptoJS.enc.Latin1.parse(ng_key);
    var iv=CryptoJS.enc.Latin1.parse(ng_key);
    var encrypted = CryptoJS.AES.encrypt(str,key,{iv:iv,mode:CryptoJS.mode.CBC,padding:CryptoJS.pad.ZeroPadding});
    return encrypted;
}

