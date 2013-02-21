<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Glbh extends CI_Controller {

	 function __construct()
 {
  parent::__construct();
  $this->load->model('product','pro');
  date_default_timezone_set('Asia/Shanghai');
 }

    //默认首页展示
	public function index()
	{
		$this->load->view('index');
	}
	//添加产品信息页面展示
	public function add()
	{
	 $this->load->view('add');	
	}
	//生成sku编码
	public function createSKU($address,$storehouse,$point,$shop,$date)
	{
	  $strtime=date('ymd',$date);
	  return strtoupper($address).$strtime.$storehouse.$point.$shop.rand(100000,999999);
	}
	//添加产品信息操作
	public function insert()
{
     $this->load->library('image_lib');
$this->load->library('Hqrcode');
$name=$this->input->post('name');
$address=$this->input->post('address');
$storehouse=$this->input->post('storehouse');
$point=$this->input->post('point');
$shop=$this->input->post('shop');
$address_array=array('SZ'=>'深圳','GZ'=>'广州','DG'=>'东莞');
$storehouse_array=array('001'=>'深圳','112'=>'广州','122'=>'东莞');
$point_array=array('001'=>'深圳','112'=>'广州','122'=>'东莞');
$shop_array=array('10'=>'华美店','21'=>'朝阳店','13'=>'家乐福','11'=>'人人乐','09'=>'沃尔玛');
$date=strtotime($this->input->post('date'));
$sku=$this->createSKU($address,$storehouse,$point,$shop,$date);
$value=base_url().'index.php/glbh/mobile?id='.$sku;
$codeurl='temp/'.$sku.'.png';
$this->hqrcode->set_QRcode($value,$codeurl);
$bcodeurl='temp/'.$sku.'.jpg';
/*
      header("Content-type: image/jpeg");
      $im = @imagecreate(170, 170)or die("Cannot Initialize new GD image stream");
      imagejpeg($im,$bcodeurl);
      imagedestroy($im);  
//图片水印
$conf['source_image'] =$bcodeurl;
$conf['wm_type'] = 'overlay';
     $conf['wm_overlay_path'] =$codeurl;
$conf['wm_opacity'] = '100';
$conf['padding'] = '1';
     $conf['wm_vrt_alignment'] = 'bottom';
     $conf['wm_hor_alignment'] = 'center';
     $conf['wm_vrt_offset'] = '1';
     $conf['wm_padding'] = '1';
      $this->image_lib->initialize($conf); 
      $this->image_lib->watermark();
*/
$data=array('name'=>$name,
            'sku'=>$sku,
'address'=>$address_array[$address],
'storehouse'=>$storehouse_array[$storehouse],
'date'=>$date,
'point'=>$point_array[$point],
'shop'=>$shop_array[$shop],
'vcode'=>rand('100000000','999999999'),
'qrurl'=>$codeurl);
$this->pro->set_Data($data);
$this->pro->create();
echo "<img src='".base_url().$codeurl."'/>";
}
	//查询产品编码
	public function result()
	{
	 $result=$this->pro->search($this->input->post('key'));
		if($result)
		{
		
		 if($result->querytimes==null)
		 {
			 $times=1;
		 }
		 else{
			 $times=$result->querytimes+1;
		 }
		 $this->pro->set_Data(array('querydate'=>time(),'querytimes'=>$times));
		 $this->pro->update_query($this->input->post('key'));
		 $data['result']=$result;	
		}
		else{ 
		$data['result']=null;	
		}
		;
	    $this->load->view('result',$data);
	     
	}
  public  function mobile()
{
     $sku=$this->input->get('id');
$result=$this->pro->search($sku);
		if($result)
		{
		
		 if($result->querytimes==null)
		 {
			 $times=1;
		 }
		 else{
			 $times=$result->querytimes+1;
		 }
		 $this->pro->set_Data(array('querydate'=>time(),'querytimes'=>$times));
		 $this->pro->update_query($this->input->post('key'));
		 $data['result']=$result;	
		}
		else{ 
		$data['result']=null;	
		}
		;
	    $this->load->view('mobile',$data);
}

}
