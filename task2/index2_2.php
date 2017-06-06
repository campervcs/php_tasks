<!-- В данном задании я добавил выбор пола человека, помимо выбора возраста.
	Рекомендации даются также с учетом выбранного пола. -->
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>Задание 2</title>
	 	<meta charset="utf-8">
	 </head>
	 <body>
	 	<?php
	 		if(!$_GET){
		 		echo <<< nnn
		 		<form>
					<h1>Выберите ваш пол</h1>
					<input type="radio" name="gender" value='1'>Муж<br>
					<input type="radio" name="gender" value='2'>Жен<br><br>
					<hr>
					<h1>Выберите ваш возраст</h1>
					<input type="radio" name="years" value='0'>Меньше 14<br>
					<input type="radio" name="years" value='1'>15-18<br>
					<input type="radio" name="years" value='2'>19-35<br>
					<input type="radio" name="years" value='3'>36-50<br>
					<input type="radio" name="years" value='4'>51-60<br>
					<input type="radio" name="years" value='5'>Больше 60
					<p><input type="submit" value="OK"></p>
				</form>
nnn;
			} else {
				if($_GET[gender] == 1){
				switch ($_GET[years]) {
					case '0':
						echo "Вы мальчик младше 15 лет! Скорее уйдите с этого сайта!";
						break;
					case '1':
						echo "Вы мальчик от 15 до 18 лет! Рекомендации для самых молодых!";
						break;
					case '2':
						echo "Вы мужчина от 19 до 35 лет! Рекомендации для молодых людей!";
						break;
					case '3':
						echo "Вы мужчина от 36 до 50 лет! Рекомендации для людей среднего возраста!";
						break;
					case '4':
						echo "Вы мужчина от 51 до 60 лет! Рекомендации для людей предпенсионного возраста!";
						break;
					case '5':
						echo "Вы мужчина старше 60 лет! Хорошо держитесь!";
						break;
					default:
						echo "Вы мужчина. Мы не можем дать вам рекомендаций, так как мы не знаем ваш возраст.";
						break;
				}
				} elseif ($_GET[gender] == 2) {
					switch ($_GET[years]) {
						case '0':
							echo "Вы девочка младше 15 лет! Скорее уйдите с этого сайта!";
							break;
						case '1':
							echo "Вы девочка от 15 до 18 лет! Рекомендации для самых молодых!";
							break;
						case '2':
							echo "Вы женщина от 19 до 35 лет! Рекомендации для молодых людей!";
							break;
						case '3':
							echo "Вы женщина от 36 до 50 лет! Рекомендации для людей среднего возраста!";
							break;
						case '4':
							echo "Вы женщина от 51 до 60 лет! Рекомендации для людей предпенсионного возраста!";
							break;
						case '5':
							echo "Вы женщина старше 60 лет! Хорошо держитесь!";
							break;
						default:
							echo "Вы женщина. Мы не можем дать вам рекомендаций, так как мы не знаем ваш возраст.";
							break;
					}
				} else 
					echo "Вы что то непонятное. Мы никак не можем вам помочь...";
				}
	 	?>
	 </body>
 </html>