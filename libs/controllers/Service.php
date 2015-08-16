<?php 
	namespace Controller;
	class Service extends \Controller\Controller
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			return parent::setContentByID($datas);
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