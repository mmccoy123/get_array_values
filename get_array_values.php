<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Get Array Values</title>
</head>
<body>
	<?php

		function print_lists($A) {

			echo "<ul>";

			foreach ($A as $key => $value) {
				echo "<li>$value</li>";
			}
			echo "</ul>";
		}

		$list_array = [2,3,'hello'];

		print_lists($list_array);

	?>
</body>
</html>