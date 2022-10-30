<?php
$login = htmlspecialchars(trim($_POST['login']));
$pass = htmlspecialchars(trim($_POST['pass']));

$pass = md5($pass."you shall not pass");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
'$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (empty($user)) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['login'], time() + 3600, "/");

$mysql->close();

header('Location: http://urok11-12slaide17/registration.php');

?>