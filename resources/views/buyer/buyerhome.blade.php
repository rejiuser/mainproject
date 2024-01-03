
<html>
    <head>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <script src="js\jquery-2.2.4.min.js">

</script>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    
    <script src="bootstrap\js\bootstrap.bundle.js">

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
        color:red;
        }
    .active{
        color:red;
       
    }
        .header{
            background-image:url('images/girl3.jpg');
            background-size:cover;
            height:100vh;
            width:100%;
           
        }
     .header-text{
         position:absolute;
     }
     .search{
        background-color:ghostwhite;
     }
/* .btn{
    background-color:goldenrod;
} */
    



.nav-link{
            color:black;
            transition:0.5s ease;
        }
        /* .nav-link:hover{
            color:red;
            

        } */
        /* .nav-link:hover{
            background-color:ghostwhite;
        } */


        /* .header{
            background-image:url('images/ad2.jpg');
            background-size:cover;
            position:absolute;
        } */
        .active{
            color:blue;
        }
        /* .icons{
            margin-left:5px;
        } */
        @media screen and(max-width:982px){
            .icons{
                margin-left:25px;
            }
        }
    </style>
    </head>
    <body>
        <div class="container-fluid">
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div>
            <div>
            <h1 class="text-center pt-3" style=" font-family: 'Roboto', sans-serif;"><span style="color:red">Zay</span>&Com</h1>
        </div>
        <div class="navbar navbar-expand-lg navbar-dark  border" style="background-color:ghostwhite">
<div class="container-fluid">
    <a href="#" class="navbar-brand"></a>
<ul class="navbar-nav" style="margin-right:-204px">
<a href="{{url('viewbuyerproduct')}}"><span class="btn btn-danger">Shop</span></a>
        <!-- <input type="submit" value="Shop" class="btn btn-danger" style="width:;" name="sub" id="shop"> -->

    <li class="navbar-items">
        <a href="{{url('buyerhome')}}" class="nav-link  ps-5" style="">Home</a> 
    </li>

    <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
   
<a href="{{url('changepassword')}}" class="dropdown-item ">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black " >Logout</a>
   

</ul>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link" >Account</a>
</li>
<li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link" >Cart <span class="text-danger">{{$result}}</span></a>
</li>
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link">My orders</a>
</li>




    <!-- <li class="navbar-items">
        <a href="{{url('login')}}" class="nav-link ps-5 ">Sign In</a>
    </li> -->
    <!-- <li class="navbar-items">
        <a href="{{url('buyer')}}" class="nav-link ps-5 ">Sign Up</a>
    </li> -->
</ul>
<form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control " placeholder="Search" id="text" style="border:none;background-color:white">
<input type="submit" value="Search" name="sear" class="btn btn-danger" id="search">
    </form>
</div>
 </div>
    </div> 
<!-- <div class="icons">

</div> -->
        <!-- <input type="submit" value="Shop" class="btn btn-danger" style="width:;" name="sub" id="shop"> -->

</div>
    </div>
<!-- containerdiv -->
    </div>












     
    <!-- <div class="navbar navbar-expand-sm navbar-dark " style="background-color:white;">
 <div class="container-fluid"> -->
    <!-- <a href="#" class="navbar-brand fw-bold" style="font-size:25px;color:goldenrod;margin-left:35px;">Zayb!</span></a> -->
    <!-- <div class="collapse navbar-collapse"> -->
    <!-- <ul class="navbar-nav">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link active" style="color:goldenrod">Home</a></li> -->

<!-- <li class="nav-items dropdown">
<a href="{{url('login')}}" class="nav-link text-warning dropdown-toggle" data-bs-toggle="dropdown"><span style="color:goldenrod">{{session('username')}}</span></a>
<ul class="dropdown-menu">
    -->
<!-- <a href="{{url('changepassword')}}" class="dropdown-item text-black">change Password</a>
<a href="{{url('logout')}}" class="nav-link text-black" >Logout</a>
   

</ul> -->
<!-- </li> -->
<!-- <li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link text-black" >Register</a>
</li> -->
<!-- <li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link text-black" >Account</a>
</li>
<li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link text-black" >Cart <span class="text-danger">{{$result}}</span></a>
</li>
<li class="nav=items">
    <a href="{{url('myorders')}}" class="nav-link text-black">My orders</a>
</li> -->
<!-- <li class="nav-items">
   
</li> -->


    <!-- </ul> -->
  <div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="images/chris6.avif" class="d-block w-100" style="height:80vh" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="text-white" style="font-family: 'Roboto', sans-serif;">Christmas Sale <span class="text-danger">!!!!</span></h1>
        <!-- <p class="text-black">latest collection of sunglass</p> -->
      </div>
    </div>
    <div class="carousel-item active">
      <img src="images/chris3.avif" class="d-block w-100" style="height:80vh"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white" style="font-family: 'Roboto', sans-serif;">Christmas Sale <span class="text-danger">!!!!</span></h1>
        <!-- <p class="text-black">latest collection of sunglass</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/chris1.jpg" class="d-block w-100" style="height:80vh"  alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="text-white" style="font-size:50px;font-family: 'Roboto', sans-serif;">Christmas Sale <span class="text-danger">!!!!</span></h1>
        <!-- <p class="text-black">latest collection of sunglass</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- container2div -->
</div>
<div class="container-fluid">
<div class="row p-5" style="">
    <div class="col-md-4 " >
        <img src="images/dis.jpg" height="100" width="100" alt="" style="margin-left:0px">
       <h3>Special Discount</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam porro perspiciatis odio vero molestias, accusamus rati</p>
    </div>
<div class="col-md-4">
<img src="images/dis2.avif" height="100" width="100" alt="" style="margin-left:0px">

    <h3>Free Delivery</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam porro perspiciatis odio vero molestias, accusamus rati</p>
</div>
<div class="col-md-4">
<img src="images/dis3.jpg" height="100" width="100" alt="" style="margin-left:0px">

<h3>Money Back Guarantee</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam porro perspiciatis odio vero molestias, accusamus rati</p>

</div>

</div>
<!-- container3 -->
</div>
<div class="container-fluid">
<div style="background-image:url('images/kit3.avif');background-size:cover;height:100vh;width:100%">
    <!-- <img src="images/kit2.avif" alt="" style="background-size:cover;position:absolute;z-index:-1"> -->
    <h1 class="text-center " style="font-size:50px;font-family: 'Roboto', sans-serif;position:absolute;margin-top:457px;">The ultimate<br>kitchen utensils
<input type="submit" value="Explore" name="sub" id="kit" class="btn btn-danger">    
</h1>
    </div>
<!-- container3div -->
<!-- </div> -->
<div>
    <marquee behavior="alternate" direction="right" style="font-size:30px;font-weight:500"><span class="text-danger">Hurry!!!!</span> Christmas Special Deal-<span class="text-primary">50%Off</span> on christmas decor !!!!!</marquee>
</div>
<div style="background-image:url('images/chris11.avif');height:100vh;width:98.5%;background-size:cover;position:absolute;z-index:-1">
<!-- <img src="images/chris11.avif" style="height:100vh;width:100%;background-size:cover;position:absolute;z-index:-1"> -->
<h1 style="margin-top:124px;font-size:;color:white;position:absolute;font-family: 'Roboto', sans-serif;margin-left:844px">upto 60% off on<br>furnitures</h1>
<a href=""><span  style="margin-top:231px;margin-left:950px" class="btn btn-primary h-3 w-3">Shop</span></a>
</div>
<!-- container5 -->
</div>
<div class="container-fluid">
<div style="margin-top:650px">
    <h2>About Us</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, aperiam quos. Quos officia cupiditate pariatur consequuntur, animi maiore</p>
<p id="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus totam culpa qui! Explicabo rerum labore harum perspiciatis, assumenda dignissimos tempore exercitationem optio quisquam id quaerat vitae, laudantium reprehenderit? Debitis.</p>
<a href="#p" id="id1">See More</a>
<a href="#p" id="id2">See Less</a> 
<script>
    $('#id2').click(function()
    {
        var name=$('#p').hide();
    }
    )
    $('#id1').click(function()
    {
        var name=$('#p').show();
    })
</script>
</div>

<div class="footer bg-black" style="margin-top:;">

    <p class="p-5 text-center">copyright@newproject_laravel 2023</p>

</div>
<!-- container6div -->
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
        
        $.ajax({
            type:"post",
            url:"{{url('searchajax')}}",
            data:{
                searchtext:text,
            },
            success:function(data)
            {
             $('.header').empty();
                $('.header').append("<div>fhgfhfjjg</div>")

            }
            
            
        })
    })
</script>