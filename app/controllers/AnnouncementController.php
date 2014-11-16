<?php 
class AnnouncementController extends BaseController
{
	
	// recieve input create Announcement save to database tabel announcement
	public function getnewAnnounce()
	{		
		$odj= new Announcement;
		$odj->setTopic(Input::get('topic'));
		$odj->setDetail_An(Input::get('detail'));
		$odj->setId_user(Auth::id());
		$odj->newAnnoun();
		return Redirect::to('/announcement');
	}

	// show Announcement and Comment from getFormid and getByAnnounce  
	public function getshowAnnounce($id){
		$obj1=new Announcement;
		$show=$obj1->getFromId($id);
		$obj2=new Comment;
		$showComment=$obj2->getByAnnounce($id);
		
	
		return View::make('showAnnouncement')->with(
			array("topic"=>$show->getTopic(),
				  "id"=>$show->getId_topic(),
				  "detail"=>$show->getDetail_An(),
				  "id_user"=>$show->getId_user(),
				  "time"=>$show->getTime_An(),
				  "showComment"=>$showComment)
				 );
	}

	// show all Announcement
	public function getallAnnounce(){
		$obj1=new Announcement;
		$announce=$obj1->getAll();
	
		return View::make('announcement')->with("announce",$announce);
	}


} ?>