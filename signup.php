<?php
require "db.php";


$data =$_Post;
$errors=array();
echo "werwer";
if (isset($data['do_signup'])) 
		{ 
echo "string";
		echo $_Post['login'];
		$errors=array();
		
if(trim($data['login']==''))
{
$errors[]='Введите логин';
	}


if(trim($data['email']==''))
{
$errors[]='Введите e-mail';
	}


	if($data['password']=='')
{
$errors[]='Введите пароль';
	}


if($data['password_2'] !=$data['password'])
{
	$errors[]='Повторный пароль введен неверно';
}


	
if(empty($errors))
{
//регаем
echo '1';
} else {
	echo "2";
}

}
?>

<form action = "/signup.php" method="POST">

<p>
<p><strong>Ваш логин</strong>:</p>
<input type="text" name="login">
</p>

<p>
<p><strong>Ваш e-mail</strong>:</p>
<input type="email" name="login">
</p>

<p>
<p><strong>Ваш пароль</strong>:</p>
<input type="password" name="password">
</p>

<p>
<p><strong>Повторите пароль</strong>:</p>
<input type="password" name="password_2">
</p>

<p>
	<button type="submit" name="do_signup"> Зарегистрироваться</button>

</p>
</form>
