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
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' 
						AND name='total-awards' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getDataByName( $name )
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' 
						AND name='{$name}' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getData()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='award' 
						AND type='text' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getPhoto()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' 
						AND name<>'logo-award' AND type='photo' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}