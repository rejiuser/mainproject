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
    </head>
    <body style="background-color:ghostwhite">

        <form action="{{url('updateemail')}}" method="post">
            @csrf
            <div class="container  pt-5 mt-5 p-5 bg-white" style="width:500px;box-shadow:50px">
            <div class="row m-4">
                <h2>Forgot Password</h2>
            </div>
            <div class="row m-4">
                <p><span class="text-danger">*</span>Please enter email and phone number</p>
            </div>
  <div class="row m-4">
    <input type="text" name="email" class="form-control" placeholder="Email" id="">
@if(Session::get('error'))
<span class="text-danger">{{Session::get('error')}}</span>
@endif
<!-- @if($errors->has('email'))
<span class="text-danger">{{$errors->first('email')}}</span>
@endif -->
</div>
<div class="row m-4">
    <input type="text" name="phone" class="form-control" placeholder="Phone Number" id="">
    <!-- @if($errors->has('phone'))
    <span class="text-danger">{{$errors->first('phone')}}</span>
    @endif -->
    </div>
<div class="row m-4">
    <input type="submit" class="btn btn-warning" value="Next" name="sub">
    </div>
    <div class="row m-4">
        <a href="{{url('login')}}">Back To Login</a>
    </div>
  
  </div>
        </form>
    </body>
</html>