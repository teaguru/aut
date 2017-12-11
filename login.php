<?php
require "db.php";
$data =$_POST;

if (isset($data['do_login'])) {
    $errors = array();
    $user = R::find('users', 'login = ?', array($data['login']));
    if ($user) {

    } else {
        $errors[] = 'неверный логин';

    }
     }

?>
<form action = "/login.php" method="POST">

    <p>
    <p><strong>Логин</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login'] ?>" >
    </p>

    <p>
    <p><strong>Пароль</strong>:</p>
    <input type="text" name="password" value="<?php echo @$data['password'] ?>" >
    </p>

    <p>
        <button type="submit" name="do_login">Войти</button>

    </p>