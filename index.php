<!DOCTYPE html>
<html>
<head>
	<title>Таблица истинности PHP</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>A</th>
				<th>B</th>
				<th>!A</th>
				<th>A || B</th>
				<th>A && B</th>
				<th>A xor B</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($a = 0; $a <= 1; $a++) {
					for ($b = 0; $b <= 1; $b++) {
						$not_a = !$a;
						$or = $a || $b;
						$and = $a && $b;
						$xor = $a xor $b;

						echo "<tr>";
						echo "<td>$a</td>";
						echo "<td>$b</td>";
						echo "<td>" . var_export($not_a, true) . "</td>";
						echo "<td>" . var_export($or, true) . "</td>";
						echo "<td>" . var_export($and, true) . "</td>";
						echo "<td>" . var_export($xor, true) . "</td>";
						echo "</tr>";
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>
