<?php
    require_once "../consultas/Conexion.php";
    require_once "../consultas/producto.php";
    require_once "../header.php";

    
    if($_POST['act']=='delet'){
        $id_prod = $_POST['id_prod'];
        $obj= new Producto();
        $datos=$obj->eliminar($id_prod);
        echo "<script language='javascript'>window.parent.location='http://localhost/coffee_a_click/index.php?pag=listar';</script>";
    }

?>

<body>
    <div>
        <form action="eliminar.php" style="text-align: center;border: 1px solid;padding: 10px;"  method="POST">
                <legend style="background-color: #dc3545;color: aliceblue;">Eliminar Producto</legend>
                <div class="mb-3">
                    <label for="" class="form-label">ID Producto*
                    <input type="text"  name="id_prod" class="form-control" required>
                    <input type="hidden" name="act" value="delet">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>

</body>
</html>