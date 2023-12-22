<html>
    <head>
    <script src="js\jquery-2.2.4.min.js">

</script>
<script src="bootstrap\js\bootstrap.bundle.js">

    </script>
        <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<style>
     *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .nav-link{
            color:black;
            transition:0.5s ease;
        }
        .nav-link:hover{
            color:red;
            

        }
</style>
    </head>
    <body style="background-color:ghostwhite">
        <div class="navbar navbar-expand-sm navbar-dark" style="background-color:white">
<div class="container-fluid">
<ul class="navbar-nav" style="margin-left:500px">
    <li class="navbar-items">
<a href="" class="nav-link">Home</a>
    </li>
    <li class="navbar-items">
<a href="" class="nav-link">Sign up</a>
    </li>
    <li class="navbar-items">
<a href="" class="nav-link">Sign In</a>
    </li>

</ul>
</div>
        </div>
        <div class="container pt-5 mt-5 p-5 bg-white" style="width:500px;box-shadow:50px">
      <div class="row m-4">    
<h2>Forgot Password</h2>
</div>  
<div class="row m-4">
<p><span class="text-danger">*</span>Please enter the username</p>
</div>
<div class="row m-4" >
 <form action="{{('usernamecheck')}}" method="post">
@csrf
<!-- <div class="col-md-6">
    <label for="">Username<span class="text-danger">*</span></label>
    </div> -->
    <div class="col">
    <input type="text" name="username" placeholder="Username" class="form-control" id="">
@if(Session::get('error'))<span class="text-danger">*</span>
<span class="text-danger">{{Session::get('error')}}</span>
@endif
</div>
</div>
<div class="row m-4">
    <!-- <div class="col"> -->
    <input type="submit" value="Next" class="btn btn-warning" style="margin-top:10px">
    </div>
    <div class="row m-4">
        <a href="{{url('login')}}" class="">Back To Login</a>
    </div>
<!-- </div> -->
        </form>
        <!-- </div> -->
        </div>
    </body>

</html>