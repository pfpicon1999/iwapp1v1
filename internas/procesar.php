<?php

//enlace a la base de datos

$conect= new mysqli("127.0.0.1","root","","iwapp1db");
/*/if ($conect) {
    echo "Se conecto la db";
}else{
    echo "Error en la db";
}*/

//extraer los valores del formulario
//extract($_POST);

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$tipoUser = $_POST['tipoUser'];

//echo $nombres."<br>".$apellidos."<br>".$correo."<br>".$tipoUser;

//$sql= "insert into usuarios values('','$nombres','$apellidos','$correo','$tipoUser')";
$sql= "insert into usuarios values('','$nombres','$apellidos','$correo','$tipoUser')";
$resSql= mysqli_query($conect,$sql);

if (!$resSql) {
    echo "Error de sentencia SQL";   
}else{
    echo "Se ejecuto correctamente";
}
//echo $nombres." ".$edad ;

/*/if ($edad<18) {
    echo "es menor de edad";
}elseif($edad>65){
    echo "Es un adulto mayor";
}else{
    echo "
    es mayor de edad";
}/*/
?>