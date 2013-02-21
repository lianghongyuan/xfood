<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中科| 格林保华食品安全溯源系统</title>
<link rel="stylesheet" href="<?php echo base_url('skin');?>/css/main.css">
<script src="<?php echo base_url('skin');?>/js/jquery.js"></script>
</head>
<body>
    <div id="page">
	<div id="header">
		<div id="head_title">
		</div>
		<div id="logo">
		</div>
		<div id="nav">
            <ul>
                <li class="nav_blank"></li>
                <li class="nav_home add_home"><a href="<?php echo base_url();?>" id="home_nav"><img src="<?php echo base_url('skin');?>/img/nav_indexBtn2-29x15.png" /></a></li>
                <li><a href="#"><img  src="<?php echo base_url('skin');?>/img/nav_Delimiter-6x9.png" /></a></li>
                <li class="nav_add"><a href="<?php echo base_url('index.php/add');?>" id="add_nav"><img src="<?php echo base_url('skin');?>/img/nav_productsBtn1-57x15.png" /></a></li>
            </ul>
		</div>
	</div>
        <div class="content">
        <div class="content_title">请输入产品编码:</div>
           <div class="search" >
        <form action="<?php echo base_url("index.php/glbh/result")?>" method="post">
        <div class="text"><input type="text"  name="key"  /></div>
        <div class="sumbit"><input type="image" src="<?php echo base_url('skin');?>/img/main_searchBtn-103x42.png" /></div>
        </form>
          </div>
        </div>
<div class="push"></div>
</div>
    <div id="footer">
    <ul>
    <li>
    <a><img src="<?php echo base_url('skin');?>/img/icon_Logo01-211x51.png" /></a>
    </li>
    <li>
    <a><img src="<?php echo base_url('skin');?>/img/icon_Logo02-251x53.png" /></a>
    </li>
    <li>
    <p >中国科学院深圳先进技术研究院  粤ICP备09002788号<br>深圳市南山区西丽深圳大学城学苑大道1068号 ,518055<br><img src="<?php echo base_url('skin');?>/img/icon_email 23x14.png" /> info@siat.ac.cn</p>
    </li>
    </ul>
    </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $(".nav_home").mousemove(function(){
   $("#home_nav").html("<img src='<?php echo base_url('skin');?>/img/nav_indexBtn2-29x15.png'/>");
   $(".nav_home").addClass("add_home");
   $("#add_nav").html("<img src='<?php echo base_url('skin');?>/img/nav_productsBtn1-57x15.png'/>");
   $(".nav_add").removeClass("add_home");
  });
  $(".nav_add").mousemove(function(){
   $("#add_nav").html("<img src='<?php echo base_url('skin');?>/img/nav_productsBtn2-57x15.png'/>");
   $(".nav_add").addClass("add_home");
    $("#home_nav").html("<img src='<?php echo base_url('skin');?>/img/nav_indexBtn1-29x15.png'/>");
   $(".nav_home").removeClass("add_home");
  });
});

</script>
