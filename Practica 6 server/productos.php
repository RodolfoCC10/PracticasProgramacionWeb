<body>
    <nav>
        <ul>
            <li><a href="categorias.php">Categorias</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="listado.php">Listado de Productos</a></li>
        </ul>
    </nav>
</body>
<link rel="stylesheet" href="style.css">

<h2>Gestión de Productos</h2>
    
    <form action="insert2.php" method="post">
        <label for="ID">ID:</label>
        <input type="text" id="ID" name="ID" required>
        
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required><br>
        
        <label for="precio_de_venta">Precio de Venta:</label>
        <input type="number" step="0.01" name="precio_de_venta" id="precio_de_venta" required><br>
        
        <label for="precio_de_compra">Precio de Compra:</label>
        <input type="number" step="0.01" name="precio_de_compra" id="precio_de_compra" required><br>
        
        <label for="ID_categoria_producto">Categoría:</label>
        <select name="ID_categoria_producto" id="ID_categoria_producto">
            <?php
                // Obtener categorías desde la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "practica6");
                $query = "SELECT id, descripcion FROM categoria";
                $result = mysqli_query($conexion, $query);
                
                // Mostrar opciones del select
                while ($fila = mysqli_fetch_assoc($result)) {
                    echo "<option value=\"" . $fila['ID'] . "\">" . $fila['descripcion'] . "</option>";
                }
                
                // Cerrar conexión
                mysqli_close($conexion);
            ?>
        </select><br>
        
        <input type="submit" value="Guardar">
    </form>