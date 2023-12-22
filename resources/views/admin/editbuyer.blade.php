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
    <body style="background-image:url('../images/g5.jpg')">
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
<a href="{{url('viewbuyer')}}" class="nav-link active ">Buyer</a>
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
<div class="container mt-3 pt-3 p-5 bg-white">

        <form action="{{url('updatebuyer',$result['id'])}}" method="post" enctype="multipart/form-data">
           
        @csrf
        <div class="row m-4">
    <div class="col-md-2">
<img src="../images/{{$result['Photo']}}" height="250" width="250">
</div>
</div>
        <div class="row m-4">
            <div class="col-md-2">
            <label for="">Name</label>
            </div>
            <div class="col">
        {{$result['Name']}}
        </div>    
    </div>
    <div class="row m-4">
        <div class="col-md-2">
            <label for="">Email</label>
            </div>
            <div class="col">
            {{$result['Email']}}
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-2">
        <label for="">Phone</label>
        </div>
        <div class="col">
        {{$result['Phone']}}
        </div>
        </div>
        <div class="row m-4">
            <div class="col-md-2">
    <label for="">Username</label>
    </div>
    <div class="col">
    {{$result['Username']}} 
    </div> 
</div>
<div class="row m-4">
    <div class="col-md-2">
<label for="">Password</label>
</div>
<div class="col">
{{$result['Password']}}
</div>
</div>
@if($result['Status']=='Pending')
<div class="row m-4">
    <div class="col-md-2">
<input type="submit" value="Approve" name="app">
</div>
<div class="col">
<td><input type="submit" value="Reject" name="app">
</div>
</div>
<div class="row m-4">
    <div class="col-md-2">
@endif
@if($result['Status']=='Approved')
<h4 class="text-success">Approved</h4>
@endif
</div>
</div>
@if($result['Status']=='Rejected')
<h4 class="text-danger ">Rejected</h4>
@endif
            </table>
        </form>
        </div>
    </body>
</html>