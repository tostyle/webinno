<?php 
	namespace Controller;
	class Stat extends \Controller\Controller
	{
		public function __construct()
		{

		}
		
		public function getContent( $model )
		{
			$datas =$model->getData();
			$contents = $this->setContent( $datas );
			return $contents;
		}
		public function getPhotoContent( $model )
		{
			$photos  = $model->getPhoto();
			$contents = $this->setContent( $photos );
			return $contents;
		}
	}