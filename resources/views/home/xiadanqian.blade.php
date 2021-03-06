<!DOCTYPE html>
<html>
    <head>
    <iframe id="_pycmifr" src="/home/other/index_1.html" style="display: none; visibility: hidden;" height="0" width="0"></iframe>
    <script src="/home/js/a.js" ></script>
    <script src="/home/js/v.js" charset="utf-8"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$xq->title}}</title>
    <link rel="shortcut icon" href="/home/other/favicon.ico" type="image/x-icon">
    <meta name="keywords" content="{{$xq->title}}">
    <meta name="description" content="{{$xq->title}}">
    <link rel="canonical" href="">
    <script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/mv.js" async="" ></script><script src="/home/js/mba.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm.js"></script><script src="/home/js/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="index.php"></script>
    <script src="/home/js/mapControl.js"></script>
    <script src="/home/js/90409730.js"  language="javascript"></script>
    <script  src="/home/js/bcore.min.js"></script>
    <script async="" src="/home/js/pc.js"></script>
    <script src="/home/js/dispatcher-v3.js" language="javascript"></script>
    <script  src="/home/js/yahoo-min.js"></script>
    <script  src="/home/js/cp-v3.js"></script>
    <script charset="utf-8" src="/home/other/StdID.do" id="">
    </script><script type="text/javascript" src="/home/js/json-min.js"></script>
    <script charset="utf-8" src="Visit.do"></script>
    <script charset="utf-8" src="AddItem.do"></script>
    <script charset="utf-8" src="VisitCat.do"></script>
    <script charset="utf-8" src="AddCat.do"></script><script charset="utf-8" src="PageView.do"></script>
    <link rel="stylesheet" type="text/css" href="/home/css/xiadanqian.css" media="all">
</head>
<body class="details_page">

    <!-- 公共头部开始  -->
    <!-- topbar\\ -->

    @include("home.common.header");

    <!-- 是否显示游记 
    -->
    <!-- 是否是国内或者出境BU的产品 -->
    <input value="" id="isShowOutBuHiddenInput" type="hidden">
    <input value="LOCAL_BU" id="buOfProductHiddenInput" type="hidden">
    <input value="" id="isShowOutBuByProTypeHiddenInput" type="hidden">
    <input value="15" id="bizCategoryHiddenInput" type="hidden">
    <div class="line-detail-main">
        <!--面包屑导航-->
        <div class="crumbs clearfix">
            <div class="crumbs-link">
                <a hidefocus="false" href="">度假旅游</a>
                &gt;
                <span class="crumbs-list">
                    <a hidefocus="false" class="crumbs-down-a" href="">海南跟团游</a>
                    <div class="crumbs-down-info">
                        <a hidefocus="false" href="">海南自由行</a>
                        <a hidefocus="false" href="">海南当地游</a>
                        <a hidefocus="false" href="">海南景点门票</a>
                    </div>
                </span> 
                &gt;
                <span class="crumbs-list">
                    <a hidefocus="false" class="crumbs-down-a" href="">三亚跟团游</a>
                    <div class="crumbs-down-info">
                        <a hidefocus="false" href="">三亚自由行</a>
                        <a hidefocus="false" href="">三亚周边跟团游</a>
                        <a hidefocus="false" href="" >三亚当地游</a>
                        <a hidefocus="false" href="">三亚景点门票</a>
                    </div>
                </span> 
                &gt;
                <a hidefocus="false" class="current" href="">上海到三亚跟团游</a>
            </div>
        </div>
        <div id="dev"></div>
        <div class="product-main clearfix">
            <!-- 顶部产品概览开始 -->
            <div class="product_top clearfix">
                <!--判断是不是半自助 -->
                <div class="group_icon product_gty"></div>

                <!-- 首屏左侧开始 -->
                <div class="product_top_l image_zone clearfix">
                    <!--图片切换模块 开始-->
                    <div class="product_top_img">
                        <div class="focusImg">
                            <img src=" {{$xq->photo_path}}" height="270px" width="460px">

                            <span class="group_icon btn_l"></span>
                            <span class="group_icon btn_r"></span>
                        </div>
                        <!--图片缩小图-->
                        <div class="scrollImg">
                            <div class="scrollImg_wrap">
                                <ul>
                                    <li class="active" data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2015-12-25/7ff4eb5e-323a-4d97-9ea9-4c3fca29e798_480_320.jpg"><a hidefocus="false" href="javascript:;">
                                            <img src="/home/img/7ff4eb5e-323a-4d97-9ea9-4c3fca29e798_180_120.jpg" height="64px" width="95px">
                                        </a></li>
                                    <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2015-12-28/d6d905f7-d8dd-4367-a946-d3ddabe12083_480_320.jpg"><a hidefocus="false" href="javascript:;">
                                            <img src="/home/img/d6d905f7-d8dd-4367-a946-d3ddabe12083_180_120.jpg" height="64px" width="95px">
                                        </a></li>
                                    <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2015-11-25/0eb61370-4b84-461e-91f6-fc649f666810_480_320.jpg"><a hidefocus="false" href="javascript:;">
                                            <img src="/home/img/0eb61370-4b84-461e-91f6-fc649f666810_180_120.jpg" height="64px" width="95px">
                                        </a></li>
                                    <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2015-12-30/84d6f967-ebf2-4388-9645-760c4a2be1d4_480_320.jpg"><a hidefocus="false" href="javascript:;">
                                            <img src="/home/img/84d6f967-ebf2-4388-9645-760c4a2be1d4_180_120.jpg" height="64px" width="95px">
                                        </a></li>
                                    <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2015-09-11/7d0b0d97-9f13-4598-a59b-61ab0a13ae8b_480_320.jpg"><a hidefocus="false" href="javascript:;">
                                            <img src="/home/img/7d0b0d97-9f13-4598-a59b-61ab0a13ae8b_180_120.jpg" height="64px" width="95px">
                                        </a></li>
                                </ul>
                            </div>
                            <div class="scrollBtn">
                                <a hidefocus="false" href="javascript:;" class="group_icon prev disable"></a>
                                <a hidefocus="false" href="javascript:;" class="group_icon next"></a>
                            </div>
                        </div>
                    </div>
                    <!--图片切换模块 结束-->
                </div>
                <!-- //product_top_l 首屏左侧结束-->
                <!--开始 -->
                <!--首屏右侧开始-->
                <div class="product_top_r">
                    <div class="product_top_tit">
                        <!--出发地-->
                        <em class="product_top_cfd">
                            <span class="product_top_cfd_title">上海出发</span>

                        </em>
                        <!-- 出发地结束 -->
                        <i class="product_top_cfd_blank"></i>
                        <!-- 产品名称
                        <div class="product-name">-->
                        <h1>{{$xq->title}}</h1>
                        <span class="tagsback tagsback-orange" tip-content="购买指定产品，单笔订单达千元可获赠“邮轮两人同行一人免单”优惠券。每个账号仅获取一张。具体规则需咨询客服热线：10106060"><em>送邮轮</em></span>
                        <span class="tagsback tagsback-orange" tip-content=""><em>开心驴行</em></span>
                        <!-- 产品名称结束</div>-->
                    </div>

                    <div class="product_info1">
                        <!-- <p id="line_favorite"><i class="group_icon icon_xing1" id="line_favorite_icon"></i>收藏该线路</p> -->
                        <p><i class="group_icon icon_dmz1"></i>
                            <!--好评率开始 -->
                            <span class="c_f60">96.2%</span>好评
                            <!-- 好评率结束-->  
                        </p>         
                        产品编号：  {{$xq->place_id}}
                    </div>

                    <div class="pr">
                        <dl class="product_info2 product_info2_1">
                            <dt>驴妈妈价：</dt>
                            <dd class="clearfix">
                                <p class="product_price_box">
                                    <span class="product_price">
                                        <dfn>¥</dfn>
                                        {{$xq->price}}
                                    </span>
                                    起/人(最少成团人数:10人)
                                </p>
                                <span class="pro_price_tips">

                                    <i class="group_icon icon_wenhao"></i>
                                    <samp class="js_tips" tip-content="本起价是指未包含附加服务（如单人房差、保险费等）的基本价格。您最终确认的价格将会随所选出行日期、人数及服务项目而相应变化">起价说明</samp>
                                </span>
                            </dd>
                        </dl>

                        <!-- 分期价 -->

                        <!--分期价-->
                        <div class="product_info2 product_info_bg">
                            <dt>分 期 价：</dt> 	
                            <div class="product-price-content">
                                <dd>
                                    <span class="product-price-rmb product-price-rmb-small tags tagsbackRMB" tip-content="
                                          支持以下分期方式：
                                          <div class='pay_dotline'></div>
                                          <div class='payFQ_whole'>
                                          <div class='payFQ_bankname'>中银消费信贷</div>
                                          <table class='payFQ_table'>
                                          <tr>
                                          <td class='pay_first'></td>
                                          <td width='90' class='pay_two'>￥<em>950</em></td>
                                          <td class='pay_three'><em>X</em>3期</td>
                                          </tr>
                                          <tr>
                                          <td class='pay_first'></td>
                                          <td width='90' class='pay_two'>￥<em>475</em></td>
                                          <td class='pay_three'><em>X</em>6期</td>
                                          </tr>
                                          <tr>
                                          <td class='pay_first'></td>
                                          <td width='90' class='pay_two'>￥<em>345.17</em></td>
                                          <td class='pay_three'><em>X</em>9期</td>
                                          </tr>
                                          <tr>
                                          <td class='pay_first'></td>
                                          <td width='90' class='pay_two'>￥<em>266</em></td>
                                          <td class='pay_three'><em>X</em>12期</td>
                                          </tr>
                                          </table>
                                          </div>
                                          ">
                                        <span class="rmb-symbol">¥</span>
                                        <span class="product-price-value">{{ceil($xq->price/12)}}</span>
                                    </span>
                                    <span class="fs-12 color-style1">
                                        起/期 <span class="product-price-span">(0首付，0利息，0手续费)</span>
                                        <i class="product-price-explain-icon"></i>
                                        <span id="product-price-explain" tip-content="分期支付请生成订单后，选择小驴分期，填写个人申请资料，等待银行审批。审批结果将以短信形式通知。">分期说明</span>
                                    </span>
                                </dd>
                            </div>
                        </div>
                        <!--分期价END-->

                        <!-- 开心驴行图标 -->
                        <span class="group_icon icon_kxlv pa"></span>

                    </div>
            </div>
        <div>

                    <!-- 预售 -->

                    <!-- 优惠信息 -->

                    <!-- 国内优惠信息 -->
                    <dl class="product_info2 mt5">
                        <dt>优  惠：</dt>
                        <dd>
                            <span class="tags101" tip-title="满1000送邮轮" tip-content="买就送:<br/>&nbsp;&nbsp;&nbsp;邮轮出游一人免单优惠券+10元全场通用优惠券（每个用户限领1次）<br/>">赠品</span>

                            <span class="tags101" tip-content="从2014年12月08日起到2016年12月08日发表订单游记，审核通过即返20.00元，精华游记即返100.00元。更多精彩活动请查看游记频道。">游记返现</span>
                        </dd>
                        <dd>立减100元/人（成人、儿童（18周岁以下均半价）可享，不与其他优惠同享）</dd>
                    </dl>
                    <!-- 国内促销信息 -->
<!--                    <dl class="product_info2 product_info2_cx" >
                           <dt>促  销：</dt>        
                        <dd class="product_info_cx clearfix " style='padding-right:0px'>
                             
                            <a hidefocus="false" href="javascript:;" class="product_cx">
                                立减100元/人（成人、儿童（18周岁以下均半价）可享，不与其他优惠同享）<br>
                                <i class="icon_arrow"></i>
                            </a>
                        </dd>
                    </dl>-->

                    <!-- 两种交通显示，根据需求选择 有往返交通就没有交通方式 -->

                    <!--不存在第一个行程的线路概况 则显示目的地-->

                    <!--线路概况-->
                    <!--详情页线路概况-->

<!--  
                </div>首屏右侧 结束-->
            </div><!-- //product_top -->
            <!-- 12.23首屏产品介绍模块 结束-->
            <!-- 结束-->
          
            <form method="POST" action="">
                <input name="productId" value="{{$xq->place_id}}" type="hidden">
                <!-- 顶部产品概览结束 -->
              
                    <!-- 订单基本配置开始 -->
                    <div class="product-preorder clearfix color-style1" id="product-preorder">
                        <div class="clearfix">
                            <div class="preorder-config">
                                <div class="preorder-input-group chrome-hack-1">
                                   
                                    <span>出行日期：</span>
                                    <div class="selectbox undefined " id="selectbox_1467377617921">
                                        <script src='/plugins/My97DatePicker/WdatePicker.js'></script>   
                                       <p class="select-info like-input" type="text" onClick="WdatePicker({skin:'whyGreen'})
                                            <span class="select-value">请选择出行时间</span>
                                        </p>
                                   </div>     
                                     
                                <div class="preorder-input-group " >
                                    <span>成 人：</span>
                                    <select style="width:270px">
                                        <option  selected value="0">选择人数</option>
                                        @for($i=1;$i<=9;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="preorder-input-group " >
                                    <span>儿 童：</span>
                                    <select style="width:270px">
                                        <option  selected value="0">选择人数</option>
                                        @for($i=1;$i<=9;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                
                                
                            </div>
                            <div class="preorder-confirm">
                                <a hidefocus="false" id="preorder-confirm-button" class="btn cbtn-orange1 fr ml20" href="/xiadan?id={{$xq->id}}">开始预订</a>
                                <div class="preorder-total-price">
                                    <span class="tip-icon tip-icon-help js_tips" style="display: none;" id="DuiJie_TraffocTip" tip-content="机票价格更新频繁，以实际支付为准，为避免价格波动，请您尽快预订；"></span>
                                    <span class="total-price-value" id="total-price-value">--</span>
                                    <span class="total-price-symbol rmb-symbol">￥</span>
                                    <span class="total-price-title">总价：</span>
                                    <span class="fangcha" style="display: none;"></span>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </form>
  


            <!-- 导航高度占位块开始 -->
            <div id="nav-height-holder" class="nav-height-holder">
                <!-- 产品头部导航开始-->
                <div class="product-detail-header clearfix" id="product-detail-header" style="width:1024px">
                    <ul id="navigate-list">
                        <li><a class="" hidefocus="false" href="#" data-flag="preferential-promotion">优惠促销</a></li>
                        <li><a class="active color-style2" hidefocus="false" href="#" data-flag="product-detail">产品详情</a></li>
                        <li><a class="" hidefocus="false" href="#" data-flag="product-travel">行程介绍</a></li>
                        <li><a class="" hidefocus="false" href="#" data-flag="product-map">交通地图</a></li>

                        <li><a class="" hidefocus="false" href="#" data-flag="product-cost">费用说明</a></li>

                        <!--小驴分期说明 -->
                        <li><a class="" hidefocus="false" href="#" data-flag="product-fenqi">分期说明<i class="floatTips">小驴分期<span class="triangle"></span></i></a></li>

                        <li><a class="" hidefocus="false" href="#" data-flag="product-preorder-note">预订须知</a></li>
                        <li><a class="" hidefocus="false" href="#" data-flag="product-recommend">线路推荐</a></li>
                        <li date="comments"><a class="" hidefocus="false" href="#" data-flag="product-customer-review">驴友点评<span id="totalCmt" class="customer-review-count">(662)</span></a></li>

                    <!--<li><a href="#" data-flag="product-customer-trip">相关游记<span class="customer-review-count">()</span></a></li>-->
                        <li><a class="" hidefocus="false" href="#" data-flag="product-customer-trip">相关游记<span class="customer-review-count" id="travelCount">(297)</span></a></li>

                    </ul>
                    <div class="product-detail-booking">开始预订</div>
                </div>
                <!-- 产品头部导航结束 -->
            </div>
            <!-- 导航高度占位块结束 -->
            <div class="product-modules clearfix common_box">
                <!-- 优惠活动开始 -->
                <!-- 优惠活动结束 -->        <!-- 优惠促销开始 -->
                <div class="ncpreferential-promotion" id="preferential-promotion">
                    <div class="instance-title clearfix">
                        <div class="title-icon-container">
                            <i class="ncpreferential-promotion-icon"></i>
                        </div>
                        <h3>优惠促销</h3>
                    </div>
                    <div class="ncpreferential-product">
                        <dl>
                            <dt><span>多订多惠</span></dt>
                            <dd>
                                <p class="ncpreferential-product-title">立减100元/人（成人、儿童可享，不与其他优惠同享）<span>（活动时间：2016年06月29日 至2016年08月31日）</span></p>
                                <p class="ncpreferential-product-derc"></p>
                            </dd>
                        </dl>
                        <dl>
                            <dt><span>赠品</span></dt>
                            <dd>
                                <p class="ncpreferential-product-title">买就送

                                    <span>邮轮出游一人免单优惠券+10元全场通用优惠券（每个用户限领1次）</span> 
                                    <span>（活动时间：2016年06月13日 至 2016年07月01日）</span>

                                    <i class="nci">每个用户限领1次</i>
                                    <i class="nci">支付完成发放
                                    </i></p>

                                <p class="ncpreferential-product-derc">实付满1000送：邮轮出游一人免单优惠券X1(每个用户最多领取1次)
                                    实付满1000送：10元全场通用券X1(每个用户最多领取1次)</p>
                            </dd>
                        </dl>   
                    </div>
                </div>
                <!-- 优惠促销结束 -->

                <!-- 产品详情开始 -->
                <div class="product-detail-instance productDetailsbox" id="product-detail">
                    <div class="instance-title clearfix">
                        <div class="title-icon-container">
                            <i class="product-detail-icon"></i>
                        </div>
                        <h3>产品详情</h3>
                    </div>
                    <!--产品概要-->
                    <!--线路详情页产品详情-产品概要-->

                   

                    <div class="detail-instance-body">
                        <span><h3>
                                <span style="font-size: 16pt;"> 
                                    <h3>
                                        <span style="font-size: 16pt;"> 
                                            <h3>
                                                <span style="font-size: 16pt;"> 
                                                    <h3>
                                                        <span style="font-family: SimSun; font-size: 16px; color: rgb(0, 0, 0);"><span style="font-family: SimSun; font-size: 16px; color: rgb(0, 0, 0);"><span style="font-size: 16pt;"> 
                                                                    <p align="center">
                                                                        <b><span style="font-family: SimSun; font-size: 16px; color: rgb(0, 0, 0);"></span></b>
                                                                    </p>
                                                                </span></span></span>
                                                    </h3>
                                                </span>
                                            </h3>
                                        </span>
                                    </h3>
                               
                            </h3>
                            <?php echo htmlspecialchars_decode($xq->editorValue); ?>
                <!-- 产品详情结束 -->
 
                <!-- 用户点评开始 -->

                <div class="product-detail-instance xl_position_r" id="product-customer-review">
                    <a hidefocus="false" href="http://www.lvmama.com/zt/promo/chunjie6/" class="xl_comments_enter3" target="_blank"><img src="/home/img/comments_enter3.png" height="105" width="196"></a>
                    <div class="instance-title clearfix">
                        <div class="title-icon-container">
                            <i class="product-review-icon"></i>
                        </div>
                        <h3>驴友点评</h3>
                    </div>
                    <div class="comwrap">
                        <!-- 点评信息概况 -->
                        <div class="new-cominfo">
                            <div class="comstati clearfix">

                                <div class="com-count">
                                    <i class="percentum f60" data-mark="dynamicNum" data-level="96.2">96.2</i><span class="f60">%</span>
                                    <em>好评率</em>
                                    <em>来自<a hidefocus="false" class="f60">117</a>位驴友的真实点评</em>
                                </div>

                                <ul class="clearfix">
                                    <li>
                                        <span class="comcount"><em>景点</em>（4.8）</span>
                                        <span class="comlevel">
                                            <i data-level="4.8" data-mark="dynamicNum" style="width: 96.6%;"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="comcount"><em>酒店</em>（4.9）</span>
                                        <span class="comlevel">
                                            <i data-level="4.9" data-mark="dynamicNum" style="width: 98.4%;"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="comcount"><em>服务</em>（4.8）</span>
                                        <span class="comlevel">
                                            <i data-level="4.8" data-mark="dynamicNum" style="width: 97%;"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="comcount"><em>交通</em>（4.8）</span>
                                        <span class="comlevel">
                                            <i data-level="4.8" data-mark="dynamicNum" style="width: 95.8%;"></i>
                                        </span>
                                    </li>
                                </ul>

                                <div class="com-btns">
                                    <a hidefocus="false" class="nlogin" href="javascript:;">有订单，写体验点评返奖金</a>
                                </div>
                            </div><!-- //com-btns -->
                        </div>


                        <div class="comheatd">
                            <ul class="comheatd-ul JS_com-tabnav">
                                <li class="active"><a href="javascript:;" hidefocus="false" id="allCmt">全部点评<span>(117)</span></a></li>
                                <li><a href="javascript:;" hidefocus="false" id="bestCmt">精华点评<span>(28)</span></a></li>
                                <li><a href="javascript:;" hidefocus="false" id="picCmt">晒旅图点评<span>(68)</span></a></li>
                                <li class=""><a href="javascript:;" hidefocus="false" id="refCmt">相关点评<span>(545)</span></a></li>
                            </ul>
                        </div><!-- //comhead -->




                        <div class="JS_com-content">
                            <!-- 点评 -->
                            <div class="comment-list com-all" style="display: block;" id="allCmtComment">

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>250分</i></span>
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评返现金" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得<span>60</span>元点评奖金返现。"><em>点评</em><i>60元</i></span>

                                        <p class="ufeed-score">
                                            <span class="tags tags-red">精华</span>

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>4(满意)</i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>4(满意)</i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>4(满意)</i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>4(满意)</i>
                                            </span>
                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        4月初带着国定假期来了一次休闲海岛游。这个跟团游还是比价不错的，订的早，机票是<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/shanghai79?losc=073073">上海</a>航空和东方航空，酒店是希尔顿旗下的，虽然不是靠海，但是环境还不错。虽然跟团的时候导游也介绍了一些项目，不过可以不参加。当然啦，整个团里还是有三分之二的人参加了至少一项。与导游相处还可以，在车上，也会说一些关于<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a>的故事，涨了知识。
                                        跟团游去的景点都是经典的几处，不过行程比较紧，不跟团的话，可以慢慢逛景点。跟团的话就没有这么仔细。
                                        呀诺达、槟榔谷很不错，热带雨林、少数民族文化，挺开眼界。
                                        <a hidefocus="false" id="xmy" href="http://ticket.lvmama.com/scenic-101548?losc=073073">蜈支洲岛</a>人很多，海上项目自费的，比较贵。其实可以在岛上住一晚，淡季的话，这里的珊瑚酒店入住加双人海上项目套餐还是很划算的。

                                        <span class="JS_showmore ufeed-showmore">查看全部<i class="iconcom iconcom-more"></i></span>
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->
                                    <div class="compic-big"><a hidefocus="false" class="l" title="上一张" href="javascript:;"></a><a hidefocus="false" class="r" title="下一张" href="javascript:;"></a><p></p></div>
                                    <div class="compic-scoll">
                                        <span class="compic-bigbtn fl"><i class="iconcom iconcom-scollleft"></i></span>
                                        <div class="compic-small fl"><!-- //compic-scollbox -->
                                            <ul>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-06-28/5ec73fe8-76f0-40f6-a8e7-b05510504c97_480_320.jpg"><img src="/home/img/5ec73fe8-76f0-40f6-a8e7-b05510504c97_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2016-06-28/7c4bad0a-c2b7-4015-98db-546046ad42cc_480_320.jpg"><img src="/home/img/7c4bad0a-c2b7-4015-98db-546046ad42cc_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2016-06-28/099a8e29-93fa-4db4-a711-cb6be3b63853_480_320.jpg"><img src="/home/img/099a8e29-93fa-4db4-a711-cb6be3b63853_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-06-28/c7ba38e2-1a7d-41b2-9217-bfa59bbfd6b8_480_320.jpg"><img src="/home/img/c7ba38e2-1a7d-41b2-9217-bfa59bbfd6b8_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2016-06-28/eb28ed70-f3b0-45a5-ac12-c4410279f48d_480_320.jpg"><img src="/home/img/eb28ed70-f3b0-45a5-ac12-c4410279f48d_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2016-06-28/08f9678f-9443-4590-b7cd-2e0904355017_480_320.jpg"><img src="/home/img/08f9678f-9443-4590-b7cd-2e0904355017_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-06-28/2186b3d1-0ed8-416a-b617-31047d16d8c2_480_320.jpg"><img src="/home/img/2186b3d1-0ed8-416a-b617-31047d16d8c2_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                            </ul>
                                        </div>
                                        <a hidefocus="false" href="javascript:;" class="JS_on compic-picnum">共7张图片</a>
                                        <a hidefocus="false" href="javascript:;" class="JS_close copic-bigup">收起<i class="iconcom iconcom-bigup"></i></a>
                                        <span class="compic-bigbtn fr"><i class="iconcom iconcom-scollright"></i></span>
                                    </div>


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2668542','');" class="fr com-enjoy" id="userfulCount__2668542"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="carmenzjj">carmenzjj</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-28</em>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2668542" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>250分</i></span>

                                        <p class="ufeed-score">
                                            <span class="tags tags-red">精华</span>

                                            <span class="ufeed-level"><i data-level="5" data-mark="" style="width: 100%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        总体行程比较满意。第一天早班机中午就到<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/sanya272?losc=073073">三亚</a>了，下午自由活动，晚上去第一市场吃了海鲜，回酒店有直达公交车，比较方便。第二天，去了呀诺达和槟榔谷，感受了<a hidefocus="false" id="xmy" href="http://www.lvmama.com/lvyou/d-sanya272.html?losc=073073">三亚</a>的雨林文化和民俗文化，晚上参加了自费项目观看美丽之冠演出，演出一般，没什么值得推荐。第三天，去了<a hidefocus="false" id="xmy" href="http://ticket.lvmama.com/scenic-101548?losc=073073">蜈支洲岛</a>，感受海洋文化，需要注意的是，要去海滨浴场游泳的话，一定要穿鞋，不然会被碎珊瑚划伤。晚上继续自费项目观看车技表演，这个演出还是比较精彩刺激的，儿子看的目不转睛，就像电影里看到的一样。第四天，南山文化和<a hidefocus="false" id="xmy" href="http://ticket.lvmama.com/scenic-100489?losc=073073">天涯海角</a>，南山景区一定要跟着讲解导游走，驴妈妈预约的讲解员非常棒，赞一个。总体来说，整个行程安排比较满意，导游阿武尽心尽责，讲解认真。唯一不满意的是酒店比较偏，就是要买个水果也要坐车出去，不太方便。
                                        <span class="JS_showmore ufeed-showmore">查看全部<i class="iconcom iconcom-more"></i></span>
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->
                                    <div class="compic-big"><a hidefocus="false" class="l" title="上一张" href="javascript:;"></a><a hidefocus="false" class="r" title="下一张" href="javascript:;"></a><p></p></div>
                                    <div class="compic-scoll">
                                        <span class="compic-bigbtn fl"><i class="iconcom iconcom-scollleft"></i></span>
                                        <div class="compic-small fl"><!-- //compic-scollbox -->
                                            <ul>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-06-27/d5ba8928-474f-4818-aa71-5d18fbb39e12_480_320.jpg"><img src="/home/img/d5ba8928-474f-4818-aa71-5d18fbb39e12_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2016-06-27/2e06461b-f1a2-4815-8fbb-c889cd41f8c4_480_320.jpg"><img src="/home/img/2e06461b-f1a2-4815-8fbb-c889cd41f8c4_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2016-06-27/ab61cab2-5aa4-46be-b2b7-0a2743a34658_480_320.jpg"><img src="/home/img/ab61cab2-5aa4-46be-b2b7-0a2743a34658_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                            </ul>
                                        </div>
                                        <a hidefocus="false" href="javascript:;" class="JS_close copic-bigup">收起<i class="iconcom iconcom-bigup"></i></a>
                                        <span class="compic-bigbtn fr"><i class="iconcom iconcom-scollright"></i></span>
                                    </div>


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('4','2665558','');" class="fr com-enjoy" id="userfulCount__2665558"><i class="iconcom iconcom-enjoy"></i>有用<em>4</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv138****8998">lv138****8998</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 9C8779-9C8780   上海虹桥往返三亚（T）+成人/儿童/房差+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 9C8779-9C8780   上海虹桥往返三亚（T）+成人/儿童/房差+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-27</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2665558" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>250分</i></span>

                                        <p class="ufeed-score">
                                            <span class="tags tags-red">精华</span>

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        这次<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a>游整体还是不错的，住的酒店相对偏了点，但是泳池还是不错的，导游阿发很热情，点个赞。如果想休闲游的话，建议直接按照跟团的行程就可以了，那样基本6.7点可以回到酒店泡泡泳池了，我们升级了500/人的套餐，回到酒店比较晚，感觉就有点累。

                                        还有那个<a hidefocus="false" id="xmy" href="http://ticket.lvmama.com/scenic-101548?losc=073073">蜈支洲岛</a>，消费贵，个人觉得是这次跟团游中最鸡肋的一个点，100 的大门票只包含了来回的摆渡，其他统统要自费的。最便宜的一碗面38。

                                        建议吃的话还是到步行街那里，我们住的酒店打车过去20元左右的样子，小吃街味道好性价比高选择也多，其他老街什么的海鲜吃口感觉也比较一般，相对步行街的来说要贵不少。

                                        <a hidefocus="false" id="xmy" href="http://www.lvmama.com/lvyou/d-hainan267.html?losc=073073">海南</a>的景色和蓝天白云还是很赞的，下次如果去的话直接自由行住亚龙湾就好了，海滩玩玩，想吃了附近也比较热闹。
                                        <span class="JS_showmore ufeed-showmore">查看全部<i class="iconcom iconcom-more"></i></span>
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('2','2664008','');" class="fr com-enjoy" id="userfulCount__2664008"><i class="iconcom iconcom-enjoy"></i>有用<em>2</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="ziyan123">ziyan123</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 成人/儿童/房差+9C8779-9C8780   上海虹桥往返三亚（T）+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 成人/儿童/房差+9C8779-9C8780   上海虹桥往返三亚（T）+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-27</em>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2664008" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>250分</i></span>

                                        <p class="ufeed-score">
                                            <span class="tags tags-red">精华</span>

                                            <span class="ufeed-level"><i data-level="5" data-mark="" style="width: 100%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        全程都有固定的大巴车接送，接机的师傅把我们送到酒店帮我们换好房卡才走，袁导人也很好，每天都发矿泉水给大家，还买椰子给全团的人喝，全程零购物，可以放心大胆的去，<a hidefocus="false" id="xmy" href="http://ticket.lvmama.com/scenic-101548?losc=073073">蜈支洲岛</a>安排了一天了，在岛上可以随意玩，不过那个岛是私人建设的，虽然水上项目很多，建设的也比较完善，不过这段时间<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/sanya272?losc=073073">三亚</a>的天气的确是非常热的，既然选择这个时间段去就要做好非常炎热的准备，几天下来基本上全团的人都黑了一圈，还有送机的师傅也很准时，到了机场还有人专门帮你换登机牌。不错，这已经不是第一次在驴妈妈上订行程了，驴妈妈值得信赖。
                                        <span class="JS_showmore ufeed-showmore">查看全部<i class="iconcom iconcom-more"></i></span>
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->
                                    <div class="compic-big"><a hidefocus="false" class="l" title="上一张" href="javascript:;"></a><a hidefocus="false" class="r" title="下一张" href="javascript:;"></a><p></p></div>
                                    <div class="compic-scoll">
                                        <span class="compic-bigbtn fl"><i class="iconcom iconcom-scollleft"></i></span>
                                        <div class="compic-small fl"><!-- //compic-scollbox -->
                                            <ul>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-05-30/80223299-6750-43d5-ba25-be0b5e058182_480_320.jpg"><img src="/home/img/80223299-6750-43d5-ba25-be0b5e058182_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2016-05-30/f89b73d3-084b-471d-8bba-44931a226542_480_320.jpg"><img src="/home/img/f89b73d3-084b-471d-8bba-44931a226542_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2016-05-30/93bde12e-60a4-4700-8ae9-d806d8395d0e_480_320.jpg"><img src="/home/img/93bde12e-60a4-4700-8ae9-d806d8395d0e_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-05-30/16f280cb-3070-4166-b8a0-f78c4f63b4cd_480_320.jpg"><img src="/home/img/16f280cb-3070-4166-b8a0-f78c4f63b4cd_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s3.lvjs.com.cn/uploads/pc/place2/2016-05-30/4fae239f-f487-4254-a585-dc27cfbe50dc_480_320.jpg"><img src="/home/img/4fae239f-f487-4254-a585-dc27cfbe50dc_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                            </ul>
                                        </div>
                                        <a hidefocus="false" href="javascript:;" class="JS_close copic-bigup">收起<i class="iconcom iconcom-bigup"></i></a>
                                        <span class="compic-bigbtn fr"><i class="iconcom iconcom-scollright"></i></span>
                                    </div>


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>1</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('7','2599417','');" class="fr com-enjoy" id="userfulCount__2599417"><i class="iconcom iconcom-enjoy"></i>有用<em>7</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv6478609">lv6478609</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 全面型+MU5381-T+FM9518-T+成人/儿童/房差">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 全面型+MU5381-T+FM9518-T+成人/儿童/房差</a>
                                            ” 发表点评
                                            <em>2016-05-30</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix open"> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2599417" data-ctype="" data-reply="1" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                            <li class="com-lvmama">
                                                <em>2016-06-03</em>
                                                <p>驴妈妈官方回复：亲爱的驴友您好！感谢您的点评，接下去天要开始热了，玩的开心的同时，请您一定要注意防晒护肤哦！为游客提供愉快的旅途体验是我们的目标，再次感谢您的支持，祝您下次出行愉快！</p>
                                            </li>
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>250分</i></span>
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评返现金" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得<span>63</span>元点评奖金返现。"><em>点评</em><i>63元</i></span>

                                        <p class="ufeed-score">
                                            <span class="tags tags-red">精华</span>

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        【点评有奖第9季】这次的<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a><a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/sanya272?losc=073073">三亚</a>五天四晚的行程很棒，下飞机有地接人员全程陪同到酒店前台，换房卡。导游阿玲手机一直短信联系着，按排好每一天的行程，提醒每个团员在景区的注意事项、少数民族的禁忌。由于媒体上一直有天价海鲜、天价水果的报道，在旅游车上导游也说了哪些是不能信任的场所，这次旅游社按排的导游是不错的。酒店是新的，设施是完善的，好大的酒店，入住的当晚就在楼下的泳池中和女儿戏水了，自助餐厅早餐品类很多，七点到十点满足了晚起的伙伴
                                        <span class="JS_showmore ufeed-showmore">查看全部<i class="iconcom iconcom-more"></i></span>
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->
                                    <div class="compic-big"><a hidefocus="false" class="l" title="上一张" href="javascript:;"></a><a hidefocus="false" class="r" title="下一张" href="javascript:;"></a><p></p></div>
                                    <div class="compic-scoll">
                                        <span class="compic-bigbtn fl"><i class="iconcom iconcom-scollleft"></i></span>
                                        <div class="compic-small fl"><!-- //compic-scollbox -->
                                            <ul>
                                                <li data-src="http://s2.lvjs.com.cn/uploads/pc/place2/2016-05-19/c7afd2f1-e72f-47a4-8459-cf9f47e90440_480_320.jpg"><img src="/home/img/c7afd2f1-e72f-47a4-8459-cf9f47e90440_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                                <li data-src="http://s1.lvjs.com.cn/uploads/pc/place2/2016-05-19/0479bc6e-482a-40b6-9e7d-5f15651751d5_480_320.jpg"><img src="/home/img/0479bc6e-482a-40b6-9e7d-5f15651751d5_180_120.jpg" alt="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）"></li>
                                            </ul>
                                        </div>
                                        <a hidefocus="false" href="javascript:;" class="JS_close copic-bigup">收起<i class="iconcom iconcom-bigup"></i></a>
                                        <span class="compic-bigbtn fr"><i class="iconcom iconcom-scollright"></i></span>
                                    </div>


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>1</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('7','2576807','');" class="fr com-enjoy" id="userfulCount__2576807"><i class="iconcom iconcom-enjoy"></i>有用<em>7</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv58903725">lv58903725</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 9C8779-9C8780   上海虹桥往返三亚（T）+成人/儿童/房差+高端型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 9C8779-9C8780   上海虹桥往返三亚（T）+成人/儿童/房差+高端型</a>
                                            ” 发表点评
                                            <em>2016-05-19</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix open"> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2576807" data-ctype="" data-reply="1" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                            <li class="com-lvmama">
                                                <em>2016-05-24</em>
                                                <p>驴妈妈官方回复：亲爱的驴友您好！感谢您的点评，为游客提供愉快的旅途体验是我们的目标，再次感谢您的支持，祝您下次出行愉快！</p>
                                            </li>
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>100分</i></span>

                                        <p class="ufeed-score">

                                            <span class="ufeed-level"><i data-level="5" data-mark="" style="width: 100%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        不错是一个很负责任，热情介绍<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a>的风土人情故事，给他点5个赞满意满分
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2670624','');" class="fr com-enjoy" id="userfulCount__2670624"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv1391721hyys">lv1391721hyys</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） FM9537-MU5382  上海往返三亚（T）+成人/儿童/房差+基本型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） FM9537-MU5382  上海往返三亚（T）+成人/儿童/房差+基本型</a>
                                            ” 发表点评
                                            <em>2016-06-29</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2670624" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>100分</i></span>

                                        <p class="ufeed-score">

                                            <span class="ufeed-level"><i data-level="5" data-mark="" style="width: 100%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        很热情的导游！带着老妈和妹妹，一家人完成了很愉快的旅行。
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2670284','');" class="fr com-enjoy" id="userfulCount__2670284"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv15618829uja">lv15618829uja</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 成人/儿童/房差">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 成人/儿童/房差</a>
                                            ” 发表点评
                                            <em>2016-06-29</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2670284" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>100分</i></span>

                                        <p class="ufeed-score">

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        酒店很给力！升级套房了！<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a>很美！水果特别好吃！旅游团也很好，性价比超高
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2669450','');" class="fr com-enjoy" id="userfulCount__2669450"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv1376446y9sh">lv1376446y9sh</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-29</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2669450" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>100分</i></span>

                                        <p class="ufeed-score">

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        很好很不错，性价比超高的线路！酒店还升级套房了！很开心
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2669447','');" class="fr com-enjoy" id="userfulCount__2669447"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv1376446y9sh">lv1376446y9sh</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-29</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2669447" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="comment-li">
                                    <div class="ufeed-info">
                                        <span class="fr tagsback tagsback-orange" tip-title="写体验点评送积分" tip-content="预订此产品，游玩后发表体验点评，内容通过审核，即可获得积分。"><em>送</em><i>100分</i></span>

                                        <p class="ufeed-score">

                                            <span class="ufeed-level"><i data-level="4" data-mark="" style="width: 80%;"></i></span>
                                            <span class="ufeed-item"> <em>景点&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>酒店&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>服务&nbsp;</em>
                                                <i>4



                                                    (满意)

                                                </i>
                                            </span>
                                            <span class="ufeed-item"> <em>交通&nbsp;</em>
                                                <i>5




                                                    (推荐)
                                                </i>
                                            </span>

                                            <span class="ufeed-tag">体验</span>
                                        </p>
                                    </div><!-- //ufeed-info -->
                                    <div class="ufeed-content"> <!-- 展开时加showmore -->
                                        很开心！很核算性价比很高的路线！<a hidefocus="false" id="xmy" href="http://dujia.lvmama.com/tour/hainan267?losc=073073">海南</a>很美，酒店特别给力，升级套房了！
                                    </div>

                                    <!-- 点评图片展示 -->

                                    <!-- 大图结构 -->


                                    <!-- 用户信息 -->
                                    <div class="com-userinfo">
                                        <a hidefocus="false" href="javascript:;" class="JS_reply fr com-dcom"><i class="iconcom iconcom-dcom"></i>回复<em>0</em></a>
                                        <a hidefocus="false" href="javascript:Comment.addUsefulCount('0','2669445','');" class="fr com-enjoy" id="userfulCount__2669445"><i class="iconcom iconcom-enjoy"></i>有用<em>0</em></a>
                                        <p>
                                            <a hidefocus="false" href="javascript:;" title="lv1376446y9sh">lv1376446y9sh</a>
                                            对 “
                                            <a hidefocus="false" class="com-proTit" href="javascript:;" title="【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型">【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天） 经济舱+成人/儿童/房差+全面型</a>
                                            ” 发表点评
                                            <em>2016-06-29</em>
                                            <a hidefocus="false" class="com-user-app" href="javascript:;">
                                                <i class="iconcom iconcom-mobile"></i>
                                                <span class="com-msg">该点评来源驴妈妈APP端</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- 点评回复 -->
                                    <div class="com-answer combd clearfix "> <!-- //如果下面有回复则加 open否则不加 -->
                                        <i class="iconcom iconcom-boxdir"></i>
                                        <div class="com-answer-form">
                                            <form action="">
                                                <a hidefocus="false" data-cid="2669445" data-ctype="" data-reply="0" class="com-answer-submit radio5 fr" href="javascript:;">回复</a>
                                                <input class="com-answerinput" type="text">
                                            </form>
                                        </div>
                                        <ul class="com-answer-li">
                                        </ul>
                                    </div><!-- //com-answer -->
                                </div><!-- //comment-li -->

                                <div class="paging orangestyle"> 	<div class="pagebox"><span class="prevpage"><i class="larr"></i></span> <span class="pagesel" onclick="javascript:Comment.newLoadPaginationOfComment({type: 'all', currentPage: 1, totalCount: '117', placeId: '', productId: '636542', placeIdType: '', isPicture: '', isBest: '', isPOI: 'Y', isELong: 'N'});">1</span><a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:2,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" hidefocus="false">2</a><a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:3,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" hidefocus="false">3</a><a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:4,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" hidefocus="false">4</a><a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:5,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" hidefocus="false">5</a><span class="pagemore">...</span> <a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:12,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" hidefocus="false">12</a><a href="javascript:Comment.newLoadPaginationOfComment({type:'all',currentPage:2,totalCount:'117',placeId:'',productId:'636542',placeIdType:'',isPicture:'',isBest:'',isPOI:'Y',isELong:'N'});" class="nextpage" hidefocus="false"> <i class="rarr"></i></a> 	</div></div> 

                            </div><!-- //comment-list -->

                            <!-- 精华 -->
                            <div class="comment-list" id="bestCmtComment">

                            </div><!-- //comment-list -->

                            <!-- 晒旅图点评 -->
                            <div class="comment-list" id="picCmtComment">

                            </div>
                            <!--相关点评-->
                            <!--相关点评子tab-->
                            <div class="comment-list" id="refCmtComment">

                                <div class="relevant_com-tips">
                                    <img src="/home/img/relevant_com.png" alt="小驴为您准备与该产品相关的真实点评，希望能够帮助到您哟！" height="64" width="496">
                                    <ul class="relevant_com-xg">

                                        <li class="" id="cmt_ref_lines" onclick="refCmtLine(0)">相关线路</li>
                                        <li id="cmt_ref_views" onclick="refCmtLine(1)" class="">相关景点</li>
                                        <li id="cmt_ref_hotels" onclick="refCmtLine(2)" class="">相关酒店</li>
                                    </ul>
                                </div> <!-- //relevant_com-tips -->

                            </div>

                        </div>
                    </div>
                </div>

                <script src="/home/js/adv.js"></script><script src="/home/js/adv.js"></script><script>
                                            window.cmtRef = {};
                                            window.cmtRef.allCount = 545;
                                            window.cmtRef.lineCount = 545;
                                            window.cmtRef.lineProductIds = '810413,643057,676120,801542,780791,580838,615439,819176,372752,801594,676128,642992,660890,625524,810472,801610,676176,660882,676178,684853,810464,660886,660875,660874,650690,676161,642987,660867,660869,625519,563284,676217,823434,676211,563295,819134,650722,660904,676201,660896,684807,607998,819008,676247,676240,660817,801675,451346,685050,572106,342307,676227,625572,625570,676234,660811,676279,676276,633341,801701,676286,451369,676258,615595,660833,676268,625539,676305,801729,396405,818953,660767,676297,676337,427475,615670,660768,580617,684943,580610,632901,615682,342178,650389,801280,650403,669322,342148,608072,642773,818846,598401,334472,684585,801369,615751,581036,217840,801359,598422,801350,342260,373064,625220,580995,660644,334501,451314,312570,642665,390510,801434,237437,580986,572381,801423,598381,684739,608198,625287,650273,823646,598398,676023,669200,642650,572400,580944,801492,572298,684713,669294,669293,625402,615900,615890,642612,572335,669251,676069,615919,615918,625344,615904,676077,823578,625348,615934,823555,676087,676090,676092,615924,615985,633713,615989,615992,419896,669079,624924,607296,581319,615975,615976,676641,772515,669062,669114,419858,633685,801032,419860,571473,419862,772507,684414,676624,642555,651164,651166,419870,651167,676619,598731,676610,684387,781208,772606,633662,669141,616057,404647,781195,419942,651247,669124,563791,669120,625012,581297,810986,581301,801088,607294,642490,676690,811000,607268,781227,781226,607266,633602,781219,581215,676785,810765,781147,772386,625038,810783,684488,404580,668976,810784,581240,781183,810799,676764,684541,563887,781156,684513,810812,642403,781163,669012,781078,651129,633780,642324,684442,633775,607371,676846,616163,598557,781106,669042,633749,684478,801228,669050,633740,781089,633729,810877,781100,427526,676398,668800,676387,616236,633456,563996,563992,781011,581601,661186,684131,581614,781027,624684,810671,781054,616211,684152,810664,676370,684144,810660,624703,781042,676374,668878,443011,676451,616310,581521,427603,661177,427601,661129,676423,684068,676421,435208,581551,427626,780986,772319,676439,780976,581564,780982,668912,661137,684226,780864,684232,668684,800932,676531,684243,684247,564115,650807,676481,581481,676485,676484,684260,772108,772109,225880,668725,581498,633553,676510,607732,564171,801011,633510,633505,684182,800999,676607,571831,624851,676551,571785,650831,642095,780832,598795,676559,571779,800961,598811,598805,780863,781748,572953,634142,236194,781756,634128,236206,434954,572942,634120,818068,236214,659844,818067,579751,781740,781742,588482,626534,809467,572984,809422,588531,358657,572968,738920,564281,738837,236266,599248,443881,809398,668590,236284,591516,626463,573051,588475,236230,774069,435066,774074,781786,588471,774077,677158,626440,236251,591495,817933,649556,773976,773973,677330,614617,435101,426493,381513,591464,626669,817936,659763,591448,626649,626655,435109,773994,591430,412811,677348,809256,626612,579702,614544,659799,579708,659791,659784,579687,579684,579685,809264,573168,579664,668445,659834,668440,579673,659826,614587,435173,649510,773935,591362,659816,659808,614732,564580,580003,591847,773847,809184,668356,579973,591808,641666,641671,434746,649467,773881,676870,668326,659654,641774,564523,676864,633921,580092,599509,614679,668345,809112,802367,434809,817901,236347,573313,809081,588620,236330,599317,358577,236318,802550,579853,809041,634032,677114,614897,579870,649223,802457,588553,634061,634057,634071,607222,573401,614809,614811,588587,579921,573424,634096,573432,335473,572474,634682,802155,685338,802157,599720,634660,572454,564807,660392,685321,572442,677719,660375,809960,817548,677720,650193,614994,235697,587978,235702,626020,572418,599686,564839,235710,677706,809863,809862,599802,235714,227296,650175,587963,590996,802090,802089,677664,677668,634733,235758,235755,235764,235767,809904,634701,668068,235768,359278,677885,677883,677880,677879,809796,809818,580099,626127,809832,590966,809836,634768,677844,677845,677846,599580,677840,587870,677841,677842,677843,677837,677836,677833,634753,359337,677835,359330,599664,564880,564882,572659,802215,572670,660342,809729,809754,824922,634859,572652,580169,572648,667961,809773,809775,802187,580223,824935,599641,809761,606433,434635,444271,580203,580200,677476,781953,565064,599980,677473,781961,781960,685070,358935,591327,667863,641183,358930,677502,817326,599948,565097,801878,572687,572698,685106,817290,606513,809620,434283,600047,677413,677417,426502,426500,426501,677428,600048,600049,615222,817384,572749,809663,600024,600027,677403,600017,606579,565041,600021,825118,599854,817200,599855,434349,599853,599850,434346,599858,235790,809536,580378,825094,599866,641060,649807,677570,580398,599831,677594,677593,659990,659988,649816,825176,599914,809484,809486,809487,649783,809483,641113,599931,572927,580445,825152,781930,817241,235893,572885,625840,599896,809509,781938,444782,610028,648473,610038,799629,648480,609987,799658,799661,306148,631168,609953,569985,631193,587357,778544,570005,623562,609928,578569,631203,808282,578588,648569,418553,418559,825346,631217,587377,569926,609902,778723,569928,671654,671648,778724,600265,778726,556816,609908,671672,609906,587412,648594,438097,671668,578755,444871,569956,671623,671620,587437,671619,569965,671618,609875,561177,609887,578778,640986,609880,561254,671723,671724,617551,569888,671695,569889,671704,799588,662961,678044,640627,678042,623283,600403,678017,617860,617863,235391,799391,375189,648249,587581,587568,394510,799411,339970,600426,648280,648274,600343,662556,648266,808050,808062,799450,816678,556799,600369,600366,799474,662570,825833,630871,418582,677918,418581,332511,677915,173705,418579,677913,617758,816836,677902,677903,677894,418575,418573,418571,623125,617781,677943,630911,418592,825811,640718,600553,600466,677975,610108,816769,816794,677956,630832,587767,799343,600503,617845,235396,816825,799349,617835,332448,670986,591876,670988,591879,340757,779102,671001,640360,779110,417934,609510,799104,623024,671032,671035,445196,663342,739560,779017,799228,825861,799185,799186,618188,671084,579110,671097,631698,816399,640306,609349,631658,631671,609368,600825,579294,600826,219521,600829,663501,417797,600772,600779,561711,826099,686459,686458,631590,640391,663464,640384,579211,392837,671168,429908,586995,592095,587007,358190,592103,609319,826047,671224,600734,429946,270615,592152,622736,770110,670720,331875,429708,618405,670775,631500,631488,587010,331834,670811,778759,631463,670795,331795,234799,670823,331777,631432,808564,670831,569735,618291,579543,622615,670879,808580,601081,622621,618273,770217,579521,622601,631406,618285,622607,622642,579574,609651,340669,609652,622646,631381,622650,618269,601024,622625,622631,622635,670882,622633,816337,609558,648951,631335,622656,600995,587236,663199,622706,631313,770257,609574,579495,647491,632213,692384,419564,692415,601144,771958,639769,670544,333618,577634,608998,692428,445821,661840,419508,577618,608988,692471,419512,419394,679243,601239,570898,636459';
                                            window.cmtRef.viewProductIds = '';
                                            window.cmtRef.viewCount = 0;
                                            window.cmtRef.hotelCount = 0;
                                            window.cmtRef.hotelProductIds = '';
                                            window.cmtRef.hotelComments = "";
                                            window.cmtRef.viewComments = "";
                                            window.cmtRef.lineComments = "";

                                            function asynLoadRef(isClick) {

                                                var allCommentCount = 117;
                                                var refAllCount = 545;
                                                if (refAllCount > 0) {
                                                    var totalCount = 0;
                                                    var productRef = "";
                                                    var refType = 0;
                                                    if (window.cmtRef.hotelCount > 0) {
                                                        totalCount = window.cmtRef.hotelCount;
                                                        productRef = window.cmtRef.hotelProductIds;
                                                        refType = 2;
                                                    }
                                                    if (window.cmtRef.viewCount > 0) {
                                                        totalCount = window.cmtRef.viewCount;
                                                        productRef = window.cmtRef.viewProductIds;
                                                        refType = 1;
                                                    }
                                                    if (window.cmtRef.lineCount > 0) {
                                                        totalCount = window.cmtRef.lineCount;
                                                        productRef = window.cmtRef.lineProductIds;
                                                        refType = 0;
                                                    }
                                                    //productRef不为空时调用--------
                                                    if (totalCount > 0 && productRef != '') {
                                                        $.ajax({
                                                            url: "/vst_front/comment/newPaginationOfComments",
                                                            type: "post",
                                                            data: {
                                                                currentPage: 1,
                                                                type: "ref",
                                                                totalCount: totalCount,
                                                                productRef: productRef,
                                                                isPOI: "N",
                                                                isRef: refType
                                                            },
                                                            dataType: 'html',
                                                            success: function(data) {

                                                                $("#refCmtComment").html(data);
                                                                if (allCommentCount <= 0) {//无点评则暂时相关点评tab数据
                                                                    $("#refCmtComment").show();
                                                                }

                                                                setPageCacheComments(refType, data);

                                                            }
                                                        });

                                                    }

                                                }
                                            }

                                            function refInit() {
                                                var allCommentCount = 117;
                                                if (allCommentCount <= 0) {//当全部点评为空的时候 才初始化相关点评第一页数据
                                                    asynLoadRef();
                                                }
                                            }
                                            refInit();

                                            $("#refCmt").bind("click", function() {
                                                var count = $("#refCmtComment").find(".comment-li").length;

                                                if (count <= 0) {

                                                    asynLoadRef();
                                                }
                                            });


                                            /**
                                             * 点击相关相关点评子tab 切换数据
                                             */
                                            function refCmtLine(refType) {
                                                var totalCount = window.cmtRef.lineCount;
                                                var productRef = window.cmtRef.lineProductIds;
                                                var vstType = '';
                                                var returnComments = "";
                                                if (refType == 2) {
                                                    totalCount = window.cmtRef.hotelCount;
                                                    productRef = window.cmtRef.hotelProductIds;
                                                    returnComments = window.cmtRef.hotelComments;

                                                } else if (refType == 1) {
                                                    totalCount = window.cmtRef.viewCount;
                                                    productRef = window.cmtRef.viewProductIds;
                                                    returnComments = window.cmtRef.viewComments;

                                                } else if (refType == 0) {
                                                    totalCount = window.cmtRef.lineCount;
                                                    productRef = window.cmtRef.lineProductIds;
                                                    returnComments = window.cmtRef.lineComments;

                                                }
                                                //productRef不为空时调用--------
                                                if (returnComments == "") {

                                                    $.ajax({
                                                        url: "/vst_front/comment/newPaginationOfComments",
                                                        type: "post",
                                                        data: {
                                                            currentPage: 1,
                                                            type: "ref",
                                                            totalCount: totalCount,
                                                            isPOI: "N",
                                                            productRef: productRef,
                                                            vstType: vstType,
                                                            isRef: refType
                                                        },
                                                        dataType: 'html',
                                                        success: function(data) {
                                                            $("#refCmtComment").html(data);
                                                            setPageCacheComments(refType, data);
                                                            //clickReply();
                                                        }
                                                    });
                                                } else {
                                                    $("#refCmtComment").html(returnComments);
                                                }

                                            }

                                            /**
                                             * 页面缓存第一页相关点评
                                             */
                                            function setPageCacheComments(refType, returnComments) {
                                                if (refType == 2) {
                                                    window.cmtRef.hotelComments = returnComments;
                                                } else if (refType == 1) {
                                                    window.cmtRef.viewComments = returnComments;
                                                } else if (refType == 0) {
                                                    window.cmtRef.lineComments = returnComments;

                                                }

                                            }
                </script>            <!-- 用户点评结束 -->

                

            </div>
            <div class="booking-way">
                <div class="booking-way-title">
                    <div class="booking-way-title-bg"></div>
                    <h3>预订方式</h3>
                </div>
                <ul>
                    <li class="booking-way-choice">
                        <i></i>
                        <em>选择产品</em>
                        <p>挑选您喜爱的产品并选择出行日期、人数等预订信息</p>
                    </li>
                    <li class="booking-way-arrow"></li>
                    <li class="booking-way-write">
                        <i></i>
                        <em>填写订单</em>
                        <p>核对选购的产品，选择可选优惠，并填写游玩人信息</p>
                    </li>
                    <li class="booking-way-arrow"></li>
                    <li class="booking-way-confirm">
                        <i></i>
                        <em>订单确认</em>
                        <p>确认订单内容，客服将与您保持联系，确保游客利益</p>
                    </li>
                    <li class="booking-way-arrow"></li>
                    <li class="booking-way-pay">
                        <i></i>
                        <em>支付订单</em>
                        <p>选择适合您的付款方式，轻松进入下一步付款</p>
                    </li>
                    <li class="booking-way-arrow"></li>
                    <li class="booking-way-happy">
                        <i></i>
                        <em>快乐旅程</em>
                        <p>24小时全年客服，解决您旅途问题，一同开启快乐旅程</p>
                    </li>
                    <li class="booking-way-arrow"></li>
                    <li class="booking-way-travel">
                        <i></i>
                        <em>写点评、游记赚零花</em>
                        <p>撰写游记或点评产品，赚取您下一次旅程的旅游基金</p>
                    </li>
                </ul>
            </div>
            <!--推荐模块2---开始-->
            <div class="common_box pro_box1" id="scenic_recommendation">
                <h3 class="common_tit1">景点推荐</h3>
                <ul class="pro_list2">
                    <li>
                        <a hidefocus="false" href="http://ticket.lvmama.com/scenic-101548?losc=054087&amp;ict=i" target="_blank">
                            <img src="/home/img/9fdd8d10-c220-48e8-ba5e-6c51ad1a8eaa.jpg" height="141" width="211">
                            <h5>蜈支洲岛</h5>
                        </a>
                        <p><span class="pro_comment"><samp>
                                    95.4
                                </samp>% 好评率</span>
                            <span class="pro_price1"><dfn>￥</dfn>110</span>起</p>
                    </li>
                    <li>
                        <a hidefocus="false" href="http://ticket.lvmama.com/scenic-158950?losc=054087&amp;ict=i" target="_blank">
                            <img src="/home/img/24b031bb-2989-454a-a378-33f8587a8690.jpg" height="141" width="211">
                            <h5>三亚千古情景区</h5>
                        </a>
                        <p><span class="pro_comment"><samp>
                                    96.9
                                </samp>% 好评率</span>
                            <span class="pro_price1"><dfn>￥</dfn>120</span>起</p>
                    </li>
                    <li>
                        <a hidefocus="false" href="http://ticket.lvmama.com/scenic-153217?losc=054087&amp;ict=i" target="_blank">
                            <img src="/home/img/49a52119-fee4-4a22-a54d-a1d3f2453a4a.jpg" height="141" width="211">
                            <h5>亚龙湾热带天堂森林公园</h5>
                        </a>
                        <p><span class="pro_comment"><samp>
                                    94.6
                                </samp>% 好评率</span>
                            <span class="pro_price1"><dfn>￥</dfn>135</span>起</p>
                    </li>
                    <li>
                        <a hidefocus="false" href="http://ticket.lvmama.com/scenic-100002?losc=054087&amp;ict=i" target="_blank">
                            <img src="/home/img/a1d75ec1-4449-410b-9228-acb1427c3112.jpg" height="141" width="211">
                            <h5>西岛旅游度假区</h5>
                        </a>
                        <p><span class="pro_comment"><samp>
                                    94
                                </samp>% 好评率</span>
                            <span class="pro_price1"><dfn>￥</dfn>118</span>起</p>
                    </li>
                </ul>
            </div><!--推荐模块2---结束-->
        </div>
        <!-- 1354 行 -->
    </div>




    <!--弹出航班信息-->
    <table class="plane_type_box">
        <tbody><tr>
                <th>计划机型</th>
                <th>机型名称</th>
                <th>类型</th>
                <th>最少座位数</th>
                <th>最多座位数</th>
            </tr>
            <tr></tr>
        </tbody></table>

    <script src="/home/js/footer.js"></script> 公共底部   footer\ <div class="wrap" style="clear: both;"><a hidefocus="false" class="public_ft" href="http://www.lvmama.com/public/user_security" target="_blank"><ul class="public_ft_list"><li><i class="ft_ioc1"></i><strong>价格保证</strong>同类产品，保证低价</li><li><i class="ft_ioc2"></i><strong>退订保障</strong>因特殊情况影响出行，保证退订</li><li><i class="ft_ioc3"></i><strong>救援保障</strong>旅途中遇意外情况，保证援助</li><li><i class="ft_ioc4"></i><strong>7x24小时服务</strong>快速响应，全年无休</li></ul></a></div> copyright\ <div class="lv-footer clearfix wrap" style="margin: 0px auto;">    <p class="footer-link">       <a hidefocus="false" href="http://www.lvmama.com/public/about_lvmama" rel="nofollow">关于我们</a> |        <a hidefocus="false" href="http://www.lvmama.com/public/lianxi_us" rel="nofollow">联系我们</a> |        <a hidefocus="false" href="http://www.lvmama.com/public/site_map">网站地图</a> |        <a hidefocus="false" href="http://hotels.lvmama.com/brand/">酒店品牌</a> |        <a hidefocus="false" href="http://hotels.lvmama.com/area/">酒店查询</a> |        <a hidefocus="false" href="http://www.lvmama.com/public/help" rel="nofollow">帮助中心</a> |        <a hidefocus="false" href="http://www.lvmama.com/public/links">友情链接</a> |        <a hidefocus="false" href="http://www.lvmama.com/public/jobs" rel="nofollow">诚聘英才</a> |    <a hidefocus="false" href="http://www.lvmama.com/public/zizhi_lvmama" rel="nofollow">旅游度假资质</a> |        <a hidefocus="false" href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" rel="nofollow">意见反馈</a> |        <a hidefocus="false" rel="nofollow" href="http://www.lvmama.com/public/adwy">广告业务</a>    </p>    <p class="lv-copyright">Copyright © 2016 www.lvmama.com. 上海景域文化传播股份有限公司版权所有　<a hidefocus="false" href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13011172号-3</a>　增值电信业务经营许可证编号：<a hidefocus="false" rel="nofollow" href="http://pic.lvmama.com/img/ICP.jpg" target="_blank">沪B2-20100030</a></p>   <div class="lv-safety">      <a hidefocus="false" class="safety2" target="_blank" rel="nofollow" title="经营性网站备案信息" href="http://www.miibeian.gov.cn/"></a>      <a hidefocus="false" class="safety3" target="_blank" rel="nofollow" title="网络110报警服务" href="http://www.cyberpolice.cn/"></a>      <a hidefocus="false" class="safety4" target="_blank" rel="nofollow" title="支付宝特约商家" href="https://www.alipay.com/aip/aip_validate_list.htm?trust_id=AIP0102495"></a>      <a hidefocus="false" class="safety5" target="_blank" rel="nofollow" title="AAA级信用企业" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1664396140"></a>      <a hidefocus="false" class="safety6" target="_blank" rel="nofollow" title="上海工商" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110930103539539"></a>      <a hidefocus="false" class="safety7" target="_blank" rel="nofollow" title="可信网站" href="https://ss.cnnic.cn/verifyseal.dll?sn=2010101800100002662&amp;ct=df&amp;pa=590007"></a>      <a class="safety8" target="_blank" rel="nofollow" title="诚信认证示范企业" href="https://credit.szfw.org/CX20160614015657160455.html" id="___szfw_logo___" hidefocus="false"></a>      <a hidefocus="false" class="safety9" target="_blank" rel="nofollow" title="网络社会征信网" href="http://www.zx110.org/"></a>      <a hidefocus="false" class="safety10" target="_blank" rel="nofollow" title="360网站安全检测" href="http://webscan.360.cn/"></a>      <a hidefocus="false" class="safety11" target="_blank" rel="nofollow" title="网监安全" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001030"></a>      <a hidefocus="false" class="safety13" target="_blank" rel="nofollow" title="举报中心" href="http://www.shjbzx.cn/"></a>   </div></div>
    <!-- //footer --><!-- 公共底部结束  -->
    <script src="index_002.php"></script>

    <div class="hh_cooperate">
        <!-- 1408行 -->
        <p><b>周边地区：</b><span>
                <a href="http://dujia.lvmama.com/tour/haikou271" target="_blank" hidefocus="false">海口旅游</a>
                <a href="http://dujia.lvmama.com/tour/sanya272" target="_blank" hidefocus="false">三亚旅游</a>
                <a href="http://dujia.lvmama.com/tour/sansha3987" target="_blank" hidefocus="false">三沙旅游</a>
            </span></p>
        <p><b>海南线路：</b><span>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D44" target="_blank" hidefocus="false">齐齐哈尔到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D137" target="_blank" hidefocus="false">长春到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D69" target="_blank" hidefocus="false">杭州到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D325" target="_blank" hidefocus="false">珠海到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D56" target="_blank" hidefocus="false">南京到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D43" target="_blank" hidefocus="false">哈尔滨到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D93" target="_blank" hidefocus="false">邢台到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D81" target="_blank" hidefocus="false">芜湖到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D14" target="_blank" hidefocus="false">天津到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D155" target="_blank" hidefocus="false">厦门到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D256" target="_blank" hidefocus="false">西安到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D0" target="_blank" hidefocus="false">不限出发地到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D80" target="_blank" hidefocus="false">合肥到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D314" target="_blank" hidefocus="false">常德到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D9" target="_blank" hidefocus="false">上海到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D291" target="_blank" hidefocus="false">武汉到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D123" target="_blank" hidefocus="false">沈阳到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D322" target="_blank" hidefocus="false">广州到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D170" target="_blank" hidefocus="false">吉安到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D154" target="_blank" hidefocus="false">福州到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D221" target="_blank" hidefocus="false">海口到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D202" target="_blank" hidefocus="false">东莞到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D89" target="_blank" hidefocus="false">石家庄到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D57" target="_blank" hidefocus="false">无锡到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D175" target="_blank" hidefocus="false">青岛到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D280" target="_blank" hidefocus="false">焦作到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D308" target="_blank" hidefocus="false">长沙到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D163" target="_blank" hidefocus="false">南昌到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D224" target="_blank" hidefocus="false">贵阳到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D31" target="_blank" hidefocus="false">重庆到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D263" target="_blank" hidefocus="false">绵阳到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D182" target="_blank" hidefocus="false">泰安到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D367" target="_blank" hidefocus="false">乌鲁木齐到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D233" target="_blank" hidefocus="false">昆明到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D362" target="_blank" hidefocus="false">银川到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D257" target="_blank" hidefocus="false">三亚到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D90" target="_blank" hidefocus="false">唐山到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D174" target="_blank" hidefocus="false">济南到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D258" target="_blank" hidefocus="false">成都到海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-D71" target="_blank" hidefocus="false">温州到海南跟团游</a>
            </span></p>
        <p><b>海南景点：</b><span>
                <a href="http://www.lvmama.com/lvyou/d-hainan267.html" target="_blank" hidefocus="false">海南旅游攻略</a>
                <a href="http://www.lvmama.com/lvyou/youji/d-hainan267.html" target="_blank" hidefocus="false">海南游记</a>
                <a href="http://www.lvmama.com/lvyou/stay/d-hainan267.html" target="_blank" hidefocus="false">海南住宿</a>
                <a href="http://www.lvmama.com/lvyou/play/d-hainan267.html" target="_blank" hidefocus="false">海南娱乐</a>
                <a href="http://www.lvmama.com/lvyou/summary/d-hainan267.html" target="_blank" hidefocus="false">海南旅游指南</a>
                <a href="http://dujia.lvmama.com/tour/hainan267" target="_blank" hidefocus="false">海南旅游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/freetour" target="_blank" hidefocus="false">海南自由行</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group" target="_blank" hidefocus="false">海南跟团游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/scenictour" target="_blank" hidefocus="false">海南景点住宿</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/local" target="_blank" hidefocus="false">海南当地游</a>
                <a href="http://ticket.lvmama.com/a-hainan267" target="_blank" hidefocus="false">海南景点门票</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N1" target="_blank" hidefocus="false">海南1日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N2" target="_blank" hidefocus="false">海南2日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N3" target="_blank" hidefocus="false">海南3日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N4" target="_blank" hidefocus="false">海南4日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N5" target="_blank" hidefocus="false">海南5日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N6" target="_blank" hidefocus="false">海南6日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N7" target="_blank" hidefocus="false">海南7日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N8" target="_blank" hidefocus="false">海南8日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N9" target="_blank" hidefocus="false">海南9日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/route-N10" target="_blank" hidefocus="false">海南10日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N3" target="_blank" hidefocus="false">海南跟团3日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N4" target="_blank" hidefocus="false">海南跟团4日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N5" target="_blank" hidefocus="false">海南跟团5日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N6" target="_blank" hidefocus="false">海南跟团6日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N7" target="_blank" hidefocus="false">海南跟团7日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N8" target="_blank" hidefocus="false">海南跟团8日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N9" target="_blank" hidefocus="false">海南跟团9日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/group-N10" target="_blank" hidefocus="false">海南跟团10日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/freetour-N3" target="_blank" hidefocus="false">海南自助3日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/freetour-N4" target="_blank" hidefocus="false">海南自助4日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/freetour-N5" target="_blank" hidefocus="false">海南自助5日游</a>
                <a href="http://dujia.lvmama.com/tour/hainan267/freetour-N6" target="_blank" hidefocus="false">海南自助6日游</a>
            </span></p>
    </div>

    <!--二维码-->
    <div style="top: 220px;" class="app-float-flow">
        <div class="app-ar-thumb">
            <i></i>
            手<br>
            机<br>
            扫<br>
            码<br>
            更<br>
            优<br>
            惠
        </div>
        <div class="app-qr-code">
            <img src="/home/other/636542.dat" alt="">
        </div>
        <em>◆</em><b>◆</b>
    </div>


    <!-- 日历模块模板开始 -->

    <!-- 日历模块模板开始 -->
    <script type="text/html" id="calendar-template">
        <div class="calendar">
            <div class="header">
                <% _.each(daysOfTheWeek, function(weekday) { %>
                <div class="header-weekday"><%= weekday %></div>
                <% }); %>
                <div class="clear"></div>
            </div>
            <div class="month-up" id="month-up">
                <div class="up-bg-area">
                </div>
            </div>
            <div class="month-down" id="month-down">
                <div class="down-bg-area">
                </div>
            </div>
            <div class="calendar-main" id="calendar-main">
                <div class="main-left" id="calendar-main-left">
                </div>
                <div class="main-right" id="calendar-main-right">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </script>
    <script type="text/html" id="calendar-mian-template">
        <% _.each(days, function (weekItem){ %>
        <div class="week-group">
            <% _.each(weekItem, function(day) { %>

            <% if( !day.currentMonth ){ %>

            <% if( day.detail ){ %>

            <% if( day.price ){ %>
            <div class="main-day another-month available" data-date="<%= day.date %>" tip-content="<%= day.detail %>" data-another="true">

                <% } else { %>
                <div class="main-day another-month" data-date="<%= day.date %>" tip-content="<%= day.detail %>" data-another="true">
                    <% } %>

                    <% } else { %>

                    <% if( day.price ){ %>
                    <div class="main-day another-month available" data-date="<%= day.date %>" data-another="true">

                        <% } else { %>
                        <div class="main-day another-month" data-date="<%= day.date %>" data-another="true">
                            <% } %>
                            <% } %>

                            <% } else if( day.detail ) { %>
                            <% if( day.price ){ %>
                            <div class="main-day available" data-date="<%= day.date %>" tip-content="<%= day.detail %>">
                                <% } else { %>
                                <div class="main-day" data-date="<%= day.date %>" tip-content="<%= day.detail %>">
                                    <% } %>
                                    <% } else { %>
                                    <% if( day.price ){ %>
                                    <div class="main-day available" data-date="<%= day.date %>">
                                        <% } else { %>
                                        <div class="main-day" data-date="<%= day.date %>">
                                            <% } %>
                                            <% } %>

                                            <i class="selected"></i>
                                            <p class="day"><%= day.day %></p>

                                            <%  if(day.stampFlag=='1'){%>
                                            <span class="calsale tagsback noborder" tip-content="可现在先买预售券，再预约出游日期~">正在预售</span>
                                            <% } else if(day.stampFlag=='2'){ %>
                                            <span class="calsale tagsback noborder" tip-content="如果您之前购买过该日期段的预售券，现在可预约出游日期哦~">预售预约</span>
                                            <% }else { if (day.surplus === 0) { %>
                                            <p class="out-of-stock-text">售罄</p>
                                        </div>
                                        <% return %>
                                        <% } %>

                                        <% if (day.surplus == -1) { %>
                                        <span class="fs-1 surplus"></span>
                                        <% } else if (day.surplus<10){ %>
                                        <span class="fs-1 surplus">余<%= day.surplus %></span>
                                        <% } else if (day.surplus >= 10) { %>
                                        <span class="fs-1 surplus chongzu">充足</span>
                                        <% } %>

                                        <% if (day.detail) { %>
                                        <p class="discount">促</p>
                                        <% } %>

                                        <div class="clear"></div>
                                        <div class="price-container">
                                            <% if (day.price) { %>
                                            <p class="price-item">
                                                                                                                    <!--<% if (day.typeName != '人均') { %>
                                                    <span class="fs-2"><%= day.typeName %></span>
                                                    <% } %>-->
                                                <span class="fs-1">&yen;<%= day.price %>起</span>
                                            </p>
                                            <% } %>

                                                <!-- <% if (day.child) { %>
                                                        <p class="price-item">
                                                                <span class="fs-2">儿童</span>
                                                                <span class="fs-1">&yen;<%= day.child %>起</span>
                                                        </p>
                                                <% } %>-->
                                        </div>
                                        <% if (day.lineRouteName) { %>
                                        <p class="lineRouteName js_tips" id="<%= day.lineRouteId %>"  tip-content="<%= day.lineRouteName %>" >
                                            <%= (day.lineRouteName).replace("行程","") %>
                                        </p>
                                        <% } %>
                                        <% } %>
                                    </div>
                                    <% }); %>
                                </div>
                                <% }); %>
                                </script>
                                <script type="text/html" id="calendar-month-template">
                                    <div class="main-month" id="current-month" data-current-month="<%= date %>"><%= month %>月</div>
                                    </script>
                                    <!-- 日历模块模板结束 --><!-- 日历模块模板结束 -->
                                    <!-- Footer文件开始 -->
                                    <script>


                                        window.lineDetail = {
                                            baidumap: [{"address": "海棠湾镇林旺蜈支洲岛度假中心", "coordId": 15408, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.280485, "longitude": 109.734129, "objectId": 101548, "objectType": "BIZ_DEST", "searchKey": "蜈支洲岛"}, {"address": "保亭县三道农场", "coordId": 15405, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.449693, "longitude": 109.669856, "objectId": 105717, "objectType": "BIZ_DEST", "searchKey": "海南呀诺达欢乐雨林景区"}, {"address": "海南省保亭黎苗族自治县三道镇槟榔谷景区", "coordId": 15382, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.403638, "longitude": 109.667457, "objectId": 107516, "objectType": "BIZ_DEST", "searchKey": "三道镇槟榔谷风景区"}, {"address": "天涯镇马岭山麓", "coordId": 15074, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.296405, "longitude": 109.360927, "objectId": 100489, "objectType": "BIZ_DEST", "searchKey": "天涯海角风景区"}, {"address": "海南省三亚市崖城镇南山村", "coordId": 22719, "coordType": "BAIDU", "destType": "SCENIC", "latitude": 18.312018, "longitude": 109.219449, "objectId": 174728, "objectType": "BIZ_DEST", "searchKey": "南山文化旅游区"}, {"address": "三亚市", "coordId": 40561, "coordType": "BAIDU", "destType": "CITY", "latitude": 18.257776, "longitude": 109.522771, "objectId": 272, "objectType": "BIZ_DEST", "searchKey": "三亚 三亚"}],
                                            productId: 636542,
                                            startDistrictId: -1,
                                            fangchaQuantityMax: 0,
                                            notSell: 'N',
                                            javaCallback: {
                                                checkCallback: function(e) {
                                                    // do something
                                                    // 实现选择升级服务/可选服务的回调
                                                },
                                                insuranceReplaceCallback: function(e) {
                                                    var $that = $(e.currentTarget);
                                                    $that.parents(".insurance-detail-item").find(".other").toggle();
                                                    var displayCategoryName = $that.find('span').attr("data-displayname");
                                                    if ($that.parents(".insurance-detail-item").find(".other").is(':hidden') == true) {
                                                        $that.find('span').text('展开其它' + displayCategoryName).siblings('i').addClass('arrow-blue-down').removeClass('arrow-blue-up');
                                                    } else {
                                                        $that.find('span').text('收起其它' + displayCategoryName).siblings('i').removeClass('arrow-blue-down').addClass('arrow-blue-up');
                                                    }

                                                    $that.parents(".insurance_detail_list").find(".other").toggle();
                                                    var displayCategoryName = $that.find('span').attr("data-displayname");
                                                    if ($that.parents(".insurance_detail_list").find(".other").is(':hidden') == true) {
                                                        $that.find('span').text('展开其它' + displayCategoryName).siblings('i').addClass('arrow-blue-down').removeClass('arrow-blue-up');
                                                    } else {
                                                        $that.find('span').text('收起其它' + displayCategoryName).siblings('i').removeClass('arrow-blue-down').addClass('arrow-blue-up');
                                                    }

                                                },
                                                //升级选中时调用的方法
                                                selectUpgradeAction: function(e) {
                                                    var $e = $(e.currentTarget);
                                                    var collection = $e.parents(".upgrade-other").find("select");
                                                    collection.each(function() {
                                                        $(this).find("option:selected").val(0);
                                                    });
                                                    var collectionFangCha = $e.parents(".upgrade-other").find(".lvmama-fangcha-price");
                                                    //把所有的房差都清0
                                                    collectionFangCha.each(function() {
                                                        $(this).attr("data-fangcha", 0);
                                                    });

                                                    var item = $e.parents(".upgrade-item-status");
                                                    var goodsid = item.data("goodsid");
                                                    var groupId = item.data("groupid");
                                                    var quantity = item.data("quantity");
                                                    var detailId = item.data("detailid");
                                                    $(".params-upgrade-" + groupId).attr("data-goodsid", goodsid);
                                                    $(".params-upgrade-" + groupId).attr("data-quantity", quantity);
                                                    $(".params-upgrade-" + groupId).attr("data-detailid", detailId);
                                                    item.parents("div.adjust-product-item").find("option:selected").val(quantity);
                                                    //房差的变化
                                                    var fangcha = $(".fangcha-upgrade-" + detailId + "-" + goodsid);
                                                    if (fangcha.length > 0) {
                                                        fangcha.attr("data-fangcha", fangcha.attr("data-fangcha-price"));
                                                    }
                                                    //再算一次价格
                                                    $(".lvmama-price-flag").each(function(e) {
                                                        dealtotalMoney(this);
                                                    });
                                                },
                                                //升级取消时调用的方法
                                                abortUpgradeAction: function(e) {
                                                    var item = $(e.currentTarget).parent("div.upgrade-item-status");
                                                    var groupId = item.data("groupid");
                                                    var goodsid = item.data("goodsid");
                                                    var detailId = item.data("detailid");
                                                    $(".params-upgrade-" + groupId).attr("data-quantity", 0);
                                                    item.parents("div.adjust-product-item").find("option:selected").val(0);
                                                    //房差的变化
                                                    var fangcha = $(".fangcha-upgrade-" + detailId + "-" + goodsid);
                                                    if (fangcha.length > 0) {
                                                        fangcha.attr("data-fangcha", 0);
                                                    }
                                                    //再算一次价格
                                                    $(".lvmama-price-flag").each(function(e) {
                                                        dealtotalMoney(this);
                                                    });
                                                },
                                                //供应商的酒店套餐的时候,点选择做如下的处理
                                                packageDoSelectAction: function(e, $item) {
                                                    var buttonDiv = $item;
                                                    //当前选中的商品ID
                                                    var currentSuppGoodsId = buttonDiv.attr("data-currentsuppgoodsid");
                                                    //当前选中商品对应的份数
                                                    var currentQuantity = buttonDiv.attr("data-currentquantity");
                                                    //原来选中的商品ID
                                                    var selectSuppGoodsId = buttonDiv.attr("data-selectsuppgoodsid");
                                                    //当前商品的价格
                                                    var price = buttonDiv.attr("data-price");

                                                    //设置当前选中的参于算价钱的select
                                                    buttonDiv.find("select").addClass("selectPackage-select-" + currentSuppGoodsId).addClass("lvmama-price-flag");
                                                    //清除掉其它不应吃参与算钱的select
                                                    $("#adjust-package").find(".package-item").find("select").each(function() {
                                                        var selectClassName = "selectPackage-select-" + currentSuppGoodsId;
                                                        //如果不是当前选中的需要参与计算价格的select 就把标识参与计算价格的class清除掉
                                                        if (!$(this).hasClass(selectClassName)) {
                                                            $(this).removeClass();
                                                        }
                                                    })
                                                    //得到需要传参的div
                                                    var paramsDiv = $(".selectPackage-" + selectSuppGoodsId);
                                                    paramsDiv.attr("data-quantity", currentQuantity);
                                                    paramsDiv.attr("data-goodsid", currentSuppGoodsId);
                                                    //把算钱的设置到这个div上
                                                    paramsDiv.addClass("selectPackage-" + currentSuppGoodsId).removeClass("selectPackage-" + selectSuppGoodsId);
                                                    //改变所有的button对应的div上的当前选中的商品ID
                                                    $(".package-button-div").each(function() {
                                                        $(this).attr("data-selectsuppgoodsid", currentSuppGoodsId);
                                                    });
                                                    refreshPackageHotelGapPrice($item, currentSuppGoodsId);

                                                    //选择完酒店套餐之后再算一次价格
                                                    $(".lvmama-price-flag").each(function(e) {
                                                        dealtotalMoney(this);
                                                    });

                                                },
                                                //替换选择的商品和相对变化的附件信息
                                                doSelectAction: function(e) {
                                                    var b = false;
                                                    var startDistrictId = $(e.currentTarget).attr("data-startDistrictId");
                                                    if (!startDistrictId) {
                                                        startDistrictId = -1;
                                                    }
                                                    if ($(e.currentTarget).data('jipiaoduijieflag') == 'Y') {
                                                        b = true;
                                                    }

                                                    if (b) {//如果是对接机票，单独处理
                                                        if ($("#goFlight").length > 0) {
                                                            if (!$("#goTraffic .ldt_cce_ul").find("li").hasClass("ldt_cce_list_active")) {
                                                                alert("请选择出发航班");
                                                                return;
                                                            }
                                                        }

                                                        if ($("#backFlight").length > 0) {
                                                            if (!$("#backTraffic .ldt_cce_ul").find("li").hasClass("ldt_cce_list_active")) {
                                                                alert("请选择回程航班");
                                                                return;
                                                            }
                                                        }

                                                        var productId = $(e.currentTarget).data("productid");
                                                        //自主打包的产品ID 若为供应商打包就和上面的productId是一样的
                                                        var lvmamaProductId = window.lineDetail.productId;
                                                        var groupId = $(e.currentTarget).data("groupid");
                                                        var productBranchId = $(e.currentTarget).data("currentproductbranchid");
                                                        var selectedProductBranchId = $(e.currentTarget).data("selectedcurrentproductbranchid");//默认被选中的产品规格
                                                        var haveChangeButton = $(e.currentTarget).data("havechangebutton");//默认被选中的产品规格
                                                        var selectedsuppgoodsid = $(e.currentTarget).data("selectedsuppgoodsid");//默认选中的商品ID
                                                        var adultquantity = $(e.currentTarget).data("adultquantity");
                                                        var childquantity = $(e.currentTarget).data("childquantity");
                                                        var quantity = $(e.currentTarget).data("quantity");
                                                        var selectdate = $(e.currentTarget).data("selectdate");
                                                        var changeType = $(e.currentTarget).data("changetype");
                                                        var groupId = $(e.currentTarget).data("groupid");
                                                        var goFlightNO = $(e.currentTarget).data("goflightno");
                                                        var goSeatCode = $(e.currentTarget).data("goseatcode");
                                                        var backFlightNO = $(e.currentTarget).data("backflightno");
                                                        var backSeatCode = $(e.currentTarget).data("backseatcode");

                                                        //从show中获取数据
                                                        var goFromCity = toDJJPFrom;
                                                        var backFromCity = backDJJPFrom;
                                                        var goToCity = toDJJPGoTo;
                                                        var backToCity = backDJJPGoTo;
                                                        var backAir = convertData(DJJPbackflight);
                                                        var goAir = convertData(DJJPgoflight);

                                                        //var goNode = DJJPgoflight.middle;
                                                        var loadNewTraffic = "localAndOutBu/reloadApiFlightsGoods";
                                                        if ('N' == "Y") {
                                                            loadNewTraffic = "/route/localAndOutBu/reloadApiFlightsGoods";
                                                        }
                                                        $.ajax({
                                                            url: loadNewTraffic,
                                                            async: false,
                                                            type: "POST",
                                                            data: {
                                                                goAir: JSON.stringify(goAir),
                                                                backAir: JSON.stringify(backAir),
                                                                //goNode:JSON.stringify(goNode),
                                                                selectDate: selectdate,
                                                                haveChangeButton: "Y",
                                                                quantity: quantity,
                                                                goFromCity: goFromCity,
                                                                backFromCity: backFromCity,
                                                                goToCity: goToCity,
                                                                backToCity: backToCity,
                                                                goFlyDate: selectdate,
                                                                backFlyDate: selectdate,
                                                                adultQuantity: adultquantity,
                                                                childQuantity: childquantity,
                                                                startDistrictId: startDistrictId,
                                                                productId: productId,
                                                                groupId: groupId,
                                                                goFlightNO: goFlightNO,
                                                                goSeatCode: goSeatCode,
                                                                backFlightNO: backFlightNO,
                                                                backSeatCode: backSeatCode
                                                            },
                                                            success: function(data) {
                                                                //console.log("#"+groupId+"_"+selectedProductBranchId);
                                                                //$("#"+groupId+"_"+selectedProductBranchId).replaceWith(data);
                                                                if (data != '') {
                                                                    $("#adjust-traffic").html(data);
                                                                }
                                                                $(".dialog-close").trigger("click");
                                                                //更换商品之后再算一次价格
                                                                dealtotalMoney(this);

                                                            }

                                                        })


                                                    } else {
                                                        //点击 往返推荐 的选择按钮时，如果之前选择过自由组合的 去程“选择”按钮，则将存储在页面的自由组合的去程  航班号和舱位去空    panyu 20160510
                                                        if (null != $(".ldt_template #done_goFlightNO").val() && "" != $(".ldt_template #done_goFlightNO").val()) {
                                                            $(".ldt_template #done_goFlightNO").val("");
                                                            $(".ldt_template #done_goSeatCode").val("");
                                                        }
                                                        //将页面上的自由组合存储  航班号和舱位置空
                                                        $(".ldt_template #done_goFlightNO").attr("value", "");
                                                        $(".ldt_template #done_backFlightNO").attr("value", "");
                                                        $(".ldt_template #done_goSeatCode").attr("value", "");
                                                        $(".ldt_template #done_backSeatCode").attr("value", "");

                                                        var productId = $(e.currentTarget).data("productid");
                                                        //自主打包的产品ID 若为供应商打包就和上面的productId是一样的
                                                        var lvmamaProductId = window.lineDetail.productId;
                                                        var groupId = $(e.currentTarget).data("groupid");
                                                        var productBranchId = $(e.currentTarget).data("currentproductbranchid");
                                                        var selectedProductBranchId = $(e.currentTarget).data("selectedcurrentproductbranchid");//默认被选中的产品规格
                                                        var haveChangeButton = $(e.currentTarget).data("havechangebutton");//是否可换
                                                        var selectedsuppgoodsid = $(e.currentTarget).data("suppgoodsid");//当前选中的商品ID
                                                        var adultquantity = $(e.currentTarget).data("adultquantity");
                                                        var childquantity = $(e.currentTarget).data("childquantity");
                                                        var quantity = $(e.currentTarget).data("quantity");
                                                        var selectdate = $(e.currentTarget).data("selectdate");
                                                        var changeType = $(e.currentTarget).data("changetype");

                                                        var changeSuppGoodsUrl = "localAndOutBu/changeSuppGoods";
                                                        if ('N' == "Y") {
                                                            changeSuppGoodsUrl = "/route/localAndOutBu/changeSuppGoods";
                                                        }
                                                        if (changeType == 'hotel') {
                                                            showLoading();
                                                        }
                                                        $.ajax({
                                                            url: changeSuppGoodsUrl,
                                                            type: "get",
                                                            contentType: 'application/json;charset=utf-8', //设置请求头信息
                                                            data: {
                                                                lvmamaProductId: lvmamaProductId,
                                                                productId: productId,
                                                                groupId: groupId,
                                                                productBranchId: productBranchId,
                                                                selectedSuppgoodsid: selectedsuppgoodsid,
                                                                selectDate: selectdate,
                                                                adultQuantity: adultquantity,
                                                                childQuantity: childquantity,
                                                                quantity: quantity,
                                                                changeType: changeType,
                                                                startDistrictId: startDistrictId,
                                                                haveChangeButton: haveChangeButton
                                                            },
                                                            success: function(data) {
                                                                if ($("#flightFlag", data).val() == '1') {
                                                                    $("#adjust-traffic").html(data);
                                                                } else {
                                                                    $("#" + groupId + "_" + selectedProductBranchId).replaceWith(data);
                                                                }
                                                                $(".dialog-close").trigger("click");
                                                                //更换商品之后再算一次价格
                                                                $(".lvmama-price-flag").each(function(e) {
                                                                    dealtotalMoney(this);
                                                                });
                                                            }
                                                        });
                                                    }
                                                },
                                                //日历框
                                                dateSelected: function(e, date) {
                                                    //显示产品价格服务等详情
                                                    showAdjust(date);
                                                },
                                                //更换产品
                                                replaceCallback: function(e) {
                                                    //用于置灰 “更换其他交通”
                                                    var $trafficClick = $(e.currentTarget);
                                                    var groupid = $(e.currentTarget).data("groupid");
                                                    var currentproductbranchid = $(e.currentTarget).attr("data-currentproductbranchid");//当前已选择规格ID
                                                    var currentSuppgoodsid = $(e.currentTarget).attr("data-defaultsuppgoodsid");//当前已选择商品ID（目前仅酒店使用）
                                                    var haveChangeButton = $(e.currentTarget).data("havechangebutton");//是否有更换button的按钮
                                                    var adultquantity = $(e.currentTarget).data("adultquantity");
                                                    var childquantity = $(e.currentTarget).data("childquantity");
                                                    var quantity = $(e.currentTarget).data("quantity");
                                                    var selectdate = $(e.currentTarget).data("selectdate");
                                                    var changeType = $(e.currentTarget).data("changetype");
                                                    var startDistrictId = $(e.currentTarget).attr("data-startDistrictId");
                                                    if (!startDistrictId) {
                                                        startDistrictId = -1;
                                                    }

                                                    //这个产品ID是被打包的产品ID 解决升级问题的
                                                    var productId = $(e.currentTarget).data("productid");

                                                    var selectedSuppGoodsId = $(e.currentTarget).data("selectedsuppgoodsid");
                                                    var jiPiaoDuiJieFlag = $(e.currentTarget).data("jipiaoduijieflag");
                                                    var oldprice = $(e.currentTarget).data("oldprice");
                                                    var toBackType = $(e.currentTarget).data("tobacktype");

                                                    //自主打包的产品ID 若为供应商打包就和上面的productId是一样的
                                                    var lvmamaProductId = window.lineDetail.productId;
                                                    var changeTitle = "";
                                                    if (changeType == "hotelPackage") {
                                                        changeTitle = "更换酒店套餐";
                                                    } else if (changeType == "hotel") {
                                                        changeTitle = "更换酒店";
                                                    } else if (changeType == "local") {
                                                        changeTitle = "更换当地游";
                                                    } else if (changeType == "ticket") {
                                                        changeTitle = "更换景点门票";
                                                    } else if (changeType == "upgrade") {
                                                        changeTitle = "更换其他套餐";
                                                    } else if (changeType == "traffic") {
                                                        changeTitle = "更换其他交通";
                                                        //将“更换其他交通”按钮  置 不可点击
                                                        $trafficClick.attr("disabled", true);
                                                    } else if (changeType == "selectHotel") {
                                                        //可换酒店的时候，这个日期应该是可换酒店所属的产品的出行日期
                                                        selectdate = $(e.currentTarget).attr("data-belongtoproductdate");
                                                        changeTitle = "更换其他可选酒店";
                                                    } else {
                                                        changeTitle = "更换其他套餐";
                                                    }

                                                    var changeProductUrl = "localAndOutBu/changeProduct";

                                                    if (jiPiaoDuiJieFlag) {
                                                        //winLoading(true,'加载中...');
                                                        changeProductUrl = "localAndOutBu/changeFlight";
                                                        var goFlightNO = $(e.currentTarget).data("goflightno");
                                                        var goSeatCode = $(e.currentTarget).data("goseatcode");
                                                        var backFlightNO = $(e.currentTarget).data("backflightno");
                                                        var backSeatCode = $(e.currentTarget).data("backseatcode");

                                                        if ('N' == "Y") {
                                                            changeProductUrl = "/route/localAndOutBu/changeFlight";
                                                        }
                                                        $.ajax({
                                                            url: changeProductUrl,
                                                            type: "get",
                                                            contentType: 'application/json;charset=utf-8', //设置请求头信息
                                                            data: {
                                                                lvmamaProductId: lvmamaProductId,
                                                                selectDate: selectdate,
                                                                adultQuantity: adultquantity,
                                                                childQuantity: childquantity,
                                                                quantity: quantity,
                                                                productId: productId,
                                                                groupId: groupid,
                                                                currentProductBranchId: currentproductbranchid,
                                                                changeType: changeType,
                                                                startDistrictId: startDistrictId,
                                                                haveChangeButton: haveChangeButton,
                                                                selectedSuppGoodsId: 0,
                                                                oldPrice: oldprice,
                                                                toBackType: toBackType,
                                                                jiPiaoDuiJieFlag: jiPiaoDuiJieFlag,
                                                                goFlightNO: goFlightNO,
                                                                goSeatCode: goSeatCode,
                                                                backFlightNO: backFlightNO,
                                                                backSeatCode: backSeatCode
                                                            },
                                                            success: function(data) {
                                                                $.dialog({
                                                                    wrapClass: "ldt_dialog",
                                                                    title: changeTitle,
                                                                    content: data,
                                                                    width: 1120,
                                                                    beforeunload: function() {//关闭对话框回调
                                                                        var that = this;
                                                                        //如果存在去程和返程时，切去程已选，返程未选时
                                                                        if ($(".ldt_template #goFlightType").val() != "" && $(".ldt_template #backFlightType").val() != "" && $(".ldt_template #done_goFlightNO").val() != "" && $(".ldt_template #done_backFlightNO").val() == "") {
                                                                            $.confirmNew("您尚未选择返程航班，是否继续选返程？", function() {
                                                                                // 确认操作的事件(默认可不写，为关闭操作)
                                                                                // $('.traffic_tab li').eq(1).click();
                                                                                //点击去程的已选按钮
                                                                                $('#list_to .js_fh_selected').click();
                                                                            }, function() {
                                                                                // 取消操作的事件(默认可不写，为关闭操作)
                                                                                delete that.config.beforeunload;
                                                                                that.close();
                                                                            },
                                                                                    "继续选择返程", // 确定按钮文本
                                                                                    "放弃变更", // 取消按钮文本
                                                                                    "dialog_btn_ok",
                                                                                    "dialog_btn_cancel"
                                                                                    );
                                                                            return false;
                                                                        } else {
                                                                            return true;
                                                                        }
                                                                    }
                                                                })

                                                                //弹出框 弹出之后 将“更换其他交通” 按钮置  可点击状态
                                                                if ($trafficClick != undefined) {
                                                                    $trafficClick.attr("disabled", false);
                                                                }
                                                                pandora.selectModel({'autoWidth': false, 'selectElement': $('.ldt_t_number')});
                                                                pandora.selectModel({'autoWidth': false, 'selectElement': $('.ldt_tcicit_select')});
                                                            }
                                                        });
                                                    } else {
                                                        if ('N' == "Y") {
                                                            changeProductUrl = "/route/localAndOutBu/changeProduct";
                                                        }
                                                        $.ajax({
                                                            url: changeProductUrl,
                                                            type: "get",
                                                            contentType: 'application/json;charset=utf-8', //设置请求头信息
                                                            data: {
                                                                lvmamaProductId: lvmamaProductId,
                                                                selectDate: selectdate,
                                                                adultQuantity: adultquantity,
                                                                childQuantity: childquantity,
                                                                quantity: quantity,
                                                                productId: productId,
                                                                groupId: groupid,
                                                                currentProductBranchId: currentproductbranchid,
                                                                currentSuppgoodsid: currentSuppgoodsid,
                                                                changeType: changeType,
                                                                startDistrictId: startDistrictId,
                                                                haveChangeButton: haveChangeButton
                                                            },
                                                            success: function(data) {
                                                                var skinval = "";
                                                                var newdata = "";
                                                                //如果是酒店,更换酒店时加效果
                                                                if (changeType == 'hotel') {
                                                                    var headStr = "<div class='yin-hotel-dialog-template clearfix' style='display: block;'  >";
                                                                    var other = "<div class='ft-overlay'></div><div class='ft-dialog-loading'><div class='ft-dialog-inner clearfix'><div class='ft-dialog-body'><p>驴妈妈拼命加载中，请稍候...</p></div></div></div>";
                                                                    var downStr = "</div>";
                                                                    newdata = headStr + data + other + downStr;
                                                                    skinval = "dialog-default hotel-dialog";
                                                                } else {
                                                                    newdata = data;
                                                                }
                                                                $.dialog({
                                                                    title: changeTitle,
                                                                    content: newdata,
                                                                    skin: skinval,
                                                                    initialize: function() {
                                                                        if (changeType == 'hotel') {
                                                                            var $dialog = this.wrap;
                                                                            var $body = $dialog.find(".dialog-body");
                                                                            var $foot = $dialog.find(".dialog-footer");
                                                                            $foot.css("height", 0).hide();
                                                                            $body.css({
                                                                                "height": $body.height() + 20
                                                                            });
                                                                            hideLoading();
                                                                        }
                                                                    },
                                                                    width: "900px",
                                                                    height: "500px"

                                                                })
                                                            }
                                                        });
                                                    }
                                                },
                                                submitData: function() {
                                                    var itemList = new Array();
                                                    var breakFlag = "1";
                                                    $(".need-submit-data").each(function() {
                                                        var groupType = $(this).attr("data-group");
                                                        var item = {};
                                                        var hotelAdditation = {};//酒店的时候使用
                                                        var goodsId = $(this).attr("data-goodsId");
                                                        if (typeof (goodsId) != undefined) {
                                                            item.goodsId = goodsId;
                                                        }
                                                        var goodType = $(this).attr("data-goodType");
                                                        if (typeof (goodType) != undefined) {
                                                            item.goodType = goodType;
                                                        }
                                                        var mainItem = $(this).attr("data-mainItem");
                                                        if (typeof (mainItem) != undefined) {
                                                            item.mainItem = mainItem;
                                                        }
                                                        var routeRelation = $(this).attr("data-routeRelation");
                                                        if (typeof (routeRelation) != undefined) {
                                                            item.routeRelation = routeRelation;
                                                        }
                                                        var detailId = $(this).attr("data-detailId");
                                                        if (typeof (detailId) != undefined) {
                                                            item.detailId = detailId;
                                                        }
                                                        var quantity = $(this).attr("data-quantity");
                                                        var adultQuantity = $(this).attr("data-adultQuantity");
                                                        var childQuantity = $(this).attr("data-childQuantity");
                                                        var gapQuantity = $(this).attr("data-gapQuantity");
                                                        if (typeof (quantity) != undefined) {

                                                            if (groupType == "localRoute") {
                                                                if (typeof (adultQuantity) != undefined && typeof (childQuantity) != undefined) {
                                                                    item.quantity = adultQuantity + childQuantity;
                                                                    item.adultQuantity = adultQuantity;
                                                                    item.childQuantity = childQuantity;
                                                                    item.gapQuantity = gapQuantity;
                                                                } else {
                                                                    item.adultQuantity = quantity;
                                                                    item.quantity = quantity;
                                                                }

                                                            } else if (groupType == "addition") {
                                                                item.adultQuantity = quantity;
                                                                item.quantity = quantity;
                                                            } else {
                                                                item.quantity = quantity;
                                                            }
                                                        }
                                                        var visitTime = $(this).attr("data-visitTime");
                                                        if (typeof (visitTime) != undefined) {
                                                            item.visitTime = visitTime;
                                                        }
                                                        if (groupType == "ticket") {
                                                            var markSelect_1 = detailId + "-" + goodsId;
                                                            $("select").each(function() {
                                                                var markSelect_2 = $(this).attr("data-detailid-suppgoodsid");
                                                                if (typeof (markSelect_2) != undefined && markSelect_1 == markSelect_2) {
                                                                    var selectOptionLength_new = $(this).find("option:selected").text();
                                                                    if (selectOptionLength_new == '请选择') {
                                                                        $(this)[0].focus();
                                                                        $(this).css("background-color", "#ffcccc");
                                                                        breakFlag = 0;
                                                                        return false;
                                                                    }
                                                                }
                                                            })
                                                        }
                                                        var displayTime = $(this).attr("data-displayTime");
                                                        if (typeof (displayTime) != undefined) {
                                                            item.displayTime = displayTime;
                                                        }
                                                        var leaveTime = $(this).attr("data-leaveTime");
                                                        if (typeof (leaveTime) != undefined && groupType == "hotel") {
                                                            hotelAdditation.leaveTime = leaveTime;
                                                        }
                                                        var arrivalTime = $(this).attr("data-arrivalTime");
                                                        if (typeof (arrivalTime) != undefined && groupType == "hotel") {
                                                            hotelAdditation.arrivalTime = arrivalTime;
                                                        }
                                                        var stayDays = $(this).attr("data-stayDays");
                                                        if (typeof (stayDays) != undefined && groupType == "hotel") {
                                                            hotelAdditation.stayDays = stayDays;
                                                        }
                                                        var todate = $(this).attr("data-todate");
                                                        if (typeof (todate) != undefined && groupType == "traffic") {
                                                            item.toDate = todate;
                                                        }
                                                        var flightNoVoJson = $(this).attr("data-flightnovojson");
                                                        if (typeof (flightNoVoJson) != undefined && groupType == "traffic" && flightNoVoJson != undefined) {
                                                            flightNoVoJson = flightNoVoJson.replace(/'/g, '"');
                                                            item.flightNoVo = flightNoVoJson;
                                                        }
                                                        var backdate = $(this).attr("data-backdate");
                                                        if (typeof (backdate) != undefined && groupType == "traffic") {
                                                            item.backDate = backdate;
                                                        }
                                                        //成人价格
                                                        var adultAmt = $(this).attr("data-adultamt");
                                                        if (typeof (adultAmt) != undefined && groupType == "traffic") {
                                                            item.adultAmt = adultAmt;
                                                        }
                                                        //儿童价格
                                                        var childAmt = $(this).attr("data-childamt");
                                                        if (typeof (childAmt) != undefined && groupType == "traffic") {
                                                            item.childAmt = childAmt;
                                                        }


                                                        //如果是酒店才会有这个对象
                                                        if (groupType == "hotel") {
                                                            item.hotelAdditation = hotelAdditation;
                                                        }
                                                        //过滤掉份数为0的,而且所有下单的东西一定是会有份数的
                                                        if ("quantity" in item && item.quantity == "0" ? false : true && item.adultQuantity == "0" ? false : true && item.quantity == "" ? false : true) {
                                                            itemList.push(item);
                                                        }

                                                    })
                                                    if (breakFlag == 0) {
                                                        return false;
                                                    }
                                                    //输入的参数也要传过去
                                                    var adultQuantity = $(".adult-count").val();
                                                    var childQuantity = $(".children-count").val();
                                                    var quantity = $("#preorder-quantity").val();
                                                    var quantityHiddenFlag = $("#preorder-quantity").data("hidden");
                                                    //得到房差的份数
                                                    var quantityFangCha = $(".fangcha-quantity").val();
                                                    var form = {};
                                                    form.itemList = itemList;
                                                    if (!isNaN(quantityFangCha) && quantityFangCha.length > 0) {
                                                        form.spreadQuantity = quantityFangCha;
                                                    }
                                                    //如果没有酒店套餐的
                                                    if (quantityHiddenFlag == 'Y') {
                                                        form.adultQuantity = adultQuantity;
                                                        form.childQuantity = childQuantity;
                                                        //如果有酒店套餐的
                                                    } else if (quantityHiddenFlag == 'N') {
                                                        form.adultQuantity = adultQuantity * quantity;
                                                        form.childQuantity = childQuantity * quantity;
                                                    }
                                                    form.quantity = quantity;
                                                    form.productId = 636542;
                                                    form.startDistrictId =
                                                            form.visitTime = $(".preorder-start-time").val();
                                                    if ($("#lineRouteId"))
                                                    {
                                                        form.lineRouteId = $("#lineRouteId").val();
                                                    }
                                                    $("#orderJson").val(encodeURI(JSON.stringify(form)));
                                                    //alert( $("#orderJson").val());
                                                    var loginLimit = false; //免登陆控制  false:允许免登陆   true: 必须要登陆
                                                    if (!loginLimit) {
                                                        $("#submitDataForm").submit();
                                                        return;
                                                    }
                                                    $.getJSON(
                                                            "http://login.lvmama.com/nsso/ajax/checkLoginStatus.do?jsoncallback=?",
                                                            {},
                                                            function(data) {
                                                                if (data.success) {
                                                                    $("#submitDataForm").submit();
                                                                } else {
                                                                    showLogin(function() {
                                                                        $("#submitDataForm").submit();
                                                                    });
<!--cmCreatePageviewTag("登陆浮动层-跟团游-国内-长线","虚拟浏览");-->
                                                                    cmCreatePageviewTag("登陆浮动层-跟团游-国内-长线", "虚拟浏览", null, null, "-_--_--_--_--_-其他页面");
                                                                }
                                                            }
                                                    );
                                                }
                                            }
                                        };
                                    </script>
                                    <script src="index_003.php"></script>

                                    <script src="/home/js/lvmama.js" charset="utf-8" async="" type="text/javascript"></script><script src="index_004.php"></script> <div class="poptip tip-light poptip-default" style="display: none;" id="poptip1">     <div class="tip-arrow tip-arrow-11">         <em>◆</em>         <i>◆</i>     </div>     <div class="tip-content">         <h5 class="tip-title"></h5>         <p></p>     </div> </div>

                                    <script src="index_005.php"></script>
                                    <script src="/home/js/comment.js"></script>
                                    <script type="text/javascript" src="/home/other/api.dat"></script><script type="text/javascript" src="/home/other/getscript.dat"></script>
                                    <script type="text/javascript" src="index_006.php"></script>
                                    <script src="index_007.php"></script>
                                    <script src="/home/js/linedetail.js"></script>
                                    <script type="text/javascript" src="/home/js/promotion-module.js"></script>
                                    <script>
                                        function buyPreSell(obj) {
                                            var classStr = $(obj).attr("class");
                                            var stampId = $(obj).attr("stampId");
                                            if ("btn btn-sm btn-forbbiden" == classStr) {
                                                return;
                                            }
                                            window.location.assign("/vst_front/book/route/fillStampOrder.do?stampId=" + stampId);
                                        }
                                        var publicCallBack = {};
                                        window.onload = function() {
                                            cmCreatePageviewTag("产品详情页-跟团游-国内-长线", "跟团游产品详情页");
                                            cmCreateProductviewTag('636542', '【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）', '跟团游', '-_--_--_-' + '国内游事业部');
                                            $.searchType.showType('ROUTE');
                                            disableBookBtn();
                                            $("#preorder-confirm-button").attr("class", "btn cbtn-orange1 fr ml20");

                                            var routeId = $(".instance_tab").find(".active").attr("data-line");
                                            printRouteParam(routeId);
                                        }
                                        //设置打印行程链接
                                        function printRouteParam(routeId) {
                                            var url = "http://dujia.lvmama.com/local/localAndOutBu/routePrint.do?startDistrictId=&productId=636542&routeId=" + routeId;

                                            if (routeId != '' && routeId != 'undefined') {
                                                $(".printRoute").attr("href", url);
                                            } else {
                                                $(".printRoute").attr("href", "javascript:;");
                                            }
                                        }
                                        function disableBookBtn() {
                                            //alert("12");
                                            var cancelFlag = 'Y';
                                            //alert(cancelFlag);
                                            var saleFlag = 'Y';
                                            //alert(saleFlag);
                                            if ('Y' == 'N' || 'Y' == 'N') {
                                                //alert(22);
                                                $("#preorder-confirm-button").attr("class", "btn cbtn-orange1 fr ml20");
                                                $("#preorder-confirm-button").attr("data-disable", true);
                                            }
                                        }
                                        $("#preorder-quantity").bind("change", function() {
                                            //alert("111");

                                            var saleType = '';
                                            //alert(saleType);
                                            if ("COPIES" == saleType) {
                                                var quantity = $("#preorder-quantity").val();
                                                //alert(quantity);
                                                var child = $("#child-count-span");
                                                //alert(child);
                                                var adult = $("#adult-count-span");
                                                var child_value = '0';
                                                //alert(child_value+"test"+child_value1);
                                                var adult_value = '0';
                                                child.html(child_value * quantity);
                                                adult.html(adult_value * quantity);
                                                /*$("#children-count").html("<option value="+(child_value*quantity)+">"+(child_value*quantity)+"</option>")
                                                 $("#adult-count").html("<option value="+(adult_value*quantity)+">"+(adult_value*quantity)+"</option>");*/

                                            }
                                        });



                                        //行程tab
                                        $(".instance_tab li").bind("click", function() {
                                            var lineRouteId = $(this).attr("data-line");
                                            printRouteParam(lineRouteId);
                                            $(".noresult").hide();
                                        });

                                        /**
                                         * 这个是没有登录的时候,弹出框用的,里面是空的就可以
                                         */
                                        function loginFormSubmit() {

                                        }

                                        //对每一个块处理的函数，做成函数方便在第一次加载的时候就可以调用算总价
                                        function dealtotalMoney(e) {
                                            var type = $(e).data("type");
                                            //如果为当地游
                                            if ("local" == type) {
                                                //得到当地游的的一个标识，用来查找传参数的div
                                                var localMark = $(e).attr("data-detailid-suppgoodsid");
                                                //得到当地游选择的日期
                                                var localDate = $(e).find("option:selected").text();
                                                $(".params-local-" + localMark).attr("data-visitTime", localDate);
                                                var productid = $(e).data("productid");
                                                //如果选择的当地游的日期对于附加来说也有对应的日期,则执行下面的
                                                var localPrice = $(e).data("price-" + localDate);
                                                $(".local-price-" + localMark).text("￥" + (localPrice / 100).toFixed(2));
                                                $(".lvmama-price-addition").each(function() {
                                                    var abc = $(this).data("productid-suppgoodsid");
                                                    if (abc.toLowerCase().indexOf(productid + "-") >= 0) {
                                                        //如果附加已被隐藏并不可用,还原回来
                                                        if ($(".lvmama-price-addition-" + abc).attr("disabled") == "disabled") {
                                                            //整个div恢复
                                                            $(".addition-div-" + abc).attr('style', 'display:block !important');
                                                            // $(".addition-div-"+abc).show();
                                                            $(".lvmama-price-addition-" + abc).attr("disabled", false);
                                                            $(".lvmama-price-addition-" + abc).attr("hidden", false);
                                                            $(".totalPrice-" + abc).attr("hidden", false);
                                                            $(".singlePrice-" + abc).attr("hidden", false);
                                                        }
                                                        //根据当地游的日期得到附加的日期的单价
                                                        var additionHiddenLocalDatePrice = $(".lvmama-price-addition-hidden-" + abc).data("price-" + localDate);
                                                        if (additionHiddenLocalDatePrice != null) {
                                                            var singlePrice = parseInt(additionHiddenLocalDatePrice);
                                                            //保存当地游选择日期的附加的当天单价
                                                            $(".lvmama-price-addition-hidden-" + abc + " option:selected").val(singlePrice);
                                                            //保存当地游选择的日期
                                                            $(".lvmama-price-addition-hidden-" + abc + " option:selected").text(localDate);
                                                            //为附加重新设置出行日期
                                                            $(".params-addition-" + abc).attr("data-visitTime", localDate);
                                                            //页面附加的单价显示
                                                            $(".singlePrice-" + abc).text("￥" + (singlePrice / 100).toFixed(2));
                                                            var qunantity = $(".lvmama-price-addition-" + abc).val();
                                                            var totalPrice = singlePrice * qunantity;
                                                            //显示附加总价的显示
                                                            if (totalPrice != 0) {
                                                                if (totalPrice % 100 == 0) {
                                                                    $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(0));
                                                                } else {
                                                                    $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(2));
                                                                }
                                                            } else {
                                                                $(".totalPrice-" + abc).text("--");
                                                            }

                                                            //把得到的日期和根据所选份数得到的总价设置在份数的dom上方便后面计算总价
                                                            $(".lvmama-price-addition-" + abc).data("price-" + qunantity, totalPrice);

                                                        } else {
                                                            //当地游选择的日期,附加没有可售的,所以设置为不可用,并隐藏
                                                            $(".lvmama-price-addition-" + abc).attr("disabled", "disabled");
                                                            $(".lvmama-price-addition-" + abc).attr("hidden", "hidden");
                                                            $(".totalPrice-" + abc).attr("hidden", "hidden");
                                                            $(".singlePrice-" + abc).attr("hidden", "hidden");
                                                            //整个div隐藏
                                                            $(".addition-div-" + abc).attr('style', 'display:none !important');
                                                            //  $(".addition-div-"+abc).hide();
                                                        }

                                                    }
                                                    ;
                                                })
                                                //算当地游的房差,房差跟着当地游的日期变化而变化
                                                var localFangchaDiv = $(".fangcha-local-" + localMark);
                                                if ($(localFangchaDiv).length > 0) {
                                                    var localFangchaPrice = localFangchaDiv.attr("data-" + localDate);
                                                    if (typeof (localFangchaPrice) == "undefined") {
                                                        localFangchaDiv.attr("data-fangcha", "0");
                                                    } else {
                                                        localFangchaDiv.attr("data-fangcha", localFangchaPrice);
                                                    }
                                                }
                                                //如果为附加
                                            } else if ("addition" == type) {
                                                var qunantity = $(e).val();
                                                var abc = $(e).data("productid-suppgoodsid");
                                                //取单价,这里的单价是没有除100的
                                                var singlePrice = $(".lvmama-price-addition-hidden-" + abc + " option:selected").val();
                                                var totalPrice = singlePrice * qunantity;
                                                //份数变化重计算总价
                                                if (totalPrice != 0) {
                                                    if (totalPrice % 100 == 0) {
                                                        $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(0));
                                                    } else {
                                                        $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(2));
                                                    }
                                                } else {
                                                    $(".totalPrice-" + abc).text("--");
                                                }

                                                //把计算的结构和份数的信息存在他本身的dom里方便后面计算总价
                                                $(e).attr("data-price-" + qunantity, totalPrice);
                                                //把份数的变化保存到参数的div上
                                                $(".params-addition-" + abc).attr("data-quantity", qunantity);
                                                //如果为酒店
                                            } else if ("localRoute" == type) {
                                                var priceType = $(e).data("pricetype");
                                                var qunantity = $(e).val();
                                                var abc = $(e).data("productid-suppgoodsid");
                                                var singlePrice = 0;
                                                if ("adult" == priceType) {
                                                    singlePrice = $(".lvmama-price-addition-hidden-" + abc + " option:selected").val();
                                                    var currnGap = $(".gap-" + abc).val();
                                                    var currnChild = $(".child-" + abc).val();
                                                    $(".gap-" + abc).html("");
                                                    for (var i = 0; i <= qunantity; i++) {
                                                        var optionHtml = $("<option></option>");
                                                        optionHtml.val(i).html(i);
                                                        if (i == currnGap) {
                                                            optionHtml.attr("selected", true);
                                                        }
                                                        $(".gap-" + abc).append(optionHtml);
                                                    }
                                                    if (currnGap > qunantity) {
                                                        $(".totalPrice-gap-" + abc).text("--");
                                                        var optionalItem = $(".totalPrice-gap-" + abc).parents(".optional-insurance-item").find(".optional-item-status");
                                                        optionalItem.html("");
                                                    }
                                                    //处理当地游儿童人数和成人数联动
                                                    if (qunantity > 0) {
                                                        if (currnChild == 0) {
                                                            var childOptions = $("#options-" + abc).html();
                                                            $(".child-" + abc).html(childOptions);
                                                        }
                                                    } else {
                                                        var optionHtml = $("<option></option>");
                                                        optionHtml.val(0).html(0);
                                                        $(".child-" + abc).html(optionHtml);
                                                        $(".totalPrice-child-" + abc).text("--");
                                                        var optionalItem = $(".totalPrice-child-" + abc).parents(".optional-insurance-item").find(".optional-item-status");
                                                        optionalItem.html("");
                                                    }
                                                    $(".params-addition-" + abc).attr("data-adultQuantity", qunantity);
                                                    $(".params-addition-" + abc).attr("data-quantity", qunantity);

                                                } else if ("child" == priceType) {
                                                    singlePrice = $(".lvmama-price-addition-hidden-" + abc + " option:selected").attr("childPrice");
                                                    $(".params-addition-" + abc).attr("data-childQuantity", qunantity);

                                                } else if ("gap" == priceType) {
                                                    singlePrice = $(".lvmama-price-addition-hidden-" + abc + " option:selected").attr("gapPrice");
                                                    $(".params-addition-" + abc).attr("data-gapQuantity", qunantity);
                                                }

                                                //取单价,这里的单价是没有除100的
                                                var totalPrice = parseInt(singlePrice) * qunantity;
                                                //份数变化重计算总价
                                                if (totalPrice != 0) {
                                                    if (totalPrice % 100 == 0) {
                                                        $(".totalPrice-" + priceType + "-" + abc).text("￥" + (totalPrice / 100).toFixed(0));
                                                    } else {
                                                        $(".totalPrice-" + priceType + "-" + abc).text("￥" + (totalPrice / 100).toFixed(2));
                                                    }
                                                } else {
                                                    $(".totalPrice-" + priceType + "-" + abc).text("--");
                                                }

                                                //把计算的结构和份数的信息存在他本身的dom里方便后面计算总价
                                                $(e).attr("data-price-" + qunantity, totalPrice);
                                                //把份数的变化保存到参数的div上
                                            } else if ("hotel" == type) {
                                                var abc = $(e).data("detailid-suppgoodsid");
                                                //得到变化的房间数量
                                                var roomQuantity = $(e).val();
                                                //把房间数量的变化保存到要提交的参数div上
                                                $(".params-hotel-" + abc).data("quantity", roomQuantity);
                                                $(".params-hotel-" + abc).attr("data-quantity", roomQuantity);
                                                //如果为门票，门票这个地方的操作稍微复杂一点，因为有可能门票是两张
                                            } else if ("ticket" == type) {
                                                var abc = $(e).data("detailid-suppgoodsid");
                                                $(e).css("background-color", "#FFFFFF");
                                                var selectOptionLength = $(e).find("option").length;
                                                var selectOptionLength_new = $(e).find("option:contains('请选择')").length;
                                                var markFlag = 1;
                                                if (selectOptionLength > 1 && selectOptionLength_new <= 0) {
                                                    $(e).prepend("<option value='0'>请选择</option>");
                                                    $(e).find("option:contains('请选择')").attr("selected", true);
                                                    markFlag = 0;
                                                }
                                                //得到选择的日期
                                                var selectDate;
                                                if (markFlag == 0) {
                                                    selectDate = $(e).find("option:eq(1)").val();
                                                    $(e).find("option:contains('请选择')").attr("value", selectDate);
                                                } else {
                                                    selectDate = $(e).val();
                                                }
                                                //把得到的日期保存在要传的参数div上
                                                $(".params-ticket-" + abc).attr("data-visittime", selectDate);
                                                //这个是解决有二张票的情况，这里得到隐藏的第二张票的select
                                                var secondSelect = $(e).next("select");
                                                //如果有第二张票
                                                if (secondSelect.length > 0) {
                                                    $(secondSelect).val(selectDate)
                                                    var secondAbc = secondSelect.data("detailid-suppgoodsid");
                                                    //二张票选择的一定是同一个日期
                                                    $(".params-ticket-" + secondAbc).attr("data-visittime", selectDate);
                                                }
                                                //如果是关联销售中的单门票，其它票，套餐组合票
                                            } else if ("optional-ticket-date-select" == type) {
                                                //这里主要任务有二个，一个是改变单价，一个就是把改变的日期设置到传参数的div上
                                                var abc = $(e).data("productid-suppgoodsid");
                                                var selectDate = $(e).val();
                                                var additionHiddenLocalDatePrice = $(".lvmama-price-addition-hidden-" + abc).data("price-" + selectDate);
                                                if (additionHiddenLocalDatePrice != null) {
                                                    var singlePrice = parseInt(additionHiddenLocalDatePrice);
                                                    //保存单价
                                                    $(".lvmama-price-addition-hidden-" + abc + " option:selected").val(singlePrice);
                                                    //保存单价对应的日期
                                                    $(".lvmama-price-addition-hidden-" + abc + " option:selected").text(selectDate);
                                                    //页面附加的单价显示
                                                    $(".singlePrice-" + abc).text("￥" + (singlePrice / 100).toFixed(2));
                                                    var qunantity = $(".lvmama-price-addition-" + abc).val();
                                                    var totalPrice = singlePrice * qunantity;
                                                    //显示附加总价的显示
                                                    if (totalPrice != 0) {
                                                        if (totalPrice % 100 == 0) {
                                                            $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(0));
                                                        } else {
                                                            $(".totalPrice-" + abc).text("￥" + (totalPrice / 100).toFixed(2));
                                                        }
                                                    } else {
                                                        $(".totalPrice-" + abc).text("--");
                                                    }
                                                    //把得到的日期和根据所选份数得到的总价设置在份数的dom上方便后面计算总价
                                                    $(".lvmama-price-addition-" + abc).data("price-" + qunantity, totalPrice);
                                                    //把日期的变化保存到参数的div上
                                                    $(".params-addition-" + abc).attr("data-visitTime", selectDate);
                                                }
                                                //触发一次总价计算
                                                $(".lvmama-price-flag.addtion-change-quantity").change();
                                            }
                                            //设置房差的总价
                                            if ($(".fangcha").css("display") != 'none') {
                                                $(".fangcha").css("display", "none");
                                            }

                                            var fangChaQuantity = $(".fangcha-quantity");
                                            var totalPriceFangcha = 0;
                                            if (fangChaQuantity.length > 0) {
                                                //开始计算房差
                                                fillTheFangChaDiv();
                                                if ($("#fangchaDiv").css("display") == "block") {
                                                    //下面开始计算总价,首先得到总单价
                                                    var singlePriceFangcha = parseInt($(".singlePrice-fangcha").attr("data-singlePrice"));
                                                    totalPriceFangcha = singlePriceFangcha * parseInt($(".fangcha-quantity").val());
                                                    if (totalPriceFangcha % 100 == 0) {
                                                        $(".totalPrice-fangcha").text("￥" + totalPriceFangcha / 100);
                                                    } else {
                                                        $(".totalPrice-fangcha").text("￥" + (totalPriceFangcha / 100).toFixed(2));
                                                    }
                                                }
                                            }
                                            var price = 0;
                                            var fangchaTotalStr = "";
                                            if (totalPriceFangcha != 0 && !isNaN(totalPriceFangcha)) {
                                                price = totalPriceFangcha;
                                                if (totalPriceFangcha % 100 == 0) {
                                                    fangchaTotalStr = totalPriceFangcha / 100;
                                                } else {
                                                    fangchaTotalStr = (totalPriceFangcha / 100).toFixed(2);
                                                }
                                                $(".fangcha").html("(含房差<dfn>￥</dfn>" + fangchaTotalStr + ")");
                                                $(".fangcha").show();
                                            }

                                            $(".lvmama-price-flag").each(function() {
                                                var select_value = $(this).attr("data-price-" + $(this).val());
                                                if (select_value == null) {
                                                    select_value = 0;
                                                }
                                                if (select_value == 0) {
                                                    var _this = $(this);
                                                    if (_this.hasClass("exp_date_flag")) {
                                                        select_value = $(this).data("price-" + _this.text().substring(4, 14))
                                                    }
                                                }

                                                price += parseInt(select_value);
                                            });
                                            if (price % 100 == 0) {
                                                $("#total-price-value").text(price / 100);
                                            } else {
                                                $("#total-price-value").text((price / 100).toFixed(2));
                                            }
                                            setDonationForChangeGoods($("#total-price-value").text());
                                            $(".total-price-symbol").show();
                                        }

                                        //处理买赠信息
                                        function setDonationForChangeGoods(price) {
                                            var donation = 'com.lvmama.vst.comm.vo.order.BuyPresentActivityInfo@5b9dac14';
                                            if (null != donation && "" != donation) {
                                                var donationPrice = parseInt('-1');
                                                var donationCount = parseInt('-1');
                                                var donationType = parseInt('0');
                                                var isLimitCount = parseInt('1');
                                                var userHasCount = parseInt('-1');
                                                if (userHasCount != -1 && isLimitCount != -1 && userHasCount >= isLimitCount) {//如果用已经购买数量超过最大赠送数
                                                    $(".product-item-checked-icon").hide();
                                                    $("#donationInfo").hide();
                                                    $("#donation-detail").attr("class", "order_dlNo");
                                                    $("#max-donations").attr("class", "zp-tipsMax");
                                                } else if (donationType == 0) {
                                                    $("#donationInfo").hide();
                                                } else if (donationType == 1 && donationPrice != -1) {//赠品按金额才送
                                                    if (price >= donationPrice) {
                                                        $("#donationInfo").hide();
                                                        $(".product-item-checked-icon").show();
                                                        $("#donation-detail").attr("class", "order_zp");
                                                    } else {
                                                        $(".product-item-checked-icon").hide();
                                                        $("#donationInfo").show();
                                                        $("#donation-detail").attr("class", "order_dlNo");
                                                        $("#donateQuantity").text(donationPrice + "元");
                                                        var restQuantity = (donationPrice * 100 - price * 100) / 100;
                                                        $("#restDonateQuantity").text(restQuantity + "元");
                                                    }
                                                } else if (donationType == 2) {//赠品按数量才送
                                                    //alert(donationType);
                                                    var quantityFlag = $("#preorder-quantity").attr("data-hidden");
                                                    if ("N" == quantityFlag) {//线路产品按份的时候
                                                        var quantity = parseInt($("#preorder-quantity").val());
                                                        if (donationCount != -1 && quantity >= donationCount) {//购买数量足够获取赠品
                                                            $("#donationInfo").hide();
                                                            $(".product-item-checked-icon").show();
                                                            $("#donation-detail").attr("class", "order_zp");
                                                        } else if (donationCount != -1) {//购买数量不足以获取赠品
                                                            $(".product-item-checked-icon").hide();
                                                            $("#donationInfo").show();
                                                            $("#donation-detail").attr("class", "order_dlNo");
                                                            $("#donateQuantity").text(donationCount + "份");
                                                            var restQuantity = donationCount - quantity;
                                                            $("#restDonateQuantity").text(restQuantity + "份");
                                                        }

                                                    } else {//线路产品按人售卖
                                                        var childQuantity = parseInt($("#children-count").val());
                                                        var adultQuantity = parseInt($("#adult-count").val());
                                                        var totalQuantity = childQuantity + adultQuantity;
                                                        if (donationCount != -1 && totalQuantity >= donationCount) {//购买数量足够获取赠品
                                                            $("#donationInfo").hide();
                                                            $(".product-item-checked-icon").show();
                                                            $("#donation-detail").attr("class", "order_zp");
                                                        } else if (donationCount != -1) {//购买数量不足以获取赠品
                                                            $(".product-item-checked-icon").hide();
                                                            $("#donationInfo").show();
                                                            $("#donation-detail").attr("class", "order_dlNo");
                                                            $("#donateQuantity").text(donationCount + "份");
                                                            var restQuantity = donationCount - totalQuantity;
                                                            $("#restDonateQuantity").text(restQuantity + "份");
                                                        }
                                                    }

                                                }


                                            }
                                        }


                                        //完善房差的div内容
                                        function fillTheFangChaDiv() {
                                            //生成合并后的总的房差单价以及合并后的最小份数
                                            var minQuantity = 0;
                                            var maxQuantity = 0;
                                            var fangchaTotal = 0;
                                            $(".lvmama-fangcha-price").each(function() {
                                                fangchaTotal += parseInt($(this).attr("data-fangcha"));
                                                //得到每一条房差的最小的份数,这个最小的份数只能为0和1
                                                var minQuantityTemple = parseInt($(this).attr("data-quantity"));
                                                if (typeof (parseInt($(this).attr("data-quantity-max"))) != "undefined") {
                                                    window.lineDetail.fangchaQuantityMax = parseInt($(this).attr("data-quantity-max"));
                                                }
                                                if (minQuantityTemple > 0) {
                                                    minQuantity = 1;
                                                }
                                            });
                                            maxQuantity = window.lineDetail.fangchaQuantityMax;
                                            //开始填充房差div上的份数和总的单价
                                            //开始生成份数的select的option
                                            //先获得选中的value和text以便重新生成以后恢复选中的值
                                            if (fangchaTotal != 0) {
                                                $("#fangchaDiv").parents(".adjust-item").css("display", "block");
                                                $("#fangchaDiv").parents("#adjust-optional-addition").css("display", "block");
                                                $("#fangchaDiv").css("display", "block");
                                                var selectedValue = $(".fangcha-quantity").val();
                                                var selectedText = $(".fangcha-quantity").find("option:selected").text();
                                                $(".fangcha-quantity").empty();
                                                var type = 'INNERLONGLINE';
                                                if (type == "INNERLINE" || type == "INNERSHORTLINE" || type == "INNERLONGLINE") {
                                                    var adultCount = $("#adult-count").val();
                                                    var arr = new Array();
                                                    if (adultCount % 2 == 0) {
                                                        for (var i = 0; i <= adultCount; i++) {
                                                            if (i % 2 == 0) {
                                                                arr.push(i);
                                                            }
                                                        }
                                                    } else {
                                                        for (var i = 0; i <= adultCount; i++) {
                                                            if (i % 2 != 0) {
                                                                arr.push(i);
                                                            }
                                                        }
                                                    }
                                                    for (var i = 0; i < arr.length; i++) {
                                                        //console.info(arr[i]+"....");
                                                        if (arr[i] == parseInt(selectedValue)) {
                                                            $(".fangcha-quantity").append("<option selected=\"selected\" value=\"" + arr[i] + "\">" + arr[i] + "</option>");
                                                        } else {
                                                            $(".fangcha-quantity").append("<option value=\"" + arr[i] + "\">" + arr[i] + "</option>");
                                                        }
                                                    }
                                                } else {
                                                    for (var i = minQuantity; i <= maxQuantity; i++) {
                                                        if (i == parseInt(selectedValue)) {
                                                            $(".fangcha-quantity").append("<option selected=\"selected\" value=\"" + i + "\">" + i + "</option>");
                                                        } else {
                                                            $(".fangcha-quantity").append("<option value=\"" + i + "\">" + i + "</option>");
                                                        }
                                                    }
                                                }
                                                //如果选择的份数不为0，那么加一个绿色的勾
                                                if (parseInt(selectedValue) > 0) {
                                                    $("#fangchaDiv").find(".optional-item-status").empty();
                                                    $("#fangchaDiv").find(".optional-item-status").append("<i class=\"product-item-checked-icon\"></i>");
                                                } else {
                                                    $("#fangchaDiv").find(".optional-item-status").empty();
                                                }
                                                //设置总的单价
                                                if (fangchaTotal % 100 == 0) {
                                                    $(".singlePrice-fangcha").text("￥" + fangchaTotal / 100);
                                                } else {
                                                    $(".singlePrice-fangcha").text("￥" + (fangchaTotal / 100).toFixed(2));
                                                }

                                                //保存总的单价,在计算份数乘以总单价的时候用
                                                $(".singlePrice-fangcha").attr("data-singlePrice", fangchaTotal);
                                            } else {
                                                //是不是有附加的
                                                var object1 = $("#fangchaDiv").next();
                                                //是不是有保险的
                                                var object2 = $("#fangchaDiv").parents(".adjust-item").find(".insurance-detail-item");
                                                //如果没有附加也没有保险，那么可选服务这个模块隐藏
                                                if (object1.length == 0 && object2.length == 0) {
                                                    $("#fangchaDiv").parents(".adjust-item").css("display", "none");
                                                    //如果只是没有附加的，有保险的，只关闭附加的
                                                } else if (object1.length == 0) {
                                                    $("#fangchaDiv").parents("#adjust-optional-addition").css("display", "none");
                                                } else {
                                                    $("#fangchaDiv").css("display", "none");
                                                }
                                                //把选择的份数设置为0，避免后边隐藏后还计算
                                                if ($(".fangcha-quantity").length > 0) {
                                                    $(".fangcha-quantity").empty();
                                                    $(".fangcha-quantity").append("<option selected=\"selected\" value=\"0\">0</option>");
                                                }
                                            }
                                        }
<!--统计点击驴友点评访问量-->
                                        $("[data-flag='product-customer-review']").bind("click", function() {
                                            cmCreateElementTag("跟团游_驴友点评", "驴友点评点击");
                                        });
<!--统计点击相关游记访问量-->
                                        $("[data-flag='product-customer-trip']").bind("click", function() {
                                            cmCreateElementTag("跟团游_相关游记", "相关游记点击");
                                        });
<!--点评部分-->
                                        $("#allCmt").bind("click", function() {
                                            var count = $("#allCmtComment").find(".comment-li").length;
                                            if (count <= 0) {
                                                Comment.newLoadPaginationOfComment({type: "all", currentPage: 1, totalCount: 117, productId: '636542', isPOI: "Y", isELong: "N"});
                                            }
                                        });

                                        $("#bestCmt").bind("click", function() {
                                            var count = $("#bestCmtComment").find(".comment-li").length;
                                            if (count <= 0) {
                                                Comment.newLoadPaginationOfComment({type: "best", currentPage: 1, totalCount: 28, productId: '636542', isBest: "Y", isPOI: "Y", isELong: "N"});
                                            }
                                        });
                                        $(".optional-local-select-date").live("change", function() {
                                            var adultPrice = $(this).val();
                                            var childPriceStr = $(this).find("option:selected").attr("childprice");
                                            var gapPriceStr = $(this).find("option:selected").attr("gapprice");
                                            var childPrice = 0;
                                            var gapPrice = 0;
                                            var slectGoods = $(this).data("productid-suppgoodsid");
                                            $(".params-addition-" + slectGoods).attr("data-visitTime", $(this).find("option:selected").html());
                                            if (adultPrice % 100 == 0) {
                                                $(".adultPrice-" + slectGoods).text("￥" + (adultPrice / 100).toFixed(0));
                                            } else {
                                                $(".adultPrice-" + slectGoods).text("￥" + (adultPrice / 100).toFixed(2));
                                            }

                                            if (childPriceStr != "") {
                                                childPrice = parseInt(childPriceStr);
                                                if (childPrice > 0) {
                                                    $(".childPrice-" + slectGoods).parents(".adjust-product-item").show();
                                                    if (childPrice % 100 == 0) {
                                                        $(".childPrice-" + slectGoods).text("￥" + (childPrice / 100).toFixed(0));
                                                    } else {
                                                        $(".childPrice-" + slectGoods).text("￥" + (childPrice / 100).toFixed(2));
                                                    }

                                                } else {
                                                    $(".childPrice-" + slectGoods).parents(".adjust-product-item").hide();
                                                    $(".child-" + slectGoods).val(0);
                                                }

                                            }

                                            if (gapPriceStr != "") {
                                                gapPrice = parseInt(gapPriceStr);
                                                if (gapPrice > 0) {
                                                    $(".gapPrice-" + slectGoods).parents(".adjust-product-item").show();
                                                    if (childPrice % 100 == 0) {
                                                        $(".gapPrice-" + slectGoods).text("￥" + (gapPrice / 100).toFixed(0));
                                                    } else {
                                                        $(".gapPrice-" + slectGoods).text("￥" + (gapPrice / 100).toFixed(2));
                                                    }
                                                } else {
                                                    $(".gap-" + slectGoods).val(0);
                                                    $(".gapPrice-" + slectGoods).parents(".adjust-product-item").hide();
                                                }

                                            }

                                            if (gapPrice % 100 == 0) {
                                                $(".gapPrice-" + slectGoods).text("￥" + (gapPrice / 100).toFixed(0));
                                            } else {
                                                $(".gapPrice-" + slectGoods).text("￥" + (gapPrice / 100).toFixed(2));
                                            }



                                            //再算一次价格
                                            $(".lvmama-price-flag").each(function(e) {
                                                dealtotalMoney(this);
                                            });

                                        });
                                        $("#picCmt").bind("click", function() {
                                            var count = $("#picCmtComment").find(".comment-li").length;
                                            if (count <= 0) {
                                                Comment.newLoadPaginationOfComment({type: "pic", currentPage: 1, totalCount: 68, productId: '636542', isPicture: "Y", isPOI: "Y", isELong: "N"});
                                            }
                                        });

                                        /**
                                         *相关点评翻页
                                         * @param type          点评类别
                                         * @param currentPage   当前页
                                         * @param totalCount    总数
                                         * @param placeId       POI
                                         * @param productId     产品ID
                                         * @param placeIdType   POI类型
                                         * @param isPicture     晒图
                                         * @param isBest        精华
                                         * @param isPOI         是不是POI
                                         * @param isELong       是不是艺龙点评
                                         * @param productRef    相关点评产品id串,逗号分隔
                                         * @param vstType       产品品类
                                         * @param isRef         相关点评类型
                                         */
                                        function newLoadPaginationOfCommentRef(type, currentPage, totalCount, placeId, productId, placeIdType, isPicture, isBest, isPOI, isELong, productRef, vstType, isRef) {
                                            $.ajax({
                                                url: "/comment/newPaginationOfComments",
                                                type: "post",
                                                data: {
                                                    currentPage: currentPage,
                                                    totalCount: totalCount,
                                                    type: type,
                                                    placeId: placeId,
                                                    productId: productId,
                                                    placeIdType: placeIdType,
                                                    isPicture: isPicture,
                                                    isBest: isBest,
                                                    isPOI: isPOI,
                                                    isELong: isELong,
                                                    productRef: productRef,
                                                    vstType: vstType,
                                                    isRef: isRef

                                                },
                                                dataType: 'html',
                                                success: function(data) {
                                                    $("#" + type + "CmtComment").html(data);
                                                    $(window).scrollTop($('#product-customer-review').offset().top);
                                                }
                                            });
                                        }

                                        function longinCallback() {
                                            var btn = publicCallBack.btn;
                                            //大按钮
                                            if (btn.hasClass('nlogin')) {
                                                window.location.href = "http://www.lvmama.com/myspace/share/comment.do";
                                            }
                                            //回复按钮
                                            if (btn.hasClass('com-answer-submit')) {
                                                var cid = btn.attr('data-cid'),
                                                        replySize = btn.attr('data-reply'),
                                                        input = btn.next('.com-answerinput'),
                                                        val = input.val();
                                                try {
                                                    val = val.replace(/^\s+|\s+$/g, ""); //去除首尾空格
                                                    val = val.replace(/\s+/g, '&nbsp;'); // 空格 转成 &nbsp;
                                                } catch (d) {
                                                }
                                                Comment.newReply(cid, replySize, val, btn);
                                            }
                                        }

                                        function refreshPackageHotelGapPrice(buttonDiv, currentSuppGoodsId) {
                                            //首先取到已选商品的价格
                                            var selectPrice = $(buttonDiv).attr("data-price");
                                            //已选商品隐藏价格
                                            $(buttonDiv).find(".package-item-price").find(".price").text("");
                                            //取所有未选商品的价格
                                            $("#adjust-package").find(".package-item").each(function() {
                                                var goodsId = $(this).attr("data-currentsuppgoodsid");
                                                if (goodsId != currentSuppGoodsId) {
                                                    var doSelectPrice = $(this).attr("data-price");
                                                    var price = doSelectPrice - selectPrice;
                                                    if (price % 100 == 0) {
                                                        price = (price / 100).toFixed(0);
                                                    } else {
                                                        price = (price / 100).toFixed(2);
                                                    }
                                                    if (price > 0) {
                                                        price = "￥ +" + price;
                                                    } else if (price == 0) {
                                                        price = "--";
                                                    } else {
                                                        price = "￥ " + price;
                                                    }
                                                    $(this).find(".price").eq(0).text(price);
                                                }
                                            });
                                        }

                                        $(".tags").poptip();

                                        window["_BFD"] = window["_BFD"] || {};
                                        _BFD.BFD_INFO = {
                                            "type": "ROUTE",
                                            "sub_type": "category_route_group",
                                            "id": "636542",
                                            "name": "【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）",
                                            "link": "dujia.lvmama.com/group/636542",
                                            "image_link": "http://s1.lvjs.com.cn/uploads/pc/place2/2015-12-25/7ff4eb5e-323a-4d97-9ea9-4c3fca29e798_300_200.jpg",
                                            "simage_link": "http://s2.lvjs.com.cn/uploads/pc/place2/2015-12-25/7ff4eb5e-323a-4d97-9ea9-4c3fca29e798_180_120.jpg",
                                            "price": "2850.0",
                                            "from_city": "上海",
                                            "production_place": "",
                                            "description": "",
                                            "onsale": "true",
                                            "tag": "送邮轮|开心驴行",
                                            "user_id": "",
                                            "page_type": "detail",
                                            "days_trip": "",
                                            "comments": "117",
                                            "goodcomments": "96.2%",
                                            "pcbonus": "0",
                                            "mobilebonus": "0",
                                            "subsite": "上海"
                                        };
                                        if (true) {
                                            loadProdAssociationRecommend(636542, 9, '上海');

                                        }
                                        //根据产品id去后台得到进入详情页时显示产品推荐调用得到目的地信息与推荐的产品
                                        function loadProdAssociationRecommend(productId, districtId, mainProductdistrictName) {
                                            var inData = {"productId": productId};
                                            if (districtId && typeof (districtId) != "undefined" && districtId != '') {
                                                inData.districtId = districtId
                                            }
                                            if (mainProductdistrictName && typeof (mainProductdistrictName) != "undefined" && mainProductdistrictName != '') {
                                                inData.mainProductdistrictName = mainProductdistrictName;
                                            }
                                            $.ajax({
                                                url: "http://dujia.lvmama.com/local/localAndOutBu/getProdAssociationRecommend.do", //local为nginx的跳转路径，会自动跳到/vst_front/route/下
                                                //url : "/vst_front/route/localAndOutBu/getProdAssociationRecommend.do",
                                                type: "post",
                                                data: inData,
                                                success: function(result) {
                                                    $("#product-recommend").append(result);
                                                    addLosc($("#product-recommend"), $(".product-content").attr("data_id"));
                                                }
                                            });
                                        }
                                        //losc 增加
                                        $(function() {
                                            addLosc($("#scenic_recommendation"), '054087');
                                        });
                                        var jsonArray = [{"address": "海棠湾镇林旺蜈支洲岛度假中心", "coordId": 15408, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.280485, "longitude": 109.734129, "objectId": 101548, "objectType": "BIZ_DEST", "searchKey": "蜈支洲岛"}, {"address": "保亭县三道农场", "coordId": 15405, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.449693, "longitude": 109.669856, "objectId": 105717, "objectType": "BIZ_DEST", "searchKey": "海南呀诺达欢乐雨林景区"}, {"address": "海南省保亭黎苗族自治县三道镇槟榔谷景区", "coordId": 15382, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.403638, "longitude": 109.667457, "objectId": 107516, "objectType": "BIZ_DEST", "searchKey": "三道镇槟榔谷风景区"}, {"address": "天涯镇马岭山麓", "coordId": 15074, "coordType": "BAIDU", "destType": "VIEWSPOT", "latitude": 18.296405, "longitude": 109.360927, "objectId": 100489, "objectType": "BIZ_DEST", "searchKey": "天涯海角风景区"}, {"address": "海南省三亚市崖城镇南山村", "coordId": 22719, "coordType": "BAIDU", "destType": "SCENIC", "latitude": 18.312018, "longitude": 109.219449, "objectId": 174728, "objectType": "BIZ_DEST", "searchKey": "南山文化旅游区"}, {"address": "三亚市", "coordId": 40561, "coordType": "BAIDU", "destType": "CITY", "latitude": 18.257776, "longitude": 109.522771, "objectId": 272, "objectType": "BIZ_DEST", "searchKey": "三亚 三亚"}];
                                        if (jsonArray == null || jsonArray == undefined || jsonArray.length < 1) {
                                            $("#line-baidu-map").css("display", "none");
                                        } else {
                                            lvmap({
                                                type: jsonArray[0].coordType.toLowerCase(), //地图类型,支持google, baidu. 默认google
                                                marker: true, //是否显示地图标记. 默认不显示
                                                coordinate: {lng: jsonArray[0].longitude, lat: jsonArray[0].latitude}, //地图中心点的经度(lng)和纬度(lat)
                                                zoom: 15, //缩放等级. 默认15,即街道级别. 数值越大,可视区域越小,地标显示越清晰
                                                containerID: "line-baidu-map", //地图容器的ID
                                                markerTips: {title: jsonArray[0].searchKey, content: jsonArray[0].address, maxWidth: 150, maxHeight: 100}
                                                //地图标记信息: marker为true且content有值时显示. 默认不显示. 支持自定义提示框宽高.
                                            });
                                        }
                                    </script><script src="getscript_001.dat"></script>

                                    <!-- Footer文件结束 -->
                                    <script src="index_008.php"></script>
                                    <script>_LVMAMA_COREMETRICS.init(document.domain);</script>

                                    <script src="/home/js/pandora-calendar.js"></script>
                                    <script src="/home/js/pandora-poptip.js"></script>

                                    <script src="/home/js/secenicDialog.js"></script>
                                    <!--酒店和景点弹窗代码-->

                                    <!-- 景点酒店弹窗 -->
                                    <div class="yin-dialog-overlay"></div>
                                    <div class="yin-dialog">
                                        <a hidefocus="false" href="javascript:;" class="ph_icon ph_icon ph_icon_close_dialog pa"></a>
                                        <div class="yin-dialog-basic">
                                            <div class="yin-dialog-slider">
                                                <ul class="slider-pic-box">
                                                    <li>
                                                        <img src="/home/img/img_480_320.png" alt="" height="308" width="460">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="yin-dialog-comments">
                                            <p class="yin-dialog-comments-title">驴友点评</p>
                                            <ul class="yin-dialog-comments-content">           
                                                <li>暂无点评</li>
                                            </ul>
                                        </div>
                                        <p class="yin-dialog-loading-content">驴妈妈拼命加载中，请稍候...</p>
                                    </div>





                                    <!--出行日期异步加载 -->
                                    <script>
                                        $(function() {
                                            //同步加载出行日期
                                            var params = {
                                                productId: 636542,
                                                startDistrictId: -1
                                            };
                                            var dateArr = new Array(); // 记录时间价格的日期
                                            var datePos = 0; // 时间价格日期的数组坐标位
                                            var monthMos = 1;
                                            //出境跟团游 用新的日历控件
                                            if ($("#bizCategoryHiddenInput").val() == "15" && $("#isShowOutBuByProTypeHiddenInput").val() == "true") {
                                                //获取有团期 价格的数据
                                                $.getJSON('http://dujia.lvmama.com/package/travelDateList.json', params, function(response) {
                                                    //$.getJSON('/vst_front/route/travelDateList.json', params, function(response) {
                                                    var startMonth = 0;
                                                    var endMonth = 0;
                                                    var i = 0;
                                                    response.forEach(function(data) {
                                                        //日期格式处理  yyyy-MM-dd
                                                        var monthD = (data.specDate.month + 1) + "";
                                                        if (i == 0) {
                                                            startMonth = Number(monthD);
                                                        }
                                                        if (i == (response.length - 1)) {
                                                            endMonth = Number(monthD);
                                                        }

                                                        var dayD = data.specDate.date + "";
                                                        if (monthD.length == 1) {
                                                            monthD = "0" + monthD;
                                                        }
                                                        if (dayD.length == 1) {
                                                            dayD = "0" + dayD;
                                                        }
                                                        var specD = (data.specDate.year + 1900) + "-" + monthD + "-" + dayD;

                                                        if (data.lowestSaledPrice != null && data.lowestSaledPrice >= 0) {
                                                            dateArr[datePos] = specD;
                                                            datePos++;
                                                        }
                                                        i++;
                                                    });
                                                    monthMos = endMonth - startMonth;
                                                    monthMos = monthMos > 0 ? monthMos : 1;
                                                    if (dateArr.length > 0) {
                                                        loadCalendar(monthMos, dateArr, datePos);//初始化日历
                                                    }
                                                });

                                                //点击开始预订 弹出日历框
                                                $("#preorder-confirm-button").bind("click", function(e) {
                                                    if ($("#preorder-start-time").val() == "") {
                                                        $(".JS_calendar").trigger('click');
                                                    }
                                                });

                                            } else {
                                                $.getJSON('http://dujia.lvmama.com/package/travelDateList.json', params, function(response) {
                                                    //$.getJSON('/vst_front/route/travelDateList.json', params, function(response) {
                                                    response.forEach(function(data) {
                                                        //日期格式处理  yyyy-MM-dd
                                                        var monthD = (data.specDate.month + 1) + "";
                                                        var dayD = data.specDate.date + "";
                                                        if (monthD.length == 1) {
                                                            monthD = "0" + monthD;
                                                        }
                                                        if (dayD.length == 1) {
                                                            dayD = "0" + dayD;
                                                        }
                                                        var specD = (data.specDate.year + 1900) + "-" + monthD + "-" + dayD;

                                                        var spec = (data.specDate.month + 1) + "-" + data.specDate.date;
                                                        if (data.stampFlag != '1' && data.stampFlag != '2') {
                                                            if (data.lowestSaledChildPrice != 0 && data.lowestSaledChildPrice != null) {
                                                                $("#product-preorder select[name='playtimeQuantity']").append("<option id='" + specD + "' value='" + specD + "'>" + spec + " (" + data.weekOfDate + ") 成人" + data.lowestSaledPrice / 100 + "元起/人  儿童" + data.lowestSaledChildPrice / 100 + "元起/人</option>");
                                                            } else {
                                                                $("#product-preorder select[name='playtimeQuantity']").append("<option id='" + specD + "' value='" + specD + "'>" + spec + " (" + data.weekOfDate + ") 成人" + data.lowestSaledPrice / 100 + "元起/人</option>");
                                                            }
                                                        }
                                                    });
                                                    pandora.selectModel({'autoWidth': false, 'selectElement': $('#playtime')});
                                                });

                                            }




                                        });

                                        //加载日历
                                        function loadCalendar(monthMos, dateArr, datePos) {
                                            var dateStr = dateArr[0];
                                            var startTime = new Date(dateStr.replace(/-/ig, '/'));
                                            //日历控件
                                            pandora.calendar({
                                                date: startTime,
                                                trigger: ".JS_calendar",
                                                //date:showStartMonth,
                                                cascade: {
                                                    days: 1,
                                                    trigger: ".JS_calendar"
                                                },
                                                mos: monthMos,
                                                isTodayClick: true,
                                                template: "small",
                                                selectDateCallback: selectDateCallback,
                                                sourceFn: function() {
                                                    // 处理没有时间价格的日期
                                                    var tdElement = $(".ui-calendar-mini .caltable").find("td");
                                                    $(tdElement).each(function(t, v) {
                                                        var date = $(v).attr("date-map");
                                                        var isNodate = true;
                                                        for (var i = 0; i < datePos; i++) {
                                                            if (dateArr[i] == date) {
                                                                isNodate = false;
                                                                break;
                                                            }
                                                        }
                                                        if (isNodate) {
                                                            $(v).find("div:eq(0)").addClass("nodate");
                                                        }
                                                    });

                                                }
                                            });
                                        }


                                        //选中日期后的操作
                                        function selectDateCallback(cal) {
                                            $(cal.warp).bind("click", function(e) {
                                                e = e || window.event;
                                                if (e.stopPropagation) {
                                                    e.stopPropagation();
                                                } else
                                                    e.cancelBubble = true;
                                            });
                                            var date = $(cal.options.trigger).eq(0).val();
                                            //显示选中日期
                                            $('.JS_calendar .select-value').html(date);
                                            //设置时间
                                            $("#preorder-start-time").val(date);
                                            $("#preorder-confirm-button").text("立即预订");
                                            showAdjust(date);
                                        }

                                        //选中日期后展开价格服务等详细信息
                                        function showAdjust(date) {
                                            var selectDate;
                                            var startTime = $("#preorder-start-time").val();
                                            if ($("#bizCategoryHiddenInput").val() == "15" && $("#isShowOutBuByProTypeHiddenInput").val() == "true") {
                                                $('.ui-calendar.ui-calendar-mini').remove();
                                            } else {
                                                //出行日期
                                                var opts = document.getElementById("playtime");
                                                var selectlinkid = $("#playtime").attr("selectlinkid");
                                                for (var i = 0; i < opts.options.length; i++) {
                                                    if (date == opts.options[i].value) {
                                                        $("#selectbox_" + selectlinkid + ">p>.select-value").html($("#" + opts.options[i].value).html());
                                                        break;
                                                    }
                                                }
                                            }
                                            if (date === undefined) {
                                                if (startTime) {
                                                    selectDate = startTime;
                                                } else {
                                                    //什么都没有，返回
                                                    return;
                                                }
                                            } else {
                                                $("#preorder-start-time").val("" + date);
                                                if ($("#bizCategoryHiddenInput").val() == "15" && $("#isShowOutBuByProTypeHiddenInput").val() == "true") {
                                                    $('.JS_calendar .select-value').html("" + date);
                                                }
                                                selectDate = date;
                                            }

                                            var preorderStartTime = $("#preorder-start-time").val();
                                            var adultQuantity = $(".adult-count").val();
                                            var childQuantity = $(".children-count").val();
                                            var quantity = $("#preorder-quantity").val();
                                            var $preorderConfirmButton = $("#preorder-confirm-button");
                                            var ajaxData = {
                                                selectDate1: selectDate,
                                                adultQuantity: adultQuantity,
                                                childQuantity: childQuantity,
                                                quantity: quantity,
                                                productId: window.lineDetail.productId,
                                                startDistrictId: window.lineDetail.startDistrictId
                                            };

                                            // 显示loading界面
                                            $("#preorder-adjust").html('<div class="loading-data-status"><img src="http://s1.lvjs.com.cn/img/new_v/ui_scrollLoading/loadingGIF46px.gif" alt="loading" /></div>');

                                            // 禁用掉预订按钮
                                            $preorderConfirmButton.attr("data-disable", true);

                                            var loadingGoodsUrl = "localAndOutBu/loadingGoods";
                                            if ('N' == "Y") {
                                                //loadingGoodsUrl = "/route/localAndOutBu/loadingGoods";
                                            }
                                            $.ajax({
                                                url: loadingGoodsUrl,
                                                type: "get",
                                                contentType: 'application/json;charset=utf-8', //设置请求头信息
                                                data: ajaxData,
                                                success: function(data) {
                                                    // 按钮恢复正常
                                                    $preorderConfirmButton.removeAttr("data-disable");
                                                    $("#preorder-adjust").html(data);
                                                    if ($("<div>" + data + "</div>").find(".do-not-modify-me").size() == 0) {
                                                        $("#feeInclude").show();
                                                    } else {
                                                        $("#feeInclude").hide();
                                                    }
                                                    // 商品不可售
                                                    if (data.indexOf("do-not-modify-me") > -1) {
                                                        $preorderConfirmButton.html("开始预订");
                                                        $preorderConfirmButton.removeAttr("data-lock");
                                                        return;
                                                        // 商品可售
                                                    }
                                                    $preorderConfirmButton.attr("data-lock", true);
                                                    //window.lineDetail.javaCallback.checkSelectStatus();
                                                    //第一次加载算一次总价
                                                    $(".lvmama-price-flag").each(function(e) {
                                                        dealtotalMoney(this);
                                                    });
                                                }
                                            });

                                        }

                                    </script>
                                    <script type="text/javascript">
                                        var productUrlString = document.location.href;
                                        var productUrlArray = productUrlString.split("?");
                                        productUrlString = productUrlArray[0];
                                        var imgurl = "/home/img/7ff4eb5e-323a-4d97-9ea9-4c3fca29e798_300_200.jpg";//焦点图url
                                        var fullurl = 'http://s2.lvjs.com.cn/img/logo/lv_logo.png';
                                        if (imgurl != null && imgurl != "") {
                                            var photoLen = imgurl.length - 4;
                                            var phototype = imgurl.substring(photoLen, photoLen + 4);//图片类型
                                            var prhotourl = imgurl.substring(0, photoLen);
                                            fullurl = "http://s3.lvjs.com.cn" + prhotourl + "_480_320" + phototype;//带尺寸完整url
                                        }


                                        var _goodsData = {
                                            id: '636542', //产品ID（必填）
                                            soldOut: '0', // 状态: 1下架，0在售（必填）
                                            category: '国内游事业部' + '_' + '跟团游', // 品类（必填）：国内_自由行，出境_wifi   productType_categoryName，门票品类写死为“门票” 
                                            categoryId: '0', // 写死'0' （必填）
                                            name: '【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）', // 产品名称（必填）
                                            price: '2850', // 产品售价（必填）
                                            imgUrl: fullurl, // 产品预览图URL （必填）
                                            productUrl: productUrlString, // 产品URL地址 （必填）
                                            currency: 'CNY'
                                        };
                                        var _py = _py || [];
                                        _py.push(['a', 'Rds..gqSOetWjQRf0t9OP9jSHx0']);
                                        _py.push(['domain', 'stats.ipinyou.com']);
                                        _py.push(['pi', _goodsData]);
                                        _py.push(['e', '']);
                                        -function(d) {
                                            var s = d.createElement('script'),
                                                    e = d.body.getElementsByTagName('script')[0];
                                            e.parentNode.insertBefore(s, e),
                                                    f = 'https:' == location.protocol;
                                            s.src = (f ? 'https' : 'http') + '://' + (f ? 'fm.ipinyou.com' : 'fm.p0y.cn') + '/j/adv.js';
                                        }(document);
                                    </script>
                                    <noscript><img src="/home/img/adv.gif?a=Rds..gqSOetWjQRf0t9OP9jSHx0&e=" style="display:none;"/></noscript>
                                    <script type="text/javascript">
                                        var productUrlString = document.location.href;
                                        var productUrlArray = productUrlString.split("?");
                                        productUrlString = productUrlArray[0];
                                        var _mvq = window._mvq || [];
                                        window._mvq = _mvq;
                                        _mvq.push(['$setAccount', 'm-193368-0']);
                                        _mvq.push(['$setGeneral', 'goodsdetail', '', '', '']);
                                        _mvq.push(['$logConversion']);
                                        _mvq.push(['setPageUrl', productUrlString]);
                                        _mvq.push(['$addGoods', '', '', '【开心驴行】三亚纯玩0购双飞5日游（4晚连住三亚希尔顿欢朋酒店，畅玩蜈支洲岛一整天）', '636542', '2850', fullurl, '', '', '1', '', '', '', '国内游事业部' + '_' + '跟团游', '', '']);
                                        _mvq.push(['$addPricing', '']);
                                        _mvq.push(['$logData']);
                                    </script>


                                    <a hidefocus="false" id="sideInve" target="_blank" href="http://wj.qq.com/survey.html?id=319107&amp;hash=bf06" title="有奖问卷"></a><a class="" style="visibility: hidden;" hidefocus="false" id="goTopBtn" target="_self" href="javascript:;" title="返回顶部"></a><a class="" style="visibility: hidden;" hidefocus="false" href="http://www.lvmama.com/userCenter/user/transItfeedBack.do" target="_blank" id="Feedback" title="意见反馈"></a><div class="complete_box" style="display: none;"><ul class="complete_list"></ul></div><div class="complete_box_hotel hotelDestBox" style="display: none;"></div><div class="complete_box_hotel hotelKeywordBox" style="display: none;"></div><div class="complete_error_tips" style="display: none;"><span>找不到目的地：</span><span class="word"></span><i>×</i></div><div id="rapidLoginDialog" class="pop_loginner" style="display: none;">     <div class="contLogin" style="padding: 0px 10px;">      <div class="contLeft">               <div class="titleUser">非会员快速预订</div>             <p class="quick-area quick-mob">              <span class="inputName">手机号：</span><span class="inputValue"><input name="mobileLoginText" id="mobileLoginText" onblur="mobileRegisterOnBlur('mobileLoginText', 'mobileLoinTextSuccessTip', 'mobileLoinTextErrorTip')" type="text"><span id="mobileLoinTextSuccessTip"></span>                                           </span>                            </p>          <p class="quick-area quick-yzm">              <span class="inputName">手机验证码：</span><span class="inputValue"><input name="mobileLoginYzm" id="mobileLoginYzm" onblur="" type="text"><span id="mobileLoinTextSuccessTip"></span><span class="getYzm_btn" onclick="getYzm()">发送验证码</span>                                           </span><span id="mobileLoinTextErrorTip"></span>                            </p>          <p>                           <span class="inputName">&nbsp;</span><span class="inputValue"><a class="quickBuy" onclick="rapidRegister()" href="javascript:void(0)"><img src="/home/img/quickBuy.gif" alt="快速预订" style="cursor: pointer;">                      </a>                                          </span>                         </p>                         <p>                            <span class="inputValue"><em class="contTsInfo">我们会将您注册为驴妈妈会员，手机号为您的用户名，密码将通过免费短信发送到您手机。</em>                 </span>              </p>             </div>            <div class="contRight">               <div class="titleUser">会员登录后预订</div>            <p class="mb-10">                                    <span class="inputName">账户：</span><span class="inputValue"><input name="mobileOrEMail" id="sso_mobileAndEmail" value="" type="text">                 </span>                                                                             </p>                         <p class="mb-10">                   <span class="inputName">密码：</span><span class="inputValue"><input name="password" id="sso_password" type="password">                        </span>                                                                  </p>                               <p>                                 <span class="inputName">验证码：</span><span class="inputValue"><input style="width: 80px; margin-right: 5px;" name="verifycode" id="xhsso_verifycode1" type="text"><img id="image" src="/home/other/checkcode.htm"> <a href="#" class="link_blue" onclick="refreshCheckCode('image');
                                            return false;">换一张</a>                   </span>                   </p>                    <p id="loinTextErrorTip"></p>             <p>                                         <span class="inputName">&nbsp;</span><span class="inputValue"><a class="quickBuy" href="javascript:void(0)" onclick="login()"><img src="/home/img/LoginAndBuy.gif" alt="登录，继续订购" onclick="login()" style="cursor: pointer;">               </a><a class="findPass" href="http://login.lvmama.com/nsso/findpass/index.do" target="_blank">忘记密码？</a>                                 </span>                </p>                                  <div class="weiboLogin">               <div class="weiboH1">                     还不是驴妈妈会员？<a class="freeUser" href="http://login.lvmama.com/nsso/register/registering.do" target="_blank">免费注册</a>                    </div>                                                             <div class="weiboBtn">                   <p>                                         <label class="login_lbl">使用合作网站帐号登录</label> <a class="weiboBtnA login_conQQ" href="http://login.lvmama.com/nsso/cooperation/tencentQQUnionLogin.do?isRefresh=false" target="_unionlogin" onclick="tipsWindow('tipsWindow', 'bgColor');">QQ</a> <a class="weiboBtnA login_conBD" href="http://login.lvmama.com/nsso/cooperation/baiduTuanUnionLogin.do?isRefresh=false" target="_unionlogin" onclick="tipsWindow('tipsWindow', 'bgColor');"> 百度</a>  <a class="weiboBtnA login_con360" href="http://login.lvmama.com/nsso/cooperation/qiHooUnionLogin.do?isRefresh=false" target="_unionlogin" onclick="tipsWindow('tipsWindow', 'bgColor');"> 360</a>                   </p>                             <a class="weiboBtnA login_conSN" href="http://login.lvmama.com/nsso/cooperation/sinaUnionLogin.do?isRefresh=false" target="_unionlogin" onclick="tipsWindow('tipsWindow', 'bgColor');">新浪微博</a>                                               <a class="weiboBtnA login_conALP" href="http://login.lvmama.com/nsso/cooperation/alipayUnionLogin.do?isRefresh=false" target="_unionlogin" onclick="tipsWindow('tipsWindow', 'bgColor');">支付宝</a>                       <a class="weiboBtnA login_conKX" href="http://www.kaixin001.com/login/connect.php?appkey=85704812783077bafc036569af59c655&amp;re=/nsso/cooperation/kaixinUnionLogin.do&amp;t=25" target="_blank" style="padding-left: 22px;">开心网</a>              </div>               </div>          </div>      </div>     </div>     <!--inner-->         <div id="tipsWindow_n">     <p>                         <img src="/home/img/warning.gif">&nbsp;请在联合登录前不要关闭此窗口。完成登录后根据您好的情况点击下面的按钮：    </p>         <strong>请在新开网页上完成登录后再选择。</strong>    <div class="tbtn">                             <input name="completePayBtn" value="已完成登录" id="completePayBtn" onclick="completeLogin()" type="button"><input value="登录遇到问题" onclick="javascript:window.open('http://www.lvmama.com/public/reg_and_login')" type="button">     </div>     <a href="javascript:void(0);" onclick="closeMsg();">返回重新选择登录方式</a>    </div>     <iframe src="/home/other/index_02.html" style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe></body>
                                    </html>
