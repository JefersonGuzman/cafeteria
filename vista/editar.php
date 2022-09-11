<?php
    require_once "../consultas/Conexion.php";
    require_once "../consultas/producto.php";
    require_once "../header.php";

    
    if($_POST['act']=='upd'){

        $id_prod = $_POST['id_prod'];
        $nom=$_POST['nom'];
        $ref=$_POST['ref'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $cat=$_POST['cat'];
        $stock=$_POST['stock'];

        $obj= new Producto();
        $datos=$obj->actualizar($id_prod,$nom,$ref,$precio,$peso,$cat,$stock);
        echo "<script language='javascript'>window.parent.location='http://localhost/coffee_a_click/index.php?pag=listar';</script>";
    }

    $id_prod = $_POST['id_prod'];
?>

<body>
    <div>
        <form action="editar.php" style="text-align: center;border: 1px solid;padding: 10px;"  method="POST">
                <legend style="background-color: #ffc107;color: aliceblue;">Editar Producto</legend>
                <div class="mb-3">
                    <label for="" class="form-label">ID Producto*
                    <input type="text"  name="id_prod" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>
    <div class="for_crear" style="padding: 40px;">
    <?php if($id_prod > 0) {
        $obj= new Producto();
        $datos=$obj->getIdProd($id_prod);
        foreach ($datos as $key ){     
    ?>
        <form action="editar.php" method="POST">
                <legend>Editar Producto</legend>
                <input type="hidden" value='<?php echo $id_prod ?>' name="id_prod">
                <input type="hidden" value="upd" name="act">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre *</label>
                    <input type="text"  value='<?php echo $key['nombre']?>' name="nom" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Referencia *</label>
                    <input type="text" value='<?php echo $key['referencia']?>' name="ref" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio *</label>
                    <input type="number" value='<?php echo $key['precio']?>' name="precio" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Peso *</label>
                    <input type="text" value='<?php echo $key['peso']?>' name="peso" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Categoria *</label>
                    <input type="text"  value='<?php echo $key['categoria']?>' name="cat" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stock *</label>
                    <input type="text"  value='<?php echo $key['stock']?>' name="stock" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php }
            } ?>
    </div>
</body>
</html>