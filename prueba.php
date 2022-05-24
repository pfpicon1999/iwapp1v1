<h1></h1>
<?php
$var1 =1;
$var2 =2;
$res =0;
$edad = 23; 
echo "Hola Mundo 1 :) <br>";
echo "Hola Mundo 2 :) <br>";
//exit();
echo "Hola Mundo 3 :) <br>";

$res= $var1+$var2;
echo $res;
if ($edad >=18) {
    echo "Ud Mayor de Edad";
}else{
    echo "Ud es menor de edad";
}

for ($i=0; $i <15 ; $i++) { 
    $ope = 5*$i;
    echo "5*".$i."=" .$ope. "<br>";
}
?>
