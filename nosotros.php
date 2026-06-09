<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h2>Conoce sobre nosotros</h2>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, totam nobis dolorem incidunt
                qui pariatur. Autem labore accusantium excepturi at dolorum corporis earum porro reiciendis veniam
                explicabo soluta mollitia, provident in ad assumenda ipsum fugiat nihil ratione sit nostrum. Debitis
                similique accusamus delectus facere voluptas veritatis odit, praesentium suscipit animi, perferendis
                perspiciapora id aut odit maxime saepe quae deleniti molestias quisquam a dolorem nam itaque, et
                error iusto assumenda minus rem consectetur cum. Quisquam?
            </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga blanditiis ea explicabo voluptate a
                quas asperiorem, accusamus qui libero! Voluptatem dolores rerum quaerat ipsa tempore
                aperiam dignissimos deserunt eaque deleniti impedit iste magni suscipit reiciendis, repellendus
                maiores quidem nulla vitae quia odit quis non? Assumenda deserunt ipsa possimus quod sint blanditiis
                alias odio aspernatur rerum vero. Sequi.

            </p>
        </div>
    </div>

</main>

<section class="contenedor seccion">
    <h2>Más sobre nosotros</h2>
    <div class="iconos-nosotros">
        <div class="icono">
            <img loading="lazy" src="build/img/icono1.svg" alt="icono seguridad">
            <h3>Seguridad</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est autem a facere, sequi nemo fugiat atque
                quidem incidunt saepe tempora distinctio voluptatum. Iure mollitia quidem voluptatibus odit. Autem,
                deleniti incidunt.</p>
        </div>
        <div class="icono">
            <img loading="lazy" src="build/img/icono2.svg" alt="icono precio">
            <h3>Precio</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est autem a facere, sequi nemo fugiat atque
                quidem incidunt saepe tempora distinctio voluptatum. Iure mollitia quidem voluptatibus odit. Autem,
                deleniti incidunt.</p>
        </div>
        <div class="icono">
            <img loading="lazy" src="build/img/icono3.svg" alt="icono a timepo">
            <h3>A tiempo</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est autem a facere, sequi nemo fugiat atque
                quidem incidunt saepe tempora distinctio voluptatum. Iure mollitia quidem voluptatibus odit. Autem,
                deleniti incidunt.</p>
        </div>
    </div>

</section>
<?php
incluirTemplate('footer');
?>