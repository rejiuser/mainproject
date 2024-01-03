<html>
    <head>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->


      
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
        .cate:hover{
            color:black;
        }
        .search{
        background-color:ghostwhite;
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
    <a href="#" class="navbar-brand fw-bold" style="font-size:25px;color:goldenrod;margin-left:35px;"></span></a>
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
    <a href="{{url('buyer')}}" class="nav-link " >Register</a>
</li> -->
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link  "  >Account</a>
</li>
<!-- <li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li> -->
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link ">My orders</a>
</li>
<li class="nav-items">
  <a href="{{url('viewcart')}}" class="nav-link ">Cart<span class="text-danger"> {{$res}}</span></a>
</li>
<li class="nav-items">
<a href="{{url('logout')}}" class="nav-link" >Logout</a>
</li>
<!-- <li class="nav-items">
   
</li> -->


    </ul>
  <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control" placeholder="Search" id="" style="border:none;background-color:white">
<input type="submit" value="Search" name="sear" class="btn" style="background-color:goldenrod">
    </form>
</div>
 </div>
    </div> 

    

      <form action="{{url('updatetocart',$result['pid'])}}" method="post" enctype="multipart/form-data">
        @csrf
   

        
            <div class="container bg-white mt-5">
              <div class="row">
              <div class="col">
              <img src="../images/{{$result['Photo']}}" height="500" width="450" alt="" class="pt-5">
              </div>
              <div class="col-md-6">

              <div>
       <h class="text-black fw-bold text-center" style="font-size:47px;"> {{$result['Product_Name']}}</h>
        </div>
        <div>
<p style="font-size:25px;color:red;"><span class="cate">{{$result['Price']}} Rs</span></p>
</div> 
        <div>
      <p  style="font-size:25px;color:red;"><span class="cate">{{$result['Category_name']}}</span>
</div>
<div>
<p  style="font-size:25px;color:red;"><span class="cate">{{$result['Subcategory']}}</span></p>
</div>
<div>
  <p style="color:black;font-size:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam illum in ea repellendus deserunt odio, est dignissimos laboriosam cumque sit veritatis deleniti quam ducimus eum molestias placeat rerum repudiandae? Laborum!</p>
</div>

<div class="row">
<p style="font-size:20px;color:black"><label for="">Quantity</label>

<input type="text" class="form-control" style="width:100px;" name="quantity" id="">
@if($errors->has('quantity'))<span class="text-danger">*</span>
<span class="text-danger">{{$errors->first('quantity')}}</span>
@endif
</p>

</div>
<div>                
<input type="submit" value="Add To Cart" class="btn btn-warning mb-5" name="sub">
</div>        
     
          </div>
      
          </div>
            </div>
    </table>
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
      toastr.success('{{session('message')}}');
@endif
// @if(Session::has('text'))
// toastr.options=
// {
//   'closeButton':true,
//   'progressBar':true,
// }
// toastr.success('{{session('text')}}');
// @endif
    </script>