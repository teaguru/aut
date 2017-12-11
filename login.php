<?php
require "db.php";
$data =$_POST;

if (isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user) {
// если логин существует проверяем пароль
    if ( password_verify($data['password'], $user->password))
        {
            $_SESSION['logged_user'] = $user;
            echo '<div style="color:green;">'.'Зайдено! го то зе <a href = "/">майн паге</a>'.'</div><hr>';

        }
        else{
            $errors[] = 'неверный пароль';
        }
    } else {
        $errors[] = 'неверный логин';

    }

    if(! empty($errors))
    {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
        var_dump($errors);

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