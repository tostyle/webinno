<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Home extends Content
	{
		public function __construct( $connect ,$language)
		{
			$this->section='home';
			parent::__construct( $connect,$language );
		}
	}