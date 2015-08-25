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
		public function getAllSection(){
			$this->sql="SELECT section fROM content GROUP BY section";
			$query = $this->connect->prepare($this->sql);
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;

		}
	}