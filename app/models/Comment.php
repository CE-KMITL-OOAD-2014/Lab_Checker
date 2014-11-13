<?php
	class Comment{

		private $id;
		private $comment;
		private $time;
		private $id_user;
		private $id_topic;
	

		public function __construct(){
			$this->id=NULL;
			$this->comment=NULL;
			$this->time=NULL;
			$this->id_user=NULL;
			$this->id_topic=NULL;
		}

		public function setId_topic($value){
			$this->id=$value;
		}
		public function setComment($value){
			$this->comment=$value;
		}
		public function setId_user($value){
			$this->id_user=$value;
		}
		public function setTime_Com($time){
			$this->time=$time;
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
		public function getTime_Com(){
			return $this->$time;
		}
		public function getId_topic(){
			return $this->id_topic;
		}

		public function newComment(){
			$new=new CommentRepository;
			$new->id=$this->id;
			$new->comment=$this->comment;
			$new->time=$this->time;
			$new->id_user=$this->id_user;
			$new->id_topic=$this->id_topic;
			$new->save();
		}

		public static function getFromId($id){
			$datatmp=CommentRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Comment;
			$obj->id=$datatmp->id;
			$obj->comment=$datatmp->comment;
			$obj->time=$datatmp->time;
			$obj->id_user=$datatmp->id_user;
			$obj->id_topic=$datatmp->id_topic;
			return $obj;
		}
/*
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
		*/

		public static function getAll(){
            $data=CommentRepository::all();
            $size=count($data);
            $comment= array( );
            for($i=0;$i<$size;$i++){           
                $obj=new Comment;
                $obj->id=$data[$i]->id;
                $obj->topic=$data[$i]->topic;
                $obj->detail=$data[$i]->detail;
                $obj->time=$data[$i]->time;
                $obj->id_user=$data[$i]->id_user;
                $comment[$i]=$obj;
        }
        return $comment;
        }
	}