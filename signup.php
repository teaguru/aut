<?php
require "db.php";?>
<?php
$data = $_POST;
$errors = array();
if (isset($data['do_signup']))
{

		echo $_Post['login'];
		$errors = array();
		
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

if (R::count('users',"login=?", array($data['login']))>0)
{
	$errors[]='Логин занят';
}
	if (R::count('users',"email=?", array($data['email']))>0)
	{
		$errors[]='email занят';
	}
	
	if(empty($errors))
		{
//регаем
		$user=R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);

		echo '<div style="color:green;">'.'Зарегился!'.'<br>'.'перейдите на'. '<a href = "/">  Главную</a></div><hr>';

		} else
		{
	echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
	var_dump($errors);
		}

		}
?>

<form action = "/signup.php"  class="container-fluid" class="m1" method="POST">

<p>
<p><strong>Ваш логин</strong>:</p>
<input type="text" name="login" value="<?php echo @$data['login'] ?>" >
</p>

<p>
<p><strong>Ваш e-mail</strong>:</p>
<input type="email" name="email" value="<?php echo @$data['email'] ?>">
</p>

<p>
<p><strong>Ваш пароль</strong>:</p>
<input type="password" name="password" value="<?php echo @$data['password'] ?>">
</p>

<p>
<p><strong>Повторите пароль</strong>:</p>
<input type="password" name="password_2" value="<?php echo @$data['password_2'] ?>">
</p>

<p>
	<button class="btn btn-info" type="submit" name="do_signup"> Зарегистрироваться</button>

</p>
</form>
