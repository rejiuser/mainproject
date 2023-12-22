<html>
    <head>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script src="js\jquery-2.2.4.min.js">

        </script>
    </head>
    <body>
        <!-- <form action="" method="post">
            @csrf -->
     <table>
        <tr><td><label for="">Name</label></td><td><input type="text" name="name" id="nam"></td></tr>
        <tr><td><label for="">Place</label></td><td><input type="text" name="place" id="pl"></td></tr>
        <tr><td><label for="">Dob</label></td><td><input type="date" name="dob" id="date"></td></tr>
        <tr><td><input type="submit" value="Submit" name="sub" id="submit"></td></tr>
        <tr><td><input type="submit" value="View"  name="view" id="view"></td></tr>

     </table>
     <!-- </form> -->
     <table border=1>
        <thead>
            <th>Name</th>
            <th>Place</th>
            <th>Dob</th>
        </thead>
        <tbody id="tbody">
            
            
            
        </tbody>
        
     </table>
     <div id="para"></div>
    </body>
</html>
<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#submit').click(function()
    {

        var name=$('#nam').val();
        var place=$('#pl').val();
        var dob=$('#date').val();
        alert(name+place+dob);
        $.ajax({
            type:'post',
            url:'{{url('inserttb')}}',
            data:{
                n:name,
                p:place,
                d:dob,
            },
            success:function()
            {
                window.location.href="{{url('insert')}}"
            }
    });
    }
    );

    $('#view').click(function()
    {
        $.ajax({
            type:"get",
            url:"{{url('viewurl')}}",
            success:function(data)
            {
                $('#tbody').empty();
              $.each(data,function(key,value){
                
                var res="<tr><td>"+value['Name']+"</td><td>"+value['Place']+"</td><td>"+value['Dob']+"</td><td><input type='submit' class='editclass' value='edit' id='edit' data-id='"+value['id']+"'></td><td><input type='submit' name='delete' value='Delete' class='dltclass' id='dlt' data-id='"+value['id']+"'></td></tr>";
                $('#tbody').append(res);
              });
              $('.editclass').click(function()
    {
        var id=$(this).data('id');
        
        $.ajax({
            type:"get",
            url:"{{url('edittb')}}/"+id,
            success:function(data)
            {
                
               $('#para').html(data);

            }
        })
   
    }
    )
$('.dltclass').click(function()
{
var id=$(this).data('id');

$.ajax({
    type:"get",
    url:"{{url('deletetb')}}/"+id,
    success:function(data)
    {
window.location.href="{{url('insert')}}"
    }
})
}
)

    

            }
        })
    }
    
    
    )

    


</script>