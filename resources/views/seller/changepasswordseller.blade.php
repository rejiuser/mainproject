<html>
    <head>

    </head>
    <body>
        <form action="{{url('updatepasswordseller')}}" method="post">
@csrf
<table>
    <tr><td><label for="">Current Password</label></td><td><input type="text" name="currentpassword" id="">
@if($errors->has('currentpassword'))<span style="color:red">*</span>
{{$errors->first('currentpassword')}}
@endif
@if(Session::get('error'))
{{Session::get('error')}}
@endif
</td></tr>
<tr><td><label for="">New Password</label></td><td><input type="text" name="newpassword" id="">
@if($errors->has('newpassword'))<span style="color:red">*</span>
{{$errors->first('newpassword')}}
@endif

</td></tr>
<tr><td><label for="">Confirm Password</label></td><td><input type="text" name="confirmpassword" id="">
@if($errors->has('confirmpassword'))<span style="color:red">*</span>
{{$errors->first('confirmpassword')}}
@endif
</td></tr>
<tr><td><input type="submit" value="Update" name="sub"></td></tr>

    

</table>

        </form>
    </body>
</html>