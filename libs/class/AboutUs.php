<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class AboutUs extends Content
	{
		public function __construct( $connect ,$language)
		{
			$this->section="aboutUs";
			parent::__construct( $connect ,$language);
		}
		public function getData()
		{
			$this->setDataSQL("AND type='text'");
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getPhoto()
		{
			$this->setDataSQL("AND type='photo'");
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}