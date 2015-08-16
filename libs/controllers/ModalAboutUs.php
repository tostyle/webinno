<?php 
	namespace Controller;
	class ModalAboutUs extends \Controller\Controller
	{
		public function __construct()
		{

		}
		
		public function getContent( $model )
		{
			$content['mainContent']   = $this->getMainContent( $model );
			$content['detailContent'] = $this->getDetailContent( $model );
			return $content;
		}
		public function getMainContent( $model )
		{
			$contents =$model->getDataByName('aboutUs');
			return $contents;
		}
		public function getDetailContent( $model )
		{
			$contents =$model->getDataByName('aboutUs-detail');
			$contents = $this->setContentByID( $contents );
			return $contents;
		}
	}