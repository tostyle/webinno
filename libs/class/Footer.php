<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Footer extends Content
	{
		public function __construct( $connect,$language )
		{
			$this->section = 'footer';
			parent::__construct( $connect,$language );
		}
	
	}