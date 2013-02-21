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
                <li class="nav_home add_home"><a href="<?php echo base_url();?>" id="home_nav">
                 <img src="<?php echo base_url('skin').'/img/nav_indexBtn2-29x15.png';?>" /></a></li>
                <li><a href="#"><img  src="<?php echo base_url('skin');?>/img/nav_Delimiter-6x9.png" /></a></li>
                <li class="nav_add"><a href="<?php echo base_url().'index.php/add';?>" id="add_nav"><img src="<?php echo base_url('skin');?>/img/nav_productsBtn1-57x15.png" /></a></li>
            </ul>
		</div>
	</div>
            <div class="content">
           <div class="product" >
  <?php if($result==null){ echo "所查询的产品编码不存在，请核对后再查询 " ;}else{ ?>
           <div class="form_prdocut">            
          <form id="goto"action="http://199.180.254.110/yum.php" method="post">
           <div class="rowElem"><label style="width:100px;">产品编码：</label><input disabled="disabled" type="text"  name="key"  size="26"  value="<?php echo $result->sku;?>" /></div>
        <div class="rowElem"><label style="width:100px;">产品名称：</label><input disabled="disabled" type="text"  name="key"  size="26" value="<?php echo $result->name;?>" /></div>
          <div class="rowElem"><label style="width:100px;">产品产地：</label><input disabled="disabled" type="text"  name="key"  size="26" value="<?php echo $result->address;?>"/></div>
           <div class="rowElem"><label style="width:100px;">库存地：  </label><input disabled="disabled" type="text"  name="key"  size="26" value="<?php echo $result->storehouse;?>"/></div>
          <div class="rowElem"> <label style="width:100px;">配送点：</label><input disabled="disabled" type="text"  name="key"  size="26" value="<?php echo $result->point;?>"/></div>
          <div class="rowElem"><label  style="width:100px;"> 零售点：</label><input disabled="disabled" type="text"  name="key"  size="26" value="<?php echo $result->shop;?>"/></div>
   <div class="rowElem">
     <label style="width:100px;">生产日期：</label>
     <input disabled="disabled" type="text"  name="key"  size="20" value="<?php echo date('Y年m月d日',$result->date);?>" />
           <input type="image" id="postvideo"  src="<?php echo base_url('skin');?>/img/main_btnData-25x24.png" style=" padding-left:2px;width:25px; height:24px;"/>
     </div>
     
     <div class="rowElem">
     <label style="width:100px;">被查询时间：</label>
     <input disabled="disabled" type="text"  name="key"  size="26" value="<?php if($result->querydate!=null){echo date('Y-m-d H:i:s',$result->querydate);} if($result->querytimes!=null){echo "(次数): ".$result->querytimes."次";} ?>" />
     </div>
     <input type="hidden" name="username" value="sonfish" />
     <input type="hidden" name="password" value="123456" />
     <input type="hidden" name="ylyum" value="监控云" />
          </form>
                     
            </div>
          <div class="qr_product">
           <?php   echo "<img src='".base_url().$result->qrurl."' />";?>
           
</div>
<?php }?>
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
