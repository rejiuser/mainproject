<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.bundle.js">

    </script>
     <style>
        #img:hover{
            width:330px;
            height:330px;
            

        }
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
            transition:transform 0.3s;
        }
        .nav-link:hover{
         color:darkcyan;
         
         
        }
        .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        }
        .come:hover{
            color:azure;
        }
        .main
        {
            background-image:url('images/sofa.avif');
            background-size:cover;
            background-position:center;
            height:100vh;            

        }
        /* .new
        {
            background-image:url('../images/full-gallery-image-1.jpg');
            background-size:cover;
            height:100vh;
            width:100%;
            opacity:0.80;
        } */
        .active{
            
            
        }
        .btn:hover{
            background-color:darkcyan;
        }
      @keyframes slideInLeft{
        from{
            transform:translateX(-40px);
        }
        to{
            transform:translateX(0);
        }

      }
      .header{
        animation:slideInLeft  3s ease-in 1s 100 normal;

      }
      .head{
     animation:slideInLeft 3s ease-in 1s 100 normal;
      }
    </style>
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:aliceblue">
            <div class="container-fluid">
<a href="#" class="navbar-brand fw-bold" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:30px;color:cadetblue">Be Seller</a>

<ul class="navbar-nav">
    <li class="navbar-items">
        <a href="{{url('sellerhome')}}" class="nav-link" >Home</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="{{url('viewprofile')}}" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
<a href="{{url('changepasswordseller')}}" class="dropdown-item " style="background-color:darkcyan;">Change Password</a>
<a href="{{url('logoutseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Logout</a>
</ul>



    </li>
    <li class="navbar-items">
        <a href="{{url('viewprofile')}}" class="nav-link ">My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link " style="">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link ">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link ">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link ">Logout</a>
</li>
</ul>
            </div>

        </div>

        <div class="main">
         
            <div class="col-md-6">
      
         </div>
</div>

    
    <div style="position:absolute;bottom:179px;left:751px;">
    <p style="font-size:80px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="fw-bold header">Welcome</p>
           <h4 style="font-size:50px;color:cadetblue" class="text-center fw-bold head"><?php echo session('username');?></h4>
    </div>

<!-- <div>   
        
<p style="font-size:100;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="text-center fw-bold mt-5">Welcome  <span style="color:cadetblue"><?php echo session('username');?></span></p>

</div>  -->

        <div class="row mt-5 p-5">
            <h3 class="text-center fs-1">We Sell Best Quality Products</h3>
        </div>
        
    <div class="row mt-3 p-5">
<div  class="col-md-2" style="margin-left:5px;margin-right:81px;padding:5px">
    <img src="{{url('images/g1.jpg')}}" height="300px" width="300px" id="img" alt="" style="">
</div>
<div class="col-md-2" style="margin-left:21px">
    <img src="{{url('images/g5.jpg')}}" height="300px" width="300px" id="img" alt="">
</div>
<div class="col-md-2" style="margin-left:101px">
    <img src="{{url('images/1691858148.jpg')}}" height="300px" width="300px" id="img" alt="" >
</div>
<div class="col-md-2" style="margin-left:101px">
    <img src="{{url('images/1695196637.jpg')}}" height="300px" width="300px" id="img" alt="">
</div>


    </div>
    <div class="container" style="min-height:1540px">

<div class="row mt-5 p-5">
<h3 class="text-center fs-1">Our Teams</h3>
<p class="text-center fs-5">Best Team Work is Our Success</p>

</div>
 
    
    <div class="row mt-5">
        
        <div class="col-md-3" style="margin-left:191px">
            <div class="card body" style="height:300px;width:300px;border:none">
            <img src="{{url('images/1698569819.jpg')}}" height="300" width="300" alt="">
            <div class="card title" style="border:none">
            <h3 class="mt-3 text-center">Peter Tom</h3>
            </div>
            <div class="card text" style="border:none">
            <p class="text-center">Co-Founder</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae doloremque deserunt accusantium dolorum culpa magnam doloribus ab excepturi odit id? Nesciunt quisquam tenetur suscipit. Tenetur hic eos distinctio aperiam eligendi.</p>
            </div>
    </div>
        </div>
        
     
        <div class="col-md-3" style="margin-left:100px">
            <div class="card body" style="height:300px;width:300px;border:none">
<img src="{{url('images/1698591173.webp')}}" alt="" height="300" width="300">
<div class="card title" style="border:none">
<h3 class="mt-3 text-center">Alexander</h3>
</div>
<div class="card text" style="border:none">
    <p class="text-center">Team Leader</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum ducimus perspiciatis, corrupti similique architecto quae! Tempore officiis laboriosam aliquam inventore facilis, quia possimus tenetur placeat aliquid vero nisi praesentium. Maxime.</p>
</div>
            </div>
        </div>
   
     
   
   
        </div>
    </div>
        
 <footer class="bg-black" style="min-height:150px">
    <p class="text-center">newproject_laravel @ 2023_reji</p>
 </footer>

    
    <!-- container div  -->
   </div>

    </body>

</html>
