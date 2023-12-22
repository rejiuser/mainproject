<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.bundle.js">

    </script>
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
         background-color:white;
        }
        .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        }
        .come:hover{
            color:azure;
        }
        /* .main
        {
            background-image:url('images/1691848820.jpg');
            /* position: absolute; */
            /* background-size: cover; */
            /* height:100vh;
            width:100%;
            opacity:0.80;

        } */
        /* .new
        {
            background-image:url('images/1695195915.jpg');
            background-size:cover;
            height:100vh;
            width:100%;
            opacity:0.80;
        } */ 
        .active{
            ;
            opacity:0.5;
            
            
        }
     
    </style>
  
    </head>
    <body>
    <div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:aliceblue">
            <div class="container-fluid">
<a href="#" class="navbar-brand fw-bold" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:30px;color:cadetblue">Be Seller</a>

<ul class="navbar-nav">
    <li class="navbar-items">
        <a href="{{url('sellerhome')}}" class="nav-link text-black">Home</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="{{url('viewprofile')}}" class="nav-link dropdown-toggle text-black" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
<a href="{{url('changepasswordseller')}}" class="dropdown-item text-black" style="background-color:darkcyan;">Change Password</a>
<a href="{{url('logoutseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Logout</a>
</ul>



    </li>
    <li class="navbar-items">
        <a href="{{url('viewprofile')}}" class="nav-link active" style="color:chocolate">My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link text-black" style="">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link text-black">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link text-black">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link text-black">Logout</a>
</li>
</ul>
            </div>

        </div>




    <!-- <div class="navbar navbar-expand-lg navbar-dark" style="background-color:darkcyan;">
            <div class="container-fluid">
<a href="#" class="navbar-brand" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:30px">Zayb!</a>

<ul class="navbar-nav">
<li class="navbar-items">
        <a href="{{url('sellerhome')}}" class="nav-link text-white">Home</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="{{url('viewprofile')}}" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
<a href="{{url('changepasswordseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Change Password</a>
</ul>
<ul class="dropdown-menu">
<a href="{{url('logoutseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Logout</a>

</ul>


    </li>
    <li class="navbar-items">
        <a href="{{url('viewprofile')}}" class="nav-link active text-black">My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link text-white" style="">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link text-white">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link text-white">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link text-white">Logout</a>
</li>
</ul>
            </div>

        </div> -->




<div class="container mt-5 p-5">

<div class="col-md-6" style="background-color:white;min-height:600px;margin-left: -120px;">
        <form action="" method="post" enctype="multipart/form-data"></form>
          @csrf
      
      
        @foreach($result as $value)
        <div class="row m-2">
 
    <div class="col">
<img src="images/{{$value['Photo']}}" height="150" width="150">
  </div>
  </div>
       
        <div class="row m-2">
            <div class="col">
            <label for="" style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Name</label>
            </div>
            <div class="col">
            <span style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$value['Name']}}</span>
        </div>
        </div>
<div class="row m-2">
    <div class="col">
        <label for="" style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Email</label>
        </div>
        <div class="col">
        <span style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> {{$value['Email']}}</span>
        </div>
        </div>
        <div class="row m-2">
            <div class="col">
        <label for="" style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Phone</label>
</div>
<div class="col">
<span style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$value['Phone']}}</span>
</div>
</div>
<div class="row m-2">
    <div class="col">
        <label for="" style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Username</label>
            </div>
            <div class="col">
            <span style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$value['Username']}}</span>
        </div>
        </div>
        <div class="row m-2">
            <div class="col">
 <label for="" style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Password</label>
    </div>
    <div class="col">
    <span style="font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$value['Password']}}</span>
</div>
</div>

<a href="{{url('editprofile',$value['id'])}}" class="btn btn-warning">Edit My Profile</a>
@endforeach
</div>
    </div>
</body>
</html>