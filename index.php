<?php
require "db.php";


?>
<?php if( isset($_SESSION['logged_user'])) : ?>
Авторизован!<br>
    Привет, <strong> <?php echo $_SESSION['logged_user']->login ; ?> </strong>
    <br>
    <a href ="/logout.php">Выйти!</a><br>

<?php else : ?>
<a href ="/login.php">Авторизация!!!</a><br>
<a href ="/signup.php">Регистрация</a>
<?php endif; ?>