@extends('test')

@section('content')
<div style="margin-left:15px; margin-top:10px;">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
  <li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
  <li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
  <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">...</div>
  <div class="tab-pane" id="profile">
<form class="form-horizontal" id="editname" role="form" method="post" action="#">
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">ชื่อวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="nameSub" placeholder="Name" required autofocus>
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">รหัสวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="idSub" required autofocus>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">เวลาเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="startTime" required autofocus>
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
                      <input type="text" class="form-control" id="room" required autofocus>
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
                      <input type="file" class="flieinput" id="list" required autofocus>
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
  
  <div class="tab-pane" id="messages">...</div>
</div>
			
</div>



<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

@stop