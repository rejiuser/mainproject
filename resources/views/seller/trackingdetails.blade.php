<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
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





<div class="container bg-white p-5" style="margin-top:122px">

        <form action="{{url('trackinginsert')}}" method="post">
            @csrf
        
            <div class="row m-2">
                <div class="col-md-2">
        <label for="" class="fs-5">Details</label>
        </div>
        <div class="col-md-2">
        <textarea name="details" id="" cols="30"  class=" form-control" rows="10"></textarea>
        </div>
        </div>
        <div class="row">
<div class="col-md-2">
            <label for="" class="fs-5">Date</label>
            </div>
            <div class="col-md-2">
            <input type="date" name="date" id="" class="form-control">
            </div>
            </div>
        </td></tr>
        <tr><input type="hidden" name="orderid" value="{{$id}}"></tr>
            <div class="row mt-3">
                <div class="col">
        <input type="submit" value="Update" class="btn btn-success" name="sub">
        </div>
    </div>
    </table>
    </div>
    </form>
    </body>
</html>