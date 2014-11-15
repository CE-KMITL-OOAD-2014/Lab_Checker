@extends('template')

@section('content')

@if (!Auth::guest()) 




<center><h1>Lab Checker Board</h1></center>
<div style="margin-left:20px; margin-top:20px;" class="col-md-11 col-md-offset-2">

	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">{{$topic}}</h3>
		  </div>
		<div class="panel-body"> 
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
			<div>
				<h2>แสดงความคิดเห็น</h2>
				<hr>
			<div class="well">
				<form role="form" method="POST" action="{{url('/announcement/show/'.$id.'/comment')}}" enctype="multipart/form-data">
					<textarea rows="5" cols="70" name="comment" id="textArea"></textarea><br><br>
					<button type="submit" class="btn btn-primary">Submit</button>
        	</form>
        	</div>
			</div>
		<div>

<!--comment-->
			<h2> ความคิดเห็น </h2>
			<hr>
			<div class="well col-md-8 col-md-offset-1">
			@foreach ($showComment as $value) 	
			
				<div class="row">
			  		<div class="col-md-3">
			  			<span class="glyphicon glyphicon-user"></span> <span class="text-muted small"><em><a>{{$value->getId_user()}}</a></em></span> 
			  		</div>
			  		<div class="col-md-5">{{$value->getComment()}}</div>
			  		<div class="col-md-4">
			  			 <span class="text-muted small"><em>{{$value->getTime_Com()}}</em></span>
			  		</div>
			  	</div>
			@endforeach
			</div>


		</div>

</div>
@endif
@stop


