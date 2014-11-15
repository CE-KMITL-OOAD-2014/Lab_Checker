<?php
	class Announcement{

	//	private $id;
		private $topic;
		private $detail;
		private $time;
		private $id_user;
	

		public function __construct(){

		}


		public function setTopic($topic){
			$this->topic=$topic;
		}
		public function setDetail_An($detail){
			$this->detail=$detail;
		}

		public function setId_user($id_user){
			$this->id_user=$id_user;
		}

		public function getId_topic(){
			return $this->id;
		}
		public function getTopic(){
			return $this->topic;
		}
		public function getDetail_An(){
			return $this->detail;
		}
		public function getTime_An(){
			return $this->time;
		}		
		public function getId_user(){
			return $this->id_user;
		}

		public function newAnnoun(){
			$new=new AnnouncementRepository;
			$new->topic=$this->topic;
			$new->detail=$this->detail;
			$new->id_user=$this->id_user;
			$new->save();
		}

		public static function getFromId($id){
			$datatmp=AnnouncementRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Announcement;
			$obj->id=$datatmp->id;
			$obj->topic=$datatmp->topic;
			$obj->detail=$datatmp->detail;
			$obj->time=$datatmp->time;
			$obj->id_user=$datatmp->id_user;
			return $obj;
		}

		public function editAnnoun($id){
			$edit=AnnouncementRepository::find($id);
				if($edit==NULL){
					return NULL;
				}
			$edit->topic=$this->topic;
			$edit->id_user=$this->id_user;
			$edit->save();
		}

	   public static function getAll(){
            $data=AnnouncementRepository::all();
            $size=count($data);
            $announ= array( );
            for($i=0;$i<$size;$i++){           
                $obj=new Announcement;
                $obj->id=$data[$i]->id;
                $obj->topic=$data[$i]->topic;
                $obj->detail=$data[$i]->detail;
                $obj->time=$data[$i]->time;
                $obj->id_user=$data[$i]->id_user;
                $announ[$i]=$obj;
        }
        return $announ;
        }
	}