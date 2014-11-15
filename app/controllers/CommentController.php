<?php 
class CommentController extends BaseController
{
		public function postComment($id){
				$obj2 = new Comment;
				$obj2->setComment(Input::get('comment'));
				$obj2->setId_user(Auth::user()->id);
				$obj2->setId_topic($id);
				$obj2->newComment();
			return Redirect::to('/announcement/'.$id);
		}

}