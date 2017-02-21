<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 01 - PHP</title>
	</head>
	<body>
		<h1>PHP - Atividade 01</h1>
		<p>Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes calculos:</p>
		<?php
			$a=10;
			$b=20;
		?>
			
			<table border=1>
				<tr>
					<th>Operação</th> 
					<th>Resultado</th>
				</tr>
				<tr>
					<td>A+B</td>
					<td><?php echo $a + $b; ?></td>
				</tr>
				<tr>
					<td>A-B</td>
					<td><?php echo $a - $b; ?></td>
				</tr>
				<tr>
					<td>A*B</td>
					<td><?php echo $a * $b; ?></td>
				</tr>
				<tr>
					<td>A/B</td>
					<td><?php echo $a / $b; ?></td>
				</tr>	
				<tr>
					<td>B^A</td> 
					<td><?php echo $english_format_number = number_format(pow($b,$a)); ?></td>
				</tr>			
			</table>	
</html>