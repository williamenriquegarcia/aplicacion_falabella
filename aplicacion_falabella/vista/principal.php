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
            <li id="cerrar"><a>Cerrar sesión</a></li>
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

      <section>
        
            <?php
              if (isset($_SESSION['nombres']))
              { 
                ?>
                <h3>Filtrar por edad</h3>
                <label for="limiteInferior" class="browser-default">Mayor que</label>
                <input type="number" name="limiteInferior" class="browser-default" id="limiteInferior">
                <label for="limiteInferior" class="browser-default">Menor que</label>
                <input type="number" class="browser-default" name="limiteSuperior" id="limiteSuperior">
                <button id="filtro">Filtrar</button>
                <button id="reporte">Generar reporte</button>
                <div id="divTabla">
                  <table id="tabla">
                    <tr>
                      <th>Edad</th>
                      <th>aspartato</th>
                      <th>Fosfatasa</th>
                      <th>Alanina</th>
                    </tr>
                <?
                include '../controlador/principal.php';
              }
              else
              {
                echo "No hay sesión vigente, registrate o logueate";
              }
            ?>
          </table>
        </div>  
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
      <script src="js/cerrar.js"></script>
      <script src="js/filtrar.js"></script>
      <script src="js/generarReporte.js"></script>
    </body>
  </html>