<?php
	class Subject{

		private $id;
		private $name_subject;
		private $time_subject;
		private $room_subject;
		private $id_user;
		private $permission;
		private $detail_subject;
		private $numStundent;
		private $path_file;

	

		public function __construct(){

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
		public function setNumstudent($value){
			$this->numStundent=$value;
		}
		public function setDetail_subject($value){
			 $this->detail_subject=$value;
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
		public function getDetail_subject(){
			return $this->detail_subject;
		}
		public function getPermission(){
			return $this->permission;
		}
		public function getNumstudent(){
			return $this->numStundent;
		}
		public function getPath_file(){
			return $this->path_file;
		}

		// create Subject save to database tabel subject
		public function newSubject(){
			$new=new SubjectRepository;
			$new->id=$this->id;
			$new->name_subject=$this->name_subject;
			$new->time_subject=$this->time_subject;
			$new->room_subject=$this->room_subject;
			$new->id_user=$this->id_user;
			$new->permission=$this->permission;
			$new->numStundent=$this->numStundent;
			$new->day_subject=$this->day_subject;
			$new->detail_subject=$this->detail_subject;
			$new->path_file=$this->path_file;
			$new->save();
		}

		// get Subject by id from database tabel Subject
		public static function getFromId($id){
			$datatmp=SubjectRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Subject;
			$obj->id=$datatmp->id;
			$obj->name_subject=$datatmp->name_subject;
			$obj->time_subject=$datatmp->time_subject;
			$obj->day_subject=$datatmp->day_subject;
			$obj->room_subject=$datatmp->room_subject;
			$obj->id_user=$datatmp->id_user;
			$obj->permission=$datatmp->permission;
			$obj->numStundent=$datatmp->numStundent;
			$obj->detail_subject=$datatmp->detail_subject;
			$obj->path_file=$datatmp->path_file;
			return $obj;
		}

		// get Subject all from database tabel subject
		public static function getAll(){
			$data=SubjectRepository::all();
			$size=count($data);

			$subject = array( );
			for($i=0;$i<$size;$i++){
				$obj = new Subject;
				$obj->id=$data[$i]->id;
				$obj->name_subject=$data[$i]->name_subject;
				$obj->time_subject=$data[$i]->time_subject;
				$obj->room_subject=$data[$i]->room_subject;
				$obj->id_user=$data[$i]->id_user;
				$obj->permission=$data[$i]->permission;
				$obj->numStundent=$data[$i]->numStundent;
				$obj->path_file=$data[$i]->path_file;
				$subject[$i] = $obj;
			}
			return $subject;
		}

		// edit Subject by id from database tabel subject
		public function editSubject(){
			$edit=SubjectRepository::find($this->id);
			$edit->name_subject=$this->name_subject;
			$edit->time_subject=$this->time_subject;
			$edit->room_subject=$this->room_subject;
			$edit->day_subject=$this->day_subject;
			$edit->detail_subject=$this->detail_subject;
			$edit->save();
		}
	}