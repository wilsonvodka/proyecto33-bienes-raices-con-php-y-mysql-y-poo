<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro blog</h1>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">

            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito por <span>20/10/21</span>por: <span>Admin</span></p>
                <p>
                    consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                    ahorrando dinero
                </p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">

            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guia para la decoracion de tu hogar</h4>
                <p>Escrito por <span>20/10/21</span>por: <span>Admin</span></p>
                <p>
                    maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darles
                    vida a tu espacio
                </p>
            </a>
        </div>
    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="texto entrada blog">

            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito por <span>20/10/21</span>por: <span>Admin</span></p>
                <p>
                    consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                    ahorrando dinero
                </p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="texto entrada blog">

            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guia para la decoracion de tu hogar</h4>
                <p>Escrito por <span>20/10/21</span>por: <span>Admin</span></p>
                <p>
                    maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darles
                    vida a tu espacio
                </p>
            </a>
        </div>
    </article>

</main>
<?php
incluirTemplate('footer');
?>