<?php 
	namespace Controller;
	class Menu
	{
		public function __construct()
		{

		}
		public function getContent( $menuModel )
		{
			$menus =$menuModel->getData();
			return $menus;
		}
	}