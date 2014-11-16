<?php
	class UserController extends BaseController{

		//register user save to database tabel user
		public function regisUser()
		{
			$validator = Validator::make(Input::all(),
						 array('id'=>"unique:user|required"));

    		if ($validator->fails()){
		       return Redirect::to('/userfail');
    		}
			$odj= new coreUser;
			$odj->setId_user(Input::get('id'));
			$odj->setPassword(Hash::make(Input::get('password')));
			$odj->setName(Input::get('name'));
			$odj->setSurname(Input::get('surname'));
			$odj->setEmail(Input::get('email'));
			$odj->setStatus(Input::get('status'));
			$odj->newUser();
			return Redirect::to('/');
		}


		public function getsignIn()
		{
			if(Auth::check()){
				return Redirect::to('/');
			}
			return View::make('user.signin');
		}

		// check id passwoed from database for log in
		public function login(){
			$credentials=Input::only('id','password');
			if(Auth::attempt($credentials)){
				return Redirect::to('/index');	
			}
			return Redirect::intended('/passfail');			
		}		

		// log out
		public function logout()
		{
			echo "do logout";
			Auth::logout();
			return Redirect::to('/');
		}

		// show user by id
		public function getshowUser($id){
			$obj = new coreUser;
			$show=$obj->getFromId($id);
			if($show->getStatus() == 1){
				$sta = 'อาจารย์';
			}else{
				$sta = 'นักศึกษา';
			}
			return View::make('profile')->with(
					array("id"=>$show->getId_user(),
						  "name"=>$show->getName(),
						  "surname"=>$show->getSurname(),
						  "email"=>$show->getEmail(),
						  "status"=>$sta));
		}

	}