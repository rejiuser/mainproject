<html>
    <head>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <script src="js\jquery-2.2.4.min.js">

</script>
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
        /* .btncolor:hover{
            color:yellow;
        } */
        .tbody:hover{
            background-color:ghostwhite;
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
    <div class="navbar navbar-expand-sm navbar-dark bg-black border">
            <div class="container-fluid">
                <!-- <a href="#" class="navbar-brand">Ecom</a> -->
                <ul class="navbar-nav" style="margin-left:634px">
                    <li class="nav-items">
                        <a href="{{url('home')}}" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-items">
<a href="{{url('viewseller')}}" class="nav-link">Seller</a>
                    </li>
                    <li class="nav-items ">
<a href="{{url('viewbuyer')}}" class="nav-link">Buyer</a>
                    </li>
                    <li class="nav-items">
<a href="{{url('vieworderadmi')}}" class="nav-link active ">Orders</a>
                    </li>
                    <li class="nav-items dropdown">
                        <a href="{{url('viewcategory')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('viewcategory')}}" class="dropdown-link">View Category</a></li>
                        <li> <a href="{{url('addcategory')}}" class="dropdown-link">Add Category</a></li>
                         <li><a href="{{url('subcategory')}}" class="dropdown-link">Add Subcategory</a></li>
                         <li><a href="{{url('viewsubcategory')}}" class="dropdwon-link">View Subcategory</a></li>
                        </ul>

                    </li>
                    <li class="nav-items dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo session('username')?></a>
                         <ul class="dropdown-menu">
                           <li><a href="{{url('logoutadmin')}}" class="dropdown-link">Logout</a></li>
                           <li><a href="{{url('changepasswordadmi')}}" class="deopdown-link">Change Password</a></li>
                         </ul>
                    </li>


                </ul>

            </div>

        </div>
       
        <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-6 p-5 text-center"  style="margin-left:-17px;background-color:ghostwhite">
        <div class="row" style="">
            <h1 class="mb-5">Buyer Details</h1>
            </div>
            <div class="row m-4">
                <div class="col-md-2">
            <label for="" class="">Name</label>
            </div>
            <div class="col">
            {{$result['Name']}}
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-2">
            <label for="" >Pin</label>
            </div>
            <div class="col">
                {{$result['pin']}}
                </div>
            </div>
            <div class="row m-4">
                <div class="col-md-2">
            <label for="">District</label>
            </div>
            <div class="col">
            {{$result['District']}}
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-2">
            <label for="">State</label>
            </div>
            <div class="col">
            {{$result['State']}}
            </div>
        </div>
<div class="row m-4">
    <div class="col-md-2">
            <label for="">Mobile</label>
            </div>
            <div class="col">
            {{$result['Mobile']}}
            </div>  
        </div>
            </div>
        
        
        <!-- <table>
            <h1>Seller Details</h1>
            <tr><td><label for="">Name</label></td><td>:</td><td>{{$result['Name']}}</td></tr>
            <tr><td><label for="">Email</label></td><td>:</td><td>{{$result['Email']}}</td></tr>
            <tr><td><label for="">Phone Number</label></td><td>:</td><td>{{$result['Phone']}}</td></tr>
        </table>
         -->
         <div class="col-md-6 pt-5 p-5 "  style="background-color:color-mix(in srgb, black 7%, white 20%);">
        <table class="table table-striped">
            <h1 class="text-center mb-5">Product Details</h1>
            <thead class="">
                <th>Seller Name</th>
                <th> Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </thead>
            <tbody>
        @foreach($res as $val)
          
            <tr>
                <td>{{$val['name']}}</td>
                <td>{{$val['Product_Name']}}</td>
            <td>{{$val['quantity']}}</td>
            <td>{{$val['price']}}</td>
        </tr>
           @endforeach
       </tbody>
        </table>
        <div class="row m-4">
            <div class="col-md-2">
         <label for="" class="fs-5">Total</label>
         </div>
         <div class="col">
         <span class="text-danger fs-5">{{$result['Total']}} Rs</span>
         </div>
        </div>
         <br>
         <div class="row">
         <!-- <span class="text-center fs-4">{{$result['Status']}}</span> -->
         @if($result['Status']=='Approved')
         <h2 class="text-success text-center">Approved</h2>
         @endif
         @if($result['Status']=='Rejected')
         <h2 class="text-danger text-center">Rejected</h2>
         @endif
         </div>
        
        </div>
         </div>
        </div>
        </body>
</html>