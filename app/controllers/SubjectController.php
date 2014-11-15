<?php
	class SubjectController extends BaseController{
		
		protected $subjectsHelper;

		public function __construct(){
			$this->subjectsHelper = new SubjectRepository;
		}
	
		public function addSubject(){	
			$filename = "none"; 

			$formInfo = Input::all();
			if (Input::hasFile('subject_file')) {
					$file 			 = Input::file('subject_file');
				 	$destinationPath = 'subjectfile';
					$filename        = $file->getClientOriginalName(); 
					//$filename        = date('Y-m-d_H-M-S').'_'.$file->getClientOriginalName(); 
					$uploadSuccess   = $file->move($destinationPath, $filename);
		
					$file_handle = fopen($uploadSuccess,"r");
					$arr = array();
					$i = 0;
					$r = 0;
				while (!feof($file_handle) ) {
					$line_of_text = fgetcsv($file_handle, 1024);
					if($r>1){
						$arr[$i] = $line_of_text[0];
						$i++;
					}else{
						$r++;
					}
				}
				fclose($file_handle);
			$str = "";

 			$str = implode(",",$arr);
			$subjects = new Subject;
			$subjects->setId_subject(Input::get('id'));
			$subjects->setName_subject(Input::get('name_subject'));
			$subjects->setTime_subject(Input::get('time_subject'));
			$subjects->setDay_subject(Input::get('day_subject'));
			$subjects->setRoom_subject(Input::get('room_subject'));
			$subjects->setId_user(Auth::id());
			$subjects->setPermission($str);
			$subjects->setNumstudent($i-1);
			$subjects->setDetail_subject(Input::get('detail_subject'));
			$subjects->setPath_file($filename);
			$subjects->newSubject();

			return Redirect::to('/index');
			}else{
				echo "upload fail";
			}	
		}

		public function getshowsubject($id){
			$obj=new Subject;
			$show=$obj->getFromId($id);
				
			return View::make('showSubject')->with(
					array("id"=>$show->getId_subject(),
						  "name_subject"=>$show->getName_subject(),
						  "time_subject"=>$show->getTime_subject(),
						  "day_subject"=>$show->getDay_subject(),
						  "room_subject"=>$show->getRoom_subject(),
						  "permission"=>$show->getPermission(),
						  "id_user"=>$show->getId_user(),
						  "detail_subject"=>$show->getDetail_subject(),
						  "path_file"=>$show->getPath_file()));
		}

		public function export($id){
			$obj=new Subject;
			$show=$obj->getFromId($id);
			$file=$show->getPath_file();	
			$path="./subjectfile/$file";
			return Response::download($path);
		}

		public function getallsubject(){
			$obj1=new Subject;
			$subject=$obj1->getAll();
			return View::make('index')->with("subject",$subject);
		}

		// public function export(){
		// 	return Response::download($tmp_file,'path_file');
		// }

		public function geteditsubject($id){
			$obj=new Subject;
			$subject=$obj->getFromId($id);

			return View::make('subject.subject')->with(array("name_subject"=>$show->getName_subject(),"time_subject"=>$show->getTime_subject(),
				"day_subject"=>$show->getDay_subject(),"room_subject"=>$show->getRoom_subject(),
				"detail_subject"=>$show->getDetail_subject()));
		}

		// public function getFile($id){
		// 	$obj=new Subject;
		// 	$show=$obj->getFromId($id);
		// 	return View::make('check')->with(array("filename"=>$show->getPath_file()))
		// }
	 
		public function find($id){
			$datatmp = SubjectRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Subject;
			$obj->id=$datatmp->getId_subject();
			$obj->name_subject=$datatmp->getName_subject();
			$obj->time_subject=$datatmp->getTime_subject();
			$obj->room_subject=$datatmp->getRoom_subject();
			$obj->id_user=$datatmp->getId_user();
			$obj->permission=$datatmp->status;
			$obj->path_file=$datatmp->email;
			return $obj;
		}

		public function checkPermission($id,$user){
			$datatmp = SubjectRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$checkPer = new Subject;
			$checkPer->id = $datatmp->getId_subject();
			$checkPer->name_subject=$datatmp->getName_subject();
			$checkPer->time_subject=$datatmp->getTime_subject();
			$checkPer->room_subject=$datatmp->getRoom_subject();
			$checkPer->permission=$datatmp->getPermission();
			$i = 0;
			$b = 4;
			$checkTrue = NULL;
			foreach ($checkPer->permission as $check) {
				substr($check,$i+5,$b+5);
				if($id_user == $check){
					$checkTrue = $check;
				}	
			}
			if($checkTrue != NULL){
				return $checkPer;
			}else {
				return NULL;
			}
		}

		public function check($id){
			$obj=new Subject;
			$show=$obj->getFromId($id);
			$file=$show->getPath_file();	
			$path="./subjectfile/$file";
			$f = fopen($path, "r+");
			$fr = fread($f,filesize($path));
			fclose($f);
			$line = array();
			$line = explode("\n",$fr);
			for ($i=2; $i<count($line);$i++) { 
				$cells = array();
				$cells = explode(",",$line[$i]);
				for ($k=1; $k<count($cells);$k++) { 
					if(Input::get($i.$k)==1){
						$cells[$k] = Input::get($i.$k);
					}else{
						$cells[$k] = 0;
					}
				}
				$line[$i] = implode(",",$cells);
			}
			$line = implode("\n",$line);
			$fp=fopen($path,"w+");
			fwrite($fp, $line);
			fclose($fp);
			return Redirect::to('/index');
		}
	
		// public function destroy($id)
		// {
		// 	$del_product = new SubjectsRepository::find($id);
		// 	File::delete('SubjectFile/'.$del_product->getPath_file());

		// 	$this->subjectsHelper->remove($id);

		// 	return Redirect::to('/subject');
		// }




	}