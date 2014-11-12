@extends('template')

@section('content')
<center><h1>Lab Checker Board</h1></center>
<div style="margin-left:20px; margin-top:20px;" class="col-md-11 col-md-offset-2">

	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">อีโอ้ได้กับอีอาร์ตแล้ว</h3>
		  </div>
		<div class="panel-body"> เรื่องนี้ทุกคนเห็นว่าอย่างไรบ้าง 555555 </div> 

	  <div class="modal-footer">
	  	<span class="text-muted small"><em>โพสต์โดย : </em></span>
	  	<span class="text-muted small"><em><a>บลูบลูผู้น่ารัก </a></em></span>
	  	<span class="text-muted small"><em>เวลา : </em></span>
	  	<span class="text-muted small"><em>27 minutes ago</em></span>
      </div>
	</div>
<div class="col-md-11">
			<div>
				<h2>แสดงความคิดเห็น</h2>
				<hr>
			<div class="well">
				<form id="addtopic" role="form" method="POST" action="{{url('/newclass')}}" enctype="multipart/form-data">
					<textarea rows="5" cols="70" form="addsubject" name="detail_subject" id="detail_subject"></textarea><br><br>
					<button type="submit" class="btn btn-primary">Submit</button>
        	</form>
        	</div>
			</div>
<div>
<!--comment-->
			<h2> ความคิดเห็น </h2>
			<hr>
			
			<div class="well col-md-8 col-md-offset-1">
				<!--comment1-->
				<div class="row">
			  		<div class="col-md-3">
			  			<span class="glyphicon glyphicon-user"></span> <span class="text-muted small"><em><a>บลูบลูผู้น่ารัก</a></em></span> 
			  		</div>
			  		<div class="col-md-6">
			  			เห้ยย เราว่ามันก็ดีนะแก
			  		</div>
			  		<div class="col-md-2">
			  			<span class="text-muted small"><em>27 minutes ago</em></span>
			  		</div>
			  	</div>
			  
			</div>

		<!--comment2-->
		<div class="well col-md-8 col-md-offset-1">
			<div class="row">
			  		<div class="col-md-3">
			  			<span class="glyphicon glyphicon-user"></span> <span class="text-muted small"><em><a>แพนๆทีมบลูแพน</a></em></span> 
			  		</div>
			  		<div class="col-md-6">
			  			อุบาททท
			  		</div>
			  		<div class="col-md-2">
			  			<span class="text-muted small"><em>27 minutes ago</em></span>
			  		</div>
			  	</div>
			</div>
		</div>

		</div>

<div>

</div>


@stop
