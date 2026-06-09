<?php
require 'includes/app.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">

    </picture>

    <h2>llene el formulario de contacto</h2>
    <form class="formulario">
        <fieldset>
            <legend>informacion personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Tu nombre">

            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Tu email">

            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" placeholder="Tu telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o compra:</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o presupuesto:</label>
            <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
        </fieldset>
        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">Email</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-email">

            </div>
            <p>Si eligio telefono, elija la fecha y la hora </p>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>

</main>
<?php
incluirTemplate('footer');
?>