<?php
	class Comment{

		private $id;
		private $comment;
		private $time;
		private $id_user;
		private $id_topic;
	

		public function __construct(){

		}

		public function setComment($value){
			$this->comment=$value;
		}
		public function setId_user($value){
			$this->id_user=$value;
		}
		public function setId_topic($value){
			$this->id_topic=$value;
		}

		public function getId_comment(){
			return $this->id;
		}
		public function getComment(){
			return $this->comment;
		}
		public function getId_user(){
			return $this->id_user;
		}
		public function getTime_Com(){
			return $this->time;
		}
		public function getId_Topic(){
			return $this->id_topic;
		}

		// create Comment save to database tabel Comment
		public function newComment(){
			$new=new CommentRepository;
			$new->comment=$this->comment;
			$new->id_user=$this->id_user;
			$new->id_topic=$this->id_topic;
			$new->save();
		}

		// get Comment by id from database tabel Comment
		public static function getFromId($id){
			$datatmp=CommentRepository::find($id);
				if($datatmp==NULL){
					return NULL;
				}
			$obj=new Comment;
			$obj->id=$datatmp->id;
			$obj->comment=$datatmp->comment;
			$obj->time=$datatmp->updated_at;
			$obj->id_user=$datatmp->id_user;
			$obj->id_topic=$datatmp->id_topic;
			return $obj;
		}

		// get Comment by id of Announcement from database tabel Comment
		public static function getByAnnounce($id_topic){
			$data=CommentRepository::where('id_topic','=',$id_topic)->get();
			$size=count($data);
			if($data==NULL){
				return NULL;
			}
			
			$comment=array();
			for($i=0;$i<$size;$i++){
					$obj=new Comment;
					$obj->id=$data[$i]->id;
	            	$obj->comment=$data[$i]->comment;
	            	$obj->time=$data[$i]->updated_at;
	            	$obj->id_user=$data[$i]->id_user;
	            	$obj->id_topic=$data[$i]->id_topic;
	            	$comment[$i]=$obj;
			}
			return $comment;
		}

		// get Comment all from database tabel Comment
		public static function getAll(){
            $data=CommentRepository::all();
            $size=count($data);
            $comment= array( );
            for($i=0;$i<$size;$i++){           
                $obj=new Comment;
                $obj->id=$data[$i]->id;
                $obj->comment=$data[$i]->comment;
                $obj->time=$data[$i]->updated_at;
                $obj->id_user=$data[$i]->id_user;
                $comment[$i]=$obj;
      	  }
      	  return $comment;
        }
	}