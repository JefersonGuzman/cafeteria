
<!--CONSULTA SQL -->

<!-- 
    Realizar una consulta que permita conocer cuál es el 
    producto que más stock tiene
 -->
    
    SELECT id,nombre,referencia,precio,categoria,MAX(productos.stock)
    FROM  productos;


<!-- 
    Realizar una consulta que permita conocer cuál 
    es el producto más vendido 
-->

SELECT registro.id_producto, SUM(registro.cant) AS TotalVentas FROM registro 
    GROUP BY registro.id_producto
    ORDER BY SUM(registro.cant)
DESC LIMIT 1; 