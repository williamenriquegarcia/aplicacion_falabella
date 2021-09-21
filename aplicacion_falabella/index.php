<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--barra de navegación-->
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Bienvenido</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Inicio</a></li>
            
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
            <?php
             } 
             else
            {
             ?>
             <li><a href="vista/registro.php">Registro</a></li>
             <li><a href="vista/login.php">Login</a></li>
             
             <?php
            }
          ?>
          </ul>
        </div>
      </nav>

      <!--slider-->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="vista/imagenes/beachy-head-6209982.jpg"/>
            <div class="caption center-align">
              <h3>Welcome</h3>
              <h5 class="light grey-text text-lighten-3">Esta es una aplicación de prueba</h5>
            </div>
          </li>
          <li>
            <img src="vista/imagenes/yorkshire-terrier-6202621.jpg"/> <!-- random image -->
            <div class="caption left-align">
              <h3>Bienvenido</h3>
              <h5 class="light grey-text text-lighten-3">Esto es una aplicación de prueba</h5>
            </div>
          </li>
        </ul>
      </div>

      <!--footer-->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slider({"height":1000});
        });
      </script>
    </body>
  </html>