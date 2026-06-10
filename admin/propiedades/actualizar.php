<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManager as Image;
use Intervention\Image\Drivers\Gd\Driver;


require '../../includes/app.php';
estaAutenticado();

//valida la url por id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: /admin');
}

$propiedad = Propiedad::find($id);

$vendedores = Vendedor::all();
//arreglo con mensajes de errores
$errores = Propiedad::getErrores();

//ejecutar el codigo desdpues de que el usuario envia el fomulario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Asignar los atributos


    $args = $_POST['propiedad'];


    $propiedad->sincronizar($args);

    $errores = $propiedad->validar();
    //subida de archivos
    //generar un nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';
    
    if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $manager = new Image(Driver::class);
        $imagen = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

    //revisar que el arreglo de errrores este vacio

    if (empty($errores)) {

        //almacenar la imagen
       if ($_FILES['propiedad']['tmp_name']['imagen']) {
            $imagen->save(CARPETA_IMAGENES . $nombreImagen);
        }
        $propiedad->guardar();
    }
}


incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Actualizar propiedad</h1>

    <a href="/admin" class="boton boton-verde">
        Volver
    </a>


    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php'; ?>
        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
    </form>

</main>
<?php
incluirTemplate('footer');
?>