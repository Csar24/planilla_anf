<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/CSS/style_login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
    </style>

</head>
<body>
    <div  class="login-container">
        <div class="image-container">
                      
        </div>
        <div class="login-form">
            <img  src="../assets/IMG/Login_icono.png" alt="">
            <h1>SISTEMA DE PLANILLAS ACAPRODUSCA de R.L</h1>
            
            <form action="home.php" method="post">
                <input type="text" name="usuario" placeholder="Usuario" id="usuario" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>  
    <script>
    // JavaScript para establecer el enfoque en el campo1
    document.getElementById("usuario").focus();
  </script>
</body>
</html>