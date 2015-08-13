<?php 
	namespace Controller;
	class HomeLogo
	{
		public function __construct()
		{

		}
		public function getContent( $model )
		{
			$content =$model->getData();
			return $content;
		}
		public function getPhotoContent( $model )
		{
			$photos  = $model->getPhoto();
			$content = array();
			foreach ($photos as $key => $photo) {
				$index     = $photo['name'];
				$sectionID = $photo['section_id'];	
				$content[ $index ][ $sectionID ] = $photo['detail'];
			}
			return $content;
		}
	}