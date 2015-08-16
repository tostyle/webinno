<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Menu extends Content
	{
		public function __construct( $connect )
		{
			$this->section='menu';
			parent::__construct( $connect );
		}
	}