<?php foreach($productos as $prod): ?>
    <li>
        Número: <?php echo $prod['numero']; ?> -
        Nombre: <?php echo $prod['nombre']; ?> -
        Precio: <?php echo $prod['precio']; ?>
    </li>
<?php endforeach; ?>