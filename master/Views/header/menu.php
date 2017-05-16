<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/estilos.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/chosen/chosen.min.css">




<script src="assets/js/lib/jquery.js"></script>
<script src="assets/js/lib/jquery.dataTables.js"></script>
<script src="assets/js/lib/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/dataTables.responsive.min.js"></script>
<script src="assets/js/lib/responsive.bootstrap.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/chosen/chosen.jquery.min.js"></script>  
<script src="assets/js/chosen.js"></script>  
<script src="assets/js/lib/bootstrap.js"></script>  
<script src="assets/js/lib/menu.js"></script>  
<script src="assets/js/calendario.js"></script>  
  <title>Administrador</title>
</head>
<body>
<?php if ($_SESSION['nombreusuario'] == 'ADMINISTRADOR' OR $_SESSION['nombreusuario'] == 'administrador'): ?>
<nav class="navbar navbar-dark bg-warning">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index"><i class="fa fa-table" aria-hidden="true"></i> Reservas</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-product-hunt" aria-hidden="true"></i> Productos</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoProd"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Productos</a>
        
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i> Categorías</a>

        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="categorias"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Categorias</a>
        
        </div>
      </li> 

        <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Ventas</a>

        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="principalVentas"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Mesas</a>
          <a id="sub" class="dropdown-item" href="ventasDiarias"><i class="btn btn-danger btn-sm  fa fa-usd"></i>Reportes Ventas</a>
        
        </div>
      </li> 


          <!-- User =====================================
          ============================================ -->
       <li class="nav-item dropdown  nav-item active float-xs-right">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows" aria-hidden="true"></i> Hola! <?php echo  ' ' .strtoupper($_SESSION[ 'nombreusuario']); ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="salir"><i class="btn btn-danger btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
          <a class="dropdown-item" href="usuarios"><i class="btn btn-primary btn-sm fa fa-address-book"></i> Usuarios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php else: ?>

  <!-- #===============================================================
   Fin
  0===================================================================== -->
<nav class="navbar navbar-dark bg-warning">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index"><i class="fa fa-table" aria-hidden="true"></i> Reservas</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-product-hunt" aria-hidden="true"></i> Productos</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoProd"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Productos</a>
        
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i> Categorías</a>

        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="categorias"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Categorias</a>
        
        </div>
      </li> 

        <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Ventas</a>

        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="principalVentas"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Mesas</a>
          <a id="sub" class="dropdown-item" href="ventasDiarias"><i class="btn btn-danger btn-sm  fa fa-usd"></i>Ventas Diarias</a>
        
        </div>
      </li> 

      <!-- USUARIO NO ADMINISTRADOR -->
       <li class="nav-item dropdown  nav-item active float-xs-right">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows btn btn-warning btn-sm" aria-hidden="true"></i> Hola ! <?php echo  ' ' .strtoupper($_SESSION[ 'nombreusuario']);  ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="salir"><i class="btn btn-primary btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
       

        </div>
      </li>
    </ul>
  </div>
</nav>
<?php endif ?>
   
