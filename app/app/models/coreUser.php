<?php
	class coreUser{

		private $id;
		private $password;
		private $name;
		private $surname;
		private $email;
		private $status;

	

		public function __construct(){
			$this->id=NULL;
			$this->password=NULL;
			$this->name=NULL;
			$this->surname=NULL;
			$this->email=NULL;
			$this->status=NULL;
		}

		public function setId_user($value){
			$this->id=$value;
		}
		public function setPassword($value){
			$this->password=$value;
		}
		public function setName($value){
			$this->name=$value;
		}
		public function setSurname($value){
			$this->surname=$value;
		}
		public function setEmail($value){
			$this->email=$value;
		}
		public function setStatus($value){
			$this->status=$value;
		}


		public function getId_user(){
			return $this->id;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getName(){
			return $this->name;
		}
		public function getSurname(){
			return $this->surname;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getStatus(){
			return $this->status;
		}

		public function newUser(){
			$new=new UserRepository;
			$new->id=$this->id;
			$new->name=$this->name;
			$new->surname=$this->surname;
			$new->password=$this->password;
			$new->email=$this->email;
			$new->status=$this->status;
			$new->save();
		}

		public function editUser($id){
			$edit=UserRepository::find($id);
				if($edit==NULL){
					return NULL;
				}
			$edit->name=$this->name;
			$edit->surname=$this->surname;
			$edit->password=$this->password;
			$edit->email=$this->email;
			$edit->status=$this->status;
			$edit->save();
		}

		public static function getFromIdPass($id,$password){
			$idtmp=UserRepository::find($id);
				if($idtmp ==NULL){
					return NULL;
				}
			$obj=new coreUser;
			$obj->id=$idtmp->id;
			$obj->password=$idtmp->password;
			return $obj;
		}

		public static function getFromId($id){
			$datatmp=UserRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new coreUser;
			$obj->id=$datatmp->id;
			$obj->password=$datatmp->setPassword;
			$obj->name=$datatmp->setName;
			$obj->surname=$datatmp->getSurname;
			$obj->email=$datatmp->getEmail;
			$obj->status=$datatmp->getStatus;
			return $obj;
		}

	}