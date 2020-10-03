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

       

        <!-- Buscador peli -->
        <div class="container">
            
            <div class="row">
                <div class="col-5">
                    <input class="form-control form-control-lg" id="idPeliTituloText" type="text" placeholder="Titulo de peli/serie a buscar">
                </div>

                <!-- Peli o serie radio button -->
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="radioBtnSinFiltro" value="movie" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Sin filtro 
                        </label>
                      </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="radioBtnPeli" value="movie" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Pelicula 
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="radioBtnSerie" value="series">
                        <label class="form-check-label" for="exampleRadios2">
                          Serie
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="radioBtnCapitulo" value="episode">
                        <label class="form-check-label" for="exampleRadios2">
                          Capitulo
                        </label>
                      </div>
                </div>

                <div class="col-3">
                    

                        <label for="example-number-input" class="col-12 col-form-label">Numero pagina resultado:</label>
                        <input class="form-control" type="number" value="1" min="1" id="idPaginaResult">   
                    
                             
                </div>


                <!-- AÑO PELI -->
                <div class="col-2">
                            
                    <label for="example-number-input" class="col-12 col-form-label">Año de la peli:</label>
                    <input class="form-control" type="number" value="" min="1" id="idAñoPeli">  
                                        
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-success btn-lg btn-block" onclick="buscarPeli()">Buscar</button>             
                </div>
            </div>

            <div class="row" id="resultadoPelis">
                <!-- Pelis RESULTADO-->
                <div class="col-md-12">                        
                    <div class="card">                            
                        
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">  Titulo <span class="ti-text"></span> </th>
                                <th scope="col">Poster <span class="ti-image"></span> </th>
                                <th scope="col">Tipo  <span class="ti-menu"></span></th>
                                <th scope="col">Año <span class="ti-calendar"></span></th>
                                </tr>
                            </thead>
                            <tbody id="tbodyID">
                            
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>

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


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/init-scripts/chart-js/chartjs-init.js"></script>
    <script src="misFunciones.js"></script>

</body>

</html>