@extends('template')

@section('content')

@if (!Auth::guest()) 




<center><h1>Lab Checker Board</h1></center>
<div style="margin-left:20px; margin-top:20px;" class="col-md-11 col-md-offset-2">

	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title" style="word-break: break-word;">{{$topic}}</h3>
		  </div>
		<div class="panel-body" style="word-break: break-word;"> 
			{{$detail}}
</div> 

	  <div class="modal-footer">
	  	<span class="text-muted small"><em>โพสต์โดย : </em></span>
	  	<span class="text-muted small"><em><a>{{$id_user}} </a></em></span>
	  	<span class="text-muted small"><em>เวลา : </em></span>
	  	<span class="text-muted small"><em>{{$time}}</em></span>
      </div>
	</div>

<div class="col-md-11">
			<div class="col-md-8">
				<h2>แสดงความคิดเห็น</h2>
				<hr>
			<div class="row">
			<div class="well col-md-10">
				<form role="form" method="POST" action="{{url('/announcement/show/'.$id.'/comment')}}" enctype="multipart/form-data">
					<textarea rows="6" cols="60" name="comment" id="textArea" style="resize: none;"></textarea><br><br>
					<button type="submit" class="btn btn-primary">Submit</button>
        	</form>
        	</div>
			</div>
		<div>

<!--comment-->
			<h2> ความคิดเห็น </h2>
			<hr>
			@foreach ($showComment as $value) 	
			
			<div class="well col-md-12 col-md-offset-1">
			
				<div class="row">
			  		<div class="col-md-3">
			  			<span class="glyphicon glyphicon-user"></span> <span class="text-muted small"><em><a>{{$value->getId_user()}}</a></em></span> 
			  		</div>
			  		<div class="col-md-6" style="word-break: break-word;">{{$value->getComment()}}</div>
			  		<div class="col-md-3">
			  			 <span class="text-muted small"><em>{{$value->getTime_Com()}}</em></span>

			  		</div>

			  	</div>
			
			</div>
 @endforeach
</div>
		</div>

</div>
</div>
@endif
@stop


