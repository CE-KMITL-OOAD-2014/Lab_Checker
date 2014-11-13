@extends('template')

@section('content')


<div>
<br>
<div class="row" style="margin-left:15px;">
	<div class="alert alert-success col-md-8" role="alert">ยินดีต้อนรับ {{Auth::id()}}</div>
</div>
<!--two box-->
	<div class="row">
	  <div class="col-md-12">
	  	<div class="col-md-6">
			   <div class="panel panel-default">
				  <div class="panel-heading">ชั้นเรียนของคุณ</div>
			  		<div class="panel-body">
			  			<!--table subject-->
							<table class="table">
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

								          <td><p align="center" >{{$subject[$i]->getId_subject()}}</p></td>
								          <td><a href="/subject/{{$subject[$i]->getId_subject()}}"><center>{{$subject[$i]->getName_subject()}}<center></a></td>
								          <td><p align="center">{{$subject[$i]->getNumstudent()}}</p></td>
								          <td><p align="center"><font color="#36a550">{{$subject[$i]->getPath_file()}}</font></p></td>
								        </tr>
								        @endfor
							      </tbody>
							    </table>
			 		</div>
				</div>
		</div>
		<!--topic list-->
			<div class="col-md-6">
				<div class="panel panel-default">
		 			 <div class="panel-heading">ข่าวประกาศ</div>
		 				<div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> อีเหี้ยโอ้
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="/annoucement" class="btn btn-default btn-block">View All Topic</a>
                        </div>
				</div>
		    </div>
		</div>
	</div>
</div>
	
@stop

