<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="login-box" >
    <div class="login-header">Login</div>
    <div class="login-body">
        <form class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="">
            <label>Password</label>
            <input type="password" class="form-control" name="">
            <input type="checkbox" value="checked"><b>Remember</b>
            <input type="submit" value="Login" class="form-control btn btn-success " name="">
        </form>
    </div>
</div>
</body>
</html>
