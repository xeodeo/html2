<h1>Categorías</h1>

<?php if (isset($categorias) && $categorias && $categorias->num_rows > 0): ?>
    <ul>
    <?php while($cat = $categorias->fetch_assoc()): ?>
        <li>Nombre: <?php echo $cat['nombre_categoria']; ?></li>
    <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>No hay categorías para mostrar.</p>
<?php endif; ?>
