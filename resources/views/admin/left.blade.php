<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="admin/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="admin/js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(admin/img/main/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
<?php
      $userModel = new \App\User();
      $user = $userModel->find(Session::get('userData')->id);
      
?>
	<div><img src="<?php echo $user->avartar ?>" width="44" height="44" /></div>
    <span>用户：<?php echo $user->nickname ?><br>角色：
          <?php
              if($user->auth==0){
                  echo "普通管理员";
              }else{
                  echo "超级管理员";
              }
           ?>
  </span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>用户管理</span>
        <a href="/main" target="mainFrame" onFocus="this.blur()">网站统计</a>
        <a href="/adm/user" target="mainFrame" onFocus="this.blur()">列表页</a>
        <a href="/adm/user/create" target="mainFrame" onFocus="this.blur()">添加用户</a>
      </div>
       <div>
        <span>景区景点管理</span>
      
        <a href="/type_show" target="mainFrame" onFocus="this.blur()">分区景点管理</a>
        <a href="/type_addFather" target="mainFrame" onFocus="this.blur()">添加父分区</a>
        <a href="/type_addChild" target="mainFrame" onFocus="this.blur()">添加景点</a>
        <a href="/place_detail_list" target="mainFrame" onFocus="this.blur()">景点详情列表</a>
      </div>
      <div>
        <span>贴子管理</span>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">贴子列表</a>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">回收站</a>
  
      </div>
      <div>
        <span>网站配置</span>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">网站设置</a>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="/main_message" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      </div>
    </div>
</body>
</html>