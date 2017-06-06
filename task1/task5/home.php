<?php
	$fl = $_GET['status'];
		if($fl == 0) {
			$head = "Информация преподавателю";
			$str = "Введите фамилию и инициалы";
		} else {
			$head = "Информация студенту";
			$str = "Введите номер зачетки";
		}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $head ?></title>
	</head>
	<body>
		<h1 style='text-align: center;'><?php echo $head ?></h1>
		<form>
			<table style = 'background-color: #CCCC99; width: 300px; margin: auto; text-align: center'>
				<tr><td><?=$str ?></td></tr>
				<tr><td><input name='inform' size='10' type='text'></td></tr>
				<tr><td><input type='submit' name='submit' value='OK'></td</tr>
			</table>
		</form>
	</body>
</html>