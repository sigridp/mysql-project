<?php 
$validationLogin = true;
//start functie bij inloggen
if(isset($_POST['submit'])){
	$validationLogin = checkLogin();	
}
//start functie bij uitloggen
if(isset($_GET['logout'])){
	logoutAndClear();
}

//toon inlogscherm tenzij al ingelogd
if(!isset($_SESSION['username'])){?>
	<form class="navbar-form navbar-right" action="" method="post" name="loginForm">
 	<div class="form-group">
    	<input name="login" type="text" placeholder="login naam" value="" class="form-control">
    </div>
	<div class="form-group">
    	<input name="password" type="password" placeholder="wachtwoord" value="" class="form-control">
    </div>
    	<input type="submit" value="Log in" name="submit" class="btn btn-success">
    	<?php if(!$validationLogin) echo '<p class="incorrect">Incorrect username or password</p>';?>
	</form>
<?php } else {?> 
	<div class="navbar-form navbar-right">
		<div class="login">Welkom <?=$_SESSION['username'];?></div>
		<div class="logout"><a href="<?=$_SERVER['PHP_SELF'];?>?logout">uitloggen</a></div>
	</div>
<?php }