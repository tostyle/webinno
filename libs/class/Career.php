<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Career extends Content
	{
		public function __construct( $connect,$language )
		{
			$this->section = 'career';
			parent::__construct( $connect,$language );
		}
		public function getPhoto()
		{
			$this->setDataSQL(" AND name='career-position-pic' AND type='photo' ");
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getNewOrder(){

			$this->sql="SELECT MAX(sequence)+1 NewOrder 
			FROM content WHERE name='career-position'";
			$query = $this->connect->prepare($this->sql);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result['NewOrder'];
		}
	}