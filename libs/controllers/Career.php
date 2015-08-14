<?php 
	namespace Controller;
	class Career
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
				$contents[ $type ][ $index ] = $content['detail'];
				if($content['name'] =='career-position')
					$contents[ $type ][ $name ][ $index ] = $content['detail'];
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