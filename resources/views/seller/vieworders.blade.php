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

        .active{
            background-color:white;
            opacity:0.5;
            
            
        }
    </style>
    </head>
    <body style="background-color:lightblue">
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
    <a href="{{url('viewproduct')}}" class="nav-link text-black">View Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('vieworders')}}" class="nav-link active" style="color:chocolate">View Orders</a>
</li>
<li class="navbar-items">
    <a href="{{url('logoutseller')}}" class="nav-link text-black">Logout</a>
</li>
</ul>
            </div>

        </div>


<div class="container bg-white p-5" style="margin-top:212px">
   <table class="table" >
         
    <thead>
        
        <th style="font-size:30px">Buyer Name</th>
        <th style="font-size:30px">Total</th>
        <th style="font-size:30px">Status</th>
    </thead>
 
    <tbody>
       
         



    @foreach($result as $value)

 
  <tr>

        <td style="font-size:20px">{{$value['Name']}}</td>
      
         <td><span class="text-danger">{{$value['Total']}} Rs</span></td>
         @if($value['Status']=='Approved')
         <td>Approved</td>
         @endif
         @if($value['Status']=='Rejected')
         <td>Rejected</td>
         @endif
           
        <td><a href="{{url('vieworderdetails',$value['Order_id'])}}">Details</a></td>
    </tr>
        @endforeach
</div>
    </div>
    </tbody>
    </body>
</html>