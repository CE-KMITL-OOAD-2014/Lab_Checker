@extends('template')

@section('content')


<!--scriptShowhide-->

        <script>
      		 $(document).ready(function(){
            $("#editName").hide();

            $("#edit").click(function(){
                 $("p").hide();
                $("#editName").show();
            });

            $("#save").click(function(){
                $("p").show();
                $("#editName").hide();
          });
   

        		});
        </script>

  	<div class="breadcrumb"><li><p style="font-size: 20px;">Edit Your Profile</li></div>

	   <div class="col-md-8" style="margin-top:10px;">
	     	<div class="well bs-component col-md-8" style="margin-left:100px;">
          <!--edit-->
          <!---->
              <form class="form-horizontal" id="editname" role="form" method="post" action="{{url('/profile')}}">
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="name" placeholder="name" value="Blue">
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">Surname</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="surname" placeholder="surname"  value="Mumu">
                    </div>
                  </div>
                  
                  <div class="form-group" action=" ">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                  </div>
                </fieldset>
              </form>
    </div>


<!--code Edit-->


                   <!--
                    <form class="form-horizontal" role="form" method="post">
                        <div class="row">
                            <div class="form-group">
                            <label class="col-xs-8 col-md-2 control-label">Usename *</label>
                                <div class="col-xs-8 col-md-5">
                                    <input type="string" name="useName" class="form-control" placeholder="ห้ามใช้ภาษาไทย" required autofocus >
                                </div>
                            </div>
                        </div>
                    </form>

                    -->

        </div>
                   
@stop

