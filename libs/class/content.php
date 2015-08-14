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
		public function getEnabled()
		{
			$this->enabled =" AND enabled='Y' ";
		}
		public function getData()
		{

		}
	}