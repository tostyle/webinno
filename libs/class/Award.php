<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Award extends Content
	{
		public function __construct( $connect )
		{
			$this->section = 'award';
			parent::__construct( $connect );
		}
		public function getTotalAward()
		{
			$this->sql = $this->setDataSQL( " AND name='total-awards' " );
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getData()
		{
			$filter = " AND type='text'";
			$this->setDataSQL($filter);
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getPhoto()
		{
			$filter = " AND name<>'logo-award' AND type='photo'";
			$this->setDataSQL($filter);
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}