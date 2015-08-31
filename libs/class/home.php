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
		public function initialData(){
			$this->setDataSQL();
			$query = $this->connect->prepare($this->sql);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			$result['section_id']=substr($result['section_id'],-1);
			return $result;
		}
		public function getNewOrder(){

			$this->sql="SELECT MAX(sequence)+1 NewOrder 
			FROM content WHERE section='{$this->section}'";
			$query = $this->connect->prepare($this->sql);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result['NewOrder'];
		}
	}