<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadv4.dat" async="" type="text/javascript"></script><script src="detect.json" id="_1467457165725_129"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=7">
                <title>用户资料</title>
                <link rel="shortcut icon" href="/home/other/favicon1.ico">
                    <script src="/home/js/v.js" charset="utf-8"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script><script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm2.js"></script><script src="/home/js/fm.js" async="" type="text/javascript"></script><script src="/home/js/eluminate.js"></script>
                    <script src="/home/js/coremetrics-initalize.js"></script>
                    <script>_LVMAMA_COREMETRICS.init(document.domain);</script><script src="/home/js/head.js"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script type="text/javascript" src="/home/js/json-min.js"></script>
                    <script src="/home/js/eluminate.js"></script>
                    <script src="/home/js/coremetrics-initalize.js"></script>
                    <script>_LVMAMA_COREMETRICS.init(document.domain);</script><script src="/home/js/head_001.js"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script>
                    <script src="/home/js/jquery.validate.js" id="jqueryvalidatejs"></script><script src="/home/js/jquery.city.js" id="jquerycityjs"></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script src="/home/js/json-array-of-province.js" id="jsonarrayofprovincejs"></script><script src="/home/other/getfrontlib.php" type="text/javascript" charset="UTF-8"></script><script charset="utf-8" src="/home/other/StdID.do" id=""></script><script src="/home/js/json-array-of-city-new.js" id="jsonarrayofcitynewjs"></script><script src="/home/other/get.php" charset="UTF-8"></script><script charset="utf-8" src="/home/other/PageView.do"></script>
                    <link rel="stylesheet" type="text/css" href="/home/css/zhuce.css" media="all">
                        <style>
                            #error{
                                margin-left: 10px;
                                color: red;
                                font-family: 微软雅黑;
                                font-size: 12px;
                                font-weight: bold;
                            }
                            #sexx{
                                width: 150px;
                                margin-left: 100px;
                            }
                        </style>
                        </head>
                        <body>
                            <div id="login_main" class="login_main">
                                <div class="login_top zhfs_logo_top">
                                    <span class="login_logo">
                                        <a href="http://www.lvmama.com/"><img src="/home/img/login_logo.jpg"></a> <label class="text">|</label> <a class="text">用户资料</a>
                                    </span>
                                    <span class="login_hotline">1010-6060</span>
                                    <span class="login_hotline"><a href="/home/Login/zhongxin">返回个人中心</a></span>
                                </div>
                                                <li><font color="red"><b>{{ session("info") }}</b></font></li>
                                                 @if (count($errors) > 0)
                                                 <div class="alert alert-danger">
                                                     <ul>
                                                         @foreach ($errors->all() as $error)
                                                         <li><font color="red"><b>{{ $error }}</b></font></li>
                                                         @endforeach
                                                     </ul>
                                                 </div>
                                                 @endif
                                                                                                             
                                                        <form method="post" action="/home/User" id="sjRegForm" name="" >                                                            
                                                                <ul style="" class="register_form register_sj_form">
                                                                        <!--<li><label class="csmm_form_col w90"><i class="red"></i></label><input class="zhfs_form_input" id="sso_mobile" readonly name="phone" type="text" value=""/></li>--> 
                                                                        <li><label class="csmm_form_col w90"><i class="red"></i></label><input class="zhfs_form_input" id="sso_mobile" readonly name="phone" type="text" value=""/></li> 
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 账号</label><input class="zhfs_form_input" id="sso_mobile" readonly name="phone" type="text" value="{{ $data->phone }}"/></li> 
                                                                        @if($data->nickname != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 真实姓名</label><input class="zhfs_form_input" id="sso_mobile" name="name" type="text" value=" {{$data->name}} "/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 真实姓名</label><input class="zhfs_form_input" id="sso_mobile" name="name" type="text" value=""/></li>
                                                                        @endif      
                                                                       
                                                                        <p><div id="sexx">性别：&nbsp;男：<input type="radio" name="sex" value="男" @if ($data->sex == "男") checked @endif />
                                                                                          女：<input type="radio" name="sex" value="女" @if ($data->sex == "女") checked @endif /></div></p><br/>
                                                                        
                                                                        @if($data->nickname != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 昵称</label><input class="zhfs_form_input" id="sso_mobile" name="nickname" type="text" value=" {{$data->nickname}} "/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 昵称</label><input class="zhfs_form_input" id="sso_mobile" name="nickname" type="text" value=""/></li>
                                                                        @endif
                                                                        
                                                                        @if($data->nickname != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 你的手机号</label><input class="zhfs_form_input" id="sso_mobile" name="nowphone" type="text" value=" {{$data->nowphone}} "/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 你的手机号</label><input class="zhfs_form_input" id="sso_mobile" name="nowphone" type="text" value=""/></li>
                                                                        @endif
                                                                        
                                                                        @if($data->age != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 年龄</label><input class="zhfs_form_input" id="sso_mobile" name="age" type="text" value="{{ $data->age }}"/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 年龄</label><input class="zhfs_form_input" id="sso_mobile" name="age" type="text" value=""/></li>
                                                                        @endif
                                                                        
                                                                        @if($data->qq != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> QQ</label><input class="zhfs_form_input" id="sso_mobile" name="qq" type="text" value="{{ $data->qq }}"/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> QQ</label><input class="zhfs_form_input" id="sso_mobile" name="qq" type="text" value=""/></li>
                                                                        @endif
                                                                        
                                                                        @if($data->email != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> E-mail</label><input class="zhfs_form_input" id="sso_mobile" name="email" type="text" value="{{ $data->email }}"/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> E-mail</label><input class="zhfs_form_input" id="sso_mobile" name="email" type="text" value=""/></li>
                                                                        @endif
                                                                        
                                                                        @if($data->updated_at != false)
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 修改时间</label><input class="zhfs_form_input" id="sso_mobile" readonly name="updated_at" type="text" value="{{ $data->updated_at }}"/></li>
                                                                        @else
                                                                        <li><label class="csmm_form_col w90"><i class="red">*</i> 修改时间</label><input class="zhfs_form_input" id="sso_mobile" readonly name="updated_at" type="text" value=""/></li>
                                                                        @endif
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                                        
                                                            <li><label class="csmm_form_col w90"></label><input type="submit" class="register_submit" id="submitBtn" value="修改用户资料"/></li>
                                                            </ul>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="register_right">
                                        <p class="register_r_b"><img src="/home/img/regist_ad.jpg"></p>
                                        <img src="/home/img/regist_ad1.jpg">
                                    </div>
                                    <div class="reg_clear"></div>
                                </div>
                            </div>
                            <script>
//                            document.forms.zhuce.onsubmit = function() {
//                            var nickname = this.nickname.value;
//                            var phone = this.phone.value;
//                            var code = this.code.value;
//                            var password = this.password.value;
//                            var repassword = this.repassword.value;
//
//                            var msg = new Array();
//                            if (nickname.match(/^\s*$/)) {
//                            msg['nickname'] = "账号未填写";
//                            } else {
//                            msg['nickname'] = "";
//                            }
//                            if (!phone.match(/^(13|14|15|17|18)\d{9}$/)) {
//                            msg['phone'] = "不是有效的手机号，请重新填写";
//                            } else {
//                            msg['phone'] = "";
//                            }
//                            if (code.length != 5) {
//                            msg['code'] = "验证码应为5位数";
//                            }
//                            if (password.length < 6 || password.length > 15) {
//                            msg['password'] = "密码长度应为6-15位";
//                            } else {
//                            msg['password'] = "";
//                            }
//                            if (repassword !== password) {
//                            msg['repassword'] = "两次输入的密码不一致，请重新输入";
//                            } else {
//                            msg['repassword'] = "";
//                            }
//
//                            var flag = true;
//                            for (var p in msg) {
//                            if (msg[p])
//                            flag = false;
//
//                            //新建span
//                            var span = document.createElement("span");
//                            span.id = "error";
//                            span.innerHTML = < img src = "/home/img/error.gif" / > ;
//                            span.innerHTML = msg[p];
//                            this[p].parentNode.appendChild(span);
//                            }
//
//                            return;
//                            }
                            </script>
                            <script src="/home/js/adv.js"></script><script src="/home/js/footer.js"></script><!-- 公共底部  --><!-- footer\ --><div class="wrap" style="clear: both;"><a class="public_ft" href="http://www.lvmama.com/public/user_security" target="_blank"><ul class="public_ft_list"><li><i class="ft_ioc1"></i><strong>价格保证</strong>同类产品，保证低价</li><li><i class="ft_ioc2"></i><strong>退订保障</strong>因特殊情况影响出行，保证退订</li><li><i class="ft_ioc3"></i><strong>救援保障</strong>旅途中遇意外情况，保证援助</li><li><i class="ft_ioc4"></i><strong>7x24小时服务</strong>快速响应，全年无休</li></ul></a></div><!-- copyright\ --><div class="lv-footer clearfix wrap" style="margin: 0px auto;">    <p class="footer-link">       <a href="http://www.lvmama.com/public/about_lvmama" rel="nofollow">关于我们</a> |        <a href="http://www.lvmama.com/public/lianxi_us" rel="nofollow">联系我们</a> |        <a href="http://www.lvmama.com/public/site_map">网站地图</a> |        <a href="http://hotels.lvmama.com/brand/">酒店品牌</a> |        <a href="http://hotels.lvmama.com/area/">酒店查询</a> |        <a href="http://www.lvmama.com/public/help" rel="nofollow">帮助中心</a> |        <a href="http://www.lvmama.com/public/links">友情链接</a> |        <a href="http://www.lvmama.com/public/jobs" rel="nofollow">诚聘英才</a> |    <a href="http://www.lvmama.com/public/zizhi_lvmama" rel="nofollow">旅游度假资质</a> |        <a href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" rel="nofollow">意见反馈</a> |        <a rel="nofollow" href="http://www.lvmama.com/public/adwy">广告业务</a>    </p>    <p class="lv-copyright">Copyright © 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a rel="nofollow" href="http://pic.lvmama.com/img/ICP.jpg" target="_blank">沪B2-20100030</a></p>   <div class="lv-safety">      <a class="safety2" target="_blank" rel="nofollow" title="经营性网站备案信息" href="http://www.miibeian.gov.cn/"></a>      <a class="safety3" target="_blank" rel="nofollow" title="网络110报警服务" href="http://www.cyberpolice.cn/"></a>      <a class="safety4" target="_blank" rel="nofollow" title="支付宝特约商家" href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495"></a>      <a class="safety5" target="_blank" rel="nofollow" title="AAA级信用企业" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140"></a>      <a class="safety6" target="_blank" rel="nofollow" title="上海工商" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539"></a>      <a class="safety7" target="_blank" rel="nofollow" title="可信网站" href="https://ss.cnnic.cn/verifyseal.dll?sn=2010101800100002662&amp;ct=df&amp;pa=590007"></a>      <a class="safety8" target="_blank" rel="nofollow" title="诚信认证示范企业" href="https://credit.szfw.org/CX20160614015657160455.html" id="___szfw_logo___" hidefocus="false"></a>      <a class="safety9" target="_blank" rel="nofollow" title="网络社会征信网" href="http://www.zx110.org/"></a>      <a class="safety10" target="_blank" rel="nofollow" title="360网站安全检测" href="http://webscan.360.cn/"></a>      <a class="safety11" target="_blank" rel="nofollow" title="网监安全" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030"></a>      <a class="safety13" target="_blank" rel="nofollow" title="举报中心" href="http://www.shjbzx.cn/"></a>   </div></div><!-- //footer --><!-- 公共底部结束  --><!-- 尾部 -->
                            <script src="/home/js/jquery-1.7.2.min.js"></script>
                            <script src="/home/js/lvmamaUI.js"></script>
                            <script src="/home/js/gt.js"></script>
                            <script type="text/javascript" src="/home/js/geetest.js"></script>

                            <script type="text/javascript" src="/home/js/register.validate.js"></script>
                            <script type="text/javascript" src="/home/js/closeF5MouseRight.js"></script>
                            <script src="/home/js/ga.js" async="" type="text/javascript"></script><script src="/home/js/lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script src="/home/js/losc.js" language="javascript"></script>

                            <script>
startGeetest("popup-submit", "popup-captcha", "sjRegForm", "popup", "geetest_challenge", "geetest_validate", "geetest_seccode");
                            </script>

                            <script type="text/javascript">
<!--添加布点  注册监控-->
                                _fxcmd.push(['trackEvent', 'event', 'reg', 'reg', '1']);
                            </script>
                            <iframe src="index_11.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe><div class="gt_holder popup zh-cn" id="geetest_1467457172599"><div class="gt_mask"></div><div class="gt_popup_wrap"><div class="gt_popup_header"><div class="gt_popup_ready">请先完成下方验证</div><div class="gt_popup_finish">页面将在2秒后跳转</div><div class="gt_popup_cross"></div></div><div class="gt_popup_box"><div class="gt_widget"><div class="gt_holder_top"></div><div style="height: 116px;" class="gt_box_holder"><div class="gt_box"><div class="gt_loading"></div><a style="background-image: none;" class="gt_bg gt_show"><div class="gt_cut_bg gt_show"><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -157px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -145px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -265px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -277px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -181px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -169px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -241px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -253px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -109px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -97px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -289px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -301px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -85px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -73px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -25px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -37px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -13px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -1px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -121px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -133px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -61px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -49px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -217px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -229px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -205px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -193px -58px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -145px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -157px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -277px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -265px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -169px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -181px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -253px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -241px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -97px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -109px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -301px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -289px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -73px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -85px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -37px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -25px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -1px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -13px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -133px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -121px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -49px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -61px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -229px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -217px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -193px 0px;" class="gt_cut_bg_slice"></div><div style="background-image: url(&quot;/home/img/3919772af.jpg&quot;); background-position: -205px 0px;" class="gt_cut_bg_slice"></div></div><div style="left: 0px; background-image: url(&quot;/home/img/3919772af.png&quot;); width: 62px; height: 58px; top: 57px;" class="gt_slice gt_show"></div></a><a style="cursor: default; background-image: none;" class="gt_fullbg gt_show"><div class="gt_cut_fullbg gt_show"><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -157px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -145px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -265px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -277px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -181px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -169px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -241px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -253px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -109px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -97px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -289px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -301px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -85px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -73px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -25px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -37px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -13px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -1px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -121px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -133px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -61px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -49px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -217px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -229px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -205px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -193px -58px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -145px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -157px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -277px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -265px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -169px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -181px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -253px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -241px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -97px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -109px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -301px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -289px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -73px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -85px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -37px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -25px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -1px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -13px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -133px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -121px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -49px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -61px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -229px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -217px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -193px 0px;" class="gt_cut_fullbg_slice"></div><div style="background-image: url(&quot;/home/img/8c7f3491b.jpg&quot;); background-position: -205px 0px;" class="gt_cut_fullbg_slice"></div></div><div style="height: 94px;" class="gt_flash"></div><div class="gt_ie_success"></div></a><a style="background-image: none;" class="gt_curtain gt_hide"><div class="gt_curtain_bg_wrap"><div class="gt_curtain_bg"><div class="gt_cut_curtain"></div></div></div><div class="gt_curtain_button gt_hide"></div></a><a style="display: none;" class="gt_box_tips"></a></div><div class="gt_info"><div class="gt_info_tip"><div class="gt_info_icon"></div><div class="gt_info_text"></div></div></div></div><div class="gt_bottom"><a class="gt_refresh_button"><div class="gt_refresh_tips">刷新验证</div></a><a target="_blank" href="http://www.geetest.com/contact#report" class="gt_help_button"><div class="gt_help_tips">帮助反馈</div></a><a target="_blank" href="http://www.geetest.com/" class="gt_logo_button"></a></div></div><div class="gt_slider"><div class="gt_guide_tip gt_show">按住左边滑块，拖动完成上方拼图</div><div style="left: 0px;" class="gt_slider_knob gt_show"></div><div class="gt_curtain_tip gt_hide">点击上图按钮并沿道路拖动到终点处</div><div class="gt_curtain_knob gt_hide">移动到此开始验证</div><div class="gt_ajax_tip ready"></div></div></div></div></div></body>
                        </html>
