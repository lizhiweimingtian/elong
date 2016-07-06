/**
 * Created by zoubin on 2016-6-20.
 * 弹出式功能概述：点击“提交”按钮，弹出滑动验证码，对齐后，直接提交
 * 浮动式功能概述：点击“提交”按钮，显示滑动验证码，同事隐藏按钮，对齐后，直接提交
 * hideBtn  :隐藏的元素（仅针对popup模式，需在页面添加，其它传"")
 * captchaDiv   :极验验证码对象元素div容器，需在页面添加的一个div
 * formId   ：需要提交的表单的id
 * showType :滑动验证码显示模式（popup/float/embed)
 * challengeElementId   :表单中隐藏的存放极验二次校验入参的标签的id（三参数之一）
 * validateElementId    :表单中隐藏的存放极验二次校验入参的标签的id（三参数之一）
 * seccodeElementId     :表单中隐藏的存放极验二次校验入参的标签的id（三参数之一）
 */
function startGeetest(hideBtn,captchaDiv,formId,showType,challengeElementId,validateElementId,seccodeElementId){

    var handlerPopup = function (captchaObj) {
        if(showType == 'popup'){//弹出式
            //针对弹出式，给隐藏按钮绑定click事件
            $("#"+hideBtn).click(function () {
                var validate = captchaObj.getValidate();
                if (!validate) {
                    alert('请先完成验证！');
                    return;
                }
                //设置后台二次校验入参
                $("#"+challengeElementId).val(validate.geetest_challenge);
                $("#"+validateElementId).val(validate.geetest_validate);
                $("#"+seccodeElementId).val(validate.geetest_seccode);

                //注册直接提交
                $("#"+formId).submit();
            });
            // 弹出式需要绑定触发验证码弹出按钮
            captchaObj.bindOn("#"+hideBtn);
        }else if(showType == 'float'){//浮动式
            //针对浮动式，验证码对齐时直接提交
            captchaObj.onSuccess(function(){
                var validate = captchaObj.getValidate();
                if (!validate) {
                    alert('请先完成验证！');
                    return;
                }
                //设置后台二次校验入参
                $("#"+challengeElementId).val(validate.geetest_challenge);
                $("#"+validateElementId).val(validate.geetest_validate);
                $("#"+seccodeElementId).val(validate.geetest_seccode);

                //注册直接提交
                $("#"+formId).submit();
            });
        }else{
            alert("未知模式:"+showType);
        }

        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#"+captchaDiv);

        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "/nsso/geetest/startCaptcha.do",
        type: "get",
        dataType: "json",
        success: function (data) {

            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: showType, // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
            }, handlerPopup);
        }
    });
}
