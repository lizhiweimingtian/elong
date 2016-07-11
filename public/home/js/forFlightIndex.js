$(function() {
	var flag = false;
	if(null == window.localStorage.getItem('searchCondition')){
		$.ajax({
		   type: "GET",
		   async: false,
		   url: "http://flight.lvmama.com/tosearch/index/ip",
		   dataType: 'jsonp',
		   jsonp: "jsonpCallback",
		   success: function(data){
			   for(var i=0;i<allCities.length;i++){
			        if(data.city==allCities[i].split("|")[0]){
			            $("#deptCity").val(data.city);
			            $("#departureAirportCode").val(allCities[i].split("|")[3]);
			            flag = true;
			            break;
			        }
				}
			   if(!flag){
				   $("#deptCity").val("上海");
				   $("#departureAirportCode").val("SHA");
				   $("#arrvCity").val("北京");
				   $("#arrivalAirportCode").val("PEK");
			   }
		   },
	//	   error:function(e){
	//		   alert("1111");
	//	   }
		});
		
		$.ajax({
			   type: "GET",
			   async: false,
			   url: "http://flight.lvmama.com/tosearch/index/time",
			   dataType: 'jsonp',
			   jsonp: "jsonpCallback",
			   success: function(data){
				   $("#goDate").val(data.departTime);
				   $(".tomorrow").html(getDayOfWeek(data.departTime));
			   }
		});
	}
	
	
	
    	//填充默认搜索条件	
		fillSearchCondition();
		
		
        // 搜索
        $(".ft-search-btn").on("click", function(e) {
            e.stopPropagation();
            if (validateFtInput()) {
                var deptCity=$("#deptCity").val();
        		var arrvCity=$("#arrvCity").val();
        		var deptAirportCodeFlag = false;
        		var arrvAirportCodeFlag = false;
        		//'北京|beijing|bj|PEK'
                for(var i=0;i<allCities.length;i++){
                    if(allCities[i].indexOf(deptCity)!=-1){
                        deptCity=allCities[i].split("|")[3];
                        $("input[name='departureAirportCode']").val(deptCity);
                        deptAirportCodeFlag = true;
                        break;
                    }
                }
                
                for(var i=0;i<allCities.length;i++){
                    if(allCities[i].indexOf(arrvCity)!=-1){
                        arrvCity=allCities[i].split("|")[3];
                        $("input[name='arrivalAirportCode']").val(arrvCity);
                        arrvAirportCodeFlag = true;
                        break;
                    }
                }
                if(deptAirportCodeFlag == false || arrvAirportCodeFlag == false){
                	$("input[name='departureAirportCode']").val("UNKNOW");
                	$("input[name='arrivalAirportCode']").val("UNKNOW");
                }else{
                	writeSearchRecord();
                }
                var departureAirportCode=$("#departureAirportCode").val();//departureAirportCode
                var arrivalAirportCode=$("#arrivalAirportCode").val();//arrivalAirportCode
                var routeType=$("#routeType").val();//routeType
                var goDate = $("#goDate").val();
                var backDate = $("#backDate").val();
                if("OW"==routeType){
                	var url = "http://flight.lvmama.com/booking/"+departureAirportCode+"-"+arrivalAirportCode+".html?date1="+goDate+"&date2="+backDate+"&routeType="+routeType
        			+"&departureCityCode="+departureAirportCode+"&arrivalCityCode="+arrivalAirportCode+"&cancelSelected=false"+"&losc=091272&ict=i";
                	window.open(url);
                } else {
                	var url = "http://flight.lvmama.com/booking/round_"+departureAirportCode+"-"+arrivalAirportCode+".html?date1="+goDate+"&date2="+backDate+"&routeType="+routeType
        			+"&departureCityCode="+departureAirportCode+"&arrivalCityCode="+arrivalAirportCode+"&uuid=&cancelSelected=false"+"&losc=091272&ict=i";
                	window.open(url);
                }
            }
        });

    });
    
    
    
    //记录搜索历史
    function writeSearchRecord(){
        var searchCondition = $("#routeType").val()+"|"+$("#departureAirportCode").val()+"|"+$("#arrivalAirportCode").val()+"|"+$("#goDate").val()+"|"+$("#backDate").val();
        
        if(window.localStorage){
        	//console.log('记录搜索条件='+searchCondition);
        	window.localStorage.setItem('searchCondition',searchCondition);
        }
    }
    
    //首页默认打开时，把搜索条件填充到页面
    function fillSearchCondition(){
    	//1、根据用户搜索历史记录，且Cookie没有清理掉，显示上次搜索过的航程类型，出发、到达城市及出发、往返时间
    	if(window.localStorage){
    		var searchCondition = window.localStorage.getItem('searchCondition'); 
    		if(searchCondition != null && searchCondition != ''){
	    		var routeType = searchCondition.split('|')[0];
	    		var deptCityCode = searchCondition.split('|')[1];
	    		var arrvCityCode = searchCondition.split('|')[2];
	    		var goDate = searchCondition.split('|')[3];
	    		var backDate = searchCondition.split('|')[4];
	    		
	    		$("#routeType").val(routeType);
	    		if(routeType == 'OW'){
	    			$("#owButton").trigger("click");
	    		}else if(routeType == 'RT'){
	    			$("#rtButton").trigger("click");
	    		}
	    		
	    		$("#departureAirportCode").val(deptCityCode);
	    		for(var i=0;i<allCities.length;i++){
                    if(allCities[i].indexOf(deptCityCode)!=-1){
                        var deptCity=allCities[i].split("|")[0];
                        $("#deptCity").val(deptCity);
                        break;
                    }
                }
	    		
	    		$("#arrivalAirportCode").val(arrvCityCode);
	    		for(var i=0;i<allCities.length;i++){
                    if(allCities[i].indexOf(arrvCityCode)!=-1){
                        var arrvCity=allCities[i].split("|")[0];
                        $("#arrvCity").val(arrvCity);
                        break;
                    }
                }

	    		$.ajax({
	 			   type: "GET",
	 			   async: false,
	 			   url: "http://flight.lvmama.com/tosearch/index/time",
	 			   dataType: 'jsonp',
	 			   jsonp: "jsonpCallback",
	 			   success: function(data){
	 				  serverNowDate = getBeforeDay(data.departTime);
	 				  serverNextDate = data.departTime;
	 				  if((new Date(serverNowDate.replace(/-/g,"\/"))) > (new Date(goDate.replace(/-/g,"\/")))){
	 					 goDate = serverNextDate;
	 					 backDate = getThreeDay(goDate)
			    	  }
	 				  	$("#goDate").val(goDate);
	 					var goDayWeek = getDayOfWeek(goDate);
	 					$(".tomorrow").html(goDayWeek);
	 					
	 					if(getDayOfWeek(backDate) != null){
			    			$(".dayAfter3").html(getDayOfWeek(backDate));
			    		}
			    		$("#backDate").val(backDate);
			    		return;
	 				  
	 			   }
	    		});
    		}
    	}
		
    	//$("#deptCity").val("上海");
		//$("#departureAirportCode").val("SHA");
		//$("#arrvCity").val("北京");
		//$("#arrivalAirportCode").val("PEK");
		
		//获取当前日期加1天
		/**if(null == $("#goDate").val() || "" == $("#goDate").val()){
			var nowDate = new Date().getTime();
			nowDate = nowDate+1000*60*60*24;
			nowDate = new Date(nowDate);
			var year = nowDate.getFullYear();
			var month = nowDate.getMonth()+1;
			var date = nowDate.getDate();
			var fromDate = year+"-"+month+"-"+date;
			$("#goDate").val(fromDate);
		}*/
		
    }
    
    /**
	 * getDayOfWeek 返回星期
	 * @param {string} date 格式:"YYYY-MM-DD"
	 */
	function getDayOfWeek(date){
	    var nowDay;
	    if (date) {
	        var dayArray = date.split("-");
	        nowDay = new Date(parseInt(dayArray[0], 10), parseInt(dayArray[1], 10) - 1, parseInt(dayArray[2], 10));
	    } else {
	        nowDay = new Date();
	    }
	    
	    var day = nowDay.getDay();
	    var dayArray = ["星期天","星期一","星期二","星期三","星期四","星期五","星期六"];
	    return dayArray[day];
	}

	
	
	Date.prototype.Format = function(formatStr){   
	    var str = formatStr;   
	    str=str.replace(/yyyy|YYYY/,this.getFullYear());   
	    str=str.replace(/MM/,(this.getMonth()+1)>9?(this.getMonth()+1).toString():'0' + (this.getMonth()+1));   
	    str=str.replace(/dd|DD/,this.getDate()>9?this.getDate().toString():'0' + this.getDate());   
	    return str;   
	} 
	
	//获取当前时间-1天
	function getBeforeDay(d){
       d = new Date(d).getTime();       
       d = d - 1000*60*60*24;
       d = new Date(d).Format("yyyy-MM-dd");     
       return d;      
    } 
	
	//获取当前时间+2天
	function getThreeDay(d){
        d = new Date(d).getTime();
        d = d + 3*1000*60*60*24;
        d = new Date(d).Format("yyyy-MM-dd");
        return d;      
    } 
		

