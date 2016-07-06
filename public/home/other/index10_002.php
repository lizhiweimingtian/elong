var poplogin='<div class="contLogin" >'
+'        <div class="user-tab-box">'
+'            <ul class="user-tab">'
+'                <li class="active">手机快捷登录</li>'
+'                <li>用户名登录</li>'
+'            </ul>'
+'         </div>'
+'        <div class="contLeft" style="display:block">'
+'                 <div id="loinTextErrorTip" class="loinTextErrorTip"></div>'
+'                 <p class="quick-area quick-mob">'
+'                     <input name="mobileLoginText" type="text" maxlength="11" id="mobileLoginText" class="user-ipt">'
+'                     <span class="poplogin_name">手机号码</span>'
+'                </p>'
+'                 <p id="rapidMobileLoginCaptcha" class="quick-area quick-yzm" style="display: none;">'
+'                      <input name="mobileLoginYzm" type="text" id="mobileLoginYzm1" class="user-ipt">'
+'                      <span class="poplogin_dynamic" >请填写计算结果或验证码</span>'
+'                      <a href="javascript:;">'
+'       <img id="imageMobile" src="http://login.lvmama.com/nsso/account/checkcode.htm" width="124" height="40" onclick="reloadCheckCode(\'imageMobile\');return false;">'
+'      </a>'
+'                 </p>'
+'                 <p class="quick-area quick-yzm">'
+'                      <input name="mobileLoginYzm" type="text" id="mobileLoginYzm2" class="user-ipt">'
+'                      <span class="poplogin_dynamic">请输入动态密码</span>'
+'                      <a href="javascript:;" class="getYzm_btn">发送验证码</a>'
+'                      <a class="getYzm_time_btn" href="javascript:void(0)" style="display: none;"><em id="countdown">60</em>后重发</a>'
+'                 </p>'
+'                 <p>'
+'                      <a href="javascript:;" class="fast-login-btn" id="fast-login">登  录</a> '
+'                  </p>'
+'                  <div class="check-box" >'
+'                     <label class="csmm_form_col w90"> </label><input type="checkbox" class="poplogin_check" checked="" id="terms">我已阅读并接受<a class="link_blue" href="http://login.lvmama.com/nsso/register/agreement.do"  target="_blank" id="lvmama_tk">《驴妈妈旅游网会员服务条款》</a>'
+'                  </div>'
+'                  <p class="user-end-tips">'
+'                     <i></i>快捷注册：可使用手机快捷登录功能，通过动态密码完成快捷注册并登录。'
+'                  </p>'
+'             </div>'
+'        <div class="contLeft">'
+'                 <div id="loinUserErrorTip" class="loinTextErrorTip"></div>'
+'                <p class="quick-area quick-mob">'
+'                     <input name="mobileLoginText2" type="text" id="mobileLoginText2" class="user-ipt">'
+'                     <span id="userNameTips" class="poplogin_name">手机号码/用户名/邮箱</span>'
+'                 </p>'
+'                 <p class="quick-area quick-mob">'
+'                      <input name="mobileLoginYzm" type="password" id="userpassword" class="user-ipt">'
+'                      <span id="userNameTips" class="passwd">请输入密码</span>'
+'                </p>'
+'                 <p id="rapidNormalLoginCaptcha" class="quick-area quick-yzm" style="display: none;">'
+'                      <input name="mobileLoginYzm" type="text" id="useryanzhen" class="user-ipt">'
+'                      <span id="userNameTips" class="poplogin_dynamic">请填写计算结果或验证码</span>'
+'                     <a href="javascript:;"><img id="imageNormal" src="http://login.lvmama.com/nsso/account/checkcode.htm" width="124" height="40" onclick="reloadCheckCode(\'imageNormal\');return false;"></a>'
+'                 </p>  '
+'                 <div class="forget-password">'
+'                      <a href="http://login.lvmama.com/nsso/findpass/index.do" class="fr" target="_blank">忘记密码？</a>'
+'                   </div>  '
+'                 <p>'
+'                      <a href="javascript:;" class="fast-login-btn" id="user_login">登  录</a>'
+'                  </p> '
+'                  <p class="lv-member"> 还不是驴妈妈会员？<a href="http://login.lvmama.com/nsso/register/registering.do" target="_blank">免费注册</a>'
+'                   </p>'
+'                 </div>'
+'                   <div class="account-box">'
+'                      <h4><span>合作网站账号登录</span></h4>'
+'                      <div class="login_icon clearfix">'
+'                         <a href="http://www.lvmama.com/nsso/cooperation/tencentQQUnionLogin.do" onclick="tipsWindow()" target="_blank" class="qq" title="QQ"></a>'
+'                         <a href="http://www.lvmama.com/nsso/cooperation/tencentWeiXinUnionLogin.do" onclick="tipsWindow()" target="_blank" class="weix" title="微信"></a>'
+'                         <a href="http://www.lvmama.com/nsso/cooperation/sinaUnionLogin.do" onclick="tipsWindow()" target="_blank" class="sina" title="新浪微博"></a>'
+'                         <a href="http://www.lvmama.com/nsso/cooperation/alipayUnionLogin.do" onclick="tipsWindow()" target="_blank" class="alpay" title="支付宝"></a>'
+'                      </div>'
+'                   </div>'
+'  </div>';var Tipswindows_n='   <div id="tipsWindow_n" style="display: block;">'
+'  <p><img src="http://pic.lvmama.com/img/icons/warning.gif">&nbsp;请在联合登录前不要关闭此窗口。完成登录后根据您好的情况点击下面的按钮：</p>'
+'  <strong>请在新开网页上完成登录后再选择。</strong>'
+'  <div class="tbtn">'
+'   <input name="completePayBtn" type="button" value="已完成登录" id="completePayBtn" onclick="completeLogin()"><a type="button" href="http://www.lvmama.com/public/reg_and_login" target="_blank">登录遇到问题</a>'+'</div>'
+'  <a href="javascript:void(0);" onclick="closeMsg();">返回重新选择登录方式</a>'
+' </div>';var MOBILE_REGX=/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(17(0|[6-8]))|(18([0-9])))\d{8}$/;var SERVER_NAME="http://login.lvmama.com";var isOrNotJumpToUrl=false;var loginJumpUrl="",show_type='',mobile_geturl='';function loginURL(jumpUrl){isOrNotJumpToUrl=true;loginJumpUrl=jumpUrl;showRadidLoginDiv();}
function mobileRegisterOnBlur(fieldId,successId,errorId){$("#"+successId).html('');$("#"+errorId).html('');$("#loinTextErrorTip").empty();$("#sso_mobileAndEmail").val('');$("#sso_password").val('');var mobile=$("#"+fieldId).val();$("#"+fieldId).data("valid","false");if(!MOBILE_REGX.test($("#"+fieldId).val())){$("#"+errorId).html('<i class="error-icon"></i>请输入正确的手机号码');return false;}
return true;}
function mobileLoginBtn(){var mobileOrEMail=$('#mobileLoginText').val();if(mobileOrEMail==''){$("#loinTextErrorTip").html('<i class="error-icon"></i>请输入正确的手机号码');$('#mobileLoginText').focus();return false;}
var isCaptchaDisplay=$("#rapidMobileLoginCaptcha").is(":visible");var captcha=$('#mobileLoginYzm1').val();if(isCaptchaDisplay&&$.trim(captcha)==''){$("#loinUserErrorTip").html('<i class="error-icon"></i>请输入图形验证码');$('#mobileLoginYzm1').focus();return false;}
var verifycode=$('#mobileLoginYzm2').val();if(verifycode==''){$("#loinUserErrorTip").html('<i class="error-icon"></i>请输入动态验证码');$('#mobileLoginYzm2').focus();return false;}
var m_login_url='http://login.lvmama.com/nsso/ajax/login/rapidLogin.do';if(mobile_geturl!=''){m_login_url=mobile_geturl;}
$.getJSON(m_login_url+"?jsoncallback=?",{mobile:mobileOrEMail,verifycode:captcha,authenticationCode:verifycode,loginType:'L-M'},function(response){if(response.success==false){$("#loinTextErrorTip").html('<i class="error-icon"></i>'+response.errorText);reloadCheckCode('imageMobile');}else{$('#loinTextErrorTip').html('');$(window.parent.document).find(".bgLogin,.LoginAndReg, #loginDIV").hide();try{$.getJSON(SERVER_NAME+"/nsso/ajax/getUserNo.do?jsoncallback=?",function(req){if(req.success){cmCreateRegistrationTag(req.result,"null","null","null","null","null","null-_-null-_-null-_-null-_-null");}
if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}});}catch(exception){if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}}}});}
function login(){$("#mobileLoginText").val('');$("#mobileLoinTextErrorTip").empty();$("#mobileLoinTextSuccessTip").empty();var mobileOrEMail=$('#mobileLoginText2').val();if(mobileOrEMail==''){$("#loinUserErrorTip").html('<i class="error-icon"></i>请输入邮箱/手机号/用户名/会员卡');$('#sso_mobileAndEmail').focus();return false;}
var password=$('#userpassword').val();if(password==''){$("#loinUserErrorTip").html('<i class="error-icon"></i>请输入密码');$('#sso_password').focus();return false;}
var isCaptchaDisplay=$("#rapidNormalLoginCaptcha").is(":visible");var verifycode=$('#useryanzhen').val();if(isCaptchaDisplay&&$.trim(verifycode)==''){$("#loinUserErrorTip").html('<i class="error-icon"></i>请输入验证码');$('#xhsso_verifycode1').focus();return false;}
$.getJSON("http://login.lvmama.com/nsso/ajax/login/rapidLogin.do?jsoncallback=?",{mobileOrEMail:mobileOrEMail,password:password,verifycode:verifycode,loginType:'L-N'},function(data){if(data.success){$(window.parent.document).find(".bgLogin,.LoginAndReg, #loginDIV").hide();try{$.getJSON(SERVER_NAME+"/nsso/ajax/getUserNo.do?jsoncallback=?",function(req){if(req.success){cmCreateRegistrationTag(req.result,"null","null","null","null","null","null-_-null-_-null-_-null-_-null");}
if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}});}catch(exception){if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}}}else{$("#loinUserErrorTip").html('<i class="error-icon"></i>'+data.errorText);reloadCheckCode('imageNormal');checkIsNeedCaptcha();}});}
function tipsWindow(obj,screenBg){$(".dialog-close").click();pandora.dialog({title:"登录遇到问题？",width:"500px",content:Tipswindows_n});}
function closeMsg(){$(".dialog-close").click();showLogin();}
function completeLogin(){$.getJSON("http://www.lvmama.com/check/login.do?jsoncallback=?",{},function(dt){if(dt.success){if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}}else{alert("您还没有登录成功");}});}
function reloadCheckCode(s1){var times=(new Date).getTime();var elt1=document.getElementById(s1);elt1.src=elt1.src+"?_="+times;}
function getUserName(){var username="";try{username=decodeURIComponent(document.cookie).match(/unUserName\=(.+?)\;/);}catch(e){username=unescape(document.cookie).match(/unUserName\=.+\^!\^/);}
if(username!=null){$('#mobileLoginText2').val(username[0].replace('unUserName=','').replace(';','')).siblings('span').hide();}}
function showRadidLoginDiv(){pandora.dialog({title:"快速预订 / 登录",content:poplogin,initialize:function(){if(show_type=='mobile'){$('.user-tab li').eq(1).remove();$('.account-box').remove();}
getUserName();}});}
function getYzm(){var $btn=$('.getYzm_btn'),timerYzm=null,Time=60;var _mobilePhone=$("#mobileLoginText").val();if(!MOBILE_REGX.test(_mobilePhone)){$("#loinTextErrorTip").html('<i class="error-icon"></i>请输入正确的手机号码');return;}
if(!$btn.hasClass('getYzm_stop')){$.getJSON(SERVER_NAME+"/nsso/ajax/captcha/checkIsNeedMobileCaptcha.do?jsoncallback=?",{mobile:_mobilePhone},function(response){var _isNeedMobileCaptcha='true';if(response.success){_isNeedMobileCaptcha=response.result;}
if(_isNeedMobileCaptcha=='true'){$("#rapidMobileLoginCaptcha").show();}else{$("#rapidMobileLoginCaptcha").hide();}
var _mobileCaptcha=$('#mobileLoginYzm1').val();if(_isNeedMobileCaptcha=='true'&&!_mobileCaptcha){$("#loinTextErrorTip").html('<i class="error-icon"></i>请输入图形验证码');return;}
$.getJSON(SERVER_NAME+"/nsso/ajax/message/mobileRapLogByPC/sendMobileCode.do?jsoncallback=?",{mobileOrEMail:_mobilePhone,verifycode:_mobileCaptcha,sendType:'2'},function(data){if(data.success){$btn.addClass('getYzm_stop').text('60秒后重发');timerYzm=setInterval(function(){Time--;if(Time<=0){$btn.text('发送验证码').removeClass('getYzm_stop');clearInterval(timerYzm);}else{$btn.text(Time+'秒后重发');}},1000);$('#loinTextErrorTip').html('');}else{var errorTips='';if(data.errorText=='errorVerifycode'){errorTips='图形验证码输入错误';}else if(data.errorText=='vcodeWarning'){errorTips='您当前短信验证码已失效，请重新发送验证码';}else if(data.errorText=='phoneWarning'){errorTips='已超过每日发送上限，请于次日再试';}else if(data.errorText=='ipLimit'){errorTips='当前IP发送频率过快，请稍后重试';}else if(data.errorText=='waiting'){errorTips='发送频率过快，请稍后重试';}else{errorTips=data.errorText;}
$('#loinTextErrorTip').html('<i class="error-icon"></i>'+errorTips+'!');}});});}}
function cooperationRegisterLogin(){$.getJSON("http://login.lvmama.com/nsso/ajax/registerLoginByCooperationCache.do?jsoncallback=?",{},function(json){if(json.success){if(isOrNotJumpToUrl){location.href=loginJumpUrl;}else{loginFormSubmit();$(".dialog-close").click();}}else{showRadidLoginDiv();}});}
function showLogin(callback,data){if(!callback){window.loginFormSubmit=function(){location.reload();};}else{window.loginFormSubmit=callback;}
if(data){show_type=data.type;mobile_geturl=data.url;}
var cooperationCacheAccount;var cooperationType;var arrStr=document.cookie.split("; ");for(var i=0;i<arrStr.length;i++){var temp=arrStr[i].split("=");if(temp[0]=="cooperationCacheAccount"){cooperationCacheAccount=unescape(temp[1]);}
if(temp[0]=="orderFromChannel"){cooperationType=unescape(temp[1]);}
if(cooperationCacheAccount!=null&&cooperationCacheAccount!=""&&cooperationType!=null&&cooperationType!=""){break;}}
if(cooperationCacheAccount!=null&&cooperationCacheAccount!=""&&cooperationType!=null&&cooperationType=="qqcb"){cooperationRegisterLogin();}else{pandora.dialog({title:"快速预订 / 登录",content:poplogin,initialize:function(){if(show_type=='mobile'){$('.user-tab li').eq(1).remove();$('.account-box').remove();}
getUserName();}});}}
function checkIsNeedCaptcha(){var _userName=$("#mobileLoginText2").val();if(_userName!=null&&$.trim(_userName).length>0){$.getJSON(SERVER_NAME+"/nsso/ajax/captcha/checkIsNeedCaptcha.do?jsoncallback=?",{userName:_userName},function(response){if(response.success==true){var _result=response.result;if(_result=='true'){$("#rapidNormalLoginCaptcha").show();}else if(_result=='false'){$("#rapidNormalLoginCaptcha").hide();}}});}}
$(function(){$('.getYzm_btn').live('click',function(){getYzm();});$('#mobileLoginText').live('blur',function(){mobileRegisterOnBlur('mobileLoginText','mobileLoinTextSuccessTip','loinTextErrorTip');});$('#mobileLoginText2').live('blur',function(){checkIsNeedCaptcha();});$('#fast-login').live('click',function(){mobileLoginBtn();});$('#user_login').live('click',function(){login();});$("#useryanzhen").live('keyup',function(e){if(e.keyCode==13){if($("#mobileLoginText2").val()!=""&&$("#userpassword").val()!=""){login();}}});$('.user-tab li').live('click',function(){var _num=$(this).index();$(this).addClass('active').siblings().removeClass('active');$(this).parent().parent().siblings('.contLeft').eq(_num).show().siblings('.contLeft').hide();});$('.user-ipt').live('focus',function(){$(this).siblings('span').hide();});$('.user-ipt').live('blur',function(){if(!$(this).val()==''){$(this).siblings('span').hide()}else{$(this).siblings('span').show();}});$('.user-ipt').keyup(function(){if(!$(this).val()==''){$(this).siblings('span').hide()}else{$(this).siblings('span').show();}});$('.quick-area span').live('click',function(){$(this).prev().focus();});});