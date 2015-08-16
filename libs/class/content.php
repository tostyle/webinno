<?php
	namespace Model;
	use PDO;
	class Content
	{
		public $sql;
		public $connect;
		public $table;
		public $order;
		public $section;
		public $enabled;
		public $language;
		public $result;
		public function __construct( $connect )
		{
			$this->connect = $connect;
			$this->table= 'content';
			$this->getEnabled();
		}
		public function setLanguage( $language )
		{
			$this->language=" AND language IN ('{$language}','all') ";
		}
		public function setDataType($type)
		{
			$this->type = " AND type='{$type}' ";
		}
		public function getEnabled()
		{
			$this->enabled =" AND enabled='Y' ";
		}
		public function setDataSQL($filter='')
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' {$filter}
						{$this->enabled} {$this->order}";
			return $this->sql;
		}
		public function getData()
		{
			$this->setDataSQL();
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
		public function getDataByName( $name )
		{
			$filter =" AND name='{$name}'";
			$this->setDataSQL( $filter );
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
	}