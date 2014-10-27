<?php
	class Announcements{

		private $id;
		private $topic;
		private $id_user;
	

		public function __construct(){
			$this->id=NULL;
			$this->topic=NULL;
			$this->id_user=NULL;
		}

		public function setId_topic($value){
			$this->id=$value;
		}
		public function setTopic($value){
			$this->topic=$value;
		}
		public function setId_user($value){
			$this->id_user=$value;
		}

		public function getId_topic(){
			return $this->id;
		}
		public function getTopic(){
			return $this->topic;
		}
		public function getId_user(){
			return $this->id_user;
		}

		public function newUsers(){
			$new=new AnnouncementsRepository;
			$new->id=$this->id;
			$new->topic=$this->topic;
			$new->id_user=$this->id_user;
			$new->save();
		}

		public static function getFromId($id){
			$datatmp=AnnouncementsRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Announcements;
			$obj->id=$datatmp->id;
			$obj->topic=$datatmp->topic;
			$obj->id_user=$datatmp->id_user;
			return $obj;
		}

		public function editUsers($id){
			$edit=AnnouncementsRepository::find($id);
				if($edit==NULL){
					return NULL;
				}
			$edit->topic=$this->topic;
			$edit->id_user=$this->id_user;
			$edit->save();
		}
	}