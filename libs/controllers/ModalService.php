<?php 
	namespace Controller;
	class ModalService extends \Controller\Controller
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
			$datas =$model->getData();
			$contents = $this->setContent( $datas );
			return $contents;
		}
	}