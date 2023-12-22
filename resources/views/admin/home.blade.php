<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
    <script src="js\jquery-2.2.4.min.js">

</script>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
        .nav-link:hover{
            color:orange;
        }
        /* .header{
            background-image:url('images/ad2.jpg');
            background-size:cover;
            position:absolute;
        } */
        .active{
            color:blue;
        }
    </style>
    </head>
    <body>
        <div class="mb-3" style="">
        <i class="bi bi-envelope-fill mt-2 " style="margin-left:96px">ecom@yahoo.com</i>
        <i class="bi bi-telephone-fill" style="margin-left:100px">+0000000111</i>
        <i class="bi bi-facebook facebook" style="margin-left:250px"></i>
        <i class="bi bi-twitter tw" style="margin-left:121px"></i>
        <i class="bi bi-instagram insta" style="margin-left:123px"></i>
        <select name="country" id="count"  style="margin-left:55px" >
            <option value="">English</option>
            <option value="">Arabic</option>
            <option value="">French</option>
            <option value="">Italic</option>
        </select>
        <a href="{{url('logoutadmin')}}"><i class="bi bi-person-fill"  style="margin-left:104px" ><span class="btn btn-white">Logout</span></a></i>
        </div>
        <div class="border">
            <div class="row">
                <div class="col-md-2">
      <h2 class="p-3" style="margin-left:144px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Ecom<span class="text-warning">.</span></h2>
      </div>
      <div class="col-md-4">
      <input type="search" name="search" id="sr" placeholder="Search" class="mt-4 form-control" style="margin-left:278px;">    
      </div>
      <div class="col-md-2">
      <input type="submit" value="Submit" name="sub" id="submit" class="mt-4 btn btn-warning" style="margin-left:264px;">  
      </div>
    </div>
    </div>
        <div class="navbar navbar-expand-sm navbar-dark bg-black border">
            <div class="container-fluid">
                <!-- <a href="#" class="navbar-brand">Ecom</a> -->
                <ul class="navbar-nav" style="margin-left:634px">
                    <li class="nav-items">
                        <a href="" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-items">
<a href="{{url('viewseller')}}" class="nav-link ">Seller</a>
                    </li>
                    <li class="nav-items ">
<a href="{{url('viewbuyer')}}" class="nav-link ">Buyer</a>
                    </li>
                    <li class="nav-items">
<a href="{{url('vieworderadmi')}}" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-items dropdown">
                        <a href="{{url('viewcategory')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('viewcategory')}}" class="dropdown-link btn btn-dark">View Category</a></li>
                        <li> <a href="{{url('addcategory')}}" class="dropdown-link btn btn-dark">Add Category</a></li>
                         <li><a href="{{url('subcategory')}}" class="dropdown-link btn btn-dark">Add Subcategory</a></li>
                         <li><a href="{{url('viewsubcategory')}}" class="dropdwon-link btn btn-dark">View Subcategory</a></li>
                        </ul>

                    </li>
                    <li class="nav-items dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo session('username')?></a>
                         <ul class="dropdown-menu bg-warning">
                           <li><a href="{{url('logoutadmin')}}" class="dropdown-link text-white">Logout</a></li>
                           <li><a href="{{url('changepasswordadmi')}}" class="deopdown-link text-white">Change Password</a></li>
                         </ul>
                    </li>


                </ul>

            </div>

        </div>
        
<div class="header" style="background-image:url('images/ad3.avif');height:65vh;width:100%;position:absolute;opacity:0.9;z-index:-1;background-size:cover;">
</div>
<div>
<p class="text-white " style="margin-top:143px;margin-left:79px;font-size:30px;line-height:3px">Better Your</p>
    <h1 style="margin-left:79px;font-size:50px" class="text-white fw-bold">ECommerce</h1>
    <p class="text-warning" style="margin-left:79px;font-size:23px" >Easier For You</p>
    </div>  
    <div class="container" style="posiyion:relative">
        <div style="margin-top:300px;">
            <h1 class="text-center">Socially and Environmentally</h1>
                <h1 class="text-center">Progressive Products
                
            </h1>
        </div>
    </div>
        
        









        <!-- @csrf
        <p>Hello Welcome <?php echo session('username');?></p>
        <ol>
<li><a href="">View Seller</a></li>
<li><a href="">View Buyer</a></li>
<li><a href="">Add Category</a></li>
<li><a href="">View Category</a>
<li><a href="">Add Subcategory</a></li>
<li><a href="">View Subcategory</a></li>
<li><a href="">Change Password</a></li>
<li><a href="">View Orders</a></li>
</li>
</ol> -->
    </body>
</html>