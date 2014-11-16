@extends('template')
@section('content')

@if (!Auth::guest()) 


	<!--table-->
	<div class="col-md-8 col-md-offset-1" style="margin-top:20px;">
		
		@if($userID == '1')
		<div><a type="button" class="btn btn-success" href="/newClass" >New Class</a>
		</div>
		@endif
		<br>
 			  <div class="panel panel-default">
				  <div class="panel-heading">ชั้นเรียนทั้งหมด</div>
			  		<div class="panel-body">
			  			<!--table subject-->
							<table class="table table-striped">
							      <thead>
							        <tr>
							          <th name="order"><p align="center">รหัสรายวิชา</p></th>
							          <th name="namesubject"><p align="center">ชื่อรายวิชา</p></th>
							          <th name="nstudent"><p align="center">จำนวนนักเรียน</p></th>
							          <th name="statusUp"><p align="center">ไฟล์รายชื่อ</p></th>
							        </tr>
							      </thead>
							      <tbody>
							        <tr class="active">
							  		      @for ($i=0;$i<count($subject);$i++)

								          <td style="word-break: break-word;"><p align="center" >{{$subject[$i]->getId_subject()}}</p></td>
								          <td style="word-break: break-word;"><a href="/subject/{{$subject[$i]->getId_subject()}}"><center>{{$subject[$i]->getName_subject()}}<center></a></td>
								          <td style="word-break: break-word;"><p align="center">{{$subject[$i]->getNumstudent()}}</p></td>
								          <td style="word-break: break-word;"><p align="center"><font color="#36a550">{{$subject[$i]->getPath_file()}}</font></p></td>
								        </tr>
								        @endfor
							      </tbody>
							    </table>
			 		</div>
				</div>
@endif
@stop