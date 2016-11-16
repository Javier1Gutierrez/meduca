<html>
     <head>
          <title>Puestos</title>
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
                              <th>Id Puesto</th>
                              <th>Descripcion</th>
							  
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($desiglist); ++$i) { ?>
                              <tr>
                                   <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $desiglist[$i]->designation_id; ?></td>
                                   <td><?php echo $desiglist[$i]->designation_name; ?></td>
								
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>
     </body>
</html>
