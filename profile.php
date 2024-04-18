<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<body>
<style>
    .logout {
    color: #b7625c;
}
</style>

    <form>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>