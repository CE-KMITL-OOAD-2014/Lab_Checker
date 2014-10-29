<?php
	class SubjectsController extends BaseController{
		
		protected $subjectsHelper;

		public function __construct(){
			$this->subjectsHelper = new SubjectsRepository;
		}
	
		public function addSubject(){	
			$filename = "none"; 

			$formInfo = Input::all();
			if (Input::hasFile('subject_file')) {
					$file 			 = Input::file('subject_file');
				 	$destinationPath = 'subjectfile';
					$filename        = date('Y-m-d_H-M-S').'_'.$file->getClientOriginalName(); 
					$uploadSuccess   = $file->move($destinationPath, $filename);
		
			$subjects = new Subjects;
			$subjects->setId_subject($formInfo['id']);
			$subjects->setName_subject($formInfo['name_subject']);
			$subjects->setTime_subject($formInfo['time_subject']);
			$subjects->setDay_subject($formInfo['day_subject']);
			$subjects->setRoom_subject($formInfo['room_subject']);
			// $subjects->setId_user($formInfo['id_user']);
			// $subjects->setPermission($formInfo['permission']);
			$subjects->setPath_file($filename);

			$repo = new SubjectsRepository;
			$repo->id = $subjects->getId_subject();
			$repo->name_subject = $subjects->getName_subject();			
			$repo->time_subject = $subjects->getTime_subject();
			$repo->room_subject = $subjects->getRoom_subject();
			// $repo->id_user = $subjects->getId_user();
			// $repo->permission = $subjects->getPermission();
			$repo->path_file = $subjects->getPath_file();
			$repo->save();
			return Redirect::to('/myClass');

			}else{
				echo "upload fail";
			}	

		}

		// public function show($id){
		// 	$datatmp = $this->subjectsHelper->find($id);
		// 	return View::make('SubjectShow',array('name_subject'=>$datatmp,'id'=>$id);
		// }
		public function find($id){
			$datatmp = SubjectsRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Subjects;
			$obj->id=$datatmp->getId_subject();
			$obj->name_subject=$datatmp->getName_subject();
			$obj->time_subject=$datatmp->getTime_subject();
			$obj->room_subject=$datatmp->getRoom_subject();
			$obj->id_user=$datatmp->getId_user();
			$obj->permission=$datatmp->status;
			$obj->path_file=$datatmp->email;
			return $obj;
		}

		// public function destroy($id)
		// {
		// 	$del_product = new SubjectsRepository::find($id);
		// 	File::delete('SubjectFile/'.$del_product->getPath_file());

		// 	$this->subjectsHelper->remove($id);

		// 	return Redirect::to('/subject');
		// }




	}