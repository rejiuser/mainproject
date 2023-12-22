<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
            color:black;
        }
        .nav-link:hover{
         color:red;
        }
        .active{
            background-color:red; 
        }
        </style>
    </head>
    <body>
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 

    <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite;margin-left:30px">
 <div class="container-fluid">
    <a href="#" class="navbar-brand  fw-bold" style="font-size:25px;color:goldenrod"></span></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link ">Home</a></li>

<!-- <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link text-warning dropdown-toggle" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
   
<a href="{{url('changepassword')}}" class="dropdown-item text-black">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black" >Logout</a>
   

</ul>
</li> -->
<!-- <li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link text-black" >Register</a>
</li> -->
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link  active" >Account</a>
</li>
<!-- <li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li> -->
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link ">My orders</a>
</li>
<!-- <li class="nav-items">
   
</li> -->


    </ul>
  <!-- <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control " placeholder="Search" id="" style="border:none;">
<input type="submit" value="Search" name="sear" class="btn btn-warning">
    </form> -->
</div>
 </div>
    </div> 








    <div class="container" style="border:green">
    <div class="row">
    <div class="col-md-6 mt-5" style="background-image:url('images/{{$result['Photo']}}');background-size:cover;">

</div>
        <div class="col-md-6 mt-5" style="background-color:ghostwhite;" >
        <form action="{{url('updatebuyerprofile',$result['id'])}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row m-4">
            <label for="" class="fw-bold">Name</label>
            
            <input type="text" name="name" id="" class="form-control" value="{{$result['Name']}}" placeholder="Name">
            </div>
           
<div class="row m-4">
            <label for="" class="fw-bold">Email</label>
          
            <input type="email" name="email" class="form-control" id="" value="{{$result['Email']}}" >
          
</div>
<div class="row m-4">
        <label for="" class="fw-bold">Phone</label>
        
        <input type="text" name="phone" class="form-control" id="" value="{{$result['Phone']}}">  
          </div>
         

<div class="row m-4">
<label for="" class="fw-bold">Username</label>

<input type="text" name="username" id=""  class="form-control" value="{{$result['Username']}}"disabled>  

 </div>
 <!-- <div class="row m-4">
<label for="" class="fw-bold">Password</label>

    <input type="text" name="password" id="" class="form-control" value="{{$result['Password']}}"> 
    
       </div> -->
       <div class="row m-4">
<label for="" class="fw-bold">Photo</label></td><td><input type="file" name="photo" id="" value="{{$result['Photo']}}"></td>
    </div>
<div class="row m-4">
<input type="submit" value="Update" name="sub" class="btn btn-success">
</div>
</div>



          </div>
        </div>
        </form>
    </body>
</html>