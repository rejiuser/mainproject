<html>
    <head>
    
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <script src="..\bootstrap\js\bootstrap.bundle.js"></script>

    <script src="js\jquery-2.2.4.min.js">


</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
    <script src="bootstrap\js\bootstrap.bundle.js">

    </script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .facebook:hover{
            color:blue;
        }
        .tw:hover{
            color:blue;
        }
        .insta:hover{
            color:blue;
        }
        .nav-link{
            color:black;
            transition:0.5s ease;
        }
        .nav-link:hover{
            color:red;
            

        }
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
            .btn:hover{
                transform:translateY(-5px)
            }

        }
    </style>
    </head>
    <body>
            <div class="container-fluid" >

        <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div>
        <div>
            <h1 class="text-center pt-3" style=" font-family: 'Roboto', sans-serif;"><span style="color:red">Zay</span>&Com</h1>
        </div>
    <div class="navbar navbar-expand-lg navbar-dark  border " style="background-color:ghostwhite">
<div class="container-fluid">
    <a href="#" class="navbar-brand"></a>
<ul class="navbar-nav" style="margin-right:466px">
    <li class="navbar-items">
        <a href="{{url('welcomehome')}}" class="nav-link  ps-5" style="">Home</a> 
    </li>
    <li class="navbar-items">
        <a href="{{url('login')}}" class="nav-link ps-5 ">Sign In</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="" class="nav-link ps-5 dropdown-toggle" data-bs-toggle="dropdown">Sign Up</a>
        <ul class="dropdown-menu">
<a href="{{url('buyer')}}" class="dropdown-item">Buyer register</a>
<a href="{{url('seller')}}" class="dropdown-item">Seller regsiter</a>
        </ul>
    </li>
    <li class="navbar-items">
        <a href="{{url('#p')}}" class="nav-link ps-5 ">About</a>
    </li>
</ul>
<!-- <div class="icons">

</div> -->
        <!-- <input type="submit" value="Shop" class="btn btn-danger" style="width:;" name="sub" id="shop"> -->

</div>
    </div>

    
  
    <!-- <div  style="background-image:url('images/pink7.avif');height:100vh;width:100%;position:absolute;z-index:-1;background-size:cover">

    </div> -->
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

    <!-- <div class="container-fluid"> -->
<!-- <div>
    <h1 style="margin-left:-97px;margin-top:210px;font-size:69px;">Latest Trends</h1>
    <h2 style="margin-left:-54px">Fashion Collection</h2>
    <p style="margin-left:-52px;font-size:19px">Explore the world of Fashion</p>
    <input type="submit" value="Shop Now" name="sub" class="btn btn-primary" style="margin-left:20px">
    
</div> -->
<!-- container1div -->
</div>
<div class="container-fluid">

<div class="row p-5">
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
<!-- container2div -->
    </div>
    <div class="container-fluid">
<div class="row" style="">
<h2 class="text-center" style="margin-top:50px">Trending Products</h2>
</div>
<div>
    <div class="row mt-5">
<!-- <div class="row mt-5" style="background:linear-gradient(180deg,white,ghostwhite,antiquewhite)"> -->
@foreach($result as $value)

<div class="col-md-4"> 
    <img src="images/{{$value['Photo']}}" height="350" width="300" alt="">
    <h4 class="mt-3" style="margin-left:87px">{{$value['Product_Name']}}</h4>
    <p style="margin-left:105px">{{$value['Price']}} Rs</p>
    <a href="{{url('welcomehomeprodetails',$value['id'])}}"><span class="btn btn-primary mb-5" style="margin-left:82px">Try Now</span></a>

<!-- <img src="images/girl.webp" height="350" width="300" alt="">
<h4 class="mt-3" style="margin-left:74px;">Denimx Tshirt</h4>
<p style="margin-left:74px;">Starting <span class="text-danger">300 Rs</span></p>
<a href="{{url('viewproducts')}}"><span class="btn btn-primary" style="margin-left:74px;">Explore</span></a>

    </div>
    <div class="col-md-4">
    <img src="images/girl3.jpg" height="350" width="300" alt="">
<h4 class="mt-3" style="margin-left:74px;">Denimx Tshirt</h4>
<p style="margin-left:74px;">Starting 300 Rs</p>
<a href="{{url('viewproducts')}}"><span class="btn btn-primary" style="margin-left:74px;">Explore</span></a> -->
</div>

@endforeach
</div>
</div>
<!-- container3div -->
</div>
<!-- container2div -->
<!-- </div> -->

<!-- <div class="row mt-5 pt-5">
    <h2 class="text-center">Popular Items</h2>
</div>
<div class="row">
    
@foreach($res as $val)
<div class="col-md-4">
<img src="images/{{$val['Photo']}}" height="300" width="300" alt="">
<h4>{{$val['Product_Name']}}</h4>
<p>{{$val['Price']}}</p>
</div>
@endforeach
    
</div> -->

<!-- <div class=" mt-5 pt-5 text-center">
<h2>Customer Feedback</h2>
</div>
<div class="row">
    <div class="col-md-4">
        <h4></h4>
    </div>
</div> -->

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


<!-- <div class="container-fluid"> -->
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
<!-- container4div -->
<!-- </div> -->
<!-- container1div -->
<!-- </div> -->
    </body>
</html>