<?php
    require_once "../consultas/Conexion.php";
    require_once "../consultas/producto.php";
    require_once "../header.php";

?>
<h1 style="text-align:center;background-color: #103b7b;color: #fff;">Inventario</h1>
<table class="table cont-tabl" border="1">
    <thead style="background-color: #0d6efd; color:#fff;">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Nombre</td>
            <td scope="col">Referencia</td>
            <td scope="col">Precio</td>
            <td scope="col">Peso</td>
            <td scope="col">Categoria</td>
            <td scope="col">Stock</td>
            <td scope="col">Fecha</td>
        </tr>
    </thead>
    <?php
        $obj= new Producto();
        $tabla="productos";
        $datos=$obj->mostrar($tabla);
        foreach ($datos as $key ){  
        ?>
            <tr>
                <td><?php echo $key['id']?></td>
                <td><?php echo $key['nombre']?></td>
                <td><?php echo $key['referencia']?></td>
                <td><?php echo $key['precio']?></td>
                <td><?php echo $key['peso']?></td>
                <td><?php echo $key['categoria']?></td>
                <td><?php echo $key['stock']?></td>
                <td><?php echo $key['fecha']?></td>
            </tr>
        <?php
        }  
        ?>

</table>

<h1 style="text-align:center;background-color:#044a0f;color: #fff;">VENTAS</h1>
<table class="table cont-tabl" border="1">
    <thead style="background-color: #07ae21; color:#fff;">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">ID PRODUCTO</td>
            <td scope="col">TOTAL</td>
            <td scope="col">CANTIDAD</td>

        </tr>
    </thead>
    <?php
        $obj= new Producto();
        $tabla="registro";
        $datos=$obj->mostrar($tabla);
        foreach ($datos as $key ){  
        ?>
            <tr>
                <td><?php echo $key['id']?></td>
                <td><?php echo $key['id_producto']?></td>
                <td><?php echo $key['precio']?></td>
                <td><?php echo $key['cant']?></td>

            </tr>
        <?php
        }  
        ?>

</table>

</body>
</html>