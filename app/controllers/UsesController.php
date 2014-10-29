<?php
	class UsesController extends BaseController{
		
		public function find(){
			
		}

		public function regisUser()
		{
			//var_dump(Input::all());
			$odj= new Users;
			$odj->setId_user(Input::get('id'));
			$odj->setPassword(md5(Input::get('password')));
			$odj->setName(Input::get('name'));
			$odj->setSurname(Input::get('surname'));
			$odj->setEmail(Input::get('email'));
			$odj->setStatus(Input::get('status'));
			$odj->newUsers();


			$repo = new UsersRepository;
			$repo->id = $odj->getId_user(); 
			$repo->password = $odj->getPassword();
			$repo->name = $odj->getName();
			$repo->surname = $odj->getSurname();
			$repo->email = $odj->getEmail();
			$repo->status = $odj->getStatus();
			$repo->save();

			return Redirect::to('/');
		}

		public function removeUser($id)
		{
			$remove = new UsersRepository::find($id);
			$remove->delete($id);

			return Redirect::to('/');

		}

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
			$repo->id = $odj->getId_user(); 
			$repo->password = $odj->getPassword();
			$repo->name = $odj->getName();
			$repo->surname = $odj->getSurname();
			$repo->email = $odj->getEmail();
			$repo->status = $odj->getStatus();
			$repo->save();	

			return Redirect::to('/profile');
		
		}



	}