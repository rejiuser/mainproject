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
    <body style="background-image:url('images/chris11.avif')">
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 
    <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand fw-bold" style="font-size:25px;color:goldenrod;margin-left:35px;"></span></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav" style="margin-right:521px">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link">Home</a></li>

<!-- <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link text-warning dropdown-toggle" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
   
<a href="{{url('changepassword')}}" class="dropdown-item text-black">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black" >Logout</a>
   

</ul>
</li> -->
<li class="nav-items">
<a href="{{url('logout')}}" class="nav-link" >Logout</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link ">Account</a>
</li>
<!-- <li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li> -->
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link active" >My orders</a>
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











    <div class="container mt-5 pt-5 bg-white" style="">
        <div class="col-md-6 p-5">
        <table class="table">
            <thead style="font-weight:500;font-size:20px;">
                <th>Name</th>
                <th>Total</th>
<th>Status</th>
            </thead> 
            <tbody style="font-size:19px;font-weight:400">
           @foreach($result as $value)

           <tr><td>{{$value['Name']}}</td>
          <td>{{$value['Total']}}</td><td>{{$value['Status']}}</td>
       <td><a href="{{url('orderedprodetails',$value['id'])}}"><span class="btn btn-outline-primary">Details</span></a></td>
           
           
           @endforeach
           </tbody>
        </table>
        </div>
        </div>
    </body>
</html>