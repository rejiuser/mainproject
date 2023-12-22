<html>
    <head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
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
        .btncolor:hover{
            color:yellow;
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
                        <a href="" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-items">
<a href="{{url('viewseller')}}" class="nav-link active">Seller</a>
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
        <div class="container pt-5 p-5">
        <table class="table table-striped">
    <thead class="fs-4">
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </thead>
    <tbody class="fs-5">
        @foreach($result as $value)
        <tr>
            <td>{{$value['Name']}}</td>
            <td>{{$value['Email']}}</td>  
            @if($value['Status']=='Approved')
            <td class="text-success">Approved</td>
            @endif
            @if($value['Status']=='Rejected')
            <td class="text-danger">Rejected</td>
            @endif
            <td><a href="{{url('details',$value['id'])}}"><span class="btn btn-dark btncolor">Details</span></a></td>
        </tr>
        @endforeach
    </tbody>
        </table>
        </div>
    </body>
</html>