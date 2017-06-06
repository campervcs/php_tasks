<!-- В данном задании я добавил выбор пола человека, помимо выбора возраста.
	Рекомендации даются также с учетом выбранного пола. -->
<!DOCTYPE html>
<html>
	<head>
		<title>Задание 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="radiobuttonInformation.php">
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
	</body>
</html>