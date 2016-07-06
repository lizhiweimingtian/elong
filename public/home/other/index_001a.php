(function(global,$,pandora,undefined){"use strict"
if(global.pandora&&global.pandora.dialog){return;}
var universe=null,count=0,expando="dialog"+(+new Date),isIE6=window.VBArray&&!window.XMLHttpRequest,data={},timer=null,isArray=function(obj){if(typeof Array.isArray==="undefined"){return Object.prototype.toString.call(obj)==="[object Array]";}
return Array.isArray(obj);};function getIframeHeight(iframe){var iframe=$(iframe[0].contentWindow.document);var wh={w:iframe.width(),h:iframe.height()};return wh;}
function Factory(config,ok,cancel){var config=config||{},defaults=Factory.defaults,list=[];if(typeof config==="string"){config={content:config}}
for(var i in defaults){if(config[i]===undefined){config[i]=defaults[i];};};config.id=expando+count;if(isIE6){config.fixed=false;}
if(!config.button||!config.button.push){config.button=[];};if(ok!==undefined){config.ok=ok;};if(config.ok){config.button.push({className:config.okClassName,value:config.okValue,callback:config.ok});};if(cancel!==undefined){config.cancel=cancel;};if(config.cancel){config.button.push({className:config.cancelClassName,value:config.cancelValue,callback:config.cancel});};count++;return Dialog.list[config.id]=universe?universe._init(config):new Dialog(config);}
function Dialog(config){this._init(config);}
Dialog.prototype={constructor:Dialog,_init:function(config){var wrap=null,that=this;that.config=config;that.wrap=wrap=that.wrap||$($.trim(that._getTemplate(config)));if(universe===null){$("body").prepend(that.wrap);}
if(config.wrapClass!==""){wrap.addClass(config.wrapClass);}
wrap.addClass(config.skin);that.button.apply(that,config.button);that.title(config.title);that.content(config.content);that.size(config.width,config.height);that._zIndex(config.zIndex);that.reset();that.time(config.time);if(config.mask===true){that._mask(config);}
that.wrap.show();that._bindEvent(config);if(config.drag===true){that._drag();}
universe=null;if(typeof config.initialize==="function"){config.initialize.call(this);}
return that;},_getTemplate:function(config){return template;},_createIframe:function(url){var that=this;this.iframe=$('<iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="100%" height="100%" ></iframe>');this.iframe.attr("src",url);this.iframe.one("load",function(){if(!that.wrap.is(":visible")){return;}
clearInterval(that._interval);that._interval=setInterval(function(){that._syncWH();},300);});return this.iframe;},_syncWH:function(){var h,w,wh={},wrap=this.wrap,$dialogBody=wrap.find("div.dialog-body"),padding=parseInt($dialogBody.css("paddingLeft"),10)+parseInt($dialogBody.css("paddingRight"),10),margin=parseInt($dialogBody.css("marginLeft"),10)+parseInt($dialogBody.css("marginRight"),10);try{this._errCount=0;wh=getIframeHeight(this.iframe);h=wh.h;w=wh.w;}catch(err){this._errCount=(this._errCount||0)+1;if(this._errCount>=6){h=this.config.initialHeight;clearInterval(this._interval);delete this._interval;}}
wrap.css("width",(margin+padding+w));wrap.find("div.dialog-body").css({"height":h,"width":w});clearInterval(this._interval);delete this._interval;},_bodyWH:function(){var h,wrap=this.wrap,$dialogBody=wrap.find("div.dialog-body"),$dialogHeader=wrap.find("div.dialog-header"),$dialogFooter=wrap.find("div.dialog-footer"),bpm=this._gaugeValue($dialogBody).y,hh=$dialogHeader.height()+this._gaugeValue($dialogHeader).y,fh=$dialogFooter.height()+this._gaugeValue($dialogFooter).y;h=parseInt(this.config.height,10)-bpm-hh-fh;wrap.find("div.dialog-body").css({"height":h,"overflow":"auto"});},_gaugeValue:function(obj){var val={};val.y=parseInt(obj.css("paddingTop"),10)+parseInt(obj.css("paddingBottom"),10)+
parseInt(obj.css("marginTop"),10)+parseInt(obj.css("marginBottom"),10);val.x=parseInt(obj.css("paddingLeft"),10)+parseInt(obj.css("paddingRight"),10)+
parseInt(obj.css("marginLeft"),10)+parseInt(obj.css("marginRight"),10);return val;},_mask:function(config){var $overlay=$("[data-mask=overlay]");this._mask=function(){$('.'+config.maskClass).show();}
if($overlay.size()===0){var div=document.createElement('div');$(div).attr("data-mask","overlay").addClass(config.maskClass).css("zIndex",config.zIndex-1);if(isIE6){$(div).css({position:'absolute',width:$(window).width()+'px',height:$(document).height()+'px'});}
$("body").prepend(div);}else{$overlay.css("z-index",config.zIndex-1);}
this._ismask=true;},_unmask:function(){var that=this;var list=Dialog.list,count=0,indexArray=[];for(var i in list){if(list.hasOwnProperty(i)){if(list[i]._ismask===true){count++;if(list[i].zIndex!==that.zIndex)
indexArray.push(list[i].zIndex);}}}
if(this._ismask===true&&count===1){$("[data-mask=overlay]").hide();}else{var maxIndex=Math.max.apply(Math,indexArray);$("[data-mask=overlay]").css("z-index",maxIndex-1);}
return this;},_drag:function(){var disX=0,disY=0,wrap=this.wrap[0],handle=this.wrap.find("div.dialog-header")[0];handle.style.cursor="move";handle.onmousedown=function(event){var event=event||window.event;disX=event.clientX-wrap.offsetLeft;disY=event.clientY-wrap.offsetTop;document.onmousemove=function(event){var event=event||window.event,iL=event.clientX-disX,iT=event.clientY-disY,maxL=document.documentElement.clientWidth-wrap.offsetWidth,maxT=document.documentElement.clientHeight-wrap.offsetHeight;iL<=0&&(iL=0);iT<=0&&(iT=0);iL>=maxL&&(iL=maxL);iT>=maxT&&(iT=maxT);wrap.style.left=iL+"px";wrap.style.top=iT+"px";return false};document.onmouseup=function(){document.onmousemove=null;document.onmouseup=null;if(this.releaseCapture){this.releaseCapture();}};if(this.setCapture){this.setCapture();}
return false};},_zIndex:function(index){Factory.defaults.zIndex=index;index=Factory.defaults.zIndex++;this.wrap.css("zIndex",index);this.zIndex=index;},_bindEvent:function(config){var that=this;that.wrap.bind("click",function(e){var target=$(e.target),index=0;if(target.attr("data-dismiss")==="dialog"){that.close(this);return false;}else{if(target.parent().is("[data-btn=btns]")){index=target.index();that._execCallback(index);}}});that._loopy();},_loopy:function(){var that=this;timer=setTimeout(function(){clearTimeout(timer);var elem=that.wrap,width=elem.width(),height=elem.height();if(width!==data.w||height!==data.h){if(that.config.dialogAuto){that.wrap.css({"position":"absolute","top":($(window).scrollTop()+that.config.dialogAutoTop)+"px","left":parseInt(($(window).width()-width)/2,10)+"px"});data.w=width;data.h=height;}else{that.reset();}}
that._loopy();},150);},_unbindEvent:function(){this.wrap.unbind("click");},_execCallback:function(index){var fns=this.config.button,fn=fns[index].callback;return typeof fn!=="function"||fn.call(this)!==false?this.close():this;},title:function(title){this.wrap.find("div.dialog-header").html(title);return this;},content:function(content){var rulReg=/^(https?:\/\/|\/|\.\/|\.\.\/)/,that=this,prev,next,parent,display;if(rulReg.test(content)){content=this._createIframe(content);}
if(typeof content!=="string"){if($(content)[0].nodeType===1){content=$(content)[0];display=content.style.display;prev=content.previousSibling;next=content.nextSibling;parent=content.parentNode;this._elemBack=function(){if(prev&&prev.parentNode){prev.parentNode.insertBefore(content,prev.nextSibling);}else if(next&&next.parentNode){next.parentNode.insertBefore(content,next);}else if(parent){parent.appendChild(content);};content.style.display=display;that._elemBack=null;};$(content).css('display','block');}}
this.wrap.find("div.dialog-content").html(content);return this;},reset:function(){var wrap=this.wrap,wh=$(window).height(),oh=wrap.height(),ow=wrap.width(),top,left;if(this.config.dialogAuto){wrap.css({"position":"absolute","top":($(window).scrollTop()+this.config.dialogAutoTop)+"px","left":parseInt(($(window).width()-ow)/2,10)+"px"});return;}
if(this.config.height!==""&&this.config.height!=="auto"){this._bodyWH();}
if(wh-oh>=50){wrap.css("position",this.config.fixed?"fixed":"absolute");this.offsets();}else{top=$(window).scrollTop()+10;left=($(window).width()-ow)/2,wrap.css({"position":"absolute","top":parseInt(top,10)+"px","left":parseInt(left,10)+"px"});}
data.w=ow;data.h=oh;},loading:function(content){var html='<div style="text-align:center">'+'<img width="46" height="46" src="http://pic.lvmama.com/img/new_v/ui_scrollLoading/loadingGIF46px.gif"'+'alt="loading..." ></div>';html=content?content:html;this.content(html);return this;},size:function(width,height){if(typeof width==="number"){width+="px";}
if(typeof height==="number"){height+="px";}
this.wrap.css({"width":width,"height":height});return this;},button:function(){var ags=[].slice.call(arguments),len=ags.length,i=0,j=0,classNameLen=0,className="",button=null,buttonAgs=null;for(;i<len;i++){buttonAgs=ags[i];button=document.createElement("button");if(isArray(buttonAgs.className)){for(classNameLen=buttonAgs.className.length;j<classNameLen;j++){className+=buttonAgs.className[j]+" ";}}else{className=buttonAgs.className===undefined?"":buttonAgs.className;}
$(button).attr({"class":"pbtn pbtn-small "+className+""}).html(buttonAgs.value);$(this.wrap).find("[data-btn=btns]").append(button);}
return this;},offsets:function(x,y){var wrap=this.wrap,ww=$(window).width(),wh=$(window).height(),ow=wrap.width(),oh=wrap.height(),left=(ww-ow)/2,top=(wh-oh)*382/1000;if(isIE6){top+=$(window).scrollTop();}
wrap.css({"top":parseInt(top)+"px","left":parseInt(left)+"px"});return this;},time:function(time){var that=this,timer=this._timer;if(timer){clearTimeout(timer);}
if(time){that._unbindEvent();$(that.wrap).find("[data-btn=btns]").html("");this._timer=setTimeout(function(){that.close();},time);};return this;},close:function(){var wrap=this.wrap,config=this.config,beforeunload=config.beforeunload;if(beforeunload&&beforeunload.call(this)===false){return this;};this._unmask();this._unbindEvent();this.time();delete Dialog.list[config.id];clearTimeout(timer);if(this._elemBack){this._elemBack();};if(universe!==null){wrap.remove();}else{universe=this;wrap.attr("style","");wrap.hide();wrap.find("div.dialog-body").attr("style","");wrap.attr("class","dialog");wrap.find("[data-title=title]").html("");wrap.find("[data-content=content]").html("");wrap.find("[data-btn=btns]").html("");}
return this;},extend:function(object){var fn=Dialog.prototype;for(var i in object){fn[i]=object[i];}
return this;}};Dialog.list={};Dialog.version="1.0";$(window).bind('resize',function(){var dialogs=Dialog.list;for(var id in dialogs){dialogs[id].reset();};});Factory.defaults={templateNmae:"template-dialog",templateType:"default",templateUrl:"/pandora/docs/assets/js/modules/template.html",button:null,fixed:true,mask:true,drag:false,dialogAuto:false,dialogAutoTop:60,initialHeight:"300px",initialize:null,beforeunload:null,ok:null,cancel:null,okValue:"确定",cancelValue:"取消",okClassName:"",cancelClassName:"",content:"",title:"消息提醒",time:null,width:"",height:"",skin:"dialog-default",wrapClass:"",maskClass:"overlay",zIndex:4000};var template='<div class="dialog">'
+'    <div class="dialog-inner clearfix">'
+'        <a class="dialog-close" data-dismiss="dialog">&times;</a>'
+'        <div class="dialog-header" data-title="title"></div>'
+'        <div class="dialog-body">'
+'            <div class="dialog-content clearfix" data-content="content">'
+'            </div>'
+'        </div>'
+'        <div class="dialog-footer" data-btn="btns" >'
+'        </div>'
+'    </div>'
+'</div>';$.alert=pandora.alert=function(content,callback){return Factory({fixed:true,mask:true,wrapClass:"dialog-mini",content:content,ok:true,beforeunload:callback});}
$.msg=pandora.msg=function(content,time){return Factory({fixed:true,mask:false,wrapClass:"dialog-msg",content:content,time:time?time:2000});}
$.confirm=pandora.confirm=function(content,ok,cancel){return Factory({fixed:true,lock:true,content:content,ok:ok?ok:true,cancel:cancel?cancel:true});};$.confirmNew=pandora.confirmNew=function(content,ok,cancel,okValue,cancelValue,okClassName,cancelClassName){return Factory({fixed:true,lock:true,content:content,ok:ok?ok:true,cancel:cancel?cancel:true,okValue:okValue?okValue:'确定',cancelValue:cancelValue?cancelValue:'取消',okClassName:okClassName?okClassName:'',cancelClassName:cancelClassName?cancelClassName:''});};$.dialog=$.fn.dialog=pandora.dialog=Factory;global.pandora=pandora;}(this,jQuery,this.pandora||{}));
;(function($){$.fn.poptip=function(options){var defaults={templete:1,skin:"default",tiptitle:"",place:7,offsetX:0,offsetY:0,trigger:"mouseenter",bindevent:"live",hovershow:300}
var opt=$.extend(true,defaults,options||{});var reclock=[6,5,10,9,8,1,12,11,4,3,2,7,6];function posclock(clock){return reclock[clock];}
var templeteStr="";switch(opt.templete){case 1:templeteStr=' <div class="poptip tip-light poptip-'+opt.skin+'" '
+' style="display: none;" id="poptip'+opt.templete+'">'
+'     <div class="tip-arrow tip-arrow-'+posclock(opt.place)+'">'
+'         <em>◆</em>'
+'         <i>◆</i>'
+'     </div>'
+'     <div class="tip-content">'
+'         <h5 class="tip-title"></h5>'
+'         <p></p>'
+'     </div>'
+' </div>';break;default:break;}
if($("#poptip"+opt.templete).length==0){$("body").append(templeteStr);}
var triggerObj=this;$(this)[opt.bindevent](opt.trigger,function(){var title=$(this).attr("tip-title");var content=$(this).attr("tip-content");var obj=$("#poptip"+opt.templete);clearTimeout(triggerObj.timeId);obj.hide();if(title){obj.find(".tip-title").html(title).show();}else{if(opt.tiptitle){obj.find(".tip-title").html(opt.tiptitle).show();}else{obj.find(".tip-title").html("").hide();}}
if(opt.skin!='default'){$("#poptip"+opt.templete).attr('class','poptip tip-light poptip-'+opt.skin);}else{$("#poptip"+opt.templete).attr('class','poptip tip-light poptip-default');}
if(content){obj.find(".tip-content>p").html(content);}else{obj.hide();return;}
var left=$(this).offset().left;var top=$(this).offset().top;var posdiff=7;switch(opt.place){case 12:case 0:left-=(obj.outerWidth()-$(this).outerWidth())/2;top-=$(obj).outerHeight()+posdiff;break;case 1:left-=$(obj).outerWidth()-$(this).outerWidth();top-=$(obj).outerHeight()+posdiff;break;case 2:left+=$(this).outerWidth()+posdiff;break;case 3:left+=$(this).outerWidth()+posdiff;top-=($(obj).outerHeight()-$(this).outerHeight())/2;break;case 4:left+=$(this).outerWidth()+posdiff;top-=$(obj).outerHeight()-$(this).outerHeight();break;case 5:left-=$(obj).outerWidth()-$(this).outerWidth();top+=$(this).outerHeight()+posdiff;break;case 6:left-=(obj.outerWidth()-$(this).outerWidth())/2;top+=$(this).outerHeight()+posdiff;break;case 7:default:top+=$(this).outerHeight()+posdiff;break;case 8:left-=$(obj).outerWidth()+posdiff;top-=$(obj).outerHeight()-$(this).outerHeight();break;case 9:left-=$(obj).outerWidth()+posdiff;top-=($(obj).outerHeight()-$(this).outerHeight())/2;break;case 10:left-=$(obj).outerWidth()+posdiff;break;case 11:top-=$(obj).outerHeight()+posdiff;break;}
obj.find(".tip-arrow").attr("class","tip-arrow tip-arrow-"+posclock(opt.place)).end().css({left:left+opt.offsetX,top:top+opt.offsetY}).fadeIn(200);})[opt.bindevent]("mouseleave",function(){triggerObj.timeId=setTimeout(function(){$("#poptip"+opt.templete).hide();},opt.hovershow);$("#poptip"+opt.templete).data("timeId",triggerObj.timeId);});$("#poptip"+opt.templete).mouseenter(function(){clearTimeout(triggerObj.timeId);}).mouseleave(function(){$(this).hide();});};})(jQuery);