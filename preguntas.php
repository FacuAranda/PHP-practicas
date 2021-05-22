<?php
error_reporting(0);
$error =$_GET['msj'];


$preg_1=$_POST['preg_1'];
$preg_2=$_POST['preg_2'];
$preg_3=$_POST['preg_3'];
$preg_4=$_POST['preg_4'];
$preg_5=$_POST['preg_5'];
$puntos = 0;



$resp_1= 8;
$resp_2= 3;
$resp_3= 50;
$resp_4= 1;
$resp_5= 27;

$ok= "<span style='color:green'><b>Ok</b></span>";
$bad= "<span style='color:red'><b>Mal</b></span>";




if(isset($_POST['preg_1'])){

    if($preg_1==$resp_1){
        // echo "Respuesta 1 es correcta.";
        $mensaje1 =$ok;
        $puntos +=20;
    }else{
        // echo "Respuesta 1 NO es correcta.";
        $mensaje1 =$bad;
    }
    if($preg_2==$resp_2){
        // echo "Respuesta 2 es correcta.";
        $mensaje2 =$ok;
        $puntos +=20;
    }else{
        // echo "Respuesta 2 NO es correcta.";
        $mensaje2 =$bad;
    }
    if($preg_3==$resp_3){
        // echo "Respuesta 3 es correcta.";
        $mensaje3 =$ok;
        $puntos +=20;
    }else{
        // echo "Respuesta 3 NO es correcta.";
        $mensaje3 =$bad;
    }
    if($preg_4==$resp_4){
        // echo "Respuesta 4 es correcta.";
        $mensaje4 =$ok;
        $puntos +=20;
    }else{
        // echo "Respuesta 4 NO es correcta.";
        $mensaje4 =$bad;
    }
    if($preg_5==$resp_5){
        // echo "Respuesta 5 es correcta.";
        $mensaje5 =$ok;
        $puntos +=20;
    }else{
        // echo "Respuesta 5 NO es correcta.";
        $mensaje5 =$bad;
    }
    
        // puntos
    $resultado= $puntos;
    if($puntos>=60){
        $resultado = "Aprobo el test matematico";
    }else{
        $resultado = "Segui estudiando pa";
    }

}




echo "<p><h1>Test matemático</h1></p>
<form name='form1' method='post' action='preguntas.php'>
 

  <p><b>1) Cuanto es 4+4?</b> $mensaje1  </p>
    8<input type='radio' name='preg_1'  value='8' />
    12<input type='radio' name='preg_1' value='12' />
    16<input type='radio' name='preg_1' value='16' />
  </p>


  <p><b>2) Raiz cuadrada de 9?</b> $mensaje2 </p>
  <p>
    3<input type='radio' name='preg_2'  value='3' />
    2<input type='radio' name='preg_2'  value='2' />
    6<input type='radio' name='preg_2'  value='6' />
  </p>
   <p><b>3) 25 + 25?</b> $mensaje3 </p>
  <p>
    50<input type='radio' name='preg_3'  value='50' />
    40<input type='radio' name='preg_3'  value='40' />
    22<input type='radio' name='preg_3' value='22' />
  </p>
   <p><b>4) 1000 / 10 / 10 / 10?</b> $mensaje4 </p>
  <p>
    100<input type='radio' name='preg_4'  value='100' />
    2<input type='radio' name='preg_4'  value='2' />
    1<input type='radio' name='preg_4'  value='1' />
  </p>
   <p><b>5) 3 al cubo?</b> $mensaje5 </p>
  <p>
    9<input type='radio' name='preg_5' value='9' />
    27<input type='radio' name='preg_5' value='27' />
    18<input type='radio' name='preg_5' value='18' />
  </p>
  
  <input type='submit' value='verificar resultados'/> $resultado</form>";

?>