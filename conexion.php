<?php
$conexion = mysqli_connect("localhost","root","","base_dragon");
if($conexion){
echo 'conectado existosamente ala base de datos';

}else{

    echo 'no se conecto ala base de datos';

}
?>