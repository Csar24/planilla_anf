// Funciones adicionales 
// Función para calcular y mostrar el Total Devengado
function calcularTotalDevengado(row) {
    const salario = parseFloat(row.querySelector('td:nth-child(3)').innerText) || 0;
    const totalHorasDiurnas = parseFloat(row.querySelector('td:nth-child(5)').innerText) || 0;
    const totalHorasNocturnas = parseFloat(row.querySelector('td:nth-child(7)').innerText) || 0;
    const feriado = parseFloat(row.querySelector('td:nth-child(8)').innerText) || 0;
    const reintegro = parseFloat(row.querySelector('td:nth-child(9)').innerText) || 0;
    const domingo = parseFloat(row.querySelector('td:nth-child(10)').innerText) || 0;
    const vacaciones = parseFloat(row.querySelector('td:nth-child(11)').innerText) || 0;
    const incapacidad = parseFloat(row.querySelector('td:nth-child(12)').innerText) || 0;
    const permisos = parseFloat(row.querySelector('td:nth-child(13)').innerText) || 0;
    const llegadasTarde = parseFloat(row.querySelector('td:nth-child(14)').innerText) || 0;
    const diasDescontados = parseFloat(row.querySelector('td:nth-child(15)').innerText) || 0;

    const totalDevengado = salario+totalHorasDiurnas + totalHorasNocturnas + feriado + reintegro + domingo + vacaciones - incapacidad - permisos - llegadasTarde - diasDescontados;

    row.querySelector('td:nth-child(16)').innerText = totalDevengado.toFixed(2);
}

function mostrarInformacionEmpleado(fila) {
    // Obtener los valores de las celdas específicas de la fila
    
    var nombre = fila.cells[1].textContent;
    var salario = fila.cells[2].textContent;
    var totalDevengado = fila.cells[15].textContent;
    var totalDescuentos = fila.cells[19].textContent;
    var totalPagar = fila.cells[20].textContent;

    // Asignar los valores al elemento h2
    var informacionEmpleado = document.getElementById("informacionEmpleado");
    informacionEmpleado.innerHTML = 
                                    nombre  +
                                   ", Salario: $ " + salario +
                                   ", Total Devengado:$ " + totalDevengado  +
                                   ", Total Descuentos:$ " + totalDescuentos +"<br>" +
                                   "Total a Pagar:$ " + totalPagar;
}

//Funcion de Scrooll actualizar scrooll
function scrollTable1() {
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
}

// Función para copiar datos de tabla1 a tabla2
function actualizarTablaDestino() {
    // Obtener la referencia de las tablas
    var tablaOrigen = document.getElementById('tabla1');
    var tablaDestino = document.getElementById('tabla2');

    // Limpiar la tabla de destino
    tablaDestino.innerHTML = "";
    
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
    scrollTable1();
}


// Función para calcular y mostrar el Total Devengado
function calcularTotalDescuentos(row) {
    const totalHorasDiurnas = parseFloat(row.querySelector('td:nth-child(17)').innerText) || 0;
    const totalHorasNocturnas = parseFloat(row.querySelector('td:nth-child(18)').innerText) || 0;
    const feriado = parseFloat(row.querySelector('td:nth-child(19)').innerText) || 0;
    

    const totalDescuentos = totalHorasDiurnas + totalHorasNocturnas + feriado;

    row.querySelector('td:nth-child(20)').innerText = totalDescuentos.toFixed(2);
}

function calcularTotal(row) {
    
    const totalDevengado = parseFloat(row.querySelector('td:nth-child(16)').innerText) || 0;
    const totalDescuento = parseFloat(row.querySelector('td:nth-child(20)').innerText) || 0;
    

    const totalDescuentos = totalDevengado + totalDescuento ;

    row.querySelector('td:nth-child(21)').innerText = totalDescuentos.toFixed(2);
}





// Escuchar clics en el contenedor principal
document.addEventListener('click', function (event) {
    const clickedElement = event.target;
        const filas = document.querySelectorAll('#scrollable-table tbody tr');
        filas.forEach(fila => calcularTotalDevengado(fila));
        filas.forEach(fila => calcularTotalDescuentos(fila));
        filas.forEach(fila => calcularTotal(fila));
        actualizarTablaDestino();
        const row = clickedElement.closest('tr');
        const rowIndex = row.rowIndex;
        const columnIndex = clickedElement.cellIndex;
        mostrarInformacionEmpleado(row) 

    if (clickedElement.classList.contains('editable-cell')) {
        const cells = document.querySelectorAll('.editable-cell');

        cells.forEach(cell => cell.classList.remove('editing'));

        clickedElement.classList.add('editing');

        const input = document.createElement('input');
        input.value = clickedElement.innerText;

        input.addEventListener('blur', () => {
            const newValue = parseFloat(input.value) || 0;

            // Identificar la fila y la posición de la celda
           

            // Calcular y actualizar según la columna
            if (columnIndex === 3) {
                const salario = parseFloat(row.querySelector('td:nth-child(3)').innerText) || 0;
                const totalHorasDiurnas = newValue * salario;
                row.querySelector('td:nth-child(5)').innerText = totalHorasDiurnas.toFixed(2);
            } else if (columnIndex === 5) {
                const salario = parseFloat(row.querySelector('td:nth-child(3)').innerText) || 0;
                const totalHorasNocturnas = newValue * salario;
                row.querySelector('td:nth-child(7)').innerText = totalHorasNocturnas.toFixed(2);
            }
            
            //Total devengado 
            calcularTotalDevengado(row);
            //Total descuentos
            calcularTotalDescuentos(row);
            mostrarInformacionEmpleado(row)
            calcularTotal(row) 


                
                        

            // Mostrar el valor introducido en la celda original y quitar la clase de edición
            clickedElement.innerText = newValue;
            clickedElement.classList.remove('editing');
        });

        clickedElement.innerHTML = '';
        clickedElement.appendChild(input);
        input.focus();
    }
});
