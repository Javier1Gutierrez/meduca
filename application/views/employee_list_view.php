<html>
     <head>
          <title>Departamentos</title>
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
                              <th>Empleado Id</th>
                              <th>Empleado No</th>
							  <th>Nombre</th>
							  <th>Departamento</th>
							  <th>Puesto</th>
							  <th>Fecha Contrato</th>
							  <th>Salario</th>
							  <th>URL </th> 
							  
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                              <tr>
                                   <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $deptlist[$i]->employee_id; ?></td>
								   <td><?php echo $deptlist[$i]->employee_no; ?></td>
								   <td><?php echo $deptlist[$i]->employee_name; ?></td>
								   <td><?php echo $deptlist[$i]->department_name; ?></td>
								   <td><?php echo $deptlist[$i]->designation_name; ?></td>
								   <td><?php echo $deptlist[$i]->hired_date; ?></td>
								   <td><?php echo $deptlist[$i]->salary; ?></td>
								   <td><?php echo "<a href=".base_url("index.php/employee/actualizar")."/".$deptlist[$i]->employee_no.">".$deptlist[$i]->employee_name."</a>" ;?> </td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>
     </body>
</html>
