<?php

require '../../includes/app.php';

use App\Propiedad;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager as Image;

estaAutenticado();

$db = conectarDB();
$propiedad = new Propiedad;

//consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


//arreglo con mensajes de errores
$errores = Propiedad::getErrores();



//ejecutar el codigo desdpues de que el usuario envia el fomulario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $propiedad = new Propiedad($_POST['propiedad']);



    //generar un nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';

    if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $manager = new Image(Driver::class);
        $imagen = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

    $errores = $propiedad->validar();



    //revisar que el arreglo de errroes este vacio
    if (empty($errores)) {


        //subida de archivos

        if (!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }

        //guarda la imagen en el servidor
        $imagen->save(CARPETA_IMAGENES . $nombreImagen);

        $propiedad->guardar();
    }
}



incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">
        Volver
    </a>


    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php'; ?>
        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>

</main>
<?php
incluirTemplate('footer');
?>