<html>
    <head>

    </head>
    <body>
        <form action="{{url('admininsert')}}" method="post">
            @csrf
            <table>
                <tr><td><label for="">Name</label></td><td><input type="text" name="name" id=""></td></tr>
            <tr><td><label for="">Email</label></td><td><input type="email" name="em" id=""></td></tr>
<tr><td><label for="">Phone</label></td><td><input type="text" name="ph" id=""></td></tr>
<tr><td><label for="">Username</label></td><td><input type="text" name="user" id=""></td></tr>        
<tr><td><label for="">Password</label></td><td><input type="text" name="pass" id=""></td></tr>
<tr><td><input type="submit" value="Register" name="sub"></td></tr>
</table>
<a href="{{url('login')}}">Login</a>
        </form>
    </body>
</html>