/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
                           
/**
 * 首页图片轮播
 * @type Array
 */
var bannerAD=new Array(); 
var bannerADlink=new Array(); 
var adNum=0; 

bannerAD[0]="/home/img/sy01-hynt-qg.jpg"; 
bannerADlink[0]=""; 
bannerAD[1]="/home/img/sy02-zmy-sh.jpg"; 
bannerADlink[1]=""; 
bannerAD[2]="/home/img/sy03-gb-bj.jpg"; 
bannerADlink[2]=""; 
bannerAD[3]="/home/img/sy07-hy-bj.jpg"; 
bannerADlink[3]=""; 
bannerAD[4]="/home/img/sy04-sq-bj.jpg"; 
bannerADlink[4]=""; 


var preloadedimages=new Array(); 
for (i=1;i<bannerAD.length;i++){ 
preloadedimages[i]=new Image(); 
preloadedimages[i].src=bannerAD[i]; 
} 

function setTransition(){ 
if (document.all){ 
bannerADrotator.filters.revealTrans.Transition=Math.floor(Math.random()*23); 
bannerADrotator.filters.revealTrans.apply(); 
} 
} 

function playTransition(){ 
if (document.all) 
bannerADrotator.filters.revealTrans.play() 
} 

function nextAd(){ 
if(adNum<bannerAD.length-1)adNum++ ; 
else adNum=0; 
setTransition(); 
document.images.bannerADrotator.src=bannerAD[adNum]; 
playTransition(); 
theTimer=setTimeout("nextAd()", 5000); 
} 

function jump2url(){ 
jumpUrl=bannerADlink[adNum]; 
jumpTarget='_blank'; 
if (jumpUrl != ''){ 
if (jumpTarget != '')window.open(jumpUrl,jumpTarget); 
else location.href=jumpUrl; 
} 
} 
function displayStatusMsg() { 
status=bannerADlink[adNum]; 
document.returnValue = true; 
} 

/**
 * 首页头部左侧版块切换
 * @param {type} n
 * @returns {undefined}
 */
     function secBoard(n)
  {   //首页头部左侧版块切换
      var div_list= document.getElementById('div_list');
      var nba =div_list.getElementsByClassName('lv_s_list');
      
            for(i=0;i<nba.length;i++){
                if(i ===n){
                    nba[n].style.display="block";
                }else{
                nba[i].style.display="none";
            }
            }
              
  }




                            
                            

