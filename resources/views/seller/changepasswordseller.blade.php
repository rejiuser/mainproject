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
            transition:transform 0.3s;
        }
        .nav-link:hover{
         color:darkcyan;
         
         
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
        .main
        {
            background-image:url('images/sofa.avif');
            background-size:cover;
            background-position:center;
            height:100vh;            

        }
        </style>

    </head>
    <body>
        <form action="{{url('updatepasswordseller')}}" method="post">
@csrf
<div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:aliceblue">
            <div class="container-fluid">
<a href="#" class="navbar-brand fw-bold" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:30px;color:cadetblue">Be Seller</a>

<ul class="navbar-nav">
    <li class="navbar-items">
        <a href="{{url('sellerhome')}}" class="nav-link" >Home</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="{{url('viewprofile')}}" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
<a href="{{url('changepasswordseller')}}" class="dropdown-item " style="background-color:darkcyan;">Change Password</a>
<a href="{{url('logoutseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Logout</a>
</ul>



    </li>
    <li class="navbar-items">
        <a href="{{url('viewprofile')}}" class="nav-link ">My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link " style="">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link ">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link ">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link ">Logout</a>
</li>
</ul>
            </div>

        </div>

<div class="container mt-5 pt-5">
<div class="col-md-6  p-5" style="background-color:ghostwhite">
    <h2 class="text-center mb-3">Change Password</h2>
    <div class="row m-4">
        <div class="col-md-4">
        <label for="">Current Password</label>
        </div>
        <div class="col">
        <input type="text" name="currentpassword" id="" class="form-control">
@if($errors->has('currentpassword'))<span style="color:red">*</span>
{{$errors->first('currentpassword')}}
@endif
@if(Session::get('error'))
{{Session::get('error')}}
@endif
</div>
</div>
<div class="row m-4">
    <div class="col-md-4">
<label for="">New Password</label>
</div>   
<div class="col">
<input type="text" name="newpassword" id="" class="form-control">
@if($errors->has('newpassword'))<span style="color:red">*</span>
{{$errors->first('newpassword')}}
@endif
</div> 
</div>
<div class="row m-4">
    <div class="col-md-4">
<label for="">Confirm Password</label>
</div>
<div class="col">
    <input type="text" name="confirmpassword" id="" class="form-control">
@if($errors->has('confirmpassword'))<span style="color:red">*</span>
{{$errors->first('confirmpassword')}}
@endif
</div>
</div>
<div class="row m-4">

<input type="submit" value="Update" name="sub" class="btn btn-success">
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
    'closeButton':true,
    'progressBar':true,
}   
    toastr.success('{{session('message')}}')
    @endif
    
</script>