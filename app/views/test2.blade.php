@extends('test')

@section('content')

<div>
<br>
<div class="row" style="margin-left:15px;">
	<div class="alert alert-success col-md-8" role="alert">ยินดีต้อนรับ คุณ โอริโอ้</div>
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
							          <th name="order"><p align="center">#</p></th>
							          <th name="namesubject"><p align="center">ชื่อรายวิชา</p></th>
							          <th name="nstudent"><p align="center">จำนวนนักเรียน</p></th>
							          <th name="statusUp"><p align="center">สถานะรายชื่อ</p></th>
							        </tr>
							      </thead>
							      <tbody>
							        <tr class="active">
							          <td><p align="center">1</p></td>
							          <td><p align="center">OOAD</p></td>
							          <td><p align="center">10</p></td>
							          <td><p align="center"><font color="#36a550">อัพรายชื่อแล้ว</font></p></td>
							        </tr>
							        <tr>
							          <td><p align="center">2</p></td>
							          <td><p align="center">SE</p></td>
							          <td><p align="center">20</p></td>
							          <td><p align="center"><font color="#fd4242">ยังไม่อัพรายชื่อ</font></p></td>
							        </tr>
							        <tr class="success">
							          <td><p align="center">3</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr>
							          <td><p align="center">4</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr class="info">
							          <td><p align="center">5</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr>
							          <td><p align="center">6</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr class="warning">
							          <td><p align="center">7</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr>
							          <td><p align="center">8</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							        <tr class="danger">
							          <td><p align="center">9</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							          <td><p align="center">Column content</p></td>
							        </tr>
							      </tbody>
							    </table>
			 		</div>
				</div>
		</div>
		<!--topic list-->
			<div class="col-md-6">
				<div class="panel panel-default">
		 			 <div class="panel-heading">กระทู้ถาม-ตอบของคุณ</div>
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
                            <a href="#" class="btn btn-default btn-block">View All Topic</a>
                        </div>
				</div>
		    </div>
		</div>
	</div>
</div>
	
@stop

