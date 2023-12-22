<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script  src="js\jquery-2.2.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
.search{
        background-color:ghostwhite;
     }
     
        </style>
    </head>

    <body style="">
    
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 






    <div class="navbar navbar-expand-sm navbar-dark" style="">
 <div class="container-fluid">
    <a href="#" class="navbar-brand fw-bold"></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav" style="margin-right:500px">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link ">Home</a></li>

<!-- <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link text-warning dropdown-toggle" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
   
<a href="{{url('changepassword')}}" class="dropdown-item text-black">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black" >Logout</a>
   

</ul>
</li> -->
<li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " >Register</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link active" style="color:red" >Account</a>
</li>
<!-- <li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li> -->
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link ">My orders</a>
</li>
<li class="nav-items">
<a href="{{url('logout')}}" class="nav-link" >Logout</a>
</li>
<!-- <li class="nav-items">
   
</li> -->


    </ul>
  <!-- <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control " placeholder="Search" id="" style="border:none;">
<input type="submit" value="Search" name="sear" class="btn" style="background-color:goldenrod">
    </form> -->
</div>
 </div>
    </div> 

    <div class="mt-2 pt-2 border" style="background-color:ghostwhite">
               <h1 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:500">Profile</h1>
               </div>
            <div class="container pt-3 mt-3" >
               <div class="row">
            @foreach($result as $value)
            <div class="col-md-6">
            <div>
     <img src="images/{{$value['Photo']}}" height="400" width="350">
    </div>
            </div>
            <div class="col-md-6">
 
            <!-- <div class="col-md-4" style="border:none;background-color:white;position:absolute;left:405px;"> -->
             
      
               <div class="mb-3" style="font-size:30px;font-weight:500;">
                <!-- <label for="">Name</label> -->

               <span class="name"> {{$value['Name']}}</span>
               
                    </div>
                    <div class="mb-3" style="font-size:20px;font-weight:500;">
           Email:{{$value['Email']}}
                </div>
                <div class="mb-3" style="font-size:20px;font-weight:500;">
         Mobile:{{$value['Phone']}}</div>
         <div class="mb-3" style="font-size:20px;font-weight:500;">
      User Name:{{$value['Username']}}
    </div>
    <div class="mb-3" style="font-size:20px;font-weight:500;">
        Password:{{$value['Password']}}
    </div>
  <div class="">
      <a href="{{url('editbuyerprofile')}}" style="font-size:20px;" class="btn btn-success mb-3">Edit My Profile</a></td></tr>
        @endforeach
      </div>
    </div>

    <!-- <div class="col-md-6" style="background-image:url('images/1695193780.jpg');background-size:cover;">

    </div> -->
    </div>
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
</script>