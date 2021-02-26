<?php 
/**
 * 
 */

require_once('Model.php');
class Post extends Model
{
	public function __construct(){
		$this->table = 'posts';
		parent::__construct();
	}
}

 ?>