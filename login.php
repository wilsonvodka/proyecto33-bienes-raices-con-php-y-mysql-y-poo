<?php

//incluye el header
require 'includes/app.php';
$db = conectarDB();

$errores = [];

//autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$email){
        $errores[] = "El email es obligatoio o no es valido";
    }
    if(!$password){
        $errores[] = "El password es obligatorio";
    }
    if(empty($errores)){
        //revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '{$email}' ;";
        $resultado = mysqli_query($db, $query);
        if($resultado->num_rows){
            //revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            //verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['password']);
            if($auth){
                //el usuario esta autenticado
                session_start();
                //llenar el arreglo de la sesión
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header('Location: /admin');

            }else{
                $errores['El password es incorrecto'];
            }
        }else{
            $errores[] = "El usuario no existe";
        }
    }
  
}


incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesión</h1>
    <?php foreach($errores as $error):?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ; ?>

    <form method="POST" class="formulario" novalidate>
        <fieldset>
            <legend>Email y password</legend>


            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Tu email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Tu password">
        </fieldset>
        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>

</main>
<?php
incluirTemplate('footer');
?>