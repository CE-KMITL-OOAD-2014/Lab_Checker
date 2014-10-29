<?php
	class Users{

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



		public static function chkLogin($id,$password){
			$chklog=UsersRepository::find($id);
			if($chklog == NULL){
				echo('$chklog == NULL');
				return NULL;
			}else{
				if($chklog->password == $password){
					return $chklog;
			}else{
				echo('password not match');
				return NULL;
			}
			}
		}

		public static function getFromIdPass($id,$password){
			$idtmp=UsersRepository::find($id);
				if($idtmp ==NULL){
					return NULL;
				}
			$obj=new Users;
			$obj->id=$idtmp->id;
			$obj->password=$idtmp->password;
			return $obj;
		}

	}