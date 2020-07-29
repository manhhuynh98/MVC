{{$error ?? ''}}
<form action="{{ route('login')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="username" placeholder="enter username"><br>
    <input type="password" name="password" placeholder="enter password"><br>
    <input type="submit" value="login">
</form>
