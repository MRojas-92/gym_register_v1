<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrarse</title>
    <link rel="stylesheet" href="css/styles_login.css?v=<?php echo time(); ?>" media="all">
</head>
<body>

    <?php
      require 'header.php'
    ?>

   <div  class="contacto">
         <form class="formulario" action="#" method="post">
            <legend>Crear Cuenta</legend>

    <div class="contenedor-campos">
            <div class="campo">
             <label>Nombre</label>
             <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="campo">
                <label>Nombre de Usuario</label>
                <input type="txt" name="nombre_usuario" placeholder="User_name" required="required">
            </div>
            <div class="campo">
                <label>Edad</label>
                <input type="number" name="edad" placeholder="Edad" required="required">
            </div>
            <div class="campo">
                <label>Sexo</label>
                <input type="txt" name="sexo" placeholder="Hombre o Mujer" required pattern="[Hh]|[Mm]" required="required">
            </div>
            <div class="campo w-100">
                 <label>Correo</label>
                 <input type="mail" name="correo_electronico" placeholder="Mail">
            </div>
            <div class="campo w-100" minlength="7" required="required">
                 <label>Contraseña</label>
                 <input type="password" placeholder="Contraseña" name="contraseña">
            </div>
            <div class="campo w-100">
                 <label>Confirmar</label>
                 <input type="password" name="confirmar" placeholder="Repetir Contraseña" minlength="7" required="required">
            </div>
    </div><!--.contenedor-campos-->
                <div class="cancelar">
                    <a href="login.php" class="boton">Cancelar</a>
                </div>
                <div class="enviar">
                    <input class="boton" type="submit" value="Enviar" name="enviar">
                </div>
            </form>
        </div>
    </div>
<br><br>

    <?php 
    if(isset($_POST['enviar'])){
        $oMysql = new mysqli("localhost", "root", "", "gym");
        $Query= "INSERT INTO usuario VALUES ('" ."','".$_POST["nombre_usuario"]."','".$_POST["correo_electronico"]."','".$_POST["sexo"]."','".$_POST["contraseña"]."','".$_POST["edad"]."','".$_POST["nombre"]."')";             
                //$oMysql->query    seria como Objeto.metodo
        $Result = $oMysql->query( $Query );  // se lanza la consulta

        if($Result!=null){
        echo "<div class='contacto'>";
        echo "<h1>Se registro correctamente su cuenta</h1>";
        echo "</div>";
        }

        else
        echo "<script type='text/javascript'>alert('No se lleno correctamente el formulario')</script>";
    }
    ?>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <h4 class="copyright">Equipo 9 - Derechos Reservados 2021 &copy;</h4>
        </div>
    </footer>

</body>
</html>
 