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

        <div class="navbar navbar-expand-sm navbar-dark " style="background-color:ghostwhite;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand text-white" style="font-size:25px;"></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav" style="margin-right:468px;">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link"  >Home</a></li>

<li class="nav-items">
<a href="{{url('login')}}" class="nav-link ">{{session('username')}}</a></li>
<!-- <li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " style="font-size:20px;" >Register</a>
</li> -->
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link ">Account</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerproduct')}}" class="nav-link " >Shop</a>
</li>
<li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link " >Cart</span></a>
</li>
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link ">My orders</a>
</li>
<li class="nav-items">
    <a href="{{url('logout')}}" class="nav-link" >Logout</a>
</li>


    </ul>
  <!-- <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control" placeholder="Search" id="" style="border:none;">
<input type="submit" value="Search" name="sear" class="btn btn-primary">
    </form> -->
</div>
 </div>
    </div> 

    <div class="container pt-5 mt-5">
       
<form action="{{url('cartproceedinsert')}}" method="post" enctype="multipart/form-data">
    @csrf
     <div class="row">
    <div class="col-md-6">
        <div class="row">
        <div class="col mb-2" style="font-weight:500;font-size:20px">
        <label for="">Name</label>
       
        </div>
        <div class="col mb-2">
        <input type="text" name="name" id="" class="form-control">
        @if($errors->has('name'))<span class="text-danger">*</span>
        <span class="text-danger"> {{$errors->first('name')}}</span>
        @endif
        </div>
   </div>
   <div class="row">
    <div class="col  mb-2" style="font-weight:500;font-size:20px">
       <label for="">House no./street name</label>
       </div>
       <div class="col mb-2">
        <input type="text" name="house" id=""  class="form-control">
        @if($errors->has('house'))<span class="text-danger">*</span>
        <span class="text-danger">{{$errors->first('house')}}</span>
        @endif
       </div>
       </div>
       <div class="row">
        <div class="col mb-2" style="font-weight:500;font-size:20px">
      <label for="">PIN</label>
      </div>
      <div class="col mb-2">
        <input type="text" name="pin" id="" class="form-control">
        @if($errors->has('pin'))<span class="text-danger">*</span>
        <span class="text-danger">{{$errors->first('pin')}}</span>
        @endif
</div>
        </div>
        <div class="row">
            <div class="col mb-2" style="font-weight:500;font-size:20px">
        <label for="">District</label></td><td>
            </div>
            <div class="col mb-2">
            <input type="text" name="district" id="" class="form-control">
            @if($errors->has('district'))<span class="text-danger">*</span>
            <span class="text-danger">{{$errors->first('district')}}</span>
@endif
        </div>
            </div>
            <div class="row">
                <div class="col mb-2" style="font-weight:500;font-size:20px">
        <label for="">State</label>
        </div>
        <div class="col mb-2">
            <input type="text" name="state" id="" class="form-control">
            @if($errors->has('state'))<span class="text-danger">*</span>
            <span class="text-danger">{{$errors->first('state')}}</span>
@endif
        </div>
        </div>
        <div class="row">
            <div class="col mb-2" style="font-weight:500;font-size:20px">
        <label for="">Mobile</label>
        </div>
        <div class="col mb-2">
            <input type="text" name="mobile" id="" class="form-control">
            @if($errors->has('mobile'))<span class="text-danger">*</span>
            <span class="text-danger">{{$errors->first('mobile')}}</span>
            @endif
        </div>
        </div>
        <div class="row">
            <div class="col mb-2" style="font-weight:500;font-size:20px">
       <label for="">Nearest Landmark</label>
       </div>
       <div class="col mb-2">
        <input type="text" name="landmark" id="" class="form-control">
        @if($errors->has('landmark'))<span class="text-danger">*</span>
        <span class="text-danger">{{$errors->first('landmark')}}</span>
        @endif
</div>
       </div>
       
        
    </div>
  
   
  
<div class="col-md-6 ps-5">
    <table class="table">
    <?php
    $total=0;
    ?>
  <thead>
    <th>Product</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    
  </thead>
  <tbody>
    @foreach($result as $value)
    <!-- <div class="row"> -->
        <tr>
<td><img src="images/{{$value['Photo']}}" height="100" width="100"></td>
<!-- </div> -->

   
<td>


{{$value['Product_Name']}}</td>



<td>


{{$value['qua']}}</td>


<td>

{{$value['Price']*$value['qua']}}</td>

</tr>
  <?php
   $total=$total+$value['Price']*$value['qua'];
   ?>

    @endforeach
    </table>
    <div style="text-align:end;">
   <input type="hidden" name="total" value="{{$total}}">
     <span style="font-weight:500;font-size:30px;">Total : {{$total}} Rs </span>
     <br>
        <input type="submit" class="btn btn-warning text-right" value="Place Order" name="sub">
    </div>
      
  

</tbody>
    
      </div> 
      </div>
   
   </div>


     
</form>
        </body>
   
</html>  