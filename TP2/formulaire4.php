<html lang="fr">
<head>
    <title>TP PHP 4 - Ex4 - Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$loginState = 0; // 0 => not logged, 1 => logged, 2 = denied
$accounts = [ 'gambino' => '161471', 'wiederhold' => 'tomates', 'louchamalow' => 'soleilnoir' ];

function loginForm(){
echo '<h3 align="center">Entrez vos identifiants</h3>
	<form method="post" action="">
		<table align="center" width="100%">
			<tr> 
				<td align="right" width="50%"><label>login :</td>
				<td align="left"><input type="text" name="login" value="" size="16"/></label></td>
			</tr>
			<tr> 
				<td align="right" width="50%"><label>Mot de passe :</td>
				<td align="left"><input type="password" name="password" size="16"></label></td>
			</tr>
			<tr> 
				<td align="center" colspan="2"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>';
}

if(isset($_POST['login']) && isset($_POST['password'])) {
	$login=$_POST['login'];
	$password=$_POST['password'];
	if ( array_key_exists( strtolower( trim($login)), $accounts) && $accounts[strtolower(trim($login))] == trim($password) )
		{ $loginState=1; }
	else { $loginState=2; }
}

switch($loginState){
	case 0 : loginForm(); break;
	case 1 : echo 'Hello '.$login.'<br><a href="principal.php">back</a>'; break;
	case 2 : echo 'Acces denied<br><a href="principal.php">back</a>'; break;
}

?>
</body>
</html>