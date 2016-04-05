<?php   
     require_once "../Modelo/estudiantes.php"; 

    $estudiantesObj = new estudiantesM(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="../biblotecas/jquery-1.12.2.min.js"></script>
     <script src="../biblotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> 
 </head> 
 <body>
     <div class="container">
     <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de Estudiantes
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="#Registrar">Registrar Estudiante</a></li>
            <li><a href="estudiantes_registrados.php">Estudiantes Registrados</a></li>
            <li><a href="/">Xampp</a></li>
            <li><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=registro_estudiantes&token=4321aa2099d6ed8d3c444e70f76b778b">Base de Datos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <div class="row">
            <div class="col-md-2">
                <img src="../imagenes/logo.jpg" alt="Logo Unefa" width="100px" height="100px"/>
            </div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <h1 align="center">Ejemplo de un CRUD</h1>
        <p>Este es un ejemplo de un CRUD de registro de estudiantes, para que los alumnos lo tomen como referencia para su poyecto de fin de semestre.</p>
        <?php $estudiantesObj->get_count_estudiantes();?>
        <a class="btn btn-lg btn-primary" href="//github.com/felipeunefa/clase_programaci-n1" role="button">Repositorio en Github</a>
                </div>
            </div>
        </div>
    </div>
     
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada. </p>
      </div>
    </footer>
    
 </body> 
 </html> 
