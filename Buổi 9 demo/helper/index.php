<?php 
	class Bar
		{
		    public function __construct()
		    {
		        echo 'Class Bar được khởi tạo';
		    }
		}

	class Foo extends Bar
		{
		    public function __construct()
		    {
		    	parent::__construct();
		        echo 'Class Foo được khởi tạo';
		    }
		}

$foo = new Foo();
?>