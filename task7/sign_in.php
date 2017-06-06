<!DOCTYPE html>
<html>
<head>
	<title> 7 задание </title>
</head>
<body>	

	<form action="#" method="post">
		<b>
			Войти
		</b>

		<br>
		<br>

		Логин:
		<br>
		<input type="text" name="form[]" value="<?= $_POST['form'][0] ?>">
		<br>
		<br>

		Пароль: 
		<br>
		<input type="password" name="form[]" value="<?= $_POST['form'][1] ?>">	
		<br>
		<br>

		<input type="submit" name="sign-in" value="Войти"/>
		<input type="button" value="Регистрация" onclick="window.location.href='index.php'" name="sign-up"/>

	</form>	

	<br>

	<div>
		<?php			
			if(isset($_POST["sign-in"])) {
				$file = fopen("userdata.txt", "r");	
				if($file) {
					while(($line = fgets($file)) !== false) {
						$name = explode(" ", $line)[0];
						$password = explode(" ", $line)[1];
						$found_user = false;

						if(($_POST['form'][0] == $name) and ($_POST['form'][1] == $password)) {
							echo "Добро Пожаловать, $name";
							$found_user = true;
							break;
						}
					}
					if($found_user == false) {
						echo "Ошибка: такого пользователя не существует.";
					}
				} else {
					echo "<b>Ошибка:</b> Записи пользователей не доступны.";
				}
				fclose($file);
			}
		?>
	</div>	
</body>
</html>
