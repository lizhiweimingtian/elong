/**
 *查询url中指定参数名的值
 *@parm item 参数的名字
 */
function QueryString(item){
     var sValue=location.search.match(new RegExp("[\?\&]"+item+"=([^\&]*)(\&?)","i"));
     return sValue?sValue[1]:sValue;
}

/**
 *获取Cookie的值
 *@parm objName Cookie的名字
 */
function getLOSCCookie(objName){   
	var arrStr = document.cookie.split("; "); 
	var temp;
	for(var i = 0,l=arrStr.length;i < l;i++){   
		if(objName=='uid'){
			temp = arrStr[i].replace('=',',').split(",");
		}else{
			temp=arrStr[i].split("=");  
		}
		if(temp[0] == objName) {
			return unescape(temp[1]);
		}
	}
	return '';
}

/**
 *写Cookie的值
 *@parm objName Cookie的名字
 *@parm objValue Cookie的值
 *@parm expire Cookie的有效天数
 */
function writeCookie(objName, objValue, expire) {
	//获取当前时间
	var now = new Date();
	//将date设置为30天以后的时间
	now.setDate(now.getDate() + expire);
	document.cookie = objName + "=" + escape (objValue) + ";path=/;domain=.lvmama.com;expires="+now.toGMTString();		
}
//载入一个JS脚本
function addScript(url,callback){
	var elt = document.createElement("script");
	elt.src = url;
	elt.anysc = true;
	if(elt.onload==null){
		elt.onload = function(){
			typeof callback=='function'&&callback();
		}
	}else{
		elt.onreadystatechange = function(){
			if(elt.readyState=="loaded" || elt.readyState=="complete"){
				typeof callback=='function'&&callback();
			}
		}
	}
	document.getElementsByTagName("head")[0].appendChild(elt);
}

/**
 * 获取LOSC所需要的日期格式(MMdd)
 */
function getLOSCDate(){
	var myDate = new Date();
	var month = myDate.getMonth() + "";
	if (month.length  == 1){
		month = "0" + month;
	}
	var day = myDate.getDate() + "";
	if (day.length == 1) {
		day = "0" + day;
	}
	return month + day;
}

/**
 * 判断传入的MMdd是否在有效的3个月之内
 */
function isValidLOSCDate(data) {
	var p1 = /^[0-9]{4}$/;
	if (!p1.test(data)) {
		return false;
	}
	var _month = parseInt(data.substr(0,2), 10);
	var _day = parseInt(data.substr(2,2), 10);
    
	var month = new Date().getMonth();
	var day = new Date().getDate();
    
	if (month - _month < 0) {
		month = month + 12;
	}   
	//alert("当前月份是" + month);
	//alert("获取月份是" + _month);

	if (month - _month >= 0 && month - _month < 3) {
		return true;
	}
	if (month - _month >= 4) {
		return false;
	}
	if (month - _month == 3) {
		return day - _day <= 0;
	}
	return false;
}

/**
 * 更新站内订单渠道
 * @param value 需要新增的站内渠道
 */
function updateOrderInnerChannel(value) {
	var p1 = /^[0-9]{6}$/;
	if (!p1.test(value)) {
		return;
	}
    
	//默认为站位渠道
	var channelType = "oUC";
	var timeType = "oUT";
	//当存在ict的参数时，则为内部渠道
	if (QueryString('ict') != undefined) {
		channelType = "oIC";
		timeType = "oIT";
	}

    var currentOrderInnerChannel = getLOSCCookie(channelType);
	var currentOrderChannelTime = getLOSCCookie(timeType);
   
	if (currentOrderInnerChannel == undefined) {
		currentOrderInnerChannel = value;
	} else {
		currentOrderInnerChannel = currentOrderInnerChannel + value;
	}

	if (currentOrderChannelTime == undefined) {
		currentOrderChannelTime = getLOSCDate();
	} else {
		currentOrderChannelTime = currentOrderChannelTime + getLOSCDate();
	}

	//当currentOrderInnerChannel的记录数与currentOrderChannelTime记录数不匹配时，进行牵制匹配
	for (var i = 0; i < currentOrderInnerChannel.length / 6 - currentOrderChannelTime / 4 ; i++ ) {
		currentOrderChannelTime = currentOrderChannelTime + getLOSCDate();	
	}

	if (currentOrderInnerChannel.length > 24) {
		if (isValidLOSCDate(currentOrderChannelTime.substr(0,4))) {
			//从头开始的6个字符代表首次渠道，不会被删除
			//FIFO原则从第二渠道，即第7位开始删除
			currentOrderInnerChannel = currentOrderInnerChannel.substr(0,6) + currentOrderInnerChannel.substr(currentOrderInnerChannel.length - 18, 18);
			currentOrderChannelTime = currentOrderChannelTime.substr(0,4) + currentOrderChannelTime.substr(currentOrderChannelTime.length - 12, 12);
		} else {
			currentOrderInnerChannel = currentOrderInnerChannel.substr(6, currentOrderInnerChannel.length - 6);
			currentOrderChannelTime = currentOrderChannelTime.substr(4, currentOrderChannelTime.length - 4);
		}	
	}

	writeCookie(channelType, currentOrderInnerChannel, 30);	
	writeCookie(timeType, currentOrderChannelTime, 30);
}

//<!-- 配置GA的参数开始 -->
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-5493172-1']);
_gaq.push(['_setDomainName', 'lvmama.com']);
_gaq.push(['_setAllowHash', 'false']);
_gaq.push(["_addOrganic", "baidu", "wd"]);
_gaq.push(["_addOrganic", "baidu", "word"]);
_gaq.push(["_addOrganic", "baidu", "bs"]);
_gaq.push(["_addOrganic", "baidu", "oq"]);
_gaq.push(["_addOrganic", "baidu", "query"]);
_gaq.push(["_addOrganic", "google", "q"]);
_gaq.push(["_addOrganic", "bing", "q"]);
_gaq.push(["_addOrganic", "soso", "w"]);
_gaq.push(["_addOrganic", "soso", "key"]);
_gaq.push(["_addOrganic", "sogou", "query"]);
_gaq.push(["_addOrganic", "sogou", "keyword"]);
_gaq.push(['_addOrganic', 'youdao', 'q']);
_gaq.push(["_addOrganic", "360", "q"]);
_gaq.push(["_addOrganic", "so.360.cn", "q"]);
_gaq.push(["_addOrganic", "so.com", "q"]);
_gaq.push(["_addOrganic", "baidu.com", "wd"]);
_gaq.push(["_addOrganic", "m.baidu.com", "word"]);
_gaq.push(["_addOrganic", "sogou.com", "query"]);
_gaq.push(["_addOrganic", "google.com", "q"]);
_gaq.push(["_addOrganic", "haosou", "q"]);
_gaq.push(["_addOrganic", "sm", "q"]);
_gaq.push(['_trackPageview']);
//<!-- 配置GA的参数结束 -->

(function () {
        var length = document.getElementsByTagName('script').length,leng=0;
        for(var i=0;i<length;i++){
            if(/\/losc\.js$/.test(document.getElementsByTagName('script')[i].src)){
                leng=i;
            }
        }
	   
        //<!-- 加载GA代码开始 --> 
        var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true;
        //ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		ga.src = 'http://pic.lvmama.com/stacac/ga.js';

        var s = document.getElementsByTagName('script')[leng]; 
        s.parentNode.insertBefore(ga,s);
        //<!-- 加载GA代码结束 --> 
		
		//<!-- 判断losc代码开始 -->
		var orderChannel = getLOSCCookie("oUC");
		var orderChannelTime = getLOSCCookie("oUT");
		while (orderChannelTime != undefined && orderChannelTime.substr(0,4) != "" && !isValidLOSCDate(orderChannelTime.substr(0,4))) {
			orderChannel = orderChannel.substr(6, orderChannel.length - 6);
			orderChannelTime = orderChannelTime.substr(4, orderChannelTime.length - 4);
		}
		orderChannel = getLOSCCookie("oIC");
		orderChannelTime = getLOSCCookie("oIT");
		while (orderChannelTime != undefined && orderChannelTime.substr(0,4) != "" && !isValidLOSCDate(orderChannelTime.substr(0,4))) {
			orderChannel = orderChannel.substr(6, orderChannel.length - 6);
			orderChannelTime = orderChannelTime.substr(4, orderChannelTime.length - 4);
		}

		//SEO的来源
		var seoKeyWords = ["baidu", "google","sogou","soso","youdao","bing","hao123","etao","360","yahoo","haosou","sm","so"];
		//SEO的代码
		var seoChannelCode = ["018115", "018116", "018117", "018118","018119", "018128", "018122", "018123","018120","018121","042525","081691","081692"];

		//url中的losc值
		var orderFromChannel = QueryString('losc');
        
		//没有指定渠道的情况下，统计seo的来源
		if (orderFromChannel == undefined || orderFromChannel == null) {
			var ref = document.referrer;
			if (ref != "" && ref.indexOf("losc=") == -1) {
				var re = new RegExp('^(?:f|ht)tp(?:s)?\://([^/?#]+)', 'im');
				ref = ref.match(re)[1];
				for (var i = 0,l=seoKeyWords.length; i < l ; i++) {
					if (ref.indexOf(seoKeyWords[i]) != -1) {
						updateOrderInnerChannel(seoChannelCode[i]);	
					}
				}
			}
		}

		//执行覆盖操作
		if (orderFromChannel != undefined && orderFromChannel != null) {
			updateOrderInnerChannel(orderFromChannel);
		}
	
		//睿广的产品推荐
		var pr = QueryString('_pr');
		if (pr != undefined && pr != null) {
			updateOrderInnerChannel(pr);
		}	
		//<!-- 判断losc代码结束 -->

		//<!-- 加载百分点代码开始 --> 
		window["_BFD"] = window["_BFD"] || {};
		_BFD.client_id = "Ctest_lvmama";
		_BFD.BFD_USER= {	
			"user_id" : getLOSCCookie('unUserName') //网站当前用户id，如果未登录就为0或空字符串		
		}; 
		_BFD.script = document.createElement("script");
		_BFD.script.type = "text/javascript";
		_BFD.script.async = true;
		_BFD.script.charset = "utf-8";
		_BFD.script.src = (('https:' == document.location.protocol?'https://ssl-static1':'http://static1')+'.baifendian.com/service/lvmama/lvmama.js');
		document.getElementsByTagName('script')[length].parentNode.insertBefore(_BFD.script, document.getElementsByTagName('script')[length]);
		//<!-- 加载百分点代码结束 --> 
		
    })();

//程辉提供新百度统计代码20150722//	
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?cb09ebb4692b521604e77f4bf0a61013";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
//程辉提供新百度统计代码20150722 结束//

//品友统计代码
var _py = _py || [];
_py.push(['a', 'Rds..gqSOetWjQRf0t9OP9jSHx0']);
_py.push(['domain','stats.ipinyou.com']);
_py.push(['e','']);
-function(d) {
	var s = d.createElement('script'),
		e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
		f = 'https:' == location.protocol;
	s.src = (f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/adv.js';
}(document);

//360网盟统计代码
var _mvq = window._mvq || []; 
window._mvq = _mvq;
_mvq.push(['$setAccount', 'm-193368-0']);
_mvq.push(['$logConversion']);
(function() {
	var mvl = document.createElement('script');
	mvl.type = 'text/javascript'; mvl.async = true;
	mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(mvl, s); 
})();

/*此段压缩的js用作：驴妈妈大数据数据收集*/
if(typeof JSON!=='object'){JSON={}}(function(){'use strict';function f(n){return n<10?'0'+n:n}if(typeof Date.prototype.toJSON!=='function'){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+'-'+f(this.getUTCMonth()+1)+'-'+f(this.getUTCDate())+'T'+f(this.getUTCHours())+':'+f(this.getUTCMinutes())+':'+f(this.getUTCSeconds())+'Z':null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={'\b':'\\b','\t':'\\t','\n':'\\n','\f':'\\f','\r':'\\r','"':'\\"','\\':'\\\\'},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==='string'?c:'\\u'+('0000'+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];if(value&&typeof value==='object'&&typeof value.toJSON==='function'){value=value.toJSON(key)}if(typeof rep==='function'){value=rep.call(holder,key,value)}switch(typeof value){case'string':return quote(value);case'number':return isFinite(value)?String(value):'null';case'boolean':case'null':return String(value);case'object':if(!value){return'null'}gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==='[object Array]'){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||'null'}v=partial.length===0?'[]':gap?'[\n'+gap+partial.join(',\n'+gap)+'\n'+mind+']':'['+partial.join(',')+']';gap=mind;return v}if(rep&&typeof rep==='object'){length=rep.length;for(i=0;i<length;i+=1){if(typeof rep[i]==='string'){k=rep[i];v=str(k,value);if(v){partial.push(quote(k)+(gap?': ':':')+v)}}}}else{for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?': ':':')+v)}}}}v=partial.length===0?'{}':gap?'{\n'+gap+partial.join(',\n'+gap)+'\n'+mind+'}':'{'+partial.join(',')+'}';gap=mind;return v}}if(typeof JSON.stringify!=='function'){JSON.stringify=function(value,replacer,space){var i;gap='';indent='';if(typeof space==='number'){for(i=0;i<space;i+=1){indent+=' '}}else if(typeof space==='string'){indent=space}rep=replacer;if(replacer&&typeof replacer!=='function'&&(typeof replacer!=='object'||typeof replacer.length!=='number')){throw new Error('JSON.stringify');}return str('',{'':value})}}if(typeof JSON.parse!=='function'){JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==='object'){for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined){value[k]=v}else{delete value[k]}}}}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return'\\u'+('0000'+a.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,'@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,']').replace(/(?:^|:|,)(?:\s*\[)+/g,''))){j=eval('('+text+')');return typeof reviver==='function'?walk({'':j},''):j}throw new SyntaxError('JSON.parse');}}}());(function(){var ubTracker={clientConfig:{serverUrl:"http://track.lvmama.com/static/__ae.gif",sessionTimeout:360,maxWaitTime:3600,batchSize:1,pvEnabled:true,cpEnabled:true,debugModel:false,ver:"1"},twoYearTime:63072000000,sessionAutoTimeout:true,batchSize:null,sessionTimeout:null,oldKeys:{sid:"sessionID",cid:"UUID"},keys:{eventName:"en",pvEnabled:"pvEnabled",cpEnabled:"cpEnabled",sessionTimeout:"sessionTimeout",maxWaitTime:"maxWaitTime",firstVisitTime:"firstVisitTime",preVisitTime:"preVisitTime",batchSize:"batchSize",currentSize:"currentSize",serverUrl:"serverUrl",localCachedRequest:"localCachedRequest",eventKey:"eventKey",eventValue:"eventValue",pageView:"e_pv",events:"e",chargeRequestEvent:"e_cr",chargeSuccessEvent:"e_cs",searchEvent:"e_s",userInfo:"uif",version:"ver",clientInfo:"cif",platform:"pl",sdkType:"sdk",resolution:"b_rst",userAgent:"b_iev",cid:"u_ud",sessionInfo:"sif",language:"l",memberId:"u_mid",sid:"u_sd",body:"b",time:"c_time",launch:"e_l",newCustom:"u_nu",url:"p_url",referrer:"p_ref",title:"tt",host:"ht",category:"ca",action:"ac",kv:"kv_",duration:"du",paymentType:"",orderId:"oid",orderName:"on",currencyAmount:"cua",currencyType:"cut",paymentType:"pt",keyword:"s_kw",resultCount:"s_rc"},customizationKeys:{searchResultCount:"s_rc"},customLogKeys:{searchResultCount:"result_count"},clientInfo:{},sessionInfo:{},userInfo:{},customLog:null,getEventKeys:function(){return[this.keys.pageView,this.keys.events,this.keys.chargeRequestEvent,this.keys.chargeSuccessEvent,this.keys.searchEvent]},setCid:function(cid){if(cid){this.log("set new cid: "+cid);var time=new Date().getTime();CookieUtil.set(this.keys.cid,cid,time+this.twoYearTime,"/")}},getCid:function(){var cid;cid=CookieUtil.get(this.keys.cid);if(!cid){cid=CookieUtil.getOldCache(this.oldKeys.cid);this.setCid(cid)}return cid},setSid:function(sid){if(sid){this.log("set session id:"+sid);var time=new Date().getTime();this.sessionAutoTimeout=false;CookieUtil.set(this.keys.sid,sid,time+this.twoYearTime,"/")}},setLanguage:function(language){this.log("setLanguage is called: language = "+language);if(language){if(LocalStorageUtil.isSupport()){LocalStorageUtil.set(this.keys.language,language)}else{this.sessionInfo[this.keys.language]=language}}},setMemberId:function(memberId){this.log("setMemberId is called with memberId: "+memberId);if(memberId){this.log("set member id:"+memberId);var time=new Date().getTime();this.sessionAutoTimeout=false;CookieUtil.set(this.keys.memberId,memberId,time+this.twoYearTime,"/")}},setSessionTimeout:function(interval){this.log("setSessionTimeout is called, the interval is:"+interval);if(interval&&this.isNumber(interval)){this.clientConfig[this.keys.sessionTimeout]=interval;if(LocalStorageUtil.isSupport()){LocalStorageUtil.set(this.keys.sessionTimeout,interval)}}},setBatchSize:function(batchSize){if(batchSize&&this.isNumber(batchSize)){this.clientConfig.batchSize=batchSize;if(LocalStorageUtil.isSupport()){LocalStorageUtil.set(this.keys.batchSize,batchSize)}}},disablePageView:function(){this.log("disablePageView is called");this.clientConfig[this.keys.pvEnabled]=false},disableClickPage:function(){this.log("disable click page");this.clientConfig[this.keys.cpEnabled]=false},enableDebugModel:function(){this.clientConfig.debugModel=true},startSession:function(platform){if(!platform){this.log("The platform is must not empty.");return}this.log("startSession is called with platform: "+platform);if(LocalStorageUtil.isSupport()){platform&&(LocalStorageUtil.set(this.keys.platform,platform))}else{platform&&(this.clientInfo[this.keys.platform]=platform)}this.init();if(CookieUtil.get(this.keys.sid)){if(this.sessionAutoTimeout&&this.isSessionTimeout()){this.log("session outtime, send last data and create new session");this.createNewSession(true)}else{this.log("resume the last session, update the pre visit time.");var time=new Date().getTime();this.updatePreVisitTime(time)}}else{this.log("create new session");this.createNewSession()}this.trackingWebsite()},trackingWebsite:function(){var pvEnabled=this.clientConfig[this.keys.pvEnabled];var cpEnabled=this.clientConfig[this.keys.cpEnabled];if(pvEnabled){this.onPageView()}if(cpEnabled){if(window.addEventListener){window.document.addEventListener('mousedown',this.onMousePosotion)}else{window.document.attachEvent('onmousedown',this.onMousePosotion)}}},getHost:function(){return window.location.host},getReferrer:function(){var ref=window.document.referrer;if(!ref){try{if(window.opener){ref=window.opener.location.href}}catch(e){}}if(ref){return encodeURIComponent(ref)}else{return null}},getTitle:function(){if(window.document.title&&window.document.title!==""){return window.document.title}return null},getCurrentUrl:function(){return window.location.protocol+'//'+window.location.host+window.location.pathname+window.location.search},fetchUserInfo:function(){var userInfo=null;if(LocalStorageUtil.isSupport()){var userInfoStr=LocalStorageUtil.get(this.keys.userInfo);userInfoStr&&(userInfo=JSON.parse(userInfoStr))}else{userInfo=JSON.parse(JSON.stringify(this.userInfo))}return userInfo},flush:function(){this.log("flush is called");if(!this.preCallApi()){return}this.sendDataToServer()},init:function(){if(LocalStorageUtil.isSupport()){var sessionTimeout=LocalStorageUtil.get(this.keys.sessionTimeout);var batchSize=LocalStorageUtil.get(this.keys.batchSize);if(sessionTimeout){this.clientConfig[this.keys.sessionTimeout]=sessionTimeout}else{LocalStorageUtil.set(this.keys.sessionTimeout,this.clientConfig[this.keys.sessionTimeout])}if(batchSize){this.clientConfig[this.keys.batchSize]=batchSize}else{LocalStorageUtil.set(this.keys.batchSize,this.clientConfig[this.keys.batchSize])}if(this.sessionInfo[this.keys.memberId]){this.setMemberId(his.sessionInfo[this.keys.memberId]);delete this.sessionInfo[this.keys.memberId]}}customLog=null||window._customLog_||{};var sid=CookieUtil.getOldCache(this.oldKeys.sid);if(sid&&!CookieUtil.get(this.keys.sid)){var time=new Date().getTime();CookieUtil.set(this.keys.sid,sid,time+this.twoYearTime,"/");CookieUtil.set(this.keys.firstVisitTime,time,time+this.twoYearTime,"/");this.updatePreVisitTime(time)}},isSessionTimeout:function(){var time=new Date().getTime();var preTime=CookieUtil.get(this.keys.preVisitTime);if(preTime){return time-preTime>this.clientConfig[this.keys.sessionTimeout]*1000}return true},generateId:function(len,radix){var chars='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.split('');var tmpid=[],i;radix=radix||chars.length;if(len){for(i=0;i<len;i++)tmpid[i]=chars[0|Math.random()*radix]}else{var r;tmpid[8]=tmpid[13]=tmpid[18]=tmpid[23]='-';tmpid[14]='4';for(i=0;i<36;i++){if(!tmpid[i]){r=0|Math.random()*16;tmpid[i]=chars[(i==19)?(r&0x3)|0x8:r]}}}return tmpid.join('')},getMemberId:function(){try{var un=util.getOtherCookieValue("UN");if(un){var um=un.substr(un.indexOf("^!^")+3);um&&(this.setMemberId(um))}}catch(e){this.log("error msg:"+e.message)}var memberId=CookieUtil.get(this.keys.memberId);if(!memberId){memberId=this.sessionInfo[this.keys.memberId]}return memberId},preCallApi:function(){var time=new Date().getTime();var preTime=CookieUtil.get(this.keys.preVisitTime);if(preTime){var isNeedStart=(time-preTime)>this.clientConfig[this.keys.maxWaitTime]*1000;if(isNeedStart){this.startSession()}else{this.updatePreVisitTime(time)}return true}else{this.log("have not call startSession API");return false}},sendDataToServer:function(sendData){this.preSendData();var dataStr=sendData;this.log(dataStr);this.sendRequest(dataStr);this.reset()},sendRequest:function(dataStr){var that=this;var i2=new Image(1,1);i2.onerror=function(){that.saveInLocal(dataStr)};i2.src=this.clientConfig[this.keys.serverUrl]+"?"+dataStr},saveInLocal:function(dataStr){if(LocalStorageUtil.isSupport()){var localRequestsStr=LocalStorageUtil.get(this.keys.localCachedRequest);var requests=[];if(localRequestsStr){requests=requests.concat(JSON.parse(localRequestsStr))}requests.push(dataStr);LocalStorageUtil.set(this.keys.localCachedRequest,JSON.stringify(requests))}},preSendData:function(){if(LocalStorageUtil.isSupport()){var localRequestsStr=LocalStorageUtil.get(this.keys.localCachedRequest);LocalStorageUtil.remove(this.keys.localCachedRequest);var requests=[];if(localRequestsStr){requests=requests.concat(JSON.parse(localRequestsStr))}var size=requests.length;for(var i=size;i>0;i--){var dataStr=requests[i-1];this.sendRequest(dataStr)}}},updatePreVisitTime:function(time){CookieUtil.set(this.keys.preVisitTime,time,time+this.twoYearTime,"/")},getClientInfo:function(){var clientInfo={};var platform;if(LocalStorageUtil.isSupport()){platform=LocalStorageUtil.get(this.keys.platform)}else{platform=this.clientInfo[this.keys.platform]}platform&&(clientInfo[this.keys.platform]=platform);clientInfo[this.keys.sdkType]="js";clientInfo[this.keys.resolution]=screen.width+"*"+screen.height;var cid=this.getCid();clientInfo[this.keys.cid]=cid;var userAgent=navigator.userAgent;userAgent&&(clientInfo[this.keys.userAgent]=userAgent);return clientInfo},getSessionInfo:function(){var language;if(LocalStorageUtil.isSupport()){language=LocalStorageUtil.get(this.keys.language)}else{language=this.sessionInfo[this.keys.language]}var tmplanguage=window.navigator.language;if(!tmplanguage){tmplanguage=window.navigator.browserLanguage}if(!language||tmplanguage!=language){language=tmplanguage;LocalStorageUtil.isSupport()?LocalStorageUtil.set(this.keys.language,language):this.sessionInfo[this.keys.language]=language}var singleSessionInfo={};var memberId=this.getMemberId();memberId&&(singleSessionInfo[this.keys.memberId]=memberId);language&&(singleSessionInfo[this.keys.language]=language);singleSessionInfo["lv_sid"]=util.getOtherCookieValue("lvsessionid");var sessionInfo={};sessionInfo[CookieUtil.get(this.keys.sid)]=singleSessionInfo;var sessionInfos=[];sessionInfos.push(sessionInfo);return sessionInfos},setSessionInfo:function(eventData){var language;if(LocalStorageUtil.isSupport()){language=LocalStorageUtil.get(this.keys.language)}else{language=this.sessionInfo[this.keys.language]}var tmplanguage=window.navigator.language;if(!tmplanguage){tmplanguage=window.navigator.browserLanguage}if(!language||tmplanguage!=language){language=tmplanguage;LocalStorageUtil.isSupport()?LocalStorageUtil.set(this.keys.language,language):this.sessionInfo[this.keys.language]=language}var memberId=this.getMemberId();memberId&&(eventData[this.keys.memberId]=memberId);language&&(eventData[this.keys.language]=language);eventData["lv_sid"]=util.getOtherCookieValue("lvsessionid")},setClientInfo:function(eventData){var platform;if(LocalStorageUtil.isSupport()){platform=LocalStorageUtil.get(this.keys.platform)}else{platform=this.clientInfo[this.keys.platform]}platform&&(eventData[this.keys.platform]=platform);eventData[this.keys.sdkType]="js";eventData[this.keys.resolution]=screen.width+"*"+screen.height;var cid=this.getCid();eventData[this.keys.cid]=cid;var userAgent=navigator.userAgent;userAgent&&(eventData[this.keys.userAgent]=userAgent)},reset:function(){this.temp=null;var eventKeys=this.getEventKeys();if(LocalStorageUtil.isSupport()){LocalStorageUtil.set(this.keys.currentSize,0);for(var i=0;i<eventKeys.length;i++){LocalStorageUtil.remove(eventKeys[i])}}},isNumber:function(param){return!isNaN(param)},isEmpty:function(obj){if(obj===null){return true}if(obj.length&&obj.length>0){return false}if(obj.length&&obj.length==0){return true}var size=0;for(key in obj){size=size+1}return size===0},parseParam:function(eventData){var params="";for(var e in eventData){if(e&&eventData[e]){params+=encodeURIComponent(e)+"="+encodeURIComponent(eventData[e])+"&"}}return params.substring(0,params.length-1)},log:function(message){if(this.clientConfig.debugModel){}},createNewSession:function(isTimeOut){var launch={};var time=new Date().getTime();if(!this.getCid()){var cid=this.generateId();CookieUtil.set(this.keys.cid,cid,time+this.twoYearTime,"/");launch[this.keys.newCustom]=1}var sid=this.generateId();CookieUtil.set(this.keys.sid,sid,time+this.twoYearTime,"/");CookieUtil.set(this.keys.firstVisitTime,time,time+this.twoYearTime,"/");this.updatePreVisitTime(time);LocalStorageUtil.set(this.keys.currentSize,0);if(launch[this.keys.newCustom]){launch[this.keys.sid]=sid;launch[this.keys.time]=time}if(this.isEmpty(launch)){return}launch[this.keys.version]=this.clientConfig[this.keys.version];launch[this.keys.eventName]=this.keys.launch;this.setClientInfo(launch);this.setSessionInfo(launch);this.sendDataToServer(this.parseParam(launch))},onPageView:function(){if(!this.clientConfig.pvEnabled||!this.preCallApi()){return}var time=new Date().getTime();var sid=CookieUtil.get(this.keys.sid);var pageViewEvent={};pageViewEvent[this.keys.version]=this.clientConfig[this.keys.version];pageViewEvent[this.keys.eventName]=this.keys.pageView;this.setClientInfo(pageViewEvent);this.setSessionInfo(pageViewEvent);pageViewEvent[this.keys.sid]=sid;pageViewEvent[this.keys.time]=time;var host=this.getHost();if(host){pageViewEvent[this.keys.host]=host}var referrerUrl=this.getReferrer();if(referrerUrl){pageViewEvent[this.keys.referrer]=referrerUrl}var title=this.getTitle();if(title){pageViewEvent[this.keys.title]=title}var actualUrl=this.getCurrentUrl();if(actualUrl){pageViewEvent[this.keys.url]=actualUrl}this.sendDataToServer(this.parseParam(pageViewEvent));this.updatePreVisitTime(time)},onEventDuration:function(category,action,map,duration){if(category&&action){if(!this.preCallApi()){return}this.log("onKVEventDuration is called with category: "+category+",action: "+action+",map: "+map+",duration: "+duration);var time=new Date().getTime();var sid=CookieUtil.get(this.keys.sid);var event={};event[this.keys.category]=category;event[this.keys.action]=action;event[this.keys.time]=time;event[this.keys.sid]=sid;event[this.keys.kv+this.keys.url]=this.getCurrentUrl();if(map){for(var k in map){if(k&&map[k]){event[this.keys.kv+k]=map[k]}}}duration&&this.isNumber(duration)&&(event[this.keys.duration]=duration);event[this.keys.version]=this.clientConfig[this.keys.version];event[this.keys.eventName]=this.keys.events;this.setClientInfo(event);this.setSessionInfo(event);this.sendDataToServer(this.parseParam(event));this.updatePreVisitTime(time)}},onChargeRequest:function(orderId,name,currencyAmount,currencyType,paymentType){this.log("onChargeRequest is called with orderId: "+orderId);if(!this.preCallApi()){return}if(!orderId||orderId.replace(/\s/g,"")===""){this.log("orderId cannot be empty");return}if(typeof(currencyAmount)=="number"){var time=new Date().getTime();var sid=CookieUtil.get(this.keys.sid);var memberId=this.getMemberId();var chargeRequestEvent={};chargeRequestEvent[this.keys.sid]=sid;if(memberId){chargeRequestEvent[this.keys.memberId]=memberId}chargeRequestEvent[this.keys.time]=time;chargeRequestEvent[this.keys.orderId]=orderId;chargeRequestEvent[this.keys.orderName]=name;chargeRequestEvent[this.keys.currencyAmount]=currencyAmount;chargeRequestEvent[this.keys.currencyType]=currencyType;chargeRequestEvent[this.keys.paymentType]=paymentType;chargeRequestEvent[this.keys.version]=this.clientConfig[this.keys.version];chargeRequestEvent[this.keys.eventName]=this.keys.chargeRequestEvent;this.setClientInfo(chargeRequestEvent);this.setSessionInfo(chargeRequestEvent);this.sendDataToServer(this.parseParam(chargeRequestEvent));this.updatePreVisitTime(time)}else{this.log("currencyAmount should be number.")}},onChargeSuccess:function(orderId){this.log("onChargeSuccess is called with orderId: "+orderId);if(!this.preCallApi()){return}if(!orderId||orderId.replace(/\s/g,"")===""){this.log("orderId cannot be empty");return}var time=new Date().getTime();var sid=CookieUtil.get(this.keys.sid);var memberId=this.getMemberId();if(!memberId){this.log("memberId cannot be null when onChargeSuccess.");return}var chargeSuccessEvent={};chargeSuccessEvent[this.keys.sid]=sid;if(memberId){chargeSuccessEvent[this.keys.memberId]=memberId}chargeSuccessEvent[this.keys.time]=time;chargeSuccessEvent[this.keys.orderId]=orderId;chargeSuccessEvent[this.keys.version]=this.clientConfig[this.keys.version];chargeSuccessEvent[this.keys.eventName]=this.keys.chargeSuccessEvent;this.setClientInfo(chargeSuccessEvent);this.setSessionInfo(chargeSuccessEvent);this.sendDataToServer(this.parseParam(chargeSuccessEvent));this.updatePreVisitTime(time)},onSearch:function(keyword,resultCount){this.log("onSearch is called with keyword: "+keyword);if(!this.preCallApi()){return}if(typeof(resultCount)=="number"){var time=new Date().getTime();var sid=CookieUtil.get(this.keys.sid);var searchEvent={};searchEvent[this.keys.sid]=sid;searchEvent[this.keys.time]=time;searchEvent[this.keys.resultCount]=resultCount;if(keyword){searchEvent[this.keys.keyword]=keyword}var referrerUrl=this.getReferrer();if(referrerUrl){searchEvent[this.keys.referrer]=referrerUrl}var actualUrl=this.getCurrentUrl();if(actualUrl){searchEvent[this.keys.url]=actualUrl}searchEvent[this.keys.version]=this.clientConfig[this.keys.version];searchEvent[this.keys.eventName]=this.keys.searchEvent;this.setClientInfo(searchEvent);this.setSessionInfo(searchEvent);this.sendDataToServer(this.parseParam(searchEvent));this.updatePreVisitTime(time)}else{this.log("resultCount should be number.")}},onMousePosotion:function(ev){var time=new Date().getTime();ubTracker.updatePreVisitTime(time)}};var LocalStorageUtil={__enabled:true,__prefix:'lvmama_bd_',isSupport:function(){return this.__enabled&&window.localStorage?true:false},get:function(key){return(key&&this.isSupport())?window.localStorage.getItem(this.__prefix+key):null},set:function(key,value){if(key&&this.isSupport()){window.localStorage.setItem(this.__prefix+key,value)}},remove:function(key){if(key&&this.isSupport()){window.localStorage.removeItem(this.__prefix+key)}},disableCache:function(){this.__enabled=false}};var CookieUtil={__prefix:'_lvTrack_',get:function(name){name=this.__prefix+name;var cookieName=encodeURIComponent(name)+"=",cookieStart=document.cookie.indexOf(cookieName),cookieValue=null;if(cookieStart>-1){var cookieEnd=document.cookie.indexOf(";",cookieStart);if(cookieEnd==-1){cookieEnd=document.cookie.length}cookieValue=decodeURIComponent(document.cookie.substring(cookieStart+cookieName.length,cookieEnd))}return cookieValue},getOldCache:function(sName){sName=this.__prefix+sName;var arrStr=document.cookie.split("; ");for(var i=0;i<arrStr.length;i++){var temp=arrStr[i].split("=");if(temp[0]==sName){return unescape(temp[1])}}return null},set:function(name,value,expires,path,domain,secure){name=this.__prefix+name;var cookieText=encodeURIComponent(name)+"="+encodeURIComponent(value);if(expires){var expiresTime=new Date();expiresTime.setTime(expires);cookieText+="; expires="+expiresTime.toGMTString()}if(path){cookieText+="; path="+path}if(domain){cookieText+="; domain="+domain}else{cookieText+="; domain=.lvmama.com"}if(secure){cookieText+="; secure"}document.cookie=cookieText},unset:function(name,path,domain,secure){this.set(name,"",new Date(0),path,domain,secure)}};window.__UB__={setSessionTimeout:function(interval){ubTracker.setSessionTimeout(interval)},setMemberId:function(memberId){ubTracker.setMemberId(memberId)},disableLocalStorageCache:function(){LocalStorageUtil.disableCache()},disablePageView:function(){ubTracker.disablePageView()},disableClickPage:function(){ubTracker.disableClickPage()},enableDebugModel:function(){ubTracker.enableDebugModel()},startSession:function(platform){ubTracker.startSession(platform)},onPageView:function(){ubTracker.onPageView()},onEventDuration:function(category,action,map,duration){ubTracker.onEventDuration(category,action,map,duration)},onChargeRequest:function(orderId,name,currencyAmount,currencyType,paymentType){ubTracker.onChargeRequest(orderId,name,currencyAmount,currencyType,paymentType)},onChargeSuccess:function(orderId){ubTracker.onChargeSuccess(orderId)},onSearch:function(keyword,resultCount){ubTracker.onSearch(keyword,resultCount)},flush:function(){ubTracker.flush()},keys:{setCache:"setCache",disablePV:"disablePageView",disableCP:"disableClickPage",enableDebugModel:"enableDebugModel",memberId:"member_id",sessionTimeout:"sessionTimeout",platform:"platform"}};var util={isArray:function(variable){return variable!==null&&typeof(variable)==='object'&&'splice'in variable&&'join'in variable},getOtherCookieValue:function(name){var cookieName=name+"=",cookieStart=document.cookie.indexOf(cookieName),cookieValue=null;if(cookieStart>-1){var cookieEnd=document.cookie.indexOf(";",cookieStart);if(cookieEnd==-1){cookieEnd=document.cookie.length}cookieValue=decodeURIComponent(document.cookie.substring(cookieStart+cookieName.length,cookieEnd))}return cookieValue}};var autoLoad=function(){var _ublog_=null||window._ublog_||[];if(util.isArray(_ublog_)){_ublog_.push(['platform','website']);var i=0;var platform=null,memberId=null,setCache=true,timeout=null,enableDebug=null,disablePV=null,disableCP=null;for(i=0;i<_ublog_.length;i++){if(util.isArray(_ublog_[i])){_ublog_[i][0]===__UB__.keys.memberId&&(memberId=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.platform&&(platform=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.setCache&&(setCache=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.sessionTimeout&&(timeout=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.enableDebugModel&&(enableDebug=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.disableCP&&(disableCP=_ublog_[i][1]);_ublog_[i][0]===__UB__.keys.disablePV&&(disablePV=_ublog_[i][1])}}ubTracker.setBatchSize(1);enableDebug&&__UB__.enableDebugModel();disablePV&&__UB__.disablePageView();disableCP&&__UB__.disableClickPage();__UB__.disableClickPage();!setCache&&(__UB__.disableLocalStorageCache());memberId&&(__UB__.setMemberId(memberId));timeout&&(__UB__.setSessionTimeout(timeout));platform&&(__UB__.startSession(platform))}};autoLoad()})();

/*Axis营销工具代码*/
var _fxcmd=_fxcmd||[];
_fxcmd.sid='5f97534d550a22ed0b9ba7f419383409';
_fxcmd.trackAll=false;
// 参数配置(可选)...
// 追踪配置(可选)...
(function () {
	var _pzfx=document['createElement']('script');
	_pzfx.type='text/javascript';
	_pzfx.async=true;
	_pzfx.src='//static.w3t.cn/fx/1/1/fx.js';
	var sc=document.getElementsByTagName('script')[0];
	sc.parentNode.insertBefore(_pzfx,sc);
})();

//region 百度推送代码
(function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https') {
		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else {
		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
})();
//endregion
