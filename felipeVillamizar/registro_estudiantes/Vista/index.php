<?php   
     require_once "../Modelo/estudiantes.php"; 

    $usuarioModel = new estudiantesM(); 
    $a_users = $usuarioModel->get_estudiantes(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    Cedula 
                </td> 
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_estudiantes']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['ci']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 
