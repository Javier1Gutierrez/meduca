<html>
     <head>
          <title>Productos</title>
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
                              <th>Id Product</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Image</th>
                              <th>URL</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($prodlist); $i++) { ?>
                              <tr>
                                   <td><?php echo $i; ?></td>
                                   <td><?php echo $prodlist[$i]->id; ?></td>
                                   <td><?php echo $prodlist[$i]->name; ?></td>
                                   <td><?php echo $prodlist[$i]->price; ?></td>
                                   <td><?php echo $prodlist[$i]->image; ?></td>
                                  <td><?php echo "<a href=".base_url("index.php/products/actualizar")."/".$prodlist[$i]->id.">".$prodlist[$i]->name."</a>" ;?> </td>  
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>
     </body>
</html>
