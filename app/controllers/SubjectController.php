<?php
	class SubjectController extends BaseController{
		
		protected $subjectsHelper;

		public function __construct(){
			$this->subjectsHelper = new SubjectRepository;
		}
	
		// add subject to database tabele subject 
		// upload flie to /public/subjectfile 
		// set permission from file 
		public function addSubject(){	
			$filename = "none"; 
			$formInfo = Input::all();
			$file = $_FILES['subject_file'];
			if( 'text/csv' == $file['type'] ||  'application/vnd.ms-excel' == $file['type'] ) { 							
				if (Input::hasFile('subject_file')) {
						$file 			 = Input::file('subject_file');
					 	$destinationPath = 'subjectfile';
						$filename        = $file->getClientOriginalName(); 
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
			}else{
					return Redirect::to('/onlycsv');
				}
		}

		// show subject  by id
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

		//export file by subject id
		public function export($id){
			$obj=new Subject;
			$show=$obj->getFromId($id);
			$file=$show->getPath_file();	
			$path="./subjectfile/$file";
			return Response::download($path);
		}

		// show all subject by id
		public function getallsubject(){
			$obj1=new Subject;
			$subject=$obj1->getAll();
			return View::make('index')->with("subject",$subject);
		}

		// show all subject by id
		public function getallClass(){
			$obj1=new Subject;
			$subject=$obj1->getAll();
			$obj2=new coreUser;
			$user=$obj2->getFromId(Auth::id());
			return View::make('subject')->with(array("subject"=>$subject,
													 "userID"=>$user->getStatus()));
		}

		// editsubject
		public function geteditsubject($id){
			$obj=new Subject;
			$subject=$obj->getFromId($id);

			return View::make('editsubject')->with(
				array("id"=>$subject->getId_subject(),
					  "name_subject"=>$subject->getName_subject(),
					  "time_subject"=>$subject->getTime_subject(),
					  "day_subject"=>$subject->getDay_subject(),
					  "room_subject"=>$subject->getRoom_subject(),
					  "detail_subject"=>$subject->getDetail_subject()));
		}

		// show subject
		public function posteditsubject($id)
		{
			$edit=Subject::getFromId($id);
			$edit->setName_subject(Input::get('name_subject'));
			$edit->setTime_subject(Input::get('time_subject'));
			$edit->setDay_subject(Input::get('day_subject'));
			$edit->setRoom_subject(Input::get('room_subject'));
			$edit->setDetail_subject(Input::get('detail_subject'));
			$edit->editSubject();
			return Redirect::to('/subject/'.$id);
		}
	 
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

		// `check subject by idSubject
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

	}