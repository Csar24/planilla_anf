<?php

       
    class EmpleadosModelo {
        private $db;

       public function __construct($conn) {
        $this->db = $conn;
       }
           
       public function insertarEmpleado($datos) {
        $query = "INSERT INTO empleados (primernombre,segundonombre,primerapellido, segundoapellido, dui, sexo, fechanacimiento, fechaingreso, cargo, sueldo, seguromedico, pension, numeroafiliado) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($query);
        
        // Aquí utilizamos bind_param para vincular los valores a los marcadores de posición
        $stmt->bind_param("sssssssssssss", $datos['primernombre'], $datos['segundonombre'], $datos['primerapellido'], $datos['segundoapellido'], $datos['dui'], $datos['sexo'], $datos['fechanacimiento'], $datos['fechaingreso'], $datos['cargo'], $datos['sueldo'], $datos['seguromedico'], $datos['pension'], $datos['numeroafiliado']);
        
        if ($stmt->execute()) {
            return true; // La inserción fue exitosa
        } else {
            return false; // La inserción falló
        }
    }
}

    ?>