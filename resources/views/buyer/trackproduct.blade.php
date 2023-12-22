<html>
    <head>

    </head>
    <body>
        <table border=1>
            <thead>
                <th>Order Details</th>
                <th>Date</th>
            </thead>
            <tbody>
                
                @foreach($result as $value)
               <tr>
                <td>{{$value['Details']}}</td>
                <td>{{$value['Date']}}</td>
               </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>