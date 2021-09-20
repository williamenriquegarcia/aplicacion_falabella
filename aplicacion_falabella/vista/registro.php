<!DOCTYPE html>
  <html>
    <head>
      <!--Fuentes de google-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Bienvenido</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="#">Registro</a></li>
            <?php 
              if (isset($_SESSION['nombres']))
              {
            ?>
            <li><a href="../vista/login.php">Login</a></li>
          <?php
           } 
           else
          {
           ?>
           <li><a href="../vista/cerrarsesion.php">Cerrar sesion</a></li>
           <?php
          }
          ?>
          </ul>
        </div>
      </nav>

      <section style="margin-bottom:40%">
        <h1 style="margin-left:20%">Registro</h1>
        <form style="width:50%" id="formReg" method="post">
          <p style="margin-left:20%">
             <label>
              <input type="text" name="nombres" id="nombres" required />
              <span>Nombres</span>
            </label>
            <label>
              <input type="text" name="apellidos" id="apellidos" required/>
              <span>Apellidos</span>
            </label>
            <label>
              <input type="email" name="email" id="email" required/>
              <span>Email</span>
            </label>
            <label>
              <input type="password" name="clave" id="clave" required/>
              <span>Password</span>
            </label>
            <label>
              <input type="password" name="confirmeClave" id="confirmeClave" required/>
              <span>Confirme password</span>
            </label>
            </p>
            <button style="margin-left:20%" id="botonRegistro">Registrar</button>
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
      <script src="js/registro.js"></script>
    </body>
  </html>