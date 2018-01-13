<?php
require "db.php";
require "libs.php";
?>
<body>
<?php if( isset($_SESSION['logged_user'])) : ?>
	<div class="container">
Авторизован!<br> </div>

    Привет, <strong> <?php echo $_SESSION['logged_user']->login ; ?> </strong>
    <br><a href ="/add.php">Добавить мнения</a><br>
            <a href = "text.php"> Ваши мнения </a><br>
            <a href ="/logout.php">Выйти!</a><br>

<?php else : ?>
<a href ="/login.php">Авторизация!!!</a><br>
<a href ="/signup.php">Регистрация</a><br>
<a href = "text.php"> Ваши мнения </a><br>
    Вы не авторизованы!
<?php endif; ?>
            Шлите свои Бетховены на 18wuLQ7auy9tLLaYJs9rCAZ94KmiWUbNQz

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

</body>