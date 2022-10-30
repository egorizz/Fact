<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="Styles/Style_registration.css">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_COOKIE['user']) == false):
        ?>
        <div>
            <h1>Форма регистрации</h1>
            <form action="validation-form/check.php" method="post">
                <input type="text" name="login" placeholder="Введите логин"><br><br>
                <input type="password" name="pass"
                placeholder="Введите пароль"><br><br>
                <button type="submit">Зарегистрировать</button>
            </form>
        </div>
        <?php else: ?>
            <p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите
            <a href="/exit.php">здесь</a>.</p>
        <?php endif;?>
    </div>
</body>
</html>