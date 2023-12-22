<html>
    <head>
    <!-- <script src="js\jquery-2.2.4.min.js">

</script> -->
    </head>
    <body>
        <table>
<tr><td><label for="">Name</label></td><td><input type="text" name="name" id="n" value="{{$result['Name']}}"></td></tr>
<tr><td><label for="">Place</label></td><td><input type="text" name="place" id="p" value="{{$result['Place']}}"></td></tr>
<tr><td><label for="">Dob</label></td><td><input type="text" name="date" id="d" value="{{$result['Dob']}}"></td></tr>
            <tr><td><input type="submit" value="Update" name="sub" id="update"></td></tr>

        </table>

        
    </body>
</html>
<script>
    $('#update').click(function()
    {
    
     var name=$('#n').val();
     var place=$('#p').val();
     var dob=$('#d').val();
     var id="<?php echo $result['id'];?>";
     
     $.ajax({
        type:"post",
        url:"{{url('updatetb')}}/"+id,
        data:{
            n:name,
            p:place,
            d:dob,
        },
        success:function(data)
        {
            window.location.href='{{url('insert')}}';
        }
     })
    }
    )
</script>