<?php
	class coreUser{

		private $id;
		private $password;
		private $name;
		private $surname;
		private $email;
		private $status;

	

		public function __construct(){

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

		// create User save to database tabel user
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

		// get User by id from database tabel user
		public static function getFromId($id){
			$datatmp=UserRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new coreUser;
			$obj->id=$datatmp->id;
			$obj->password=$datatmp->password;
			$obj->name=$datatmp->name;
			$obj->surname=$datatmp->surname;
			$obj->email=$datatmp->email;
			$obj->status=$datatmp->status;
			return $obj;
		}

	}