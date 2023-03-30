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
<div class="form-container">
        <h2>Formulario Categoría de Productos</h2>
        <form action="insert1.php" method="post">
            <div class="form-group">
                <label for="ID">ID:</label>
                <input type="text" id="ID" name="ID" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>