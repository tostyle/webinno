<?php 
namespace Model;
	require_once('content.php');
	
	use PDO;
	class ModalCareer
	{
		public function __construct( $language )
		{
			$this->language = $language;
		}
		/**
		 * 
		 * [getData description]
		 * @return [type] [description]
		 */
		// 		Full name
		// Address
		// Tel
		// Cell phone
		// Email
		// Recede Position
		// Education
		// Hobbies

		public function getData( $language ){
			if($language =='th'){
					$data['head'] = "สมัครงานตำแหน่ง";
					$data['name'] = 'ชื่อ - สกุล';
					$data['address'] = 'ที่อยู่';
					$data['tel'] = 'โทรศัพท์';
					$data['mobile'] = 'มือถือ';
					$data['email'] = 'อีเมล์';
					$data['position'] = 'ตำแหน่งที่สนใจ';
					$data['education'] = 'ประวัติการศึกษา';

			}
			else{
				$data['head'] = "Register to ";
				$data['name'] = 'Full Name';
					$data['address'] = 'Address';
					$data['tel'] = 'Tel';
					$data['mobile'] = 'Cell phone';
					$data['email'] = 'Email';
					$data['position'] = 'Recede Position';
					$data['education'] = 'Hobbies';
			}
			$this->data =$data;
			return $data;
		
		}
	}