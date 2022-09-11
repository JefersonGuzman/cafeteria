<?php
    require_once "../consultas/Conexion.php";
    require_once "../consultas/producto.php";
    require_once "../header.php";


    
    if(isset($_POST['nom']) != '' && isset($_POST['ref']) != '' && isset($_POST['precio']) != '' && isset($_POST['peso']) != '' && isset($_POST['cat']) != '' && isset($_POST['stock'])!= ''){

        $nom=$_POST['nom'];
        $ref=$_POST['ref'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $cat=$_POST['cat'];
        $stock=$_POST['stock'];

        $obj= new Producto();
        $datos=$obj->crear($nom,$ref,$precio,$peso,$cat,$stock);
        echo "<script language='javascript'>window.parent.location='http://localhost/coffee_a_click/index.php?pag=listar';</script>";



    }

?>

<body>
    <div class="for_crear" style="padding: 40px;">
    <form action="crear.php" method="POST">
            <legend style="background-color: #0dcaf0;text-align: center;color:#fff;">Crear Nuevo Producto</legend>
            <div class="mb-3">
                <label for="" class="form-label">Nombre *</label>
                <input type="text"  name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Referencia *</label>
                <input type="text"  name="ref" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio *</label>
                <input type="number"  name="precio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Peso *</label>
                <input type="text" name="peso" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria *</label>
                <input type="text"  name="cat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stock *</label>
                <input type="text"  name="stock" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    </div>
</body>
</html>