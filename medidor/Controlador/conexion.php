<?php
		$mysqli = new MySQLi("localhost","root","","medidor");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno()
				. ") " . $mysqli -> mysqli_connect_error());
		}
?>