<?php
	class Comment{

		private $id;
		private $comment;
		private $id_user;
		private $id_topic;
	

		public function __construct(){
			$this->id=NULL;
			$this->comment=NULL;
			$this->id_user=NULL;
			$this->id_topic=NULL;
		}

		public function setId_topic($value){
			$this->id=$value;
		}
		public function setTopic($value){
			$this->comment=$value;
		}
		public function setId_user($value){
			$this->id_user=$value;
		}
		public function setId_topic($value){
			$this->id_topic=$value;
		}

		public function getId_topic(){
			return $this->id;
		}
		public function getTopic(){
			return $this->comment;
		}
		public function getId_user(){
			return $this->id_user;
		}
		public function getId_topic(){
			return $this->id_topic;
		}

		public function newAnnoun(){
			$new=new AnnouncementRepository;
			$new->id=$this->id;
			$new->comment=$this->comment;
			$new->id_user=$this->id_user;
			$new->id_topic=$this->id_topic;
			$new->save();
		}

		public static function getFromId($id){
			$datatmp=AnnouncementRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Announcement;
			$obj->id=$datatmp->id;
			$obj->comment=$datatmp->comment;
			$obj->id_user=$datatmp->id_user;
			$obj->id_topic=$datatmp->id_topic;
			return $obj;
		}

		public function editAnnoun($id){
			$edit=AnnouncementRepository::find($id);
				if($edit==NULL){
					return NULL;
				}
			$edit->comment=$this->comment;
			$edit->id_user=$this->id_user;
			$edit->id_topic=$this->id_topic;
			$edit->save();
		}
	}