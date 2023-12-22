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
    <body style="background-color:cadetblue">

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













        <div class="container bg-white" style="margin-top:112px">
    <div class="col-md-6">

        <form action="{{url('updateproduct',$result['aid'])}}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="row" style="margin-left:50px;">
            <div class="col mt-5">
              <label for="" style="font-size:25px;">Product Name</label>
                </div>
                <div class="col mt-5">
              <input type="text" name="productname" class="form-control" id="" style="font-size:20px;" value="{{$result['Product_Name']}}"></td></tr>
                </div>
                </div>
                <div class="row mt-2" style="margin-left:50px;">
                    <div class="col">
                <label for="" style="font-size:25px;">Category</label>
                </div>
                <div class="col">
                <select name="category" id="cate" style="font-size:20px;">
                    <option value="{{$result['Category_id']}}">{{$result['Category_name']}}</option>
            
                           </select>
                           </div>
                           </div>
                           <div class="row mt-2" style="margin-left:50px;">
                            <div class="col">
                  <label for="" style="font-size:25px;">Subcategory</label>
</div>
<div class="col">
                        <select name="subcategory" id="subcate" style="font-size:20px;">
<option value="{{$result['id']}}">{{$result['Subcategory']}}</option>
                  
                    </select>
                    </div>
                    </div>
               <div class="row mt-2" style="margin-left:50px;">
                <div class="col">
        <label for="" style="font-size:25px;">Price</label>
                </div>
                <div class="col">
            <input type="text" name="price" id="pr" class="form-control" style="font-size:20px;"  value="{{$result['Price']}}">
                    </div>
                    </div>
                    <div class="row mt-2" style="margin-left:50px;">
                        <div class="col">
         <label for="" style="font-size:25px;">Quantity</label>
                </div>
                <div class="col">
            <input type="text" name="quantity" id="qua" class="form-control"  style="font-size:20px;" value="{{$result['Quantity']}}">
        </div>
       
                     </div>
                     <div class="row mt-2" style="margin-left:50px;">
                        <div class="col">
            <tr><td><label for="" style="font-size:25px;">Photo</label></td><td>
                </div>
                <div class="col">
            <input type="file" name="photo" id="ph" class="form-control" value="{{$result['Photo']}}"></td></tr>
            </div>
            </div>
            <div class="row  mt-5 text-center">
                <div class="col">
                       <tr><td><input type="submit" value="Update" class="btn btn-success mb-5" name="sub" id="submit"></td></tr>
</div>
                    </div>
                       

                   
        </form>
    
    
    </div>
          </div>  
    </body>
</html>