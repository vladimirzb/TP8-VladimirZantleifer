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
                        <h1>Modficar producto</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Listado</a></li>                            
                            <li class="active">Modficar producto</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                                          
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                        <div class="card-header">
                        <strong>Agregar Producto</strong> <small> </small>
                        </div>
                        <div class="card-body card-block">
                        <div class="form-group">
                        <label class=" form-control-label">Nombre</label>
                        <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" id="company" placeholder="Mr.Musculo" class="form-control">
                        </div>
                        <label class=" form-control-label">Codigo</label>
                        <div class="input-group">
                        <div class="input-group-addon"><h4>#</h4></div>
                        <input type="text" id="company" placeholder="#1234324" class="form-control">
                        </div>
                        <label class=" form-control-label">Descripcion Corta</label>
                        <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" id="company" placeholder="Limpiador muy util" class="form-control">
                        </div>
                        <label class=" form-control-label">Descripcion larga</label>
                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Limpiador de grasa muy util para varias situaciones" class="form-control"></textarea>
                        <small class="form-text text-muted">ex. Mr.Musculo</small>
                        </div>
                        <div class="form-group">
                        <label class=" form-control-label">Foto</label>
                        <div class="input-group">
                         <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                         <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                        <small class="form-text text-muted">ex. Mr.Musculo.jpg</small>
                        <label class=" form-control-label">Video</label>
                        <div class="input-group">
                         <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                         <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                        <small class="form-text text-muted">ej. Mr.Musculo.mp4</small>
                        </div>
                        <div class="form-group">
                        <label class=" form-control-label">Categoria</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-tags"></i></div>
                        <select name="select" id="select" class="form-control">
                            <option value="1">Limpieza</option>
                            <option value="2">Alimento</option>
                            </select>
                        </div>
                        <small class="form-text text-muted">ej. Limpieza</small>
                        </div>
                        <div class="form-group">
                        <label class=" form-control-label">Stock Actual</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="text" id="company" placeholder="25" class="form-control">
                        </div>
                        <small class="form-text text-muted">ej. 12</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Stock Minimo</label>
                            <div class="input-group">
                                <div class="input-group-addon"></div>
                                <input type="text" id="company" placeholder="12" class="form-control">
                            </div>
                            <small class="form-text text-muted">ej. 12</small>
                            </div>
                        <div class="form-group">
                        <label class=" form-control-label">Precio</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                        <input type="text" id="company" placeholder="11"  class="form-control">
                        </div>
                        <small class="form-text text-muted">ej. 232$</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">OnSale</label>
                            <div class="input-group">
                            <div class="input-group-addon"></div>
                            <select name="select" id="select" class="form-control">
                                <option value="1">Si</option>
                                <option value="2">No</option>
                                </select>
                            </div>
                            <small class="form-text text-muted">ej. Si</small>
                            </div>
                        <div class="form-group">
                        <label class=" form-control-label">Descuento acutal</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                        <input type="text" id="company" placeholder="11%"  class="form-control">
                        </div>
                        <small class="form-text text-muted">ej. 11%</small>

                        <div class="form-group">
                            <label class=" form-control-label">Destacado</label>
                            <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                            <select name="select" id="select" class="form-control">
                                <option value="1">Si</option>
                                <option value="2">No</option>
                                </select>
                            </div>
                            <small class="form-text text-muted">ej. Si</small>
                            </div>
                        </div>
                        </div>
                        
                        <a href="agregar-producto.html" class="btn btn-primary"><i class="fa fa-plus"></i> Modficar Producto</a>
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