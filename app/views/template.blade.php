<html>
<head>
	<meta charset="utf-8">
	<title>:: Lab checker :: </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
  <script src = "{{ asset('js/bootstrap.js') }}"></script>
  <script src = "{{ asset('js/jquery.min.js') }}"></script>
	<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>
    <body>
     
            <!--top bar-->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      	<div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
		   <a href="#menu-toggle" class="navbar-brand menu-toggle"><span class="glyphicon glyphicon-align-justify"></span> Lab Checker</a>	
		   
    	</div>

		
	<div class="navbar-collapse collapse">
		 <!--right topmenu-->
	<ul class="nav navbar-nav navbar-right">
         <!--dropdown-->
		<li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Auth::id()}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/usersetting">Edit Profile</a></li>
            <li><a href="/user/logout" >Log Out</a></li>
          </ul>
        </li>
    </ul>
			<!--End dropdown-->
	
	</div>
   </nav>
   
<!--END top bar-->

 

<!----left bar------>
     <div id="wrapper" style="padding-top:50px;">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="padding-top:150px;">>
            <ul class="sidebar-nav">
                <li>
                    <a href="/index"><span class="glyphicon glyphicon-home"></span>   หน้าแรก	</a>
                </li>
                <li>
                    <a href="/class"><span class="glyphicon glyphicon-star"></span>  ชั้นเรียน</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-bullhorn"></span>      บอร์ดถาม-ตอบ</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
       <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

<!--    <div class="container">-->
            @yield('content')
        </div>
    </body>
</html>