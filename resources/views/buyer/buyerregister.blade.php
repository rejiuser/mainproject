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
         background-color:green;
        }
        .active{
            background-color:goldenrod;
        }
</style>
    </head>
    
    <body class="bg-black">
    <!-- <div class="navbar navbar-expand-lg  navbar-dark" style="background-color:white;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand  fw-bold" style="font-size:25px;color:goldenrod;margin-left:35px;">Zaybi</a>
    
    <ul class="navbar-nav">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link text-black " >Home</a></li>

<li class="nav-items">
<a href="{{url('login')}}" class="nav-link text-black" >Login</a></li>
<li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link text-black active" >Register</a>
</li>

    </ul>

 </div>
   </div> -->
   <div class="navbar navbar-expand-lg navbar-dark border" style="background-color:ghostwhite">
<div class="container-fluid">
    <a href="#" class="navbar-brand">ZayShopi</a>
<ul class="navbar-nav" style="margin-right:560px">
    <li class="navbar-items">
        <a href="{{url('welcomehome')}}" class="nav-link text-black  ps-5 " style="">Home</a> 
    </li>
    <li class="navbar-items">
        <a href="{{url('login')}}" class="nav-link text-black ps-5 pe-5">Login</a>
    </li>
    <!-- <li class="navbar-items">
        <a href="{{url('buyer')}}" class="nav-link text-black">Register</a>
    </li> -->
</ul>
</div>
    </div>




        <div class="container pt-2  mt-5" style="background-color:ghostwhite">
            
            <div class="col-md-6 offset-3 p-5">
                <h2 class="text-center mb-4">Buyer Sign Up</h2>
        <form action="{{url('buyerinsert')}}" method="post" enctype="multipart/form-data">
          @csrf 
          <div class="row mb-3">
           <input type="text" name="name" id="" class="form-control" style="" placeholder="Name">
        @if($errors->has('name'))<span class="text-danger">*</span>
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif 
        </div>
           <div class="row mb-3">
       <input type="email" name="email" id="" placeholder="Email" class="form-control" >
       @if($errors->has('email'))<span class="text-danger">*</span>
       <span class="text-danger">{{$errors->first('email')}}</span>
       @endif
    </div>
       <div class="row mb-3 ">
        <input type="text" name="phone" id="" class="form-control" placeholder="Phone Number">
        @if($errors->has('phone'))<span class="text-danger">*</span>
        <span class="text-danger"> {{$errors->first('phone')}}</span>
        @endif
    </div>  
    <div class="row mb-3">
  <input type="text" name="username" id="" class="form-control" placeholder="Username"> 
  @if($errors->has('username'))<span class="text-danger">*</span>
  <span class="text-danger">{{$errors->first('username')}}</span>
  @endif
  
</div>
<div class="row mb-3">
<input type="text" name="password" id="" placeholder="Password"  class="form-control">  
@if($errors->has('password'))<span class="text-danger">*</span>
<span class="text-danger">{{$errors->first('password')}}</span>
@endif
</div>
<div class="row mb-3">
<label for="" class="fs-20">Photo</label>
<div class="col">
<input type="file" name="photo" id="">
</div>
</div>
<div class="row mt-5">
<input type="submit" value="Register" class="btn btn-success" name="sub">
</div>
         </div>
</div>
        </form>
    </body>
</html>
