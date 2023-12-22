<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
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
         background-color:cyan;
        }
        /* .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        }
        .come:hover{
            color:azure;
        } */
        /* .main
        {
            background-image:url('images/1691848820.jpg');
            /* position: absolute; */
            /* background-size: cover; */
            /* height:100vh;
            width:100%;
            opacity:0.80;

        } */
        /* .new
        {
            background-image:url('images/1695195915.jpg');
            background-size:cover;
            height:100vh;
            width:100%;
            opacity:0.80;
        } */ 
        .active{
            background-color:white;
            opacity:0.5;
            
            
        }
     
    </style>


    </head>
    <body style="background-image:url('images/1691858477.jpg');background-size:cover">
    

    <div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:aliceblue">
            <div class="container-fluid">
<a href="#" class="navbar-brand fw-bold" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:30px;color:cadetblue">Be Seller</a>

<ul class="navbar-nav">
    <li class="navbar-items">
        <a href="{{url('sellerhome')}}" class="nav-link text-black">Home</a>
    </li>
    <li class="navbar-items dropdown">
        <a href="{{url('viewprofile')}}" class="nav-link dropdown-toggle text-black" data-bs-toggle="dropdown">{{session('username')}}</a>
<ul class="dropdown-menu">
<a href="{{url('changepasswordseller')}}" class="dropdown-item text-black" style="background-color:darkcyan;">Change Password</a>
<a href="{{url('logoutseller')}}" class="dropdown-item text-white" style="background-color:darkcyan;">Logout</a>
</ul>



    </li>
    <li class="navbar-items">
        <a href="{{url('viewprofile')}}" class="nav-link text-black">My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link text-black" style="">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link active" style="color:chocolate">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link text-black">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link text-black">Logout</a>
</li>
</ul>
            </div>

        </div>


    <div class="container  bg-white" style="margin-top:87px">
    
        
          <div class="row ">
            
            @foreach($result as $value)   
         
           
            <div class="col mt-5">
      
   <img src="images/{{$value['Photo']}}" alt="" height="300" width="300">
<h1 class="mt-3">{{$value['Product_Name']}}</h1>
<p style="font-size:20px">{{$value['Category_name']}} | {{$value['Subcategory']}} <p>
<p style="font-size:20px">Quantity : {{$value['Quantity']}}<p>
<p style="font-size:20px"><span class="text-danger">{{$value['Price']}} Rs</span><p>
    
  <a href="{{url('editproduct',$value['aid'])}}"><span class="btn btn-success">Edit</span></a>
<a href="{{url('deleteproduct',$value['aid'])}}"><span class="btn btn-danger">Delete</span></a>
    </div>
@endforeach
 
</div>

</div>


        
    </body>
</html>