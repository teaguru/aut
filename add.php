<?php
require "db.php";
$data =$_POST;
$errors = array();
if (isset($data['do_add']))
{

		echo $_Post['login'];
		$errors = array();
		
	if(trim($data['mnenie']==''))
		{
$errors[]='Введите текст мнения';
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

<form action = "/add.php" method="POST">

<p>
<p><strong>Ваше мнение</strong>:</p>
<p><textarea rows="10" cols="45" name="mnenie"  value="Ваше мнение очень важно для нас" >Ваше мнение очень важно для нас </textarea>
</p>


<p>
	<button class="btn btn-success-outline" type="submit"  name="do_add"> Добавить мнение</button>

</p>
</form>


