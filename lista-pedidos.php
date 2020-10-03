<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/micss.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->

    <?php include('includes/menu.php')  ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>                
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Listado de Categorias</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Categorias</a></li>                            
                            <li class="active">Listado Pedidos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<!-- Tabla -->
                    <div class="col-md-12">                        
                        <div class="card">                            
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Foto<i class="fa fa-picture-o"></i></th>
                                            <th>Categoria <i class="fa  fa-tags"></i> </th>
                                            <th>Stock a pedir </th>
                                            <th>Fecha de llegada <i class="fa  fa-calendar"></i> </th>
                                            
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td> <a href="info-producto.html"> <h4>Mr.Musculo</h4> </td> </a>
                                            <td> <a href="info-producto.html"><img src="images/mr-musculo.jpg" alt="Logo" class="imagen-chikita"></a></td> 
                                            <td>Limpieza <i class="fa  fa-tags"></i></td>  
                                            <td>25</td>  
                                            <td>2/4 <i class="fa  fa-calendar"> </i></td>
                                           
                                            <td>
                                                 
                                                    
                                                <a href="modificar-producto.html" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                <a href="#" class="btn btn-secondary"> Activar/Desactivar</a>
                                            
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#2</td>
                                            <td><a href="info-producto.html"> <h4>Pan Fargo</h4>  </a> </td>
                                            <td><a href="info-producto.html"><img src="images/pan-fargo.jpg" alt="Logo" class="imagen-chikita"></a></td> 
                                            <td>Alimentos<i class="fa  fa-tags"></i></td>  
                                            <td>23</td>
                                            <td>5/4 <i class="fa  fa-calendar"> </i></td>
                                                                                     
                                            <td>
                                                <a href="modificar-producto.html" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                <a href="#" class="btn btn-secondary"> Activar/Desactivar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#3</td>
                                            <td><a href="info-producto.html"> <h4>Paty</h4>  </a> </td>
                                            <td><a href="info-producto.html"><img src="images/paty.jpg" alt="Logo" class="imagen-chikita"></a></td> 
                                            <td>Alimentos<i class="fa  fa-tags"></i></td>   
                                            <td>45</td>
                                            <td>6/3 <i class="fa  fa-calendar"> </i></td>    
                                                                                  
                                            <td>
                                                <a href="modificar-producto.html" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                <a href="#" class="btn btn-secondary"> Activar/Desactivar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
</body>

</html>