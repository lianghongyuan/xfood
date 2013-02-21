<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Glbh extends CI_Controller {

	 function __construct()
 {
  parent::__construct();
  $this->load->model('address','ad');
  $this->load->model('type','ty');
  date_default_timezone_set('Asia/Shanghai');
 }
 
  public function  add()
  {
	  
  }
}