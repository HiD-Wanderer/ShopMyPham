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
				<div class="auth-box lockscreen clearfix">
					<div class="content">
						<h1 class="sr-only">Klorofil - Free Bootstrap dashboard</h1>
						{if isset($err)}
				            <h4 align="center" style="color: #ff0000">{$err}</h4>
				        {/if}    
						<div class="logo text-center"><img src="{$path}/public/assets/img/logo-dark.png" alt="Klorofil Logo"></div>
						<div class="user text-center">
							<img src="{$path}/public/assets/img/user-medium.png" class="img-circle" alt="Avatar">
							<h2 class="name">{$fullname}</h2>
						</div>
						<form action="#" method="post">
							<div class="input-group">
								<input type="password" class="form-control" name="password" placeholder="Enter your password ...">
								<span class="input-group-btn">
								<button type="submit" name="btnDangNhap" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

</body>