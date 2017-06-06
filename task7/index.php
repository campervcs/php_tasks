<!DOCTYPE html>
<html>
<head>
	<title> Task 7 </title>
</head>
<body>

	<form action="#" method="post">
		<b style="font-size: 1.3em">
			Регистрация
		</b>

		<br>
		<br>

		Логин:
		<br>
		<input type="text" required name="form[]" value="<?= $_POST['form'][0] ?>">
		<br>
		<br>

		Пароль:
		<br>
		<input type="password" required name="form[]" value="<?= $_POST['form'][1] ?>">
		<br>	
		<br>

		Повторите пароль:
		<br>
		<input type="password" required name="form[]" value="<?= $_POST['form'][2] ?>">
		<br>
		<br>

		Эл. Почта:
		<br>
		<input type="email" required name="form[]" value="<?= $_POST['form'][3] ?>">
		<br>	
		<br>

		<input type="submit" name="sign-up" value="Зарегистрироваться" />
		<input type="button" value="Войти" onclick="window.location.href='sign_in.php'" name="sign-in"/>
	</form>	

	<br>

	<div>
		<?php					
			function form_has_errors($form_array, $regex_array, $field_names) {
				foreach($form_array as $key => $value) {
					return (!preg_match($regex_array[$key], $value)) ? true : false;
				}
			}
               $file = fopen("userdata.txt", "r");
               if($file) {
					while(($line = fgets($file)) !== false) {
						$name = explode(" ", $line)[0];
						$found_user = false;

						if(($_POST['form'][0] == $name)) {
							$found_user = true;
							break;
						}
					}
					if($found_user == true) {
						echo "Ошибка: пользователь уже существует.";
					}
                   fclose($file);
				}
               
               if($found_user == false){
			$regex_checker = array("/^[a-zA-Z0-9]{6,24}$/", "/^[a-zA-Z0-9\-]{8,24}$/", "/^[a-zA-Z0-9\-]{8,24}$/", "/^[a-zA-Z0-9\-@]{8,24}$/");

			if(isset($_POST["sign-up"]) and (!form_has_errors($_POST['form'], $regex_checker, array("Name", "Password", "Password", "Email"))) and ($_POST['form'][1] == $_POST['form'][2]) and filter_var($_POST['form'][3], FILTER_VALIDATE_EMAIL)) {
				echo "No errors. Welcome!";

				
				$file1 = fopen("userdata.txt", "a");
				foreach($_POST["form"] as $key => $value) {
					fwrite($file1, $value." ");
				}
				fwrite($file1, "\n");
                fclose($file1);
			} elseif(isset($_POST["sign-up"])) {
				echo "<b>Ошибка, пользователь не зарегистрирован</b>";
			}
               }
               
		?>
	</div>	
</body>
</html>
