<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion texto-centrado">
    <h2>Guia para la decoracion de tu hogar</h2>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>
    <p class="informacion-meta ">Escrito el: <span>20/10/2021</span>por: <span>Admin</span></p>

    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni tempora expedita quae qui id
            debitis odit quidem in voluptatum ipsam natus ipsum, voluptas temporibus! Voluptate quia dolorum
            perferendis earum quaerat? Eveniet illo ab fugit doloremque id distinctio ipsa hic ratione vel eos odit
            saepe quo quis quam eum ipsam et aperiam, cumque accusantium perferendis deleniti. Aut nam consequuntur
            nobis.</p>
    </div>

</main>
<?php
incluirTemplate('footer');
?>