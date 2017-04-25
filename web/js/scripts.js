
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
        var captcha = $(this).find('.Captcha').val();
        var fd = $(this).find('.form-data').val();

        if(username == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }

        if(password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '96px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }

        if(captcha == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '165px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.Captcha').focus();
            });
            return false;
        }

        if(fd == ''){
            $('.page-container form').find('.error').css('top', '165px');
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.Captcha').focus();
            });
            return false;
        }else{
            password = $.md5(password);
            var str = "username="+username+"&password="+password+"&captcha="+captcha;
            var new_str = navgeek_encode(str);
            $("#form-data").val(new_str);
        }
    });

    $('.page-container form .username, .page-container form .password, .page-container form .Captcha').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });
});

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

