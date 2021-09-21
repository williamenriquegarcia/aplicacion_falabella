<!DOCTYPE html>
  <html>
    <head>
      <!--css materialize-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Bienvenido</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.php">Inicio</a></li>
            
            <?php
            session_start(); 
            if (isset($_SESSION['nombres']))
            {
            ?>
            <li>
              <a href="#">
                <?php  
                  echo $_SESSION['nombres'];
                ?>
              </a>
            </li>
            <li><a href="../vista/cerrarsesion.php">Cerrar sesion</a></li>
            
            <?php
             } 
             else
            {
             ?>
             <li><a href="../vista/registro.php">Registro</a></li>
             <li><a href="../vista/login.php">Login</a></li>
             
             <?php
            }
          ?>
          </ul>
        </div>
      </nav>

      <section style="margin-bottom:40%">
        <h1 style="margin-left:20%">Login</h1>
        <form style="width:50%" id="formLogin" method="post">
          <p style="margin-left:20%">
            <label>
              <input type="email" name="email" id="email" />
              <span>Email</span>
            </label>
            <label>
              <input type="password" name="clave" id="clave" />
              <span>Password</span>
            </label>
            </p>
            <button style="margin-left:20%" id="botonLogin">Ingresar</button>
          </form>
          <div id="respuesta"></div>
      </section>
      

      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
            <center>
              © 2021
            </center>
          </div>
        </div>
      </footer>

      <!--Librerias javascript de materialize-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="js/login.js"></script>
      <script src="js/cerrar.js"></script>
    </body>
  </html>