<?php 
	namespace Controller;
	class Controller
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
			$contents = $this->setContent( $photos );
			return $contents;
		}
		public function setContent($datas)
		{
			$contents = $this->setContentByName( $datas );
			return $contents;
		}
		public function setContentBy($datas,$type)
		{
			foreach ($datas as $key => $content) {
				$index = $content[ $type ];
				$contents[ $index ] = $content['detail'];
			}
			return $content;
		}
		public function setContentByID($datas)
		{
			foreach ($datas as $key => $content) {
				$index = $content['section_id'];
				$contents[ $index ] = $content['detail'];
			}
			return $contents;
		}
		public function setContentByName($datas)
		{
			foreach ($datas as $key => $content) {
				$index = $content['name'];
				$contents[ $index ] = $content['detail'];
			}
			return $contents;
		}
	}