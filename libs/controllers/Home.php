<?php 
	namespace Controller;
	class Home
	{
		public function __construct()
		{

		}
		public function getContent( $model )
		{
			$content =$model->getData();
			return $content;
		}
	}