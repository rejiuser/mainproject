<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<style>
    *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
    .nav-link{
            margin-top:5px;
            margin-right:10px;
            margin-left:10px;
        }
        .nav-link:hover{
         color:red;
        }
        .nav-link{
            color:black;
        }
        .active{
            background-color:goldenrod;
        }
</style>
    </head>
    <body style="background-color:ghostwhite">
    <div class="navbar navbar-expand-lg navbar-dark border" style="background-color:white">
<div class="container-fluid">
    <a href="#" class="navbar-brand"></a>
<ul class="navbar-nav" style="margin-right:560px">
    <li class="navbar-items">
        <a href="{{url('welcomehome')}}" class="nav-link  ps-5 " style="">Home</a> 
    </li>
    <li class="navbar-items">
        <a href="{{url('login')}}" class="nav-link  ps-5 pe-5">Login</a>
    </li>
    <!-- <li class="navbar-items">
        <a href="{{url('buyer')}}" class="nav-link">Register</a>
    </li> -->
</ul>
</div>
    </div>
    <div class="container mt-5 bg-white">
        <div class="col-md-6 offset-3">
            <div class="row m-4 text-center ">
            <h2 class="mt-3">Seller Sign up</h2>
            </div>
        <form action="{{url('registerinsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row m-4">
                
                <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name" id="">
                    @if($errors->has('name'))<span class="text-danger">*</span>
                   <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                
                </div>
                </div>
                <div class="row m-4">
                    <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email" id="">
            @if($errors->has('email'))<span class="text-danger">*</span>
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
            </div>
            </div>
            <div class="row m-4">  
                <div class="col"> 
            <input type="text" name="phone" placeholder="Phone Number" class="form-control" id="">
            @if($errors->has('phone'))<span class="text-danger">*</span>
            <span class="text-danger">{{$errors->first('phone')}}</span>
            @endif
            </div>
        </div> 
        <div class="row m-4">
            <div class="col">
    <input type="text" name="username" placeholder="Username" class="form-control" id=""> 
    @if($errors->has('username'))<span class="text-danger">*</span>
    <span class="text-danger">{{$errors->first('username')}}</span>
    @endif 
    </div>
</div>
<div class="row m-4">
    <div class="col">
<input type="text" name="password" placeholder="Password" class="form-control" id="">
@if($errors->has('password'))<span class="text-danger">*</span>
<span class="text-danger">{{$errors->first('password')}}</span>
@endif
</div>
</div>
<div class="row m-4"> 
    <div class="col-md-6">
        <input type="file" name="photo"  id="">
    
</div>
</div>

<div class="row m-4">
    <!-- <div class="col"> -->
<input type="submit" value="Register" class="btn btn-success" name="sub">
</div>
<!-- </div> -->

        </form>
        </div>
        </div>
    </body>
</html>