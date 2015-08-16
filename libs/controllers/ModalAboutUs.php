<?php 
	namespace Controller;
	class ModalAboutUs
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			foreach ($datas as $key => $content) {
				$index = $content['section_id'];
				$contents[ $index ] = $content['detail'];
			}
			return $contents;
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
			$contents = $this->setContent( $contents );
			return $contents;
		}
	}