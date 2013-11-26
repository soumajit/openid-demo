<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="signin span6">
<?php
session_start();
require 'lib/openid.php';
try {
    $openid = new LightOpenID('localhost');
    if(!$openid->mode) {
        if(isset($_GET['login'])) {
            $openid->identity = 'https://www.google.com/accounts/o8/id';
	    $openid->required = array('namePerson/friendly', 'contact/email');
            header('Location: ' . $openid->authUrl());
        }
?>
	<div class="social_sign">
		<h3>Sign in with your social account</h3>
		<form action="?login" method="post">
    			<button class="btn btn-warning">Login with Google</button>
		</form>

	</div>
        <div class="or">
        	<div class="or_l"></div>
                <span>or</span>
                <div class="or_r"></div>
        </div>
        <p class="sign_title">Log in with your site account</p>

        <div class="form" action="" method="POST">
		<form>
                	<input type="text" placeholder="Email" class="input-xlarge">
                        <input type="text" placeholder="Password" class="input-xlarge">
                        <div class="forgot">
                        	<label class="checkbox">
				<input type="checkbox"> Remember me
					</label><!--<a href="#">Forgot password?</a>-->
                        </div>
                        <button type="submit" class="btn btn-primary btn-large">Sign in</button>
                 </form>
         </div>
<?php
    } elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
	echo '<div><a href="index.php">Home</div>';
    } else {
	if ($openid->validate()) {
		$arr = $openid->getAttributes();
		$_SESSION['identity'] = $openid->identity;
		isset($_SESSION['identity']);
		$_SESSION['c_ename'] = $arr["contact/email"];
		echo 'User '. $arr["contact/email"] . ' has logged in.';
                header('Location: index.php?comments=on');  		
		#echo '<div><a href="logout.php">Logout</div>';
	}
        else {echo 'User has not logged in.';
	echo '<div><a href="index.php">Home</div>';}
    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}?>
</div>
<script src="js/jquery-1.9.0.min.js"></script>
</body>
</html>
