<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <script src="..\bootstrap\js\bootstrap.bundle.js">

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
        .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        }
        .come:hover{
            color:azure;
        }
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




    <body style="background-image:url('../images/g5.jpg');background-size:cover">
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











<div class="container bg-white" style="margin-top:110px;">
    <div class="row">
    <div class="col p-5" style="margin-left:-41px">
      <?php
      $total=0;
      ?>
      <h1 class="fw-bold">Product Details</h1>
      <table class="table mt-5">
                <thead style="font-size:20px">
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>

            @foreach($result as $value)
              
       
       
           
                
       <?php
       $total=$total+$value['price'];
       ?>
              
            
<tr>
          <td style="font-size:20px">{{$value['Product_Name']}}</td>
          <td style="font-size:20px">{{$value['quantity']}}</td>
          <td style="font-size:20px"><span class="text-danger">{{$value['price']}} Rs</span></td>
    </tr>
           <!-- <tr><td><input type="submit" value="Approve" name="app"></td></tr>
           <tr><td><input type="submit" value="Reject" name="rej"></td></tr> -->
            @endforeach 
            </table>
            </div>
            
            <div class="col text-center p-5" style="">

            <table>
            <h1 class="mb-5 fw-bold">Buyer Details</h1>
            <div class="row">
                <div class="col-md-4">
            <label for="" style="font-size:20px;">Name</label>
            </div>
            <div class="col-md-4">
        <span style="font-size:20px">{{$value['Name']}}</span>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
        <label for="" style="font-size:20px;">District</label>
        </div>
        <div class="col-md-4">
        <span style="font-size:20px">{{$value['District']}}</span>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
       <label for="" style="font-size:20px;">State</label>
       </div>
       <div class="col-md-4">
       <span style="font-size:20px">{{$value['State']}}</span>
    </div>
    </div>
    <div class="row">
<div class="col-md-4">
        <label for="" style="font-size:20px;">PIN</label>
        </div>
        <div class="col-md-4">
        <span style="font-size:20px">{{$value['pin']}}</span>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label for="" style="font-size:20px;">Mobile</label>
        </div>
        <div class="col-md-4">
        <span style="font-size:20px">{{$value['Mobile']}}</span>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <label for="" style="font-size:20px;">Landmark</label>
        </div>
        <div class="col-md-4">
        <span style="font-size:20px">{{$value['Landmark']}}</span>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <label for="" style="font-size:20px;">Total</label>
        </div>
        <div class="col-md-4">
        <span style="font-size:20px"><span class="text-danger">{{$total}} Rs</span>
    </div>
    </div>
        <form action="{{url('detailsapprove',$value['id'])}}" method="post">
        @csrf
       @if($value['Status']=='Pending')

        <tr><td><input type="submit" value="Approve" name="sub"></td></tr>
           <tr><td><input type="submit" value="Reject" name="sub"></td></tr>
       
@endif
           </table>
           @if($value['Status']=='Approved')
       <h4 class="text-success mt-3 fw-bold">Approved</h4>
       @endif
   
        @if($value['Status']=='Rejected')
        <h4 class="text-danger mt-3 fw-bold">Rejected</h4>
        @endif
       </form>
       @if($value['Status']=='Approved')
       <a href="{{url('trackingdetails',$value['id'])}}"><span class="btn btn-dark mt-3">Tracking Details</span></a>
       @endif
       </div>   
       </div>
    </div>

    </body>
</html>