<html>
<head>
	<meta charset=utf-8>
	<title>:: Lab checker :: </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
</head>
<body background=images/bg.png>
  <div class="modal-dialog">
  <div class="well well-lg"> 
  		<div class="modal-body">
			<img src="images/5555.gif" class="img-responsive" alt="Responsive image">  
		  <!-- <h2 class="text-center">Lab Checker<br>
		   Login-->
		</div> 
    		<form class="form col-md-12 center-block" method="POST" action="{{url('/ac_login')}}">
				<div class="form-group">
					<input type="text" id="id" name="id" class="form-control input-lg" placeholder="YourID" required autofocus>
        		</div>

       			 <div class="form-group">
					<input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" required autofocus>
       			 </div>
		
				<div class="form-group">
				<center>
					<button class="btn btn-primary btn-lg" type="submit" value="send">Sign In</button></form>
			<!-- Button trigger modal -->
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button>
			<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">ระบบสมัครสมาชิก</h4>
      </div>
      <div class="modal-body">
      <!--Form-->
	  <form name="register" method="POST" action="{{url('/register')}}">
		<div class="input-group">
			<span class="input-group-addon">ชื่อ</span>
				 <input type="text" name ="name" class="form-control" required autofocus >
		</div>

		<div class="input-group">
			 <span class="input-group-addon">นามสกุล</span>
				 <input type="text" name ="surname" class="form-control" required autofocus>
		</div>

		<div class="input-group">
			 <span class="input-group-addon">รหัสประจำตัว</span>
				 <input type="text" name="id" class="form-control" required autofocus>
		</div>

		<div class="input-group">
			 <span class="input-group-addon">E-mail</span>
				 <input type="email" name="email" class="form-control" required autofocus>
		</div>

		<div class="input-group">
			 <span class="input-group-addon">รหัสผ่าน</span>
				<input type="password" name="password" class="form-control" required autofocus onchange="form.repass.pattern = this.value;">
		</div>

		<div class="input-group">
			<span class="input-group-addon">ยืนยันรหัสผ่าน</span>
				<input type="password" name="repass" class="form-control" required autofocus title="โปรดใส่รหัสผ่านให้ตรงกัน">
		</div>


		<div class="input-group">
			<span class="input-group-addon " >สถานะ</span>
				<select name ="status" class="form-control">
				<option value="1">อาจารย์</option>
				<option value="0">นักศึกษา</option>


				</select>
		</div>
			 <center> 
				<input type="submit" name ="submit" value="Send"> 
				<input type="reset" value="Reset">
			 </center>
	</form>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
				</div>

				</div>
     

     <div class="modal-footer">
          <div class="col-md-12">
          <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>-->
		  </div>	
      </div>
  </div>
  </div>
</div>
</div>
</center>


</body>
</html>
