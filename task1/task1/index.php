<html>
	<?php
		$fl = 0;
		if($fl == 0) {
			$head = "Информация преподавателю";
			$str = "Введите фамилию и инициалы";
		} else {
			$head = "Информация студенту";
			$str = "Введите номер зачетки";
		}
		echo "<head>";
			echo "<title>$head</title>";
		echo "</head>";
		echo "<body>";
			echo "<h1 style='text-align: center;'>$head</h1>";
			echo "<form>";
				echo "<table style='background-color: #CCCC99; width: 300px; margin: auto; text-align: center'>";
					echo "<tr><td>$str</td></tr>";
					echo "<tr><td><input name='inform' size='10' type='text'></td></tr>";
					echo "<tr><td><input type='submit' name='submit' value='OK'></td</tr>";
				echo "</table>";
			echo "</form>";
		echo "</body>";
	?>
</html>