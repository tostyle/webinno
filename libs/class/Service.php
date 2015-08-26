<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Service extends Content
	{
		public function __construct( $connect )
		{
			parent::__construct( $connect );
			$this->section="service";
		}
		public function getTotalSequence()
		{
			$this->sql="SELECT MAX(sequence) Total FROM content WHERE section='service'";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result['Total'];
		}
		public function getData()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='service' 
						AND type='text' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getPhoto()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='service' 
						AND type='photo' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}