<?php 
	namespace Controller;
	class Footer
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			foreach ($datas as $key => $content) {
				$type  = $content['type'];
				$index = $content['section_id'];
				$name  = $content['name'];
				$contents[ $index ] = $content['detail'];
			}
			return $contents;
		}
		public function getContent( $model )
		{
			$datas  = $model->getData();
			$contents = $this->setContent( $datas );
			return $contents;
		}
	}