 <!-- Empleados -->
        <div class="text">Empleados Planilla ACAPRODUSCA de R.L</div>
        <div class="btn-group"> 
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Ingresar Nuevo Empleado
          </button>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>DUI</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Ingreso</th>
                <th>Cargo</th>
                <th>Sueldo</th>
                <th>Seguro Medico</th>
                <th>Pension</th>
                <th>Numero de Afiliado</th>
                
              </tr>
            </thead>
            <tbody>
              <!-- Add table rows here -->
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tbody>
          </table>
        </div>
  <!-- End -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Empleados</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <form id="formEmpleados" action="../Controlador/empleados_controlador.php" method="post">
            <div class="row">
               <div style="overflow: auto;height: 500px">
                  <input type="hidden" id="txtIdProfesor" name="txtIdProfesor" class="form-control form-control-lg"/>
                  <!-- nombres -->
                  <div class="row">
                    
                  <p  class="text-success" style="font-size: 20px">Nombre:</p>
                     <div class="col-md-6">
                       <div class="form-outline mb-2">
                        <input type="text" id="txtNombre"  placeholder="Primer Nombre" name="txtprimerNombre" class="form-control form-control-lg" style="font-size: 15px;width: 100%; " required/>
                        <label class="form-label" for="txtNombre" style="width: 100%"></label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-outline mb-2"> 
                        <input type="text" id="txtNombre"  placeholder="Segundo Nombre" name="txtsegundoNombre" class="form-control form-control-lg" style="font-size: 15px;width: 100%" required/>
                        <label class="form-label" for="txtNombre" style="width: 100%"></label>
                       </div>
                     </div>
                  </div> 
                  <!-- apellidos -->
                  <div class="row">
                  <p class="text-success" style="font-size: 20px">Apellidos:</p>
                     <div class="col-md-6">
                       <div class="form-outline mb-2">
                        <input type="text" id="txtNombre"  placeholder="Primer Apellido" name="txtprimerApellido" class="form-control form-control-lg" style="font-size: 15px;width: 100%" required/>
                        <label class="form-label" for="txtNombre" style="width: 100%"></label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-outline mb-2"> 
                        <input type="text" id="txtNombre"  placeholder="Segundo Apellido" name="txtsegundoApellido" class="form-control form-control-lg" style="font-size: 15px;width: 100%" required/>
                        <label class="form-label" for="txtNombre" style="width: 100%"></label>
                       </div>
                     </div>
                  </div>
                  <!-- Dui -->
                  <div class="form-outline mb-2">
                      <p class="text-success" style="font-size: 20px">DUI</p>
                      <input type="number" id="txtDUI" placeholder="DUI del Empleado" name="txtDUI" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtDUI" style="width: 100%"></label>
                  </div>
                  <!-- Sexo -->
                  <div class="form-outline mb-2">
                      <p class="text-success" style="font-size: 20px">Sexo</p>
                      <!-- <label for="sexo" class="form-label" style="font-size: 20px">Sexo:</label> -->
                      <select class="form-select form-control form-control-lg"  style="font-size:15px; width: 100%" id="sexo" name="sexo">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="no_especificar">No especificar</option> 
                      </select>
                      <!-- <input type="text" id="txtTelefono" placeholder="Ingrese el telefono del Profesor" name="txtTelefono" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtTelefono" style="width: 100%"></label> -->
                  </div>
                  <!-- Fecha Nacimiento -->
                  <div  class="form-outline mb-2">
                      <p class="text-success" style="font-size: 20px">Fecha de Nacimiento</p>
                      <input type="date" id="txtFechaNacimiento"  name="txtFechaNacimiento" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtFechaNacimiento"  style="width: 100%"></label>
                  </div>
                  <!-- Fecha de ingreso -->
                  <div class="form-outline mb-2">
                      <p style="font-size: 20px">Fecha de Ingreso</p>
                      <input type="date" id="txtFechaIngreso" name="txtFechaIngreso" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtFechaIngreso"  style="width: 100%"></label>
                  </div>
                  <!-- Cargo -->
                  <div class="form-outline mb-2">
                      <p  class="text-success" style="font-size: 20px">Cargo</p>
                      <input type="text" id="txtCargo" placeholder="Cargo en la Empresa" name="txtCargo" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtCargo"  style="width: 100%"></label>
                  </div>
                  <!-- Sueldo -->
                  <div class="form-outline mb-2">
                      <p  class="text-success" style="font-size: 20px">Sueldo</p>
                      <input type="number" id="txtSueldo" placeholder="Ingresar Sueldo Mensual " name="txtSueldo" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtSueldo"  style="width: 100%"></label>
                  </div>
                  <!-- Seguro medico -->
                  <div class="form-outline mb-2">
                  <p class="text-success" style="font-size: 20px">Seguro</p>                      
                      <select class="form-select form-control form-control-lg"  style="font-size:15px; width: 100%" id="seguro" name="seguro">
                        <option value="ISSS">ISSS</option>
                        <option value="OTRO">OTRO</option>                      
                      </select>
                  </div>
                  <!-- Pension -->
                  <div class="form-outline mb-2">
                  <p  class="text-success" style="font-size: 20px">Pension</p>                      
                      <select class="form-select form-control form-control-lg"  style="font-size:15px; width: 100%" id="pension" name="pension">
                        <option value="Crecer">AFP Crecer</option>
                        <option value="Confia">AFP Confia</option>                      
                      </select>
                  </div>
                  <!-- numero de Afiliado -->
                  <div class="form-outline mb-2">
                      <p  class="text-success" style="font-size: 20px">Numero de Afiliado</p>
                      <input type="number" id="txtNumeroAfiliado" placeholder="Numero de Pension" name="txtNumeroAfiliado" class="form-control form-control-lg" style="font-size:15px; width: 100%" required/>
                      <label class="form-label" for="txtNumeroAfiliado"  style="width: 100%"></label>
                  </div>

                  
                </div>
            </div>
                
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-success">Guardar cambios</button>
            </div>
        </div>
       
      </div>
    </div>



