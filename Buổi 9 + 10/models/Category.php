<?php 
require_once"core/Model.php";

class Category extends Model{
var $table ='categories';
	public function getList()
	{
	$categories =$this->select($this->table,['id','name','description','thumbnail']);
	return $categories;

	}
	public function create ($data){
		$status = $this->insert($this->table,$data);
		return $status;
	}
	public function find($id){
		$Category =$this->getId($this->table,$id);
		return $Category;
	}
}
//protected  $table ='categories';
//public function __construct(){
	//parent::__construct();
//}
?>