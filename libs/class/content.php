<?php
	namespace Model;
	use PDO;
	class Content
	{
		public $sql;
		public $connect;
		public $table;
		public $order;
		public function __construct( $connect )
		{
			$this->connect = $connect;
			$this->table= 'content';
		}
		public function getData()
		{

		}
	}