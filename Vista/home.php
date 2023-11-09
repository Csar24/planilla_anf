<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- boststrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--local -->
    <link rel="stylesheet" href="../assets/CSS/style_home.css">

    <title> Responsive Sidebar Menu  | CodingLab </title>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- Menu -->
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">ACAPRODUSCA R.L</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list" style="padding-left: 0;">
      <!-- planilla -->
      <li   id="Menu_planillas">
        <div class= "item0" >
          <a >
            <i class="bx  bxs-chevron-down"></i>
            <span class="links_name">Planillas</span>
          </a>
          <span class="tooltip0">Planillas</span>
        </div>
        <!-- Submenu -->
        <div class="sub-menu" >
             <div  class= "item1">
                <a  class="nav-link" href="../Vista/Planilla/planillasalarios.php" id="sub-menu-salario" style="margin: 0.1rem;">
                    <i class='bx bx-book'></i>
                    <span class="links_name" >Planillas de Salarios</span>
                </a>
                <span class="tooltip1">Planillas Salarios</span>
             </div>
             <div class= "item2">
                <a class="nav-link" href="../Vista/Empleados/empleados.php"   id="sub-menu-aguinaldo" style="margin: 0.1rem;">
                    <i class='bx bx-book-bookmark'></i>                    
                    <span class="links_name" >Planillas de Aguinaldo</span>
                </a>
                <span class="tooltip2">Planillas Aguinaldo</span>
             </div>                                                       
        </div>
        
        
      </li >
      
      
      <!-- Empleados -->
      <li id="Menu_empleados" >
       <a class="nav-link" href="../Vista/Empleados/empleados.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Empleado</span>
       </a>
       <span class="tooltip">Empleado</span>
     </li>
     <!-- Reportes -->
     <li id="Menu_reporte">
       <a href="../Vista/Empleados/empleados.php">
        <i class='bx bx-box '></i>
         <span class="links_name">Reportes</span>
       </a>
       <span class="tooltip">Reportes</span>
     </li>
     <!-- Deduscciones -->
     <li id="Menu_deducciones">
       <a href="../Vista/Retenciones/retenciones.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Deducciones legales</span>
       </a>
       <span class="tooltip">Deducciones</span>
     </li>
     <!-- Empresa -->
     <li>
       <a href="../Vista/Empleados/empleados.php">
         <i class='bx bx-home' ></i>
         <span class="links_name">Empresa</span>
       </a>
       <span class="tooltip">Empresa</span>
     </li>
     <!-- Configuracion -->
     <li>
       <a href="../Vista/Empleados/empleados.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">ACAPRODUSCA</div>
             <div class="job">Web Planillas</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <!-- Menu End -->

  <!-- // Contenedor -->  
  <section class="home-section">
    <!-- titulo -->
    <div class="d-flex justify-content-center bg-success p-2 text-white">
     <div class="row justify-content-md-center" style="width: 90%;">
      <div class="col col-lg-2">
        <img  class="rounded float-start" style="width:100%;" src="../assets/IMG/Home_icono.png" alt="">
      </div>
      <div class="col-md-4 align-self-center">
        <p  class="fs-3 " style="justify-content: center;"  >Sistema de Planillas ACAPRODUSCA de R.L</p>
      </div>
     </div>
   </div>
    
    


     <div  class="container" id="contenedorSeleccion">
    <!-- Ci=ntenido a Mostrar-->
     </div>
  </section>


  <!-- Scrip de la Pagina -->
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
   }
  </script>
  <!-- Submenu -->
  <Script>
      
      // JavaScript para mostrar los submenús en columnas
      document.querySelectorAll('.sidebar li').forEach((item) => {
      const subMenu = item.querySelector('.sub-menu');
        if (subMenu) {
      // Ocultar el submenú al principio
      subMenu.style.display = 'none';    
      item.addEventListener('click', () => {
      // Alternar la visibilidad del submenú y ajustar la dirección flex a "column"
          if (subMenu.style.display === 'none' || subMenu.style.display === '') {
            subMenu.style.display = 'flex';
            subMenu.style.flexDirection = 'column';
          } else {
        subMenu.style.display = 'none';
          }
          
          });
          // Evitar que los clics en subitems cierren el submenú
          subMenu.addEventListener('click', (e) => {
              e.stopPropagation();
        });
        }
      });

  </Script>

<script src="../assets/JS/jquery-3.7.1.min.js" ></script>
<script src="../assets/JS/menu.js" ></script>

</body>
</html>