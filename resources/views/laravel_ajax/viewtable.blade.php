<html>
    <head>
<script src="js\jquery-2.2.4.min.js">

</script>
        <meta name="csrf-token" content="{{csrf_token()}}">

    </head>
    <body>
    <table>
        <tr>
    <td>
        <!-- <select name="search" id="select">
            <option value="">..select..</option>
            @foreach($result as $res)
            <option value="{{$res['Name']}}">{{$res['Name']}}</option>
            @endforeach
        </select> -->
          <input type="text" name="search" id="s" placeholder="Search"> 
</td>
<td><input type="submit" value="Search" id="ser"></td>
</tr>
</table>
        <table border=1>
<thead>
    <th>Name</th>
    <th>Place</th>
    <th>Dob</th>
</thead>
<tbody id="tbody">
    @foreach($result as $value)
    <tr>
        
        <td>{{$value['Name']}}</td>
        <td>{{$value['Place']}}</td>
        <td>{{$value['Dob']}}</td>
    </tr>
    @endforeach
</tbody>
        </table>
    </body>
</html>
<script>
$.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });


    // $('#ser').click(function()
    // {
    //     var select=$('#select').val();
        
    //     $.ajax({
    //         type:"get",
    //         url:"{{url('search')}}",
    //         data:{
    //             selected:select,
    //         },
    //         success:function(data)
    //         {
                
    //             $('#tbody').empty();
    //             $.each(data,function(key,value)
    //             {
    //               var res="<tr><td>"+value['Name']+"</td><td>"+value['Place']+"</td><td>"+value['Dob']+"</td></tr>";
    //               $('#tbody').append(res);
    //             })
                
    //         }
    //     })
    // })
    $('#ser').click(function()
    {
        var text=$('#s').val();
        $.ajax({
            type:"get",
            url:"{{url('text')}}",
            data:{
                texted:text,
            },
            success:function(data)
            {
                $('#tbody').empty();
                $.each(data,function(key,value)
                {
                var result="<tr><td>"+value['Name']+"</td></tr>";
                $('#tbody').append(result);
            })
        }
        })
    })
</script>