<?php
	namespace Model;
	use PDO;
	class Content
	{
		public $sql;
		public $connect;
		public $table;
		public $order;
		public $section;
		public $enabled;
		public $language;
		public $result;
		public function __construct( $connect ,$language)
		{
			$this->connect = $connect;
			$this->table= 'content';
			$this->getEnabled();
			if(!empty($language))
			$this->setLanguage($language);
		}
		public function setLanguage( $language )
		{
			$this->language=" AND language IN ('{$language}','all') ";
		}
		public function setDataType($type)
		{
			$this->type = " AND type='{$type}' ";
		}
		public function getEnabled()
		{
			$this->enabled =" AND enabled='Y' ";
		}
		/**
		 * "id": "7",
		 * @param [type] $datas [description]
		 */
		// "section": "home",
	    // "section_id": "home1",
	    // "name": "home1",
	    // "detail": "photo/slide-pic/pic-banner-01-en.jpg",
	    // "type": "photo",
	    // "language": "en",
	    // "sequence": "1",
	    // "enabled": "Y",
	    // "updated_date": null
		public function setDataByType( $datas )
		{
			$contents= array();
			foreach ($datas as $key => $value) {
				$index = $value['id'];
				$type  = $value['type'];

				$contents[ $type ][ $index ]['id']       = $value['id'];
				$contents[ $type ][ $index ]['section']  = $value['section'];
				$contents[ $type ][ $index ]['name']     = $value['name'];
				$contents[ $type ][ $index ]['detail']   = $value['detail'];
				$contents[ $type ][ $index ]['language'] = $value['language'];
				$contents[ $type ][ $index ]['sequence'] = $value['sequence'];
				$contents[ $type ][ $index ]['enabled']  = $value['enabled'];
			}
			return $contents;
		}
		public function setDataSQL($filter='')
		{
			$this->sql="SELECT * FROM {$this->table} 
						WHERE section='{$this->section}' {$filter}
						{$this->enabled} {$this->language} {$this->order}";
			return $this->sql;
		}
		public function getData()
		{
			$this->setDataSQL();
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
		public function getDefaultData(){
			$this->setDataSQL();
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
		public function getDataByName( $name )
		{
			$filter =" AND name='{$name}'";
			$this->setDataSQL( $filter );
			$query = $this->connect->prepare( $this->sql );
			$query->execute();
			$this->result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
	}