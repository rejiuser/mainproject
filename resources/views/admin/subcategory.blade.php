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
<a href="{{url('vieworderadmi')}}" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-items dropdown">
                        <a href="{{url('viewcategory')}}" class="nav-link dropdown-toggle active " data-bs-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('viewcategory')}}" class="dropdown-link">View Category</a></li>
                        <li> <a href="{{url('addcategory')}}" class="dropdown-link">Add Category</a></li>
                         <li><a href="{{url('subcategory')}}" class="dropdown-link active ">Add Subcategory</a></li>
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



<div class="container mt-5 pt-5 border p-5">
        <form action="{{url('subcategoryinsert')}}" method="post">
            @csrf
            
                <div class="row m-4">
                    <div class="col-md-2">
                <label for="">Category</label>
    </div>
    <div class="col-md-2">
            <select name="cate" class="form-control">
                    <option value="">..Select..</option>
                    
                        @foreach($result as $value)
                     <option value="{{$value['id']}}">{{$value['Category_name']}}</option>
                        @endforeach
    </select>    
                    </div>
                        </div>
                <div class="row m-4">
                    <div class="col-md-2">
                <label for="">Subcategory</label>
                </div>
                <div class="col-md-2">
                <input type="text" class="form-control" name="sub" id="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-center">

           
                <input type="submit" value="Add" name="submit" class="btn btn-success">
                </div>
            </div>
        </form>
        </div>
    </body>
</html>