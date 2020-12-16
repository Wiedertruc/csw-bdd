<html lang="fr">
<head>
    <title>TP PHP 4 - Ex4 - Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$loginState = 0; // 0 = not loggued, 1 = logged, 2 = denied
$accounts = ['moi' => 'azerty','bob'=>'12345','patrick'=>'67890'];

function loginPrompt(){
    echo '<h1>Entrez vos identifiants</h1>
        <form action="" method="post"><table>
            <tr><td><label>Login : </td><td><input type="text" name="login"/></label></td></tr>
            <tr><td><label>Mot de passe : </td><td><input type="password" name="password"/></label></td></tr>
            <tr><td colspan="2"><input type="submit" value="Login"></td></tr>
        </table></form>';
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login =$_POST['login'];
    $passsword = $_POST['password'];
    if (array_key_exists(strtolower(trim($login)),$accounts) && $accounts[strtolower(trim($login))] == strtolower(trim($passsword))) {$loginState = 1;}
    else {$loginState = 2;}
}

switch ($loginState){
    case 0 : loginPrompt(); break;
    case 1 : echo "Hello {$login}<br><a href='ex4_login.php'>back</a>"; break;
    case 2 : echo "Access denied<br><a href='ex4_login.php'>back</a>"; break;
}

?>
</body>
</html>
