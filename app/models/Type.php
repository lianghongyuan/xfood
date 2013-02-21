<?php
/**
* 
*author  ryan
*date     2012.11.08
*
**/
class Type extends CI_Model{
	//数据表名
	const table_name='type';
	//主键
	protected $id;
	//其他字段
	protected $type;
	protected $desc;
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
 
 
}
?>