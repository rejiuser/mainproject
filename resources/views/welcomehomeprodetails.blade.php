<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">

<script src="bootstrap\js\bootstrap.bundle.js"></script>


<script  src="..\js\jquery-2.2.4.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        .nav-link{
            color:black;
        }
        .nav-link:hover{
            color:red;
        }
    </style>
</head>
<body style="">
<div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div>
            <div class="navbar navbar-expand-sm navbar-dark" style=" background-color:ghostwhite">
<div class="container-fluid">
    <ul class="navbar-nav" style="margin-left:626px">
        <li class="navbar-items">
<a href="{{url('welcomehome')}}" class="nav-link">Home</a>
        </li>
        <li>
            <a href="{{url('login')}}" class="nav-link">Login</a>
        </li>

    </ul>
</div>
            </div>








    <form action="{{url('updatetocart',$result['id'])}}" method="post">
        @csrf
<div class="container mt-3 pt-3">
    <div class="row">
        <div class="col-md-6">
        <img src="../images/{{$result['Photo']}}" height="500" width="500" alt="">
        </div>
        <div class="col-md-6">
            <div class="row m-2">
   <h1>{{$result['Product_Name']}}</h1>
    </div>
    <div class="row m-2">
    <span class="fs-4">{{$result['Price']}} Rs</span>

    </div>
    <div class="row m-2">
    <span class="fs-4">{{$result['Category_name']}}</span>
    </div>
    <div class="row m-2">
    <span class="fs-4">{{$result['Subcategory']}}</span>
    </div>
    <!-- <tr><td><label for="">Quantity</label></td><td>{{$result['Quantity']}}</td></tr> -->
    <div class="row m-2 ">
        <div class="col">
<input type="submit" value="Add cart" class="btn btn-success">
</div>
</div>
    </div>    
</div>
</div>
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
    toastr.warning('{{session('message')}}');
    @endif
</script>