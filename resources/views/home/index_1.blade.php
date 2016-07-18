<!DOCTYPE html>
<html>
<head><script src="adv.dat" async="" type="text/javascript"></script><script src="/home/other/presadv.dat" async="" type="text/javascript"></script><script src="/home/js/a.js" async="" type="text/javascript"></script><script src="/home/js/v.js" charset="utf-8"></script><script src="/home/js/mv.js" async="" type="text/javascript"></script><script src="/home/js/mba.js" async="" type="text/javascript"></script><script src="/home/js/s.js" async="" type="text/javascript"></script><script src="/home/js/push.js"></script><script src="/home/js/fx.js" async="" type="text/javascript"></script><script src="/home/js/mvl.js" async="" type="text/javascript"></script><script src="/home/js/hm.js"></script><script src="/home/js/ga.js" async="" type="text/javascript"></script>
<meta charset="UTF-8">
<meta name="mobile-agent" content="format=html5; url=http://m.lvmama.com/">
<link rel="dns-prefetch" href="http://s1.lvjs.com.cn/">
<link rel="dns-prefetch" href="http://s2.lvjs.com.cn/">
<link rel="dns-prefetch" href="http://s3.lvjs.com.cn/">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

<meta property="qc:admins" content="276353266764651516375">
<meta name="baidu_ssp_verify" content="408500f95bb55fbf53b1e73e2c4faee9">
@foreach ($config as $tmp)
<title>{{$tmp->webname}}</title>
<meta name="keywords" content="{{$tmp->keywords}}">
<meta name="description" content="驴妈妈旅游网-中国新型的B2C旅游电子商务网站，为旅游者提供景区门票、自由行、度假酒店、机票、国内游、出境游等一站式旅游服务，《自在游天下,就找驴妈妈!》
">
<script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/90409730.js" type="text/javascript" language="javascript"></script><script src="/home/js/dispatcher-v3.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="/home/js/bcore.min.js"></script><script type="text/javascript" src="/home/js/yahoo-min.js"></script><script type="text/javascript" src="/home/js/cp-v3.js"></script><script charset="utf-8" src="/home/other/StdID.do" id=""></script><script type="text/javascript" src="/home/js/json-min.js"></script><script charset="utf-8" src="/home/other/PageView.do"></script>
<link rel="stylesheet" type="text/css" href="/home/css/index.css" media="all">
<style>
            body{
                background:right;
            }
            #water li{
                list-style: none;
                float: left;
                margin-left: 30px;
            }
            #water li div{
                background: #fff;
                padding: 2px;
                margin: 2px;
            }
            img{
                border: 2px solid burlywood;
            }
        </style>
</head>
<!-- 首屏 banner 及导航 -->
<body class="home" allyes_city="BJ">
<div class="sytopBan"><ul class="sytopBan-ul"><li class=""><a href="http://lvmamim.qtmojo.com/c?d=lvmamim&amp;i=z400,15466307,11112,5018&amp;rf=http%3A%2F%2Fwww.lvmama.com%2F&amp;a=dPDVrqPXm23mw0BTeuy5xfhc4sWp&amp;url=http://www.lvmama.com/zt/promo/nanshen/" target="_blank"><img src="/home/img/dt-hynt.jpg" js_sc="http://lvmamim.qtmojo.com/main/s?d=lvmamim&amp;i=s400,15466307,11112,5018&amp;count=f&amp;rf=http%3A%2F%2Fwww.lvmama.com%2F&amp;a=dPDVrqPXm23mw0BTeuy5xfhc4sWp" to_trd="null" height="60" width="1200"></a></li><li class="active"><a href="http://lvmamim.qtmojo.com/c?d=lvmamim&amp;i=z540,15466776,14827,12934&amp;rf=http%3A%2F%2Fwww.lvmama.com%2F&amp;a=dPDVrqPXm23mw0BTeuy5xfhc4sWp&amp;url=http://www.lvmama.com/zt/promo/mpjd/" target="_blank"><img src="/home/img/dt-dsn.jpg" js_sc="http://lvmamim.qtmojo.com/main/s?d=lvmamim&amp;i=s540,15466776,14827,12934&amp;count=f&amp;rf=http%3A%2F%2Fwww.lvmama.com%2F&amp;a=dPDVrqPXm23mw0BTeuy5xfhc4sWp" to_trd="null" height="60" width="1200"></a></li></ul><div class="sytopBan-tab"><span class=""></span><span class="active"></span></div></div>   

@include("home.common.header");
@endforeach
 <script>
            var timer;  //用于优化滚动效果
            var imgWidth=300;
            //文档加载完毕后调用函数
            window.onload = function() {
                //获取总列数
                var num=cols();
                //调用生成ul的函数
                addul(num);
                //调用加载图片的函数
                loadPic();
            }
            //文档滚动
            window.onscroll = function() {
                //清除延迟
                clearTimeout(timer);
                //定时函数 延迟100ms
                timer = setTimeout(function() {
                    //获取三高  文档高度 窗口高度 滚动高度
                    //获取到窗口高度
                    var windowHeight = document.documentElement.clientHeight;
                    //获取滚动高度
                    var scrollHeight = document.documentElement.scrollTop || document.body.scrollTop;
                    //获取文档高度
                    var documentHeight = document.documentElement.scrollHeight;

                    //计算加截图片时滚动条的剩余高度，并调用加载图片的函数
                    if (documentHeight - scrollHeight - windowHeight < 200) {
                        loadPic();
                    }
                }, 100)
            }
            
            //窗口尺寸发生改变时 触发
            window.onresize=function(){
                //清除body内的内容
                //获取ul
                var ul=document.getElementById('water');
                document.body.removeChild(ul);
                //获取总列数
                var num=cols();
                //调用动态生成ul的函数
                addul(num);
                //调用加载图片的函数
                loadPic();
            }
            
            //计算总列数
            function cols(){
                //浏览器总宽度    舍去取整（窗口宽度/图片宽度）
                var windowWidth=document.documentElement.clientWidth-50;
                //总列数
                var num=Math.floor(windowWidth/(imgWidth+15));
                return num;
            }
            
            //动态的生成ul
            function addul(num) {
                var ul = document.createElement("ul");
                ul.id = "water";
                //通过for循环创建li
                for (var i = 0; i < num; i++) {
                    var li = document.createElement("li");
                    //将li放至ul中
                    ul.appendChild(li);
                    //将ul放入body中
                    document.body.appendChild(ul);
                }
            }

            function loadPic() {
                var ajax = new XMLHttpRequest();
                ajax.open("get", "/ajax/ajax.php", true);
                ajax.send();
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        var result = ajax.responseText;
//                        alert(result);
                        processResult(result);
                    }
                }
            }

            //处理结果
            function processResult(result) {
//                alert(result);
                //将结果转换为对象
                var obj = eval('(' + result + ')');
//                alert(obj.length);
                //遍历结果
                for (var i = 0; i < obj.length; i++) {
                    var imgName = obj[i];
                    //创建一个div对象
                    var div = document.createElement('div');
                    div.innerHTML = '<img src="/photo/' + imgName + '" width='+ imgWidth +' />';
                    //获取ul
                    var ul = document.getElementById("water");
                    var lis = ul.children;
//                    lis[0].appendChild(div);
//                        alert(lis.length);
                    var mask = -1;
                    for (var j = 0; j < lis.length; j++) {
                        //当前li的高度
                        var current = lis[j].offsetHeight;
//                        alert(current);
                        if (current < mask || mask == -1) {
                            mask = current;
//                            alert(mask);
                            var shortestli = lis[j];
                            shortestli.appendChild(div);
                        }
                    }
                }
            }
        </script>
    </body>
</html>

