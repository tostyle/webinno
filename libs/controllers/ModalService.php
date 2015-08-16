<?php 
	namespace Controller;
	class ModalService
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			foreach ($datas as $key => $content) {
				$index = $content['name'];
				$sectionID = $content['section_id'];
				$contents[ $index ][ $sectionID ] = $content['detail'];
			}
			return $contents;
		}
		public function getContent( $model )
		{
			$contents =$model->getData();
			$contents = $this->setContent( $contents );
			return $contents;
		}
	}