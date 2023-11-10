// Funciones adicionales 
// Función para calcular y mostrar el Total Devengado
function calcularTotalDevengado(row) {
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

    const totalDevengado = totalHorasDiurnas + totalHorasNocturnas + feriado + reintegro + domingo + vacaciones - incapacidad - permisos - llegadasTarde - diasDescontados;

    row.querySelector('td:nth-child(16)').innerText = totalDevengado.toFixed(2);
}

// Función para calcular y mostrar el Total Devengado
function calcularTotalDescuentos(row) {
    const totalHorasDiurnas = parseFloat(row.querySelector('td:nth-child(17)').innerText) || 0;
    const totalHorasNocturnas = parseFloat(row.querySelector('td:nth-child(18)').innerText) || 0;
    const feriado = parseFloat(row.querySelector('td:nth-child(19)').innerText) || 0;
    

    const totalDescuentos = totalHorasDiurnas + totalHorasNocturnas + feriado;

    row.querySelector('td:nth-child(20)').innerText = totalDescuentos.toFixed(2);
}



// Escuchar clics en el contenedor principal
document.addEventListener('click', function (event) {
    const clickedElement = event.target;
        const filas = document.querySelectorAll('#scrollable-table tbody tr');
        filas.forEach(fila => calcularTotalDevengado(fila));
        filas.forEach(fila => calcularTotalDescuentos(fila));

    if (clickedElement.classList.contains('editable-cell')) {
        const cells = document.querySelectorAll('.editable-cell');

        cells.forEach(cell => cell.classList.remove('editing'));

        clickedElement.classList.add('editing');

        const input = document.createElement('input');
        input.value = clickedElement.innerText;

        input.addEventListener('blur', () => {
            const newValue = parseFloat(input.value) || 0;

            // Identificar la fila y la posición de la celda
            const row = clickedElement.closest('tr');
            const rowIndex = row.rowIndex;
            const columnIndex = clickedElement.cellIndex;

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
                
                        

            // Mostrar el valor introducido en la celda original y quitar la clase de edición
            clickedElement.innerText = newValue;
            clickedElement.classList.remove('editing');
        });

        clickedElement.innerHTML = '';
        clickedElement.appendChild(input);
        input.focus();
    }
});
