<?php
if(isset($_POST['masuk'])){
    $userid=$_POST['userid'];
    $userpwd=md5($_POST['userpwd']);
    $q=mysqli_query($mycon,"select * from simoni_user where userid='$userid' and userpwd='$userpwd'");
    if(mysqli_num_rows($q)>0){
		$h=mysqli_fetch_array($q);
		
		$_SESSION['login']=true;
		$_SESSION['userid']=$h['userid'];
        $_SESSION['nama']=$h['nama'];
        $_SESSION['nip']=$h['nip'];
        $_SESSION['email']=$h['email'];
		$_SESSION['level']=$h['level'];
		$_SESSION['last']=date('d-m-Y H:i:s',strtotime($h['last_login']));
		$_SESSION['now']=date('Y-m-d H:i:s');
		
		?>
		<script>alert('LOGIN SUKSES!');</script>
		<?php
	}else{
		?>
		<script>alert('LOGIN GAGAL!');</script>
		<?php
	}
	?>
	<script>location.href='./';</script>
	<?php
}
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>SIMoni - DAK</title>

        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
        <link rel="shortcut icon" href="img/pu.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/themes.css">
        <script src="js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <img src="img/placeholders/backgrounds/bg.jpg" class="full-bg animation-pulseSlow">

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><img src="img/pu.png" width="32"><br><small>Sistem Informasi Monitoring DAK<br /><strong>SIMoni - DAK</strong></small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="login-user" name="userid" class="form-control input-lg" placeholder="ID User">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-lock"></i></span>
                                <input type="password" id="login-password" name="userpwd" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="submit" name="masuk" class="btn btn-lg btn-primary"><i class="gi gi-shield"></i> Masuk</button>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>