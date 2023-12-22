<html>
    <head>

    </head>
    <body>
        <form action="{{url('newforgotpwinsert')}}" method="post">
            @csrf
            <table>
                <tr><td><label for="">New Password</label></td><td><input type="text" name="newpassword" id="">
            @if($errors->has('newpassword'))
            {{$errors->first('newpassword')}}
            @endif
            </td></tr>
                <tr><td><label for="">Confirm Password</label></td><td><input type="text" name="confirmpassword" id="">
            @if($errors->has('confirmpassword'))
            {{$erros->first('confirmpassword')}}
            @endif
            @if(Session::get('error'))
            {{Session::get('error')}}
            @endif
            </td></tr>
            <tr><td><input type="submit" value="Change" name="sub"></td></tr>
            </table>
        </form>
    </body>
</html>