<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class ModalAboutUs extends Content
	{
		public function __construct( $connect )
		{
			$this->section="modal-aboutUs";
			parent::__construct( $connect );
		}
		public function getDataByName($name)
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}'  AND name='{$name}'
						{$this->enabled} {$this->order}";
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	}