<html>
	<?php
		$fl = 1;
		if($fl == 0) {
			$head = "���������� �������������";
			$str = "������� ������� � ��������";
		} else {
			$head = "���������� ��������";
			$str = "������� ����� �������";
		}
		echo <<< nnn
			<head>
				<title>$head</title>
			</head>
			<body>
				<h1 style='text-align: center;'>$head</h1>
				<form>
					<table style = 'background-color: #CCCC99; width: 300px; margin: auto; text-align: center'>
						<tr><td>$str</td></tr>
						<tr><td><input name='inform' size='10' type='text'></td></tr>
						<tr><td><input type='submit' name='submit' value='OK'></td</tr>
					</table>
				</form>
			</body>
nnn;
	?>
</html>