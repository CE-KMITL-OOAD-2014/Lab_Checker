@extends('test')

@section('content')

  	<div class="breadcrumb"><li><p style="font-size: 20px;">Create Subject</li></div>
  	<div class="alert alert-warning col-md-8" role="alert" style="margin-left:20px;">กรุณากรอกข้อมูลที่ต้องการแก้ไขค่ะ</div>

	   <div class="col-md-8" style="margin-top:10px;">
	     	<div class="well bs-component col-md-8" style="margin-left:100px;">
          <!--edit-->
          <!---->
              <form class="form-horizontal" id="editname" role="form" method="post" action="#">
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">ชื่อวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="nameSub" placeholder="Name" >
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">รหัสวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="idSub">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">เวลาเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="startTime">
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">วันที่เรียน</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="timestudy">
						  <option>จันทร์</option>
						  <option>อังคาร</option>
						  <option>พุธ</option>
						  <option>พฤหัสบดี</option>
						  <option>ศุกร์</option>
					  </select>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ห้องเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="room">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">รายละเอียดรายวิชา</label>
                    <div class="col-lg-10">
                     <textarea rows="5" cols="50" ></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-lg-2 control-label">ไฟล์รายชื่อ</label>
                    <div class="col-lg-10">
                      <input type="file" class="flieinput" id="list">
                    </div>
                  </div>

                  <div class="form-group" action=" ">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </fieldset>
              </form>
    </div>
@stop