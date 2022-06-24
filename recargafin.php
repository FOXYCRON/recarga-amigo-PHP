<html>
 <head>
    <title> Recarga </title>
 </head>
  <body background="descarga.jpg";>

<form method = "post" action = "recargafin.php">
<center>
<font face = arial color = "blue"> <b> 
 <?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Tu recarga se ah finalizado con exito ";
  echo "<br>";
echo " Tu paquete: " .$rec;
  echo "<br>";
echo "Tu compañia: " .$comp;
  echo "<br>";
echo "Tu numero: " .$num;
  echo "<br>";


?>

</font>

<br>
<br>
     ¿Deseas hacer otra recarga?
<input type = "button" value = "Regresar" onclick = "window.location = 'recarga.php';">
    
</center>

  </body>
</html>