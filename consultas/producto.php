<?php

    include_once "Conexion.php";

    class Producto{
        

        
        //Create
        public function crear($nom,$ref,$prec,$peso,$cat,$stock){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"INSERT  INTO productos (`nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`) VALUES('$nom','$ref','$prec','$peso','$cat','$stock')");
            return $result;
        }

        //Read
        public function mostrar($tabla){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"SELECT * FROM $tabla");
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Update
        public function actualizar($id,$nom,$ref,$prec,$peso,$cat,$stock){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"UPDATE `productos` SET `nombre`='$nom',`referencia`='$ref',`precio`='$prec',`peso`='$peso',`categoria`='$cat',`stock`='$stock' WHERE id='$id'");
        }


        //Delete
        public function eliminar($id){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"SELECT  FROM productos WHERE id=$id");
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Buscar producto por Id
        public function getIdProd($id){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"SELECT * FROM productos WHERE id=$id");
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        //Vender producto
        public function vendProdId($id,$cant){
            $c = new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,"SELECT * FROM productos WHERE id=$id");
            if($row=mysqli_fetch_array($result)){
                if($row['stock'] < 1 || $row['stock'] == ''){
                    echo "<div class='alert alert-danger' role='alert'>No tenemos productos en Stock</div>";
                }else{
                    $total=($cant* $row['precio']);
                    $upd_cant=($row['stock']-$cant);
                    $result=mysqli_query($conexion,"UPDATE `productos` SET `stock`='$upd_cant' WHERE id=$id");
                    $result=mysqli_query($conexion,"INSERT INTO `registro`(`id_producto`, `precio`, `cant`) VALUES ('$id','$total','$cant')");
                    echo "<script language='javascript'>window.parent.location='http://localhost/coffee_a_click/index.php?pag=listar';</script>";

                }
                
            }
            echo "<div class='alert alert-danger' role='alert'>Error verifique su consulta</div>";
            return $result;

        }
        
    }

?>

