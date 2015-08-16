<?php 
	namespace Controller;
	class ModalAward
	{
		public function __construct()
		{

		}
		public function getContent( $model )
		{
			$contents =$model->getData();
			return $contents;
		}
	}