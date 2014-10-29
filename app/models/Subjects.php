<?php
	class Subjects{

		private $id;
		private $name_subject;
		private $time_subject;
		private $room_subject;
		private $id_user;
		private $permission;
		private $path_file;

	

		public function __construct(){
			$this->id=NULL;
			$this->name_subject=NULL;
			$this->time_subject=NULL;
			$this->day_subject=NULL;
			$this->room_subject=NULL;
			$this->id_user=NULL;
			$this->permission=NULL;
			$this->path_file=NULL;
		}

		public function setId_subject($value){
			$this->id=$value;
		}
		public function setName_subject($value){
			$this->name_subject=$value;
		}
		public function setTime_subject($value){
			$this->time_subject=$value;
		}
		public function setDay_subject($value){
			$this->day_subject=$value;
		}		
		public function setRoom_subject($value){
			$this->room_subject=$value;
		}
		public function setId_user($value){
			$this->id_user=$value;
		}
		public function setPermission($value){
			$this->permission=$value;
		}
		public function setPath_file($value){
			$this->path_file=$value;
		}


		public function getId_subject(){
			return $this->id;
		}
		public function getName_subject(){
			return $this->name_subject;
		}
		public function getTime_subject(){
			return $this->time_subject;
		}
		public function getDay_subject(){
			return $this->day_subject;
		}
		public function getRoom_subject(){
			return $this->room_subject;
		}
		public function getId_user(){
			return $this->id_user;
		}
		public function getPermission(){
			return $this->permission;
		}
		public function getPath_file(){
			return $this->path_file;
		}


		public function checkPermission($id){



		}

		public function countStudent(){



		}

		public static function getFromId($id){
			$datatmp=SubjectsRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Subjects;
			$obj->id=$datatmp->id;
			$obj->name_subject=$datatmp->name_subject;
			$obj->time_subject=$datatmp->time_subject;
			$obj->room_subject=$datatmp->room_subject;
			$obj->id_user=$datatmp->id_user;
			$obj->permission=$datatmp->permission;
			$obj->path_file=$datatmp->path_file;
			return $obj;
		}

		public function editSubject($id){
			$edit=SubjectsRepository::find($id);
				if($edit==NULL){
					return NULL;
				}
			$edit->name_subject=$this->name_subject;
			$edit->time_subject=$this->time_subject;
			$edit->room_subject=$this->room_subject;
			$edit->id_user=$this->id_user;
			$edit->permission=$this->permission;
			$edit->path_file=$this->path_file;
			$edit->save();
		}
	}