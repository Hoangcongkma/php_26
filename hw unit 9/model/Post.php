<?php 
/**
 * 
 */

require_once('Model.php');
class Post extends Model
{
	var $table = 'posts';
	function getAll(){
		return $this->select($this->table);
	}
}

 ?>