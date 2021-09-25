<html>
	  <head>
	  	<title>Formulario Jorge Mendez</title>
	    <link rel="stylesheet" type="text/css" href="estilo.css">
	  </head>
	  <body>
	  	 <div class ="form">
	  	 	<form action="guardar.php" method="POST">
	  	 		<p> Rica Sorpresa</p>
	  	 		<label for="nombre">Su nombre</label>
	  	 		<br>
	  	 		<input type="text" name="nombre" placeholer="Nombre" required>
	  	 		<p>Correo</p>
	  	 		<label for= "correo">Direccion De Correo</label>
	  	 		<br>
	  	 		<input type="email" name="correo" placeholder="colombina@gmail.com" required>
	  	 		<p>Mensaje</p>
	  	 		<label for="mensaje"> Su Mensaje</label>
	  	 		<br>
	  	 		<textarea name="mensaje" placeholder= "Mensaje" required></textarea>
	  	 		<br>
	  	 		<br>
	  	 		<input type="submit" value="enviar">
	  	 	</form>
	  	 </div>
	  	</body>
	</html>
<?php
if (isset($_POST["submit"]))
{
   switch ($_POST["operador"])
   // Por medio de esta lia se define el operador a realizar 
   {
   	// se presentan los casos a operar por separado
      case "suma":
           $resultado = $_POST ["operando1"] + $_POST["operando2"];
           // con la función break dinalizamos al ejecución estructurada
            break;
      case "resta":
           $resultado = $_POST ["operando1"] - $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
      case "multiplicacion":
           $resultado = $_POST ["operando1"] * $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
       case "division":
      if ($_POST ["operando2"]==0)
           {
               echo "No es posible dividir entre cero.";
           }
           else
           {
           $resultado = $_POST ["operando1"] / $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
           } 
   }

}
?>

<html>
<head><title>Calculadora Colombina</title></head>
<body>
<form action="index.php" method="post">
<table border="0">
<tr><td>Numero 1</td><td></td><td>Numero 2</td><td></td></tr>
<tr><td><input type="text" name="operando1"/></td>
<td>
<select name="operador">
	<option value="suma">+</opcion>
	<option value="resta">-</option>
	<option value="multiplicación">*</opcion>
	<option value="división">/</opcion>
</select>
</td>
<td><input type="text" name="operando2"/></td>
<td><input type="submit" name="submit" value="Presione y tendra su resultado" /></td>
</tr>
</table>
</form>
<?php
// Se crea el if para ver si la variable resultado existe, si existe puede imprimir el mensaje. En caso contrario no se realiza acción
if (isset($resultado)) 
{ 
echo "El resulatdo es: {$resultado}";
}
?>
</body>
</html>
