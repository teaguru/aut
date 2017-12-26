<?php
require "db.php";
$data =$_POST;
$errors = array();
if (isset($data['do_add']))
{

		echo 'Вы зашли как '.$_SESSION['logged_user']->login;
		$errors = array();
		
	
		
$errors[]='Введите текст мнения';
		


	/*

if (R::count('post',"mnenie=?", array($data['errors']))>0)
{
	$errors[]='Такое уже было';
}
	
	
	if(empty($errors))
		 {
//регаем*/
		$user=R::dispense('post');
		$user->login = $_SESSION['logged_user']->login;
		$user->mnenie = $data['mnenie'];
		//$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);

		echo '<div style="color:green;">'.'Зарегился!'.'<br>'.'перейдите на'. '<a href = "/">  Главную</a></div><hr>'; /*
}
		 else
		{
	echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
	var_dump($errors);
		}
*/
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


