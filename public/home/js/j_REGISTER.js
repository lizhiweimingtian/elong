﻿(function(){var b=function(){this.e=encodeURIComponent;this.d=decodeURIComponent;this.g="";this.h=(location.protocol=="https:");this.t=(this.h?"https://sslcdn.istreamsche.com":"http://mtr.istreamsche.com")+"/gm.gif?"};b.prototype={init:function(){this.M();this.I()},ty:function(c){return typeof(c)!="undefined"},M:function(){typeof(_star_v)!="undefined"?this.m=_star_v:this.m="null";typeof(_gtype)!="undefined"?this.type=_gtype:this.type="null";typeof(_star_vk)!="undefined"?this._k=_star_vk:this._k="null"},k:function(e){var f=document.cookie.split("; ");for(var d=0;d<f.length;d++){var c=f[d].split("=");if(c[0]==e){return unescape(c[1])}}},I:function(){var c=this;this.g=c.k("_jstar")||"";this.A()},_kv:function(d,c){this.j4=this.d(c).split(",");this.jv4="";for(var e=0;e<this.j4.length;e++){this.jv4+="&"+d+[e+1]+"="+this.j4[e]}return this.jv4},_vv:function(c,f,e){this.j3=this.d(c).split(",");this.jv=[];for(var d=0;d<this.j3.length;d++){this.jv[d]=encodeURIComponent(this.j3[d])}return _da="&"+f+"="+this.jv[0]+"&"+e+"="+this.jv[1]},A:function(){var e=this.g,d;if(_gtype=="2"){d="&od="+encodeURIComponent(this.m)}if(_gtype=="3"){d=this._vv(this.m,"od","mn")}if(_gtype=="9"){d=this._vv(this._k,"od","mn")+this._kv("f",this.m)+"&zid="+_zid}var c=window.gtmac;if(!c){c=""}this.url=this.t+"tp="+_gtype+e+d+"&gtmac="+c+"&r="+Math.random();this.n="t_"+(new Date()).getTime()+Math.random();this.img=window[this.n]=new Image(1,1);this.img.onload=(this.img.onerror=function(){window[this.n]=null});this.img.src=this.url;this.url=null;this.n=null;this.img=null}};var a=new b();a.init()})();