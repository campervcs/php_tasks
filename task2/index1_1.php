<!-- В данном задании я сделал вместо выбора года выбор даты рождения в формате день.месяц.год -->
<!DOCTYPE html>
<html>
	<head>
		<title>Задание 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Введите вашу дату рождения</h1>
		<form action="yearinformation.php">
			День: 
			<select class="input" type="text" name="day">
				<?php
					for($i = 1; $i <= 31; $i++)
						echo "<option value=$i>$i</option>";
				?>
			</select>
			Месяц: 
			<select class="input" type="text" name="month">
				<?php
					for($i = 1; $i <= 12; $i++)
						echo "<option value=$i>$i</option>";
				?>
			</select>
			Год: 
			<select class="input" type="text" name="year">
				<?php
					for($i = 1900; $i <= 2017; $i++)
						echo "<option value=$i>$i</option>";
				?>
			</select>
			<p><input type="submit" value="OK"></p>
		</form>
	</body>
</html>