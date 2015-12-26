<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gest�o</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<style>
* { margin: 0px; padding: 0px; } 
html 		{ min-height: 100%; }

body { text-align: center; font-family: arial, verdana, sans-serif; font-size: 12px; color: #333; background:white url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_page.gif) no-repeat 50% 0; line-height:18px; }
p, h1, h2, h3, ol, ul, dl { padding:2px 6px 8px; }
ol,ul,dl 
h1, h2, h3, ol, ul, dl { padding:8px 6px 3px; }
table, th, td { font-family: arial, verdana, sans-serif; font-size: 12px; color: #333; }
ol, ul, dir, menu, dd       		{ margin-left: 40px }
ol              					{ list-style-type: decimal }
ol ul, ul ol, ul ul, ol ol    		{ margin-top: 0; margin-bottom: 0 }
blockquote { width:80%; margin:10px auto; padding:0 26px;  background:#FFF url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_blockquote_side.gif) no-repeat 0 50%; }
#skip 				{ display: none; }
a img, :link img, :visited img { border: none; }
img 				{}
a:link 				{ color: #C74848; text-decoration: underline; }
a:visited 			{ color: #333; text-decoration: underline; }
a:hover, a:active 	{ color: #DB7C7C; }

.alignright		{ text-align: right !important; }
.floatright		{ float: right; }
.inline			{ display: inline; }

.clear	{ clear: both;}

.clearfix:after { content:".";  height:0; clear:both; visibility:hidden; } 
.clearfix 		{  } 
/*\*/ .clearfix { display:block; } /**/ 

h1		{ font-size: 20px; line-height: 18px;  }
h2 		{ font-size:18px; }
h3		{ font-size: 16px; color: #666; }

#wrapper 		{ width:100%; margin:0 auto; }
#header 		{ position:relative; display:block; width:100%; height:102px; background:#FFF url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_header.gif) repeat-x; }
#header .logo 	{ position:absolute; left:40px; top:0px; }

#nav 			{ display:block; width:100%; height:26px; margin:0; padding:0; list-style:none; text-align:center; background:#A13D3D url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_nav.gif) repeat-x; }
#nav li 		{ float:left; width:150px;  }
#nav li a 		{ text-decoration:none; display:block; padding:0; padding:0; height:1%; line-height:26px; color:#FFF; }
#nav li.on 		{ display:block; padding:0; width:120px; height:26px; line-height:26px; background:url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_nav_on_2.gif) no-repeat 50% 0; color:#EFEFEF; }
#nav li a:hover { background:url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_nav_on.gif) no-repeat 50% 0; }

#content { width:100%; padding:50px 10px 0; min-height:543px; background:#FFF url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_content.gif) repeat-x; text-align:left;  }
* html #content, * html #content #col_1 { height:543px; }

#content #col_1 { width:20%; float:left; min-height:543px; background:url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_left.gif) no-repeat 100% 50%; }
#content #col_1 h2 { color:#999999; font-size:14px; font-weight:normal; }
#subnav, #subnav ul { margin:0; padding:0; list-style:none; }
#subnav li { }
#subnav li a { display:block; padding:5px 10px 5px 10px; height:1%; background:url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_subnav.gif) no-repeat 100% 100%; text-decoration:none }
#subnav li a:hover { background:#E9D1D1 url(<?=$staticvars['site_path'];?>/modules/admin_panel/layout/ems/bg_left_nav_on.gif) no-repeat 100% 0; text-decoration:none; }
#content #col_2 { width:80%; float:left; }

#footer { display:block; width:680px; padding: 10px 40px; margin:0 auto; background:#EEE9E8; -moz-border-radius:6px; }
#footer small {  }

.t_form { margin:20px; }
.t_form th { background:#efefef; }
.t_form td, .t_form th { padding:5px; border-bottom:1px solid #666; }

.form {
	margin:0px 0px 0px 0px;
}
.form .text {
	border:solid 1px #B6A278;
	background: #F9F8F2;
	padding:0px;
	font-size:14px;
	color:#000000;
}

.form label {
	margin-bottom:3px;
	margin-top:10px;
}

.form .text:hover{
	background:#FFFFFF;
	border: solid 1px #000000;
}
.form .text:focus {
	background:#F4EFE3; border: solid 1px #000000;
}
.form .button { 
	border:solid 1px #CBBA96;
	background:#EAE3D5;
	padding:0px 0px 0px 0px;
	margin:0px 0px 0px 0px;
}
.form .button:hover {
	border:solid 1px #CBBA96;
	background: #EDECD1;
	padding:0px 0px 0px 0px;
	margin:0px 0px 0px 0px;
}


</style>
<div id="wrapper">
  <div id="header"><h2 align="left"><?=$staticvars['name'];?></h2></div>
  <ul id="nav">
    <li><a href="<?=session($staticvars,'index.php');?>">Voltar</a></li>
  </ul>
  <div id="content" class="clearfix">
	<?php
    include($staticvars['local_root'].'modules/admin_panel/main.php');
    ?>
  </div>
</div>
</body>
</html>