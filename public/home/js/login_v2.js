// JavaScript Document
(function () {
    $(document).ready(function () {
        $('.tab li').click(function () {
            var _num = $(this).index();
            loginTab(_num);
        });

        //帐号密码提示
        $('.user-ipt').each(function () {
            if (!$(this).val() == '') {
                $(this).siblings('p').hide().css({'background-image': 'none'});
            } else {
                $(this).siblings('p').show();
            }
            ;
            $(this).focus(function () {
                $(this).siblings('p').hide();
            });
            $(this).blur(function () {
                if (!$(this).val() == '') {
                    $(this).siblings('p').hide();
                } else {
                    $(this).siblings('p').show();
                }
                ;
            });
        });

        $(".ipt-box p").click(function () {
            $(this).prev().focus();
        });

        //是否需要手机验证码
        function isNeedMobileCaptcha() {
            var _mobile = $("#mobileLoginText").val();
            var _verifycode = $("#mobileVerifyCode").val();
            var _isView = 'true';
            //设置同步处理
            $.ajaxSettings.async = false;
            $.getJSON(SERVER_NAME + "/nsso/ajax/captcha/checkIsNeedMobileCaptcha.do?jsoncallback=?",
                {mobile: _mobile, verifycode: _verifycode},
                function (response) {
                    if (response.success) {
                        _isView = response.result;
                    }
                });
            //恢复异步
            $.ajaxSettings.async = true;
            return _isView;
        }

        // 默认调用倒计时
        var timer = null,
            countdown = $('#countdown'),
            timestart = countdown.text(),
            time = timestart;

        $('.code').click(function () {
            var This = $(this);
            if (MOBILE_REGX.test($("#mobileLoginText").val())) {
                //是否需要验证码
                var _isNeedMobileCaptcha = isNeedMobileCaptcha();
                if(_isNeedMobileCaptcha == 'true'){
                    $("#_mobileCaptcha").show();
                }else {
                    $("#_mobileCaptcha").hide();
                }
                //如果显示图形验证码，并且值为空时
                var _mobileVerifyCode = $("#mobileVerifyCode").val();
                if (_isNeedMobileCaptcha == 'true' && $.trim(_mobileVerifyCode) == ''){
                    error_tip('#errorMobileCode', '#errorMobileCodeDiv', "请输入验证码");
                    //动态验证码error隐藏
                    $('#dynaPWdDiv').hide();
                    return;
                }
                //图形验证码error隐藏
                $('#errorMobileCodeDiv').hide();
                //动态验证码error隐藏
                $('#dynaPWdDiv').hide();

                $.getJSON(SERVER_NAME + "/nsso/ajax/message/mobileLogByPC/sendMobileCode.do?jsoncallback=?",
                    {mobileOrEMail: $("#mobileLoginText").val(), verifycode: $("#mobileVerifyCode").val()},
                    function (data) {
                        if (data.success) {
                            $('.code').hide().siblings('.time').show();//显示倒计时
                            $('#errorMobileCodeDiv').hide();//图形验证码error隐藏
                            timer = setInterval(function () {
                                time--;
                                if (time == 0) {
                                    clearTimeout(timer);
                                    This.show().siblings('a').hide();//隐藏获取动态验证码
                                    time = timestart;
                                    countdown.text(time);
                                }
                                countdown.text(time);
                            }, 1000);
                        } else {
                            var errorTips = '';
                            if (data.errorText == 'errorVerifycode') {
                                errorTips = '验证码输入错误';
                                error_tip('#errorMobileCode', '#errorMobileCodeDiv', errorTips);
                                return;
                            } else if (data.errorText == 'vcodeWarning') {
                                errorTips = '您当前短信验证码已失效，请重新发送验证码';
                            } else if (data.errorText == 'phoneWarning') {
                                errorTips = '已超过每日发送上限，请于次日再试';
                            } else if (data.errorText == 'ipLimit') {
                                errorTips = '当前IP发送频率过快，请稍后重试';
                            } else if (data.errorText == 'waiting') {
                                errorTips = '发送频率过快，请稍后重试';
                            } else {
                                errorTips = data.errorText;
                            }
                            error_tip('#dynaPWd', '#dynaPWdDiv', errorTips);
                        }
                    });
            } else {
                error_tip('#moblieError', '#moblieErrorDiv', "请输入正确的手机号");
            }
        });

        //判断输入框是否为空
        function login_yz() {
            var useript = $('.user-ipt');
            useript.siblings('.validateErrorTip').hide();
            for (var i = 0; i < useript.length; i++) {
                var inputText = useript.eq(i).val();
                if (inputText == "" && useript.eq(i).is(':visible')) {
                    useript.eq(i).siblings('.validateErrorTip').show();
                    useript.eq(i).addClass('error');
                    return false;
                } else {
                    useript.eq(i).siblings('.validateErrorTip').hide();
                    useript.eq(i).removeClass('error');
                }
            }
            return true;
        }

        $('#loginButton').click(function () {
            if (login_yz()) {
                $("#loginform").submit();
            }
        });

        $('#loginMobileButton').click(function () {
            if (login_yz()) {
                if (MOBILE_REGX.test($("#mobileLoginText").val())) {
                    $("#mobileLoginSumbit").submit();
                } else {
                    error_tip('#moblieError', '#moblieErrorDiv', "请输入正确的手机号");
                }
            }
        });
    });

})();


function loginTab(num) {
    var tabLi = $('.tab li');
    tabLi.eq(num).addClass('active').siblings().removeClass('active');
    tabLi.parent().siblings('.content').eq(num).show().siblings('.content').hide();
}

//验证是否为合格的手机号
var MOBILE_REGX = /^(13|14|15|17|18)\d{9}$/;
var SERVER_NAME = "http://login.lvmama.com";

function mobileRegisterOnBlur(fieldId) {//动态密码登陆手机号框移开事件
    var mobile = $("#" + fieldId).val();
    if ($("#" + fieldId).val() != '') {
        if (MOBILE_REGX.test($("#" + fieldId).val())) {
            $('#moblieErrorDiv').hide();
            return true;
        } else {
            error_tip('#moblieError', '#moblieErrorDiv', "请输入正确的手机号");
            return false;
        }
    }
}

//错误提示
function error_tip(elt, eltDiv, msg) {
    $(elt).html(msg);
    $(eltDiv).show();
}

//检测是否需要验证码
function checkIsNeedCaptcha() {
    var _userName = $("#usernameOrNum").val();
    if(_userName != null && $.trim(_userName).length >0){
        $.ajax({
            type: "POST",
            url: "/nsso/ajax/captcha/checkIsNeedCaptcha.do",
            async: true,
            data: {
                userName:_userName
            },
            dataType: "json",
            success: function(response) {
                if (response.success == true) {
                    var _result = response.result;
                    if(_result == 'true'){
                        $("#_captcha").show();
                    }else if(_result == 'false'){
                        $("#_captcha").hide();
                    }
                }
            }
        });
    }
}

//绑定鼠标事件
$("#usernameOrNum").blur(function(){
    checkIsNeedCaptcha();
});