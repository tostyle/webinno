<?php 
	namespace Controller;
	class ModalFirstPage
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