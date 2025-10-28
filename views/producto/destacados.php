<h1>Productos Destacados</h1>
<?php if(isset($productos) && $productos && $productos->num_rows > 0): ?>
    <ul>
    <?php while($prod = $productos->fetch_assoc()): ?>
        <li>
            Nombre: <?php echo $prod['nombre_producto']; ?> -
            Precio: <?php echo $prod['precio']; ?> -
            Stock: <?php echo $prod['stock']; ?>
        </li>
    <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>No hay productos para mostrar.</p>
<?php endif; ?>