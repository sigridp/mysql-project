<?php
/**
* omzetten van teksten: no white-space, small caps
*
* @param String
*
* @return String
*/
function omzettenTekst($tekst){
	$nieuweTekst = str_replace(' ', '', $tekst);
	$nieuweTekst = strtolower($nieuweTekst);
	echo $nieuweTekst;
}

/**
*	checkLogin controleert of de sessie al bestaat
* 	zo nee, controleer na submit of loginveld en
* 	password veld gevuld is.
*	vul $_SESSION['username'] met inlognaam
*
*	@return Boolean
*/
function checkLogin(){
	if(!isset($_SESSION['username']) && (isset($_POST['submit']))){
		if(!empty($_POST['login']) && $_POST['password']){
			$_SESSION['username'] = $_POST['login'];
		} 
		else{
			return false;
		}
	}
}

/**
*	logoutAndClear function
* 	Unset username session
*	Redirect naar home
*/
function logoutAndClear(){
	unset( $_SESSION['username'] );
	header('Location: '. WEB_URL);
}

/**
*	editBericht function
*	toont bij een inlogsessie een button
*	om bericht te kunnen wijzigen
*
*	@return String
*/
function editBericht(){
	if(!empty($_SESSION['username'])){
		echo '<a class="btn btn-default" href="#">&#9998; edit</a>';
	}
}