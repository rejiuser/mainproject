<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <script src="..\bootstrap\js\bootstrap.bundle.js">

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
         background-color:cyan;
        }
        /* .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        }
        .come:hover{
            color:azure;
        } */
        /* .main
        {
            background-image:url('images/1691848820.jpg');
            /* position: absolute; */
            /* background-size: cover;
            height:100vh;
            width:100%;
            opacity:0.80; */

        /* } */
        /* .new
        {
            background-image:url('images/1695195915.jpg');
            background-size:cover;
            height:100vh;
            width:100%;
            opacity:0.80;
        } */ 
        .active{
            background-color:white;
            opacity:0.5;
            
        }
        .btn:hover{
            background-color:darkcyan;
        }
      /* .new{
        background-image:url('images/1695195915.jpg');
        background-size:cover;
      } */
    </style>
    </head>

    <body style=" background-image:url('../images/1695195915.jpg');background-size:cover">
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
        <a href="{{url('viewprofile')}}" class="nav-link active" style="color:chocolate" >My Account</a>
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
















    <div class="container  p-5" style="background-color:white;margin-top:112px" >
<div class="col-md-6 ">
        <form action="{{url('updateprofile',$result['id'])}}" method="post" enctype="multipart/form-data">
        @csrf    
        <div class="row m-2">
            <div class="col">
               <label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Name</label>
               </div>
               <div class="col">
               <input type="text" name="name" style="font-size:24px;background-color:ghostwhite;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="form-control" value="{{$result['Name']}}">
               </div>
               </div>
               <div class="row m-2 ">
                <div class="col">
           <label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Email</label>
           </div>
           <div class="col">
           <input type="email" name="em" id="" style="font-size:24px;background-color:ghostwhite;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="form-control" value="{{$result['Email']}}">
           </div>
           </div>
           <div class="row m-2">
            <div class="col">
        <label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Phone</label>
        </div>
        <div class="col">
        <input type="text" name="ph" id="" style="font-size:24px;background-color:ghostwhite;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="form-control" value="{{$result['Phone']}}"> 
           </div>
           </div>
           <div class="row m-2">
<div class="col">
    <label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Username</label>
    </div>
    <div class="col">
    <input type="text" name="user" style="font-size:24px;background-color:ghostwhite;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="form-control" id="" value="{{$result['Username']}}"> 
    </div>
    </div>
    <div class="row m-2">
<div class="col">
<label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Password</label>
</div>
<div class="col">
<input type="text" name="pass" style="font-size:24px;background-color:ghostwhite;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="form-control" id="" value="{{$result['Password']}}">    
</div>
</div>
<div class="row m-2">
    <div class="col">
<label for="" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Photo</label>
</div>
<div class="col">
<input type="file" name="photo" style="font-size:24px;font-size:24px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" id="" value="{{$result['Photo']}}">
</div>
</div>
<div class="row">
<input type="submit" value="Update" class="btn btn-success mt-3" name="sub">
</div>

     
    </form>
    </div>
    </div>
    
    </body>
</html>