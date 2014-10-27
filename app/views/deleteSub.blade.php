@extends('test')

@section('content')


	<!--table-->
	<div class="col-md-8 col-md-offset-1" style="margin-top:20px;">
		<div class="row" >
	<div class="alert alert-danger col-md-12" role="alert">กรุณาเลือกรายวิชาที่คุณต้องการลบ</div>
</div>

<!--code delete-->
<script type="text/javascript">
function removeRow(obj) {
    'use strict';
    var theRow = obj.parentNode.parentNode.parentNode;
    var theRowParent = theRow.parentNode;
    theRowParent.remove(theRow);
}
</script>



				   <div class="panel panel-default">
					  <div class="panel-heading">ชั้นเรียนของคุณ</div>
				  		<div class="panel-body">
				  			<!--table subject-->
								<table class="table" id="classtable">
								     <thead>
								        <tr>
								          <th name="order"><p align="center">#</p></th>
								          <th name="namesubject"><p align="center">ชื่อรายวิชา</p></th>
								          <th name="nstudent"><p align="center">จำนวนนักเรียน</p></th>
								          <th name="statusUp"><p align="center">สถานะรายชื่อ</p></th>
								           <th name="statusUp"><p align="center">เลือกรายการที่จะลบ</p></th>
								        	
								        </tr>
								      </thead>
								      <tbody>
								        <tr class="active">
								          <td><p align="center">1</p></td>
								          <td><p align="center">OOAD</p></td>
								          <td><p align="center">10</p></td>
								          <td><p align="center"><font color="#36a550">อัพรายชื่อแล้ว</font></p></td>
								          <td><div class="checkbox"><center><button value="" class="btn btn-danger"  onclick="removeRow(this)">Delete</button></center><div>
								        </tr>
								        <tr>
								          <td><p align="center">2</p></td>
								          <td><p align="center">SE</p></td>
								          <td><p align="center">20</p></td>
								          <td><p align="center"><font color="#fd4242">ยังไม่อัพรายชื่อ</font></p></td>
								          <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)" >Delete</button></center><div>
								        </tr>
								        <tr class="success">
								          <td><p align="center">3</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								         <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)">Delete</button></center><div>
								        </tr>
								        <tr>
								          <td><p align="center">4</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								         <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)">Delete</button></center><div>
								        </tr>
								        <tr class="info">
								          <td><p align="center">5</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)" >Delete</button></center><div>
								        </tr>
								        <tr>
								          <td><p align="center">6</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								        <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)">Delete</button></center><div>
								        </tr>
								        <tr class="warning">
								          <td><p align="center">7</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								          <td><p align="center">Column content</p></td>
								         <td><div class="checkbox"><center><button  class="btn btn-danger" onclick="removeRow(this)"  >Delete</button></center><div>
								        </tr>
								 
								       
								      </tbody>
								    </table>
				 		</div>
			</div>

				
@stop