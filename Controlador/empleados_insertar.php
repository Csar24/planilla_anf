<?php
require "../Modelo/conexion.php";
require "../Modelo/M_empleados.php"; // Incluye el modelo

$modelo = new EmpleadosModelo($conn);// Crea una instancia del modelo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos = [
        'primernombre' => $_POST['txtprimerNombre'],
        'segundonombre' => $_POST['txtsegundoNombre'],
        'primerapellido' => $_POST['txtprimerApellido'],
        'segundoapellido' => $_POST['txtsegundoApellido'],
        'dui' => $_POST['txtDUI'],
        'sexo' => $_POST['sexo'],
        'fechanacimiento' => $_POST['txtFechaNacimiento'],
        'fechaingreso' => $_POST['txtFechaIngreso'],
        'cargo' => $_POST['txtCargo'],
        'sueldo' => $_POST['txtSueldo'],
        'seguromedico' => $_POST['seguro'],
        'pension' => $_POST['pension'],
        'numeroafiliado' => $_POST['txtNumeroAfiliado']
    ];

    $resultado = $modelo->insertarEmpleado($datos);

    if ($resultado) {
        session_start();
        $_SESSION['exito_registro'] = true;
        header("Location: ../Vista/home.php?exito=1");
        
    } else {
        // La inserción falló, maneja el error adecuadamente.
    }
}
?>
