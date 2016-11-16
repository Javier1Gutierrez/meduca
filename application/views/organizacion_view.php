<html>
     <head>
          <title>Organizaciones</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
     </head>
     <body>

          <div class="container">
          <div class="row">
          <div class="col-lg-12 col-sm-12">
               <table class="table table-striped table-hover">
                    <thead>
                         <tr>
                              <th>#</th>
                              <th>ID_Organizacion</th>
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Numero del Empleado</th>
                              <th>Indice</th>
                              <th>Telefono</th>
                              <th>URL</th>
                              <th>Vista</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($orglist); $i++) { ?>
                              <tr>

                                   <td><?php echo $i; ?></td>
                                   <td><?php echo $orglist[$i]->id_org; ?></td>
                                   <td><?php echo $orglist[$i]->nombre; ?></td>
                                   <td><?php echo $orglist[$i]->direccion; ?></td>
                                   <td><?php echo $orglist[$i]->Numemp; ?></td>
                                   <td><?php echo $orglist[$i]->indicetec; ?></td>
                                   <td><?php echo $orglist[$i]->telefono; ?></td>


                                   <td><?php echo "<a href=".base_url("index.php/organizacion/actualizar")."/".$orglist[$i]->id_org.">".$orglist[$i]->nombre."</a>" ;?> </td>


                                    <td><?php echo "<a href=".base_url("index.php/organizacion/modelo_mostrar")."/".$orglist[$i]->id_org.">".$orglist[$i]->id_org."</a>" ;?> </td>
                              </tr>

                         <?php } ?>
                    </tbody>

               </table>
          </div>
          </div>
          </div>
     </body>
</html>
