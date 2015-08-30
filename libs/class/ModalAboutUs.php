<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class ModalAboutUs extends Content
	{
		public function __construct( $connect,$language )
		{
			$this->section="modal-aboutUs";
			parent::__construct( $connect,$language );
		}
	}