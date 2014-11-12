@extends('template')
@section('content')
<!--head-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
  <script src = "/js/bootstrap.js"></script>
  <script src = "/js/jquery.min.js"></script>
  <link href="/css/simple-sidebar.css" rel="stylesheet">

  <!--end head-->

	
	<!--table-->
	<div class="col-md-8 col-md-offset-1" style="margin-top:20px;">
		<div><a type="button" class="btn btn-success" href="/newClass" >New Class</a>
			 <a type="button" class="btn btn-warning" href="/editclass">Edit Class</a>
			 <a type="button" class="btn btn-danger" href="/deletesubject">Delete</a>
		</div>
		<br>
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

@stop