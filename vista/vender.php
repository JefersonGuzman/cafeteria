<?php
    require_once "../consultas/Conexion.php";
    require_once "../consultas/producto.php";
    require_once "../header.php";

    
    if($_POST['act']=='vender'){
        $id_prod = $_POST['id_prod'];
        $cant = $_POST['cant'];
        $obj= new Producto();
        $datos=$obj->vendProdId($id_prod,$cant,$total);


    }

?>

<body>
    <div>
        <form action="vender.php" style="text-align:center;border: 1px solid;padding: 10px;"  method="POST">
                <legend style="background-color: #198754;color: aliceblue;">Vender Producto</legend>
                <div class="mb-3">
                    <label for="" class="form-label">ID Producto*
                    <input type="number"  name="id_prod" class="form-control" required>
                    <label for="" class="form-label">Cantidad*
                    <input type="number"  name="cant" class="form-control" required>

                    <input type="hidden" name="act" value="vender">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>

</body>
</html>