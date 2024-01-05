<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css"> 
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
        
        .price{
            color:red;
        }
        .price:hover{
            color:yellow;
        }
        .img:hover{
            background-blend-mode: darken;
        }
        .search{
        background-color:ghostwhite;
     }
     /* .button{
        transition: transform 0.3s;
     }
     .button:hover{
        background-color:pink;
        color:black;
        transform: translateY(-10px);
     } */
    </style>
    </head>
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 
    <body style="background-image:url('../images/b3.webp');background-size:cover;height:100vh;width:100%;position:absolute;">
    <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand fw-bold" style="font-size:25px;color:goldenrod;margin-left:35px;"></span></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav">
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
    <a href="{{url('buyer')}}" class="nav-link" >Register</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link"  >Account</a>
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
  <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control " placeholder="Search" id="" style="border:none;">
<input type="submit" value="Search" name="sear" class="btn" style="background-color:goldenrod">
    </form>
</div>
 </div>
    </div> 


    


    <div class="container bg-white mt-5">
        <div class="row ">
            <div class="col-md-6">
        <!-- <table> -->
            <h1 class="mb-5 mt-5">Order Details</h1>
            
             @foreach($result as $value)
            
             <div class="row ">
                <div class="col">
            <a href="{{url('buyerproductdetails',$value['product_id'])}}"><img src="../images/{{$value['Photo']}}" height="200" width="300" class="img mb-5"></a>
            </div>
            <div class="col " style="font-size:20px;">
            <span style="font-size:30px;font-weight:500;">{{$value['Product_Name']}}</span>
            
      <div class="row ">
      <span style="font-weight:500;">Quantity : {{$value['quantity']}}</span>
            </div>
            <div class="row">
            <span style="font-weight:600;" class="price">{{$value['price']}} Rs</span>
        </div>
        </div>
</div>
    @endforeach
     <!-- </table> -->
     </div>
     <div class="col-md-6 text-end">
    
    <table class="table text-end">
        <h1 class="mt-5">Address</h1>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">Name</label></td><td> <span style="font-weight:400;font-size:20px;">{{$res['Name']}}</span></td></tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">House no./street name</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['House_no']}}</span></td></tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">PIN</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['pin']}}</span></td>
        </tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">District</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['District']}}</span></td></tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">State</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['State']}}</span></td></tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">Mobile</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['Mobile']}}</span></td></tr>
        <tr><td><label for="" style="font-weight:500;font-size:20px;">Nearest Landmark</label></td><td><span style="font-weight:400;font-size:20px;">{{$res['Landmark']}}</span></td></tr>

       
       @if($value['Status']=='Approved')
        <tr><td><a href="{{url('trackproduct',$value['Order_id'])}}"><span class=" button btn btn-success">Track Product</span></a></td></tr>
        @endif
    </table>

    </div>
  </div>
   </div>
    </body>
</html>