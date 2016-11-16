<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bootstrap dropdown with tabs and pills example</title>
    <link href="/ciboot/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <ul class="nav nav-pills">
    <li class="dropdown all-camera-dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Mantenimiento
               <b class="caret"></b>
           </a>
    <ul class="dropdown-menu">
            <li data-filter-camera-type="all"><a data-toggle="tab" href="../department">Departamentos</a></li>
            <li data-filter-camera-type="all"><a data-toggle="tab" href="../department/lista_departamentos">Empleados - Deptos</a></li>
           <li data-filter-camera-type="all"><a data-toggle="tab" href="../department/insert">Crear Deptos</a></li>
            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="../employee/lista_empleados">employee</a></li>

            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>
            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>
     </ul>
  </li>
  <li class="dropdown all-camera-dropdown"> 
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Transacciones
               <b class="caret"></b>
           </a>
    <ul class="dropdown-menu">
            <li data-filter-camera-type="all"><a data-toggle="tab" href="#">Cotizaciones</a></li>
            <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">Compras</a></li>
            <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">Subasta</a></li>
            <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">Adjudicación</a></li>
     </ul>
  </li>
  </ul>
  
    <script type="text/javascript" src="/ciboot/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/ciboot/assets/js/bootstrap-dropdown.js"></script>
   </body>
</html>