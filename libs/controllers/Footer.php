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
			if($this->language =='th')
				$contents['download_map'] = 'ดาวโหลดแผนที่';
			else
				$contents['download_map'] = 'Download Map';
			
			return $contents;
		}
		public function getContent( $model )
		{
			$this->language = $model->language;
			$datas  = $model->getData();
			$contents = $this->setContent( $datas );
			return $contents;
		}
	}