<?php 
	namespace Controller;
	class Stat
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			foreach ($datas as $key => $content) {
				$index = $content['name'];
				$contents[ $index ] = $content['detail'];
			}
			return $contents;
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