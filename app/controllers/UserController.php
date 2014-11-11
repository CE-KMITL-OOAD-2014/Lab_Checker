<?php
	class UserController extends BaseController{


		public function regisUser()
		{
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

		public function login(){
			$credentials=Input::only('id','password');
			if(Auth::attempt($credentials)){
				return Redirect::to('/index');	
			}
			return Redirect::intended('/');			
		}		

		public function logout()
		{
			echo "do logout";
			Auth::logout();
			return Redirect::to('/');
		}
/*
		public function removeUser($id)
		{
			$remove = new UsersRepository::find($id);
			$remove->delete($id);

			return Redirect::to('/');

		}
*/
/*
		public function edit($id)
		{
			$input = Input::all();
			$edit = new Users;
			
			$edit->setId_user($input['id']);
			$edit->setPassword($input['password']);
			$edit->setName($input['name']);
			$edit->setSurname($input['surname']);
			$edit->setEmail($input['email']);
			$edit->setStatus($input['status']);

			$repo = new UsersRepository::find($id);
			$repo->id = $edit->getId_user(); 
			$repo->password = $edit->getPassword();
			$repo->name = $edit->getName();
			$repo->surname = $edit->getSurname();
			$repo->email = $edit->getEmail();
			$repo->status = $edit->getStatus();
			$repo->save();	

			return Redirect::to('/profile');
	
		}
*/


	}