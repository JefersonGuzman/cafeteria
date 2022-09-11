<?php
    require_once('header.php');
?>

<body>
    <div class="container" style=" background-color: #2f2f2f;border-style: dashed; margin-top: 3rem;">
        <div class="row" style="">
            <div class="col-lg-5">
                <div class="list_menu">
                    <div class="cont_print">
                        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="assest/img/iconos/png/003-cafetera-1.png" style="margin:10px;width:100px;" alt="">
                            <img src="assest/img/konecta.png" alt="" style="width: 50%;">
                            <img src="assest/img/iconos/png/004-cafetera-2.png" style="margin:10px;width:100px;" alt="">
                        </a>
                        <div class="cont_btn">
                            <div class="menu col-sm-12">
                                <li class="btn btn-success">
                                    <a href="index.php?pag=vender" class=" px-2 text-secondary">
                                        <img src="assest/img/iconos/png/002-cafetera.png" alt="">
                                        <b>VENDER PRODUCTO</b>
                                    </a>
                                </li>
                            </div>

                            <div class="menu col-sm-12">
                                <li class="btn btn-primary">
                                    <a href="index.php?pag=listar" class=" px-2 text-secondary">
                                        <img src="assest/img/iconos/png/007-lista-de-verificacin.png" alt="">
                                        <b>Listado de producto</b>
                                    </a>
                                </li>
                            </div>

                            <div class="menu col-sm-12">
                                <li class="btn btn-info">
                                    <a href="index.php?pag=crear" class=" px-2 text-secondary">
                                        <img src="assest/img/iconos/png/006-nuevo-producto.png" alt="">
                                        <b>Crear Producto</b> 
                                    </a>
                                </li>
                            </div>
                            <div class="menu col-sm-12">
                                <li class="btn btn-warning">
                                    <a href="index.php?pag=editar" class=" px-2 text-warning">
                                        <img src="assest/img/iconos/png/005-editar-cdigo.png" alt="">
                                        <b>Editar Producto</b> 
                                    </a>
                                </li>
                            </div>
                            <div class="menu col-sm-12">
                                <li class="btn btn-danger">
                                    <a href="index.php?pag=eliminar" class=" px-2 text-secondary">
                                        <img src="assest/img/iconos/png/001-botn-eliminar.png" alt="">
                                        <b>Eliminar Producto</b> 
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7 panel_2 div_frame" style="">
                <?php
                switch ($_GET['pag']) {
                    case 'listar':
                            echo "<iframe src='vista/listar.php' class='cuadro' frameborder='1'></iframe>";
                        break;
                    case 'crear':
                            echo "<iframe src='vista/crear.php' class='cuadro' frameborder='1'></iframe>";
                        break;
                    case 'editar':
                            echo "<iframe src='vista/editar.php' class='cuadro' frameborder='1'></iframe>";
                        break;
                    case 'eliminar':
                            echo "<iframe src='vista/eliminar.php' class='cuadro' frameborder='1'></iframe>";
                        break;
                    case 'vender':
                        echo "<iframe src='vista/vender.php' class='cuadro' frameborder='1'></iframe>";
                    break;
                    
                    default:
                        # code...
                        break;
                }

                ?>
            </div>

        </div>
    </div>




</body>
<?php
    require_once('footer.php');
?>

</html>

