<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中科| 格林保华食品安全溯源系统</title>
<link rel="stylesheet" href="<?php echo base_url('skin');?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('skin');?>/css/jscal2.css" />
<script src="<?php echo base_url('skin');?>/js/jquery.js"></script>
<script src="<?php echo base_url('skin');?>/js/jscal2.js"></script>
<script src="<?php echo base_url('skin');?>/js/lang/en.js"></script>
<link rel="stylesheet" href="<?php echo base_url('skin');?>/css/jqtransform.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url('skin');?>/js/jquery.jqtransform.js" ></script>
<script language="javascript">
$(function(){
$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
});
</script>
    
    <script type="text/javascript">
$(document).ready(function(){
  $("#add").click(function(e){
  var name=$("#name").val();
  var storehouse=$("#storehouse").val();
  var point=$("#point").val();
  var shop=$("#shop").val();
  var address=$("#address").val();
  var date=$("#f_date1").val();
     if(date==null||address==null||shop==null||point==null||storehouse==null||name==null)
{
  alert("输入不能为空")
}
else{
  $.post("<?php echo base_url("index.php/insert")?>",{name:name,storehouse:storehouse,point:point,shop:shop,address:address,date:date},function(result){     
 $(".qr_product").html(result);
  });
}
  });
});
</script>
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
                <li class="nav_home"><a href="<?php echo base_url();?>" id="home_nav"><img src="<?php echo base_url('skin');?>/img/nav_indexBtn1-29x15.png" /></a></li>
                <li><a href="#"><img  src="<?php echo base_url('skin');?>/img/nav_Delimiter-6x9.png" /></a></li>
                <li class="nav_add add_home"><a href="<?php echo base_url().'index.php/add';?>" id="add_nav"><img src="<?php echo base_url('skin');?>/img/nav_productsBtn2-57x15.png" /></a></li>
            </ul>
</div>
</div>
   <div class="content">
           <div class="product" >
           <div class="form_prdocut">
        <form action="" method="post">
      <div class="rowElem"><label style="width:80px;">产品名称：</label><input type="text"  id="name"  size="26" /></div>
        <div class="rowElem"><label >产品产地：</label><select id="address" style="width:210px;">
<option selected="selected" value="0">请选择产品产地</option>
<option  value="SZ">深圳</option>
<option  value="GZ">广州</option><option  value="DG">东莞</option>
</select><img  src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/></div>
         <div class="rowElem"><label style="width:80px;">库存地：  </label><select id="storehouse" style="width:210px;">
<option selected="selected" value="0">请选择库存地</option>
<option  value="001">深圳</option>
<option  value="112">广州</option><option  value="122">东莞</option>
</select><img  src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/></div>
        <div class="rowElem"> <label style="width:80px;">配送点：</label> <select id="point" style="width:210px;">
<option selected="selected" value="0">请选择配送地</option>
<option  value="001">深圳</option>
<option  value="112">广州</option><option  value="122">东莞</option>
</select><img  src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/></div>
 <div class="rowElem"><label  style="width:80px;"> 零售点：</label><select id="shop" style="width:210px;"><option selected="selected" value="0">请选择零售点</option>
<option  value="10">华美店</option>
<option  value="21">朝阳店</option><option  value="13">家乐福</option>
<option  value="11">人人乐</option>
<option  value="09">沃尔玛</option>
</select><img  src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/></div>
 <div class="rowElem">
   <label style="width:80px;">生产日期：</label>
   <input id="f_date1" name="date" type="text" class="medium"  size="23" style="color:#333;"/> 
   <img id="f_btn1" src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/>
 <script type="text/javascript">
                   Calendar.setup({
        inputField : "f_date1",
        trigger    : "f_btn1",
        onSelect   : function() { this.hide() },
        showTime   : 24,
        dateFormat : "%Y-%m-%d"
      });
   </script>
   </div>
        </form>
        <div style="margin:0 auto; width:103px; padding-left:250px; padding-top:30px;" ><input  id="add" type="image" src="<?php echo base_url('skin');?>/img/main_CreatBtn-103x42.png"  style="width:103px; height:42px;" /></div>
          </div>
          
          <div class="qr_product"></div>
          </div>
<div style="clear:both"></div>
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
