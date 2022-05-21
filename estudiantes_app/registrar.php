<?php

require_once dirname(__DIR__) . '/estudiantes_app/db/conexion_db.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/i_controller.php';

require_once dirname(__DIR__) . '/estudiantes_app/models/estudiantes.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/estudiantes_controller.php';

use controllers\EstudianteController;
use models\Estudiante;

$estudianteController = new EstudianteController();

$estudiante = new Estudiante();
$estudiante->set('codigo',$_POST['codigoInput']);
$estudiante->set('nombres',$_POST['nombresInput']);
$estudiante->set('apellidos',$_POST['apellidosInput']);
$estudiante->set('edad',$_POST['edadInput']);
$estudiante->set('materia',$_POST['materiaInput']);

$resultado = $estudianteController -> create($estudiante);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h1>Resultados de la operación</h1>
        <?php
            if($resultado){
                echo '<p>Registro exitoso</p>';
                echo '<br>';
                echo '<a href="index.php">Volver a la lista</a>';
            } else {
                echo '<p>Se presenta un error al guardar los datos.Vuelve a intentar.</p>';
                echo '<br>';
                echo '<a href="from_estudiante.php">Volver</a>';
            }
            ?>
    </body>
</html>
