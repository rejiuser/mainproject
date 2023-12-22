<html>
    <head>
          
        <script  src="js\jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.bundle.js"> </script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
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
        /* .welcome{
            color:black;
        }
        .wel:hover{
            color:aquamarine;
        } */
        .come:hover{
            color:azure;
        }
        /* .main
        {
            background-image:url('images/1691848820.jpg');
            /* position: absolute; */
            /* background-size: cover;
            height:100vh;
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
        /* .btn:hover{
            background-color:darkcyan;
        }
       */
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
        <a href="{{url('viewprofile')}}" class="nav-link text-black" >My Account</a>
    </li>
<li class="navbar-items">
    <a href="{{url('addproduct')}}"  class="nav-link active" style="color:chocolate">Add Products</a>
</li>
<li class="navbar-items">
    <a href="{{url('viewproduct')}}" class="nav-link text-black">View Products</a>
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
    
            <div class="container bg-white " style="margin-top:124px">
                <div class="col-md-6 p-5">
          
        <form action="{{url('addproductinsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col">
                <label for="" style="font-size:24px">Product Name</label>
            </div>
            <div class="col">
            <input type="text" class="form-control" name="productname" id="">
            </div>
           </div>
           <div class="row mb-3">
            <div class="col">
                <label for="" style="font-size:24px">Category</label>
                  </div>
                  <div class="col"> 
               <select name="category" id="cate" class="form-control" >
              
               
                    <option value="">..Select..</option>
                    @foreach($result as $value)
                 <option value="{{$value['id']}}">
                {{$value['Category_name']}}
                 </option>
           
          
                 @endforeach
                           </select>
                        </div>
                        </div>
                       <div class="row mb-3">
                        <div class="col">
                     <label for="" style="font-size:24px">Subcategory</label>
                     </div>
                     <div class="col">
                        <select name="subcategory" id="subcate"  class="form-control" >
<option value="">..Select..</option>
                  
                    </select>
                </div>
                </div>
            
                <div class="row mb-3">
                    <div class="col">
                <label for="" style="font-size:24px">Price</label>
                </div>
                <div class="col">
                <input type="text" class="form-control"  name="price" id="pr">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                    <label for="" style="font-size:24px">Quantity</label>
                    </div>
                    <div class="col">
                    <input type="text" class="form-control"  name="quantity" id="qua">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                     <label for="" style="font-size:24px">Photo</label>
                    </div>
                    <div class="col">
                    <input type="file" class="form-control"  name="photo" id="ph">
                    </div>
                    </div>
                    <div class="row mb-3">

                   
                       <input type="submit" value="Add" name="sub" class="btn btn-warning" id="submit">
 </div>

 <!-- col-md-6                 -->
</div>








<div class="col-md-6">





</div>
        
                   
                    </form>
                    </div>
                    </body>
</html>
<script>
 @if(Session::has('message'))
 toastr.options=
 {
    'closeButton':true,
    'progressBar':true,
 }
 toastr.success('{{session('message')}}')
 @endif
</script>
 <script>
        $('#cate').change(function()
        {
         
            var category=$('#cate').val();
            //    alert(category);
            $.ajax({
                type:"GET",
                url:"{{url('subcategoryajax')}}",
                data:{
                    cat:category,
                },
                success:function(data)
                {
                    $('#subcate').empty();
                    $.each(data,function(key,value)
                    {
                         var dat='<option value="'+value['id']+'">'+value['Subcategory']+'</option>';
                         $('#subcate').append(dat);
                    })
                    
                },
            });
        });
        </script>