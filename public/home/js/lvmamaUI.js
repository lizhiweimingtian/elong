(function($,d){
	var ui = {
		site : "http://pic.lvmama.com/js/ui/lvmamaUI/",//http://pic.lvmama.com/js/ui/lvmamaUI/
		js : function(temp1,url,callback){
			var var_key = url.substring(url.lastIndexOf("/")+1);
			var_key = var_key.indexOf("?")>0?var_key.substring(0,var_key.indexOf("?")):var_key;
			var_key = var_key.replace(/[^a-z0-9]/gi,"");
			if(temp1==false){
				typeof callback == 'function'&&callback();
				return;
			}
			if(!this.temp[var_key]){
				this.temp[var_key] = this.temp[var_key] || [];
			}
			this.temp[var_key].push(callback);
			if(document.getElementById(var_key)==null){
				var elt = d.createElement("script");
				elt.id = var_key;
				elt.anysc = true;
				elt.src = url;
				if(!d.all){
					elt.onload = function(){
						var tmp = ui.temp[var_key];
						for(var i=0;i<tmp.length;i++){
							typeof tmp[i] == 'function'&&tmp[i]();
						}
					}
				}else{
					elt.onreadystatechange = function(){
						if(this.readyState=='complete' || this.readyState=='loaded'){
							var tmp = ui.temp[var_key];
							for(var i=0;i<tmp.length;i++){
								typeof tmp[i] == 'function'&&tmp[i]();
							}
						}
					}
				}
				d.getElementsByTagName("head")[0].appendChild(elt);
			}
		},
		jsArr : function(arr,call){
			var loop = function(arr,i,call){
				if(i>=arr.length){
					typeof call == 'function' && call();
					return;
				}
				var elt = document.createElement("script");
				elt.anysc = true;
				elt.src = arr[i];
				elt.charset = "utf-8";
				if(elt.all){
					elt.onreadystatechange = function(){
						if(this.readyState=='complete' || this.readyState=='loaded'){
							i++;
							loop(arr,i,call);
						}
					}
				}else{
					elt.onload = function(){
						i++;
						loop(arr,i,call);
					}
				}
				d.getElementsByTagName("head")[0].appendChild(elt);
			}
			loop(arr,0,call);
		},
		css : function(temp1,url,callback){
			if(temp1==false){
				typeof callback == 'function'&&callback();
				return;
			}
			var id = (url.indexOf("?")==-1 ? url.substring(url.lastIndexOf("/")+1) : url.substring(url.lastIndexOf("/")+1,url.indexOf("?"))).replace(".css","");
			if(document.getElementById(id)){
				return;
			}
			var elt = d.createElement("link");
			elt.id = id;
			elt.rel = "stylesheet";
			elt.anysc = true;
			elt.href = url;
			if(!d.all){
				elt.onload = function(){
					typeof callback == 'function'&&callback();
				}
			}else{
				elt.onreadystatechange = function(){
					if(this.readyState=='complete' || this.readyState=='loaded'){
						typeof callback == 'function'&&callback();
					}
				}
			}
			d.getElementsByTagName("head")[0].appendChild(elt);
		},
		ie : function(){
			if($.browser.msie){
				return parseInt($.browser.version);
			}else{
				return 9999;
			}
		},
		getJSON : function(key,url,callback){
			this.js(!$[key],url,function(){
				typeof callback=='function'&&callback();
			})
		},
		cache : {
			
		},
		extend : {
			//扩展插件存储容器
		},
		temp : {
			//临时存放
		},
		get :{
			tab : function(opt){
				var _this = this;
				ui.js(!ui.extend.tab,ui.site+"plugin/jquery.tab.js",function(){
					ui.extend.tab.call(_this,opt);
				});
			},
			lazyload : function(opt){
				var _this = this;
				ui.js(!ui.extend.lazyload,ui.site+"plugin/jquery.lazyload.js",function(){
					ui.extend.lazyload.call(_this,opt);
				});
			},
			popDiv : function(opt){
				var thisObj = $(this);
				var selector = opt.to;
				ui.js(!thisObj.openDialog,ui.site+"plugin/jquery.dialog.js",function(){
					if(selector){
						delete opt.to;
						$(selector).click(function(){
							thisObj.openDialog(opt);
						});
					}else{
						thisObj.openDialog(opt);
					}					
				});
			},
			countdown : function(opt){
				var _this = this;
				ui.js(!ui.extend.countdown,ui.site+"plugin/jquery.countdown.js",function(){
					ui.extend.countdown.call(_this,opt);
				});
			},
			autoCompleteV2 : function(opt){
				/*var txt = $(this);
				//UI.css(true,"http://pic.lvmama.com/styles/new_v/ui_plugins/ui-components.css");
				ui.js(!txt.hotelAutocomplete,ui.site+"plugin/jquery.autocomplete.js",function(){
					txt.hotelAutocomplete(opt);
				});*/
				var _this = this;
				ui.js(!ui.extend.autoComplete,ui.site+"plugin/jquery.autocompleteV2.js",function(){
					ui.extend.autoComplete.call(_this,opt);
				});
			},
			autoCompleteV2FX : function(opt){
				/*var txt = $(this);
				//UI.css(true,"http://pic.lvmama.com/styles/new_v/ui_plugins/ui-components.css");
				ui.js(!txt.hotelAutocomplete,ui.site+"plugin/jquery.autocomplete.js",function(){
					txt.hotelAutocomplete(opt);
				});*/
				var _this = this;
				ui.js(!ui.extend.autoComplete,ui.site+"plugin/jquery.autocompleteV2FX.js",function(){
					ui.extend.autoComplete.call(_this,opt);
				});
			},
			autoComplete : function(opt){
				var txt = $(this);
				//UI.css(true,"http://pic.lvmama.com/styles/new_v/ui_plugins/ui-components.css");
				ui.js(!txt.hotelAutocomplete,ui.site+"plugin/jquery.autocomplete.js",function(){
					txt.hotelAutocomplete(opt);
				});
			},
			adAutoComplete : function(opt){
				var _this = this;
				UI.css(true,"http://pic.lvmama.com/js/ui/lvmamaUI/css/jquery.adAuto.css");
				ui.js(!ui.extend.adAutoComplete,ui.site+"plugin/jquery.adAutocomplete.js",function(){
					ui.extend.adAutoComplete.call(_this,opt);
				});
			},
			slideMenu : function(opt){
				var _this = this;
				ui.js(!ui.extend.slideMenu,ui.site+"plugin/jquery.slideMenu.js",function(){
					ui.extend.slideMenu.call(_this,opt);
				});
			},
			roller : function(opt){
				var _this = this;
				ui.js(!ui.extend.roller,ui.site+"plugin/jquery.roller.js",function(){
					ui.extend.roller.call(_this,opt);
				});
			},
			scrollImg : function(opt){
				var _this = this;
				ui.js(!ui.extend.scrollImg,ui.site+"plugin/jquery.scrollImg.js",function(){
					ui.extend.scrollImg.call(_this,opt);
				});
			},
			selectArea : function(opt){
				var _this = this;
				ui.js(!ui.extend.city,ui.site+"plugin/jquery.city.js",function(){
					ui.extend.city.call(_this,opt);
				});
			},
			lvtip : function(opt){
				UI.css(true,"http://pic.lvmama.com/styles/new_v/ob_common/ui-components.css");
				var _this = this;
				ui.js(!ui.extend.lvtip,ui.site+"plugin/jquery.lvtip.js",function(){
					ui.extend.lvtip.call(_this,opt);
				});
			},
			page : function(opt){
				var _this = this;
				ui.js(!ui.extend.page,ui.site+"plugin/jquery.page.js",function(){
					ui.extend.page.call(_this,opt);
				});
			},
			validate : function(opt){
				var _this = this;
				ui.js(!ui.extend.validate,ui.site+"plugin/jquery.validate.js",function(){
					ui.extend.validate.call(_this,opt);
				});
			},
			preview : function(opt){
				var _this = this;
				ui.js(!ui.extend.preview,ui.site+"plugin/jquery.preview.js",function(){
					ui.extend.preview.call(_this,opt);
				});
			},
			calendar : function(opt){
				ui.js(!window.WdatePicker,ui.site+"plugin/My97Date/WdatePicker.js",function(){
					if(opt){
						$(opt.input).each(function(){
							var This = $(this);
							This.live('click',function(){
								WdatePicker(opt.parm)
							})
							var WdatePickerBlur=true;
							This.blur(function(){
								if(WdatePickerBlur){
									setTimeout(function(){
										This.blur();
									},100);
									WdatePickerBlur = false;
								}
							});
						});
					}
				});
			},
			floatDiv : function(opt){
				var _this = this;
				ui.js(!ui.extend.floatDiv,ui.site+"plugin/jquery.floatDiv.js",function(){
					ui.extend.floatDiv.call(_this,opt);
				});
			},
			recommend : function(opt){
				var _this = this;
				ui.js(!ui.extend.recommend,ui.site+"plugin/jquery.recommend.js",function(){
					ui.extend.recommend.call(_this,opt);
				});
			},
			
			focusImg : function(opt){
				var _this = this;
				ui.js(!ui.extend.focusImg,ui.site+"plugin/jquery.focusImg.js",function(){
					ui.extend.focusImg.call(_this,opt);
				});
			},
			login : function(opt){
				UI.css(true,"http://pic.lvmama.com/styles/new_v/ob_login/l_login.css");
				if(this==UI){
					UI.js(!window.openLogin,"http://pic.lvmama.com/js/new_v/ob_login/l_fc_login.js",function(){
						openLogin(2);
					});
				}else{
					UI.js(!window.openLogin,"http://pic.lvmama.com/js/new_v/ob_login/l_fc_login.js");
					$(this).click(function(){
						openLogin(2);
					});
				}
			},
			register : function(opt){
				var elt = this;
				UI.css(true,"http://pic.lvmama.com/styles/new_v/ob_login/l_login.css");
				UI.js(!window.defaultCaptitalId,"http://pic.lvmama.com/js/new_v/ob_login/l_fc_code.js",function(){
					if(elt==UI){
						UI.js(!window.openLogin,"http://pic.lvmama.com/js/new_v/ob_login/l_fc_login.js",function(){
							openLogin(3);
						});
					}else{
						UI.js(!window.openLogin,"http://pic.lvmama.com/js/new_v/ob_login/l_fc_login.js");
						$(elt).click(function(){
							openLogin(3);
						});
					}
				});
			}
		},
		firstLoad : function(){
			$("head").append("<link rel='stylesheet' href='"+ui.site+"css/jquery.common.css'/>");
		}
	}
	$.fn.ui = function(type,opt){
		if(typeof ui.get[type]=='function'){
			opt = opt || {};
			this.each(function(){
				ui.get[type].call(this,opt);
			});
			
		}
		return this;

	},
	$.validate = function(obj,var_hz,callback){
		var_hz = var_hz || "";
		var d = document;
		var len=0;
		for(var n in obj){
			if(d.getElementById(n+var_hz)){
				len++;
			}
		}
		var i=0,j=0;
		for(var n in obj){
			var elt = d.getElementById(n+var_hz);
			if(elt){
				i++;
				var bl = common_validate.call(elt,obj[n],function(){
					j++;
					if(j==i && j==len){
						callback && callback();
					}
				});
				if(!bl){
					return false;
				}
			}
		}
		return true;
	}
	window.UI = ui;
	$(function(){
		ui.firstLoad();
	});
})(jQuery,document);