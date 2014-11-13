<?php 
class AnnouncementController extends BaseController
{
	public function getnewAnnoun()
	{		
		$odj= new Announcement;
	//	$odj->setId_topic(Input::get('id'));
		$odj->setTopic(Input::get('topic'));
		$odj->setDetail_An(Input::get('detail'));
		$odj->setId_user(Auth::id());
		$odj->newAnnoun();
		return Redirect::to('/annoucement');
		//return View::make('Anooun.newAnnoun');
	}
	
	public function postnewAnnoun(){
		$obj=new Announcements;
		
		$obj->setName(Input::get('id'));
		$obj->setImage(Input::get('topic'));
		//$obj->setCategory(Input::get('id_user'));
		$obj->newAnnoun();
					
			return Redirect::to('/announce/all');
	}

	public function getshowAnnounce($id){
		$obj=new Announcements;
		$show=$obj->getById($id);
			
	//	return View::make('recipe.showRecipe')->with(array("name"=>$show->getName(),
	//		"ingredient"=>$show->getIngredient(),"capacity"=>$show->getCapacity(),"step"=>$show->getStep()));
	}

	public function getallAnnounce(){
		$obj1=new Announcements;
		$recipe=$obj1->getAll();
	
		//return View::make('recipe.allRecipe')->with("recipe",$recipe);
	}


} ?>