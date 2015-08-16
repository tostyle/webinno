<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class Career extends Content
	{
		public function __construct( $connect )
		{
			$this->section = 'career';
			parent::__construct( $connect );
		}
		public function getPhoto()
		{
			$this->setDataSQL(" AND name='career-position-pic' AND type='photo' ");
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}