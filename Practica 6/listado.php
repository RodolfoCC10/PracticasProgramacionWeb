<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

	<div class="container">
		<h1>Tabla de Productos</h1>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripción</th>
					<th>Precio de Venta</th>
					<th>Precio de Compra</th>
					<th>ID Categoría Producto</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Conexión a la base de datos
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "practica6";

				$conn = new mysqli("localhost", "root", "", "practica6");

				// Verificar la conexión
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				// Consulta a la base de datos
				$sql = "SELECT * FROM productos";
				$result = $conn->query($sql);

				// Imprimir los resultados en la tabla
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>";
				        echo "<td>" . $row["ID"] . "</td>";
				        echo "<td>" . $row["descripcion"] . "</td>";
				        echo "<td>" . $row["precio_de_venta"] . "</td>";
				        echo "<td>" . $row["precio_de_compra"] . "</td>";
				        echo "<td>" . $row["ID_categoria_producto"] . "</td>";
				        echo "</tr>";
				    }
				} else {
				    echo "0 resultados";
				}

				// Cerrar la conexión a la base de datos
				$conn->close();
				?>
			</tbody>
		</table>
	</div>

</body>
</html>