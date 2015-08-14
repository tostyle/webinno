<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Home extends Content
	{
		public function __construct( $connect )
		{
			parent::__construct( $connect );
		}
		public function getData()
		{
			$this->sql="SELECT * FROM {$this->table} WHERE section='home' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}