<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .nav-link{
        color:black;
        
    }
    .nav-link:hover{
        color:red;
    }
    
</style>
    </head>
    <body>
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 
    <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite">
 <div class="container-fluid">
    <a href="#" class="navbar-brand fw-bold"></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav" style="margin-right:500px">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link">Home</a></li>

<!-- <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link text-warning dropdown-toggle" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
   
<a href="{{url('changepassword')}}" class="dropdown-item text-black">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black" >Logout</a>
   

</ul>
</li> -->
<!-- <li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " >Register</a>
</li> -->
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link">Account</a>
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
        <table class="table">
            <thead>
                <th>Order Details</th>
                <th>Date</th>
            </thead>
            <tbody>
                
                @foreach($result as $value)
               <tr>
                <td>{{$value['Details']}}</td>
                <td>{{$value['Date']}}</td>
               </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>