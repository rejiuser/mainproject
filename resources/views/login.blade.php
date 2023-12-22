<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.bundle.js">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .nav-link:hover{
            background-color:green;
            color:white;
        }
    </style>
    </head>
    <body class="" style="background-color:ghostwhite">
    <!-- <div class="navbar navbar-expand-lg navbar-dark" style="background-color:black;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand text-white" style="font-size:25px;"><span class="fw-bold">Z</span>ayb<span class="fw-bold">!</span></a>
    
    <ul class="navbar-nav">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link text-white " style="font-size:20px;" >Home</a></li>

<li class="nav-items">
<a href="{{url('login')}}" class="nav-link text-white" style="font-size:20px;" >Login</a></li>
<li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link text-white" style="font-size:20px;" >Register</a>
</li>

    </ul>

 </div>
   </div> -->
   <div class="navbar navbar-expand-lg navbar-dark bg-white border">
<div class="container-fluid">
    <a href="#" class="navbar-brand">ZayShopi</a>
<ul class="navbar-nav" style="margin-right:560px">
    <li class="navbar-items">
        <a href="{{url('welcomehome')}}" class="nav-link text-black  ps-5" style="">Home</a> 
    </li>
    <!-- <li class="navbar-items">
        <a href="{{url('login')}}" class="nav-link text-black ps-5 pe-5">Login</a>
    </li> -->
    <li class="navbar-items dropdown">
        <a href="" class="nav-link text-black dropdown-toggle" data-bs-toggle="dropdown">Register</a>
        <ul class="dropdown-menu">
<a href="{{url('buyer')}}" class="dropdown-item" >buyer register</a>
<a href="{{url('seller')}}" class="dropdown-item">seller register</a>
        </ul>
    </li>
</ul>
</div>
    </div>














<div class="container pt-6 mt-5 p-5 border" style="background-color:white">
<div class="row">  
    <div class="col-md-6" style="background-image:url('images/login.avif')">
        <!-- <img src="images/login.avif" alt=""> -->
    </div>
<div class="col-md-4" style="margin-left:101px;">

        <form action="{{url('loginaction')}}" method="post">
            @csrf
<div class="row mb-3">
    <h1 class="text-center  mb-5">Login</h1>
 <input type="text" class="form-control" name="user" id="" placeholder="User Name">

    <span style="color:red">
        @if($errors->has('user'))
        {{$errors->first('user')}}
        @endif
    </span>

</div>
<div class="row mb-3">
<input type="password" class="form-control" style="background-color:white" name="pass" id="" placeholder="Password">
<span style="color:red">
        @if($errors->has('pass'))
        {{$errors->first('pass')}}
        @endif
    </span>
    </div>

    <div>
        <a href="{{url('forgotpassword')}}">Forgot Password</a>
    </div>
    <div class="row mb-4 mt-4">
<input type="submit" class="btn btn-success" value="Login" name="sub"></td>

</div>

<a href="{{url('seller')}}">Seller Register</a>
<br><a href="{{url('buyer')}}">Buyer Register</a>
       </div>
       </div>  
    </div> 
    </form>
    </body>

    </html>
    <script>
        @if(Session::has('message'))
        toastr.options=
        {
            'closeButton':true
            'progressBar':true
        }
        toastr.success('{{session('message')}}')
        @endif
    </script>
