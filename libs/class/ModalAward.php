<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class ModalAward extends Content
	{
		public function __construct( $connect,$language )
		{
			$this->section="modal-award";
			parent::__construct( $connect,$language );
		}
		public function getData()
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' 
						{$this->enabled} {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		public function getNewOrder(){

			$this->sql="SELECT MAX(sequence)+1 NewOrder 
			FROM content WHERE section='{$this->section}'";
			$query = $this->connect->prepare($this->sql);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result['NewOrder'];
		}
	}