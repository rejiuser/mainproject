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
    <body style="background-image:url('../images/1691848786.jpg');background-size:cover;height:100vh;width:100%">
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
                        <a href="" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><?php echo session('username')?></a>
                         <ul class="dropdown-menu">
                           <li><a href="{{url('logoutadmin')}}" class="dropdown-link">Logout</a></li>
                           <li><a href="{{url('changepasswordadmi')}}" class="dropdown-link active">Change Password</a></li>
                         </ul>
                    </li>


                </ul>

            </div>

        </div>






<div class="container mt-5 pt-5 border">

        <form action="{{url('passwordupdateadmin')}}" method="post">
@csrf
        <div class="row m-4">
            <div class="col-md-2">
            <label for="">Current Password</label>
            </div>
            <div class="col">
            <input type="text" name="currentpassword" class="form-control"  id="">
        @if($errors->has('currentpassword'))<span style="color:red">*</span>
        {{$errors->first('currentpassword')}}
        @endif
        @if(Session::get('error'))
        {{Session::get('error')}}
        @endif
        </div>
        </div>
        <div class="row m-4">
            <div class="col-md-2">
        <label for="">New Password</label>
        </div>
        <div class="col">
        <input type="text" name="newpassword" class="form-control"  id="">
    @if($errors->has('newpassword'))<span style="color:red">*</span>
    {{$errors->first('newpassword')}}
    @endif
    </div>
    </div>
    <div class="row m-4">
        <div class="col-md-2">
        <label for="">Confirm Password</label>
        </div>
        <div class="col">
        <input type="text" class="form-control" name="confirmpassword" id="">
    @if($errors->has('confirmpassword'))
    {{$errors->first('confirmpassword')}}
    @endif
    </div>
    </div>
    <div class="row m-4 text-center">
        <div class="col">
  <input type="submit" class="btn btn-success" value="Update" name="sub">    
        
  </div>
        
  </div>
        </form>
        </div>
    </body>
</html>