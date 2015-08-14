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
		public function getDataByFilter()
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
						WHERE section='{$this->section}'  
						{$this->enabled}
						{$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getPhoto()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' 
						AND name='career-position-pic' AND type='photo' {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}