<html>
<head>
 <title>calculos matematicos</title>
 </head>
 <body>
  <form action="" method="post"	>

   <input type="text" name="numero1">
   <select name="opciones">
    <option value="0">Sumar</option>
    <option value="1">Restar</option>
    <option value="2">Multiplicar</option>
    <option value="3">Dividir</option>
   </select>
   <input type="text" name="numero2"><br>
   <input type="submit" name="calcular" value="calcular">

  </form>

 </body>
 </html>
 <?php

include ('clase.php');
include ('suma.php');
include ('resta.php');
include ('multiplicacion.php');
include ('division.php');
 if(isset($_POST['calcular'])){
  $n1=$_POST['numero1'];
  $n2=$_POST['numero2'];
  $op=$_POST['opciones'];
  
  switch($op){
  case 0:
  $operacion = new suma($n1,$n2);
  echo 'La suma es:'.'</br>'.$operacion->sumar();
  break;
  case 1:
  $operacion = new resta($n1,$n2);
  echo 'La resta es:'.'</br>'.$operacion->restar();
  break;
  case 2: 
  $operacion = new multiplicacion($n1,$n2);
  echo 'El producto es:'.'</br>'.$operacion->multiplicar();
  break;
  case 3:
  $operacion = new Division($n1,$n2);
  echo 'El cociente es:'.'</br>'.$operacion->dividir();
  break;
  }
  
  
 }
 ?>