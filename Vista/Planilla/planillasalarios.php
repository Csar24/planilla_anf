<!-- Planilla salarios -->
        <div class="text">Planilla  Salarial ACAPRODUSCA de R.L</div>
        <div class="btn-group"><button type="button" class="btn btn-primary">Generar Planilla</button></div>
        <div class="text">Planilla  Salarial Resumen</div>
        
<div class="row">
    <!-- Utiliza clases de Bootstrap para la tabla -->
    
    <div class="tabla table-responsive col-8" id="scrollable-table">
     <table class="table table-dark table-bordered" id="tabla1">
        <thead >
            <tr >
                <th >Codigo</th>
                <th>Nombre</th>
                <th>Salario</th>
                <th>Horas Extras Diurnas</th>
                <th>Total Horas Diurnas</th>
                <th>Horas Extras Nocturnas</th>
                <th>Total de Horas Nocturnas</th>
                <th>Feriado(+)</th>
                <th>Reintregro(+)</th>
                <th>Domigo(+)</th>
                <th>Vacaciones(+)</th>
                <th>Incapacidad(-)</th>
                <th>Permisos(-)</th>
                <th>Llegadas Tarde(-)</th>
                <th>Dias Descontados(-)</th>
                <th>Total Devengado</th>
                <!-- Total Devengado = la suma de todo lo anterior -->

                <th>Descuento AFP</th>
                <th>Descuento ISS</th>
                <th>Descuento RENTA</th>
                <th>Total Descuentos</th>
                <th>Total a Pagar</th>
                <!-- Total Descuentos = descuentos de todo lo anterior -->
            </tr>
        </thead>
        <tbody >

               <?php foreach ($empleados as $empleado) : ?>
                <tr class="table table-striped">
                    <td><?php echo $empleado['id']; ?></td>
                    <td><?php echo $empleado['primernombre'] . ' ' . $empleado['primerapellido']; ?></td>                    
                    <td><?php echo $empleado['sueldo']; ?></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    <td class="editable-cell" ></td>
                    
                </tr>
             <?php endforeach; ?>
           
        </tbody>
     </table>
     </div>
    
    
    
      <!-- Segundo contenedor con el 30% (4 de 12 columnas) -->
        
        <div class="tabla table-responsive tabla col-4" >
          <table class="table table-bordered" id="tabla2" >
            <thead>
              <tr>
                
                               
              </tr>
            </thead>
            <tbody class="table table-striped">
              
             
            </tbody>
          </table>
        </div>

        <h4 id="informacionEmpleado" style="padding-top: 1rem">Información del Empleado</h4>
      
    
</div>



    <!-- Añade el enlace al archivo de JavaScript de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Script funcionalidad de la tabla -->
   <Script src="../Vista/Planilla/jsplanillasalario.js">
   </Script> 

   <script>
    // Obtener la referencia de las tablas
    var tablaOrigen = document.getElementById('tabla1');
    var tablaDestino = document.getElementById('tabla2');

    // Agregar manualmente la primera fila (encabezado) a la tabla de destino
    var primeraFilaOrigen = tablaOrigen.querySelector('thead tr');
    var primeraFilaDestino = tablaDestino.createTHead().insertRow(0);

    // Obtener las columnas específicas que deseas copiar
    var columnasEspecificas = ["Nombre", "Total Devengado", "Total Descuentos", "Total a Pagar"];

    for (var j = 0; j < primeraFilaOrigen.cells.length; j++) {
        // Verificar si la columna actual está en la lista de columnas específicas
        if (columnasEspecificas.includes(primeraFilaOrigen.cells[j].textContent)) {
            // Crear una nueva celda en la fila de destino
            var nuevaCeldaDestino = primeraFilaDestino.insertCell(-1);

            // Copiar el contenido de la celda de origen a la celda de destino
            nuevaCeldaDestino.innerHTML = primeraFilaOrigen.cells[j].innerHTML;
        }
    }

    // Obtener todas las filas de la tabla de origen (excluyendo el encabezado)
    var filasOrigen = tablaOrigen.querySelectorAll('tbody tr');

    // Iterar a través de las filas de la tabla de origen
    for (var i = 0; i < filasOrigen.length; i++) {
        // Crear una nueva fila en la tabla de destino
        var nuevaFilaDestino = tablaDestino.insertRow(i + 1);

        // Obtener las celdas de la fila de origen
        var celdasOrigen = filasOrigen[i].getElementsByTagName('td');

        // Iterar a través de las celdas de la fila de origen
        for (var j = 0; j < celdasOrigen.length; j++) {
            // Verificar si la columna actual está en la lista de columnas específicas
            if (columnasEspecificas.includes(primeraFilaOrigen.cells[j].textContent)) {
                // Crear una nueva celda en la fila de destino
                var nuevaCeldaDestino = nuevaFilaDestino.insertCell(-1);

                // Copiar el contenido de la celda de origen a la celda de destino
                nuevaCeldaDestino.innerHTML = celdasOrigen[j].innerHTML;
            }
        }
    }
</script>

        
    <style>
        .tabla{
            max-height: 26rem; /* Altura máxima de la tabla */
            overflow-y: auto; /* Barra de desplazamiento vertical */
        }
         /* Estilo para la fila clonada del thead que se fija */
         .bold-text {
            font-weight: bold;
        }
        .color {
            backgroundColor:#1DB581;
        }  
         
         
    </style>

    
  <!-- Scrooll la tabla 1 -->
  <script>
    // Obtén la fila original del encabezado
    var theadOriginalRow = document.querySelector("table thead tr");
    // Crea una fila clonada con las celdas correspondientes
    var theadCloneRow = document.createElement("tr");
    Array.from(theadOriginalRow.children).forEach(function (originalCell) {
        var clonedCell = document.createElement("td");
        clonedCell.innerHTML = originalCell.innerHTML;
        theadCloneRow.appendChild(clonedCell);
    });
    // Agrega la clase "bold-text" a todas las celdas de la fila clonada
    Array.from(theadCloneRow.children).forEach(function (clonedCell) {
        clonedCell.classList.add("bold-text");
        
        
    });
    // Crea una fila de encabezado clonada y ocúltala inicialmente
    var theadClone = document.createElement("thead");
    theadClone.appendChild(theadCloneRow);
    theadClone.classList.add("sticky-thead");
    theadClone.style.display = "none";

    // Agrega la fila de encabezado clonada a la tabla
    var table = document.querySelector("table");
    table.insertBefore(theadClone, table.firstChild);

    // Escuchar el evento scroll del contenedor
    var container = document.querySelector(".tabla");
    container.addEventListener("scroll", function() {
        if (container.scrollTop > 0) {
            theadClone.style.position = "sticky";
            theadClone.style.top = "0";
            theadClone.style.backgroundColor = "#fff";
            theadClone.style.display = "table-header-group"; // Mostrar la fila cuando se inicia el scroll
        } else {
            theadClone.style.position = "static";
            theadClone.style.display = "none"; // Ocultar la fila cuando el scroll se encuentra en la parte superior
        }
    });
</script>



<!-- Scroll Script tabla 2 -->
<script>
    // Obtén la fila original del encabezado del segundo contenedor
    var secondContainerTheadOriginalRow = document.querySelector(".tabla.col-4 table thead tr");

    // Crea una fila clonada con las celdas correspondientes
    var secondContainerTheadCloneRow = document.createElement("tr");
    Array.from(secondContainerTheadOriginalRow.children).forEach(function (originalCell) {
        var clonedCell = document.createElement("td");
        clonedCell.innerHTML = originalCell.innerHTML;
        secondContainerTheadCloneRow.appendChild(clonedCell);
    });

    // Agrega la clase "bold-text" a todas las celdas de la fila clonada
    Array.from(secondContainerTheadCloneRow.children).forEach(function (clonedCell) {
        clonedCell.classList.add("bold-text");
        clonedCell.classList.add("bold-text");
    });

    // Crea una fila de encabezado clonada y ocúltala inicialmente
    var secondContainerTheadClone = document.createElement("thead");
    secondContainerTheadClone.appendChild(secondContainerTheadCloneRow);
    secondContainerTheadClone.classList.add("sticky-thead");
    secondContainerTheadClone.style.display = "none";

    // Agrega la fila de encabezado clonada a la tabla en el segundo contenedor
    var secondContainerTable = document.querySelector(".tabla.col-4 table");
    secondContainerTable.insertBefore(secondContainerTheadClone, secondContainerTable.firstChild);

    // Escuchar el evento scroll del segundo contenedor
    var secondContainer = document.querySelector(".tabla.col-4");
    secondContainer.addEventListener("scroll", function() {
        if (secondContainer.scrollTop > 0) {
            secondContainerTheadClone.style.position = "sticky";
            secondContainerTheadClone.style.top = "0";
            secondContainerTheadClone.style.backgroundColor = "#fff";
            secondContainerTheadClone.style.display = "table-header-group"; // Mostrar la fila cuando se inicia el scroll
        } else {
            secondContainerTheadClone.style.position = "static";
            secondContainerTheadClone.style.display = "none"; // Ocultar la fila cuando el scroll se encuentra en la parte superior
        }
    });
</script>



