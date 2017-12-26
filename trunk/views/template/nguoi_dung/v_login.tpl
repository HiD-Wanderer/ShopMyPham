<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
    <title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{$path}/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$path}/public/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$path}/public/assets/vendor/linearicons/style.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{$path}/public/assets/css/main.css">

    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{$path}/public/assets/css/demo.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{$path}/public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{$path}/public/assets/img/favicon.png">
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{$path}/public/assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                                <p class="lead">Login to your account</p>
                            </div>
                            <form class="form-auth-small" action="#" method="post">
                                {if isset($err)}
            <h4 align="center" style="color: #ff0000">{$err}</h4>
        {/if}    
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" autofocus name="username" value="{$username}">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Ghi nhớ
            </label>            
            <p align="center"><input type="submit" name="btnDangNhap" value="Đăng nhập" class="btn btn-primary"></p>
        </div>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Free Bootstrap dashboard template</h1>
                            <p>by The Develovers</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</html>
