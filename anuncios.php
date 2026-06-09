<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<section class="seccion contenedor">
    <h1>Casas y depas en venta</h1>

    <?php
    $limite = 10;
    include 'includes/templates/anuncios.php';
    ?>

</section>
<?php
incluirTemplate('footer');
?>