<!-- Planilla salarios -->
        <div class="text">Planilla  Salarial ACAPRODUSCA de R.L</div>
        <div class="btn-group"><button type="button" class="btn btn-primary">Generar Planilla</button></div>
        <div class="text">Planilla  Salarial Resumen</div>
        
<div class="row">
    <!-- Utiliza clases de Bootstrap para la tabla -->
    
    <div class="tabla table-responsive col-8" id="scrollable-table">
     <table class="table table-dark table-bordered">
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
                <!-- Total Descuentos = descuentos de todo lo anterior -->
            </tr>
        </thead>
        <tbody class="table table-striped">

               <?php foreach ($empleados as $empleado) : ?>
                <tr>
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
                    
                </tr>
             <?php endforeach; ?>
           
        </tbody>
     </table>
     </div>
    
    
    
      <!-- Segundo contenedor con el 30% (4 de 12 columnas) -->
        
        <div class="tabla table-responsive tabla col-4" >
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Total Devengado</th>
                <th>Total Descuento</th>                            
                <th>Total Apagar</th>
                               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>   
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Cesar Gonzalez</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              
              
             
            </tbody>
          </table>
        </div>
      
    
</div>

    <!-- Añade el enlace al archivo de JavaScript de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Script funcionalidad de la tabla -->
   <Script src="../Vista/Planilla/jsplanillasalario.js"></Script> 


        
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

    
  <!-- Scroole la tabla 1 -->
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

<!-- Script tabla 2 -->
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



