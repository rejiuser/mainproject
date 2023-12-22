<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script src="js\jquery-2.2.4.min.js"></script>   
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
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
        .nav-link{
            color:black;
        }
        .nav-link:hover{
         color:red;
        }
        .active{
            color:red;
        }
      </style>  
    </head>
    <body>
    <div class="border bg-black">
            <marquee style="color:white" behavior="alternate" direction="left">
             Free World Wide Shipping as usual...
             </marquee>
            </div> 



    
    <div class="navbar navbar-expand-sm navbar-dark " style="background-color:ghostwhite;">
 <div class="container-fluid">
    <a href="#" class="navbar-brand text-white" style=""></a>
    <!-- <div class="collapse navbar-collapse"> -->
    <ul class="navbar-nav">
<li class="nav-items">
<a href="{{url('buyerhome')}}" class="nav-link" style="" >Home</a></li>

<!-- <li class="nav-items">
<a href="{{url('login')}}" class="nav-link " style="font-size:20px;" >{{session('username')}}</a></li> -->
<!-- <li class="nav-items">
    <a href="{{url('buyer')}}" class="nav-link " style="font-size:20px;" >Register</a>
</li> -->
<li class="nav-items">
    <a href="{{url('viewbuyerprofile')}}" class="nav-link" style="" >Account</a>
</li>
<li class="nav-items">
    <a href="{{url('viewbuyerproduct')}}" class="nav-link" style="">Shop</a>
</li>
<li class="nav-items">
    <a href="{{url('viewcart')}}" class="nav-link" style="">Cart</a>
</li>
<li class="nav-items">
    <a href="{{url('logout')}}" class="nav-link " style="">Logout</a>
</li>


    </ul>
  <form class="d-flex">
<input type="search" name="sear" class="pe-2 search" class="form-control" placeholder="Search" id="" style="border:none;">
<input type="submit" value="Search" name="sear" class="btn btn-primary">
    </form>
</div>
 </div>
    </div> 
        
           <div class="container pt-5">
                <?php
                $total=0;
                ?>
                @foreach($result as $value)
                  <div class="row m-4">
                  <div class="col-md-4 ">
            
                    <a href="{{url('buyerproductdetails',$value['Product_id'])}}"><img src="images/{{$value['Photo']}}" height="300" width="300"></a>
                    </div>
                    <div class="col-md-4 ">
                        <div class="row m-4 " style="font-size:30px;font-weight:500;">
                   {{$value['Product_Name']}}
                   </div>
 
<div class="row">
                    <form action="{{url('btnajax',$value['id'])}}" method="post">
                    @csrf 
                    Quantity :   
                    <input type="submit" name="sub" value="-" class="btn border" id="min">
                   {{$value['Quantity']}}
                    
                    <input type="submit" name="sub" class="btn border" id="plus" value="+">
                   </div> 
                                     <div class="row m-4 text-danger fw-bold" >
                  {{$value['Price']*$value['Quantity']}} Rs
    </div>
    
    <div class="row">
        <a href="{{url('remove',$value['id'])}}">Remove</a>
        <!-- <input type="button" value="Remove" name="but" class="btn btn-danger" style="height:60px;width:80px;"> -->
    </div>
</div>

                </form>
               
                <?php
                $total=$total+$value['Price']*$value['Quantity'];
                ?>
                 </div>
            
                @endforeach
           
   </div>
   <div class="container pt-5 mt-5" style="background-color:ghostwhite">
   <div class="row m-4">
      <div class="col">
        <h3 class="bg-warning">Total Amount</h3>
       </div> 
        <div class="col">
        <span class="text-danger fw-bold fs-2 ">{{$total}} Rs</span>
        </div>

</div>
<div class="row m-4"> 
    <div class="col text-end">
        <a href="{{url('cartproceed')}}"><span class="btn btn-success">Proceed</span></a>
    <!-- <input type="submit" value="Proceed" class="btn btn-success"  name="sub"> -->
    </div>
</div>
</div>
       
    </body>
</html>

<script>
 


    $('#min').click(function()
        {
            var min=$('#min').val();
            alert(min);
            $.ajax({
                type:"POST",
                // url:"{{url('btnajax')}}",
                data:{
                   minus:min,
                },
                
           });
            });

            $('#plus').click(function()
            {
                var pl=$('#plus').val();
                alert(pl);
                $.ajax({
                    type:"POST",
                  
                    data:{
                      plus:pl,
                    },
                });
            });
          

</script>
