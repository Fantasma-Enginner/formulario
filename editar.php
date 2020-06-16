<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>formulario</title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>


	<div class="main-wrapper">
		<h1>Editar Registros con Función PHP </h1>
		<br><br>
		<?php
		include("function.php");
		$id = $_GET['id'];
		select_id('tabla_demo', 'id', $id);
		?>
		<form action="" method="post">
			<input type="text" value="<?php echo $row->nombres; ?>" name="nombres">
			<input type="text" value="<?php echo $row->apellidos; ?>" name="apellidos">
			<input type="submit" name="submit">
		</form>

		<?php

		if (isset($_POST['submit'])) {
			$field = array("nombres" => $_POST['nombres'], "apellidos" => $_POST['apellidos']);
			$tbl = "tabla_demo";
			edit($tbl, $field, 'id', $id);
			header("location:index.php");
		}
		?>
	</div>
	
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>