<html>
    <head>
        <script  src="js\jquery-2.2.4.min.js"></script>
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
            color:black
        }
        .nav-link:hover{
         color:red;
        }
        .container{
            
        }
        .name:hover{
            background-color:inherit;
        }
.active{
    color:goldenrod;
}
</style>    
</head>
    <body style="background:linear-gradient(180deg,white,snowwhite)">
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 
            



            <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite">
 <div class="container-fluid">
 <ul class="navbar-nav" style="margin-left:396px">
 <li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link ">Home</a></li>
<li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " >Register</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link" >Account</a>
</li>
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link ">My orders</a>
</li>
<li class="nav-items">
<a href="{{url('logout')}}" class="nav-link" >Logout</a>
</li>
</ul>
</div>
</div>




<div class="container p-5 bg-white">
        <form action="{{url('changepasswordupdate')}}" method="post">

        @csrf
        <div class="row m-4">
<h2 class="mb-3">Change Password</h2>
<p>Strong password required.Enter 8-25 characters<br>Donot include common words or names.</p>
    </div>
    <div class="row m-4">
        <div class="col-md-3">
        <label for="" ><span class="text-success">*</span>Username</label>
        </div>
        <div class="col-md-3">
        {{session('username')}}
        </div>
    </div>
        <div class="row m-4">
            <div class="col-md-3">
        <label for=""><span class="text-danger">*</span>Current Password</label>
        </div>
        <div class="col-md-3">
        <input type="text" name="currentpassword" class="form-control" id="">
        @if($errors->has('currentpassword'))<span class="text-danger">*</span>
       <span class="text-danger"> {{$errors->first('currentpassword')}}</span>
        @endif
        @if(Session::get('error'))
        {{Session::get('error')}}
        @endif
        </div>
        </div>
      
        <div class="row m-4">
            <div class="col-md-3">
        <label for=""><span class="text-danger">*</span>New Password</label>
        </div>
        <div class="col-md-3">
        <input type="text" name="newpassword" class="form-control" id="">
        @if($errors->has('newpassword'))<span class="text-danger">*</span>
        <span class="text-danger">{{$errors->first('newpassword')}}</span>
        @endif
        </div>
        </div>
        <div class="row m-4">
            <div class="col-md-3">
            <label for=""><span class="text-danger">*</span>Confirm Password</label>
            </div>
            <div class="col-md-3">
            <input type="text" name="confirmpassword"  class="form-control" id="">
        @if($errors->has('confirmpassword'))
        {{$errors->first('confirmpassword')}}
        @endif
        </div>
        </div>
        <div class="row m-4">
            <div class="col text-center">
            <input type="submit" value="Update" class="btn btn-success" name="sub">
            </div>
            <div class="col">
                <a href="{{('buyerhome')}}"><span class="btn" style="margin-left:-209px">Cancel</span></a>
            </div>
        </div>
        </form>
        </div>

    </body>
</html>
<script>
    @if(Session::has('message'))
    toastr.options=
    {
        'closeButton':true, 
        'progressBar':true,
    }
    toastr.success('{{session('message')}}');
    @endif
    // @if(Session::has('error'))
    // toastr.options=
    // {
    //     'closeButton':true,
    //     'progressBar':true,
    // }
    // toastr.danger('{{session('error')}}');
    // @endif
</script>