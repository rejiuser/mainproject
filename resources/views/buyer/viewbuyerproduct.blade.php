<html>
    <head>
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script src="js\jquery-2.2.4.min.js">
        </script>

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
        .price:hover{
            color:black;
        }
        .details:hover{
color:red;
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
    <div class="navbar navbar-expand-sm navbar-dark" style="background-color:ghostwhite;">
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
<li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " >Register</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link ">Account</a>
</li>
<!-- <li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li> -->
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link " >My orders</a>
</li>
<li>
    <a href="{{url('viewcart')}}" class="nav-link">Cart <span class="text-danger">{{$res}}</span></a>
</li>
<li class="nav-items">
<a href="{{url('logout')}}" class="nav-link " >Logout</a>
</li>
<!-- <li class="nav-items">
   
</li> -->


    </ul>
  <!-- <form class="d-flex"> -->
<input type="search" name="sear" class="search" class="form-control " placeholder="Search" id="text" style="border:none;background-color:white">
<input type="submit" value="Search" id="search" name="sear" class="btn" style="background-color:goldenrod;margin-right:30px">
    <!-- </form> -->
</div>
 </div>
    </div> 
  








<div class="container bg-white mt-5">
    <div class="row">
    <div class="col-md-2 mt-3">
            <select name="Sort" id="sort" >
                <option value="">Sort</option>
                <option value="lowprice">Price Low to High</option>
                <option value="high">Price Hight to Low</option>
            </select>
            </div>
    </div>
    <div class="row" id="empty">
       
    <!-- <div class="col" style="width:100%;height:100px;display:flex;flex-wrap:wrap"> -->
    @foreach($result as $value)
  
  <!-- <div class="col" style="width:20%;height: 450px;border-style:solid;margin:10px;padding:20px;border-color:black;"> -->

   <div class="col pt-5">
        <img src="images/{{$value->Photo}}" height="200" width="250">
        <!-- <div> -->
        <h2 class="text-black fw-bold pt-3">{{$value->Product_Name}}</h2>
<!-- </div> -->
<!-- <div> -->
        <p style="font-size:20px;color:red;"><span class="price"><label>Price</label><label>:</label>{{$value->Price}}</span><p>
     <!-- </div>   -->
<!-- <div> -->
        <p style="font-size:20px;"><a href="{{url('buyerproductdetails',$value['id'])}}"><span class="details btn btn-success">Details</span></a></p>
   <!-- </div> -->
    <!-- </div> --> 
  </div>
  
    @endforeach
  
<!-- </div> -->
<!-- container and row div -->
    </div>
</div>
    </body>
</html>

<script>
      $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
 
    $('#search').click(function()
    {
        var text=$('#text').val();
        // alert(text)
        
        $.ajax({
            type:"post",
            url:"{{url('viewprosearch')}}",
            data:{
                tsearch:text,
            },
            success:function(data)
            {
                $('#empty').empty();
                $.each(data,function(key,value)
                {

                
                var res='<div class="col pt-5"><img src="images/'+value['Photo']+'" height="200" width="250"><h2 class="text-black fw-bold pt-3">'+value['Product_Name']+'</h2><p style="font-size:20px;color:red;"><span class="price"><label>Price</label><label>:</label>'+value['Price']+'</span><p><p style="font-size:20px;"><a href="buyerproductdetails/'+value['aid']+'"><span class="details btn btn-success">Details</span></a></p></div>'
                $('#empty').append(res);
            })
            }
           
        });
    })
</script>