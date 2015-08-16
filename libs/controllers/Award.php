<?php 
	namespace Controller;
	class Award extends \Controller\Controller
	{
		public function __construct()
		{

		}
		public function setContent($datas)
		{
			// foreach ($datas as $key => $content) {
			// 	$index = $content['section_id'];
			// 	$contents[ $index ] = $content['detail'];
			// }
			$contents = parent::setContentByID($datas);
			return $contents;
		}
		public function getContent( $model )
		{
			$content['totalAward'] = $this->getTotalAward( $model );
			$content['logo']       = $this->getLogoContent( $model );
			$content['photo']      = $this->getPhotoContent( $model );
			$content['text']       = $this->getTextContent( $model );
			return $content;
		}
		public function getTextContent( $model )
		{
			$datas  = $model->getData();
			$contents = $this->setContent( $datas );
			return $contents;
		}
		public function getTotalAward($model)
		{
			$data = $model->getTotalAward();
			return $data['detail'];
		}
		public function getLogoContent( $model )
		{
			$datas = $model->getDataByName('logo-award');
			return $datas;
		}
		public function getPhotoContent( $model )
		{
			$photos  = $model->getPhoto();
			$contents = $this->setContent( $photos );
			return $contents;
		}
	}