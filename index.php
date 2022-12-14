<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Controlador/Controlador.php';
        require_once 'Modelo/GestorCita.php';
        require_once 'Modelo/Cita.php';
        require_once 'Modelo/Paciente.php';
        require_once 'Modelo/Conexion.php';

        $controlador = new Controlador();

        if (isset($_GET["accion"])) {
            if ($_GET["accion"] == "asignar") {
                $controlador->verPagina('Vista/html/asignar.php');
            }
            if ($_GET["accion"] == "consultar") {
                $controlador->verPagina('Vista/html/consultar.php');
            }
            if ($_GET["accion"] == "cancelar") {
                $controlador->verPagina('Vista/html/cancelar.php');
                
            } elseif ($_GET["accion"] == "guardarCita") {
                $controlador->agregarCita($_POST["asignarDocumento"], $_POST["medico"], $_POST["fecha"], $_POST["hora"], $_POST["consultorio"]);
            }
        } else {
            $controlador->verPagina('Vista/html/inicio.php');
        }
        ?>
    </body>
</html>
