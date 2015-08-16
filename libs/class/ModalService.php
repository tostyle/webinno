<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class ModalService extends Content
	{
		public function __construct( $connect )
		{
			$this->section="modal-service";
			parent::__construct( $connect );
		}
		public function getTotalModalService()
		{
				$this->sql="SELECT MAX(sequence) total
						FROM  {$this->table} 
						WHERE section='{$this->section}'
						{$this->enabled} {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result['total'];
		}
		public function getData($name)
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}'
						{$this->enabled} {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}