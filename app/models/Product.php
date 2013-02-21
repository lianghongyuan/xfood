<?php
/**
* 
*author  ryan
*date     2012.11.08
*
**/
class Product extends CI_Model{
	//数据表名
	const table_name='product';
	//主键
	protected $id;
	//其他字段
	protected $name;
	protected $sku;
	protected $address;
	protected $ackerland;
	protected $quality;
	protected $date;
	protected $certifi;
	//把其他字段作为数组
	protected $data;
	function __construct()
	{
	 parent::__construct();		
	}
	//设置主键
    function set_ID($id)
    {
     $this->id=$id;		
    }
	function get_ID()
	{
	 return $this->id;	
	}
    //设置产品名称
    function set_Name($name)
    {
     $this->name=$name; 	
    }
	function get_Name()
	{
	 return $this->name;	
	}
	//设置产品编号
	function set_Sku($sku)
	{
	 $this->sku=$sku;	
	}
	function get_Sku($sku)
	{
		return $this->sku;
	}
	//设置产品产地
	function set_Address($address)
	{
	  $this->address=$address;
	}
	function get_Address()
	{
	  return $this->address;
	}
	//设置农场信息
	function set_Ackerland($ackerland)
	{
		$this->ackerland=$ackerland;
	}
	function get_Ackerland()
	{
	    return $this->ackerland;	
	}
	//设置质检信息
	function set_Quality($quality)
	{
		$this->quality=$quality;
	}
	function get_Quality()
	{
	    return $this->quality;	
	}
	//设置认证信息
	function set_Certifi($certifi)
	{
		$this->certifi=$certifi;
	}
	function get_Certifi()
	{
	    return $this->certifi;	
	}
	//设置字段数组
	function set_Data($data)
	{
		$this->data=$data;
	}
	function get_Data($data)
	{
		return $this->data;
	}
    //新增记录
	public function create(){
	$this->db->insert(self::table_name,$this->data);	
	}
	//更新记录
	public function update(){
	$this->db->where('id', $this->id);
	$this->db->update(self::table_name,$this->data);
}
   //删除记录
    public function delete(){
    $this->db->where('id', $this->id);
	$this->db->delete(self::table_name);	
    }
   //读取记录
    public function read(){
    $this->db->where('id', $this->id);
    return $this->db->get(self::table_name);	
    }
    //搜索产品编号
    public function  search($key){ 
	$this->db->where('sku',$key);
	$this->db->limit(1);
	return $this->db->get(self::table_name)->row();	
	}
	//更新查询时间以及查询次数
	public function  update_query($sku)
	{
	 $this->db->where('sku',$sku);
	 $this->db->update(self::table_name,$this->data);
	}
 
}
?>