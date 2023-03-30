<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    <nav>
        <ul>
            <li><a href="categorias.php">Categorias</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="listado.php">Listado de Productos</a></li>
        </ul>
    </nav>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("http://64.225.108.100/phpmyadmin", "admin", "2bc0a26359014cd59f85b9b847b0e00d76bf589d023fd224", "practica6");
		
		// Revisando conexión
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Tamando datos del formulario
		$ID = $_REQUEST['ID'];
		$descripcion = $_REQUEST['descripcion'];
        $precio_de_venta = $_REQUEST['precio_de_venta'];
		$precio_de_compra = $_REQUEST['precio_de_compra'];
        $ID_categoria_producto = $_REQUEST['ID_categoria_producto'];

		// Insetando valores en la BD
		$sql = "INSERT INTO productos VALUES ('$ID',
			'$descripcion','$precio_de_venta','$precio_de_compra','$ID_categoria_producto')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Datos almacenados correctamente."
				. " Revisar MySQL para cotejar el registro"
				. " y actualizar de ser necesario</h3>";
            //nl2br — Inserta saltos de línea HTML antes de todas las nuevas líneas de un string
			echo nl2br("\n$ID\n $descripcion\n $precio_de_venta\n $precio_de_compra\n $ID_categoria_producto");
		} else{
			echo "ERROR!  $sql. "
				. mysqli_error($conn);
		}
		
		// Cerrando conexión
		mysqli_close($conn);
		?>
	</center>
</body>

</html>