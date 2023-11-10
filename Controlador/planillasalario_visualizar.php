<?php
require "../Modelo/conexion.php";
require "../Modelo/M_planilla.php"; // Incluye el modelo

class EmpleadosController {
    public function mostrarEmpleados() {
        $conn = obtenerConexion(); // Obtén la conexión desde el archivo de conexión
        $modelo = new EmpleadosModelo($conn); // Pasa la conexión al constructor

        $empleados = $modelo->obtenerEmpleados();

        // Llamar a la vista para mostrar los empleados
        require '../Vista/Planilla/planillasalarios.php'; // Cargar la vista y pasar los datos
    }
}

$controlador = new EmpleadosController();
$controlador->mostrarEmpleados(); // Mostrar los empleados
?>