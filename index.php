<html>
<body>
<form name="mat" method="post" action="index.php">
<input type="text" name="a" />
<select name="opr">
<option value="">Operador</option>
<option value="+">Sumar</option>
<option value="-">Restar</option>
<option value="*">Multiplicar</option>
<option value="/">Dividir</option>
</select>
<input type="text" name="b" />
<input type="submit" name="ej" value="Ejecutar" />
</form>
<?php
hola q tal: 
como estas_
if(isset($_POST['ej']))
{
include('calculadora.php');

$objeto = new calculadora();
$objeto->a=$_REQUEST['a'];
$objeto->b=$_REQUEST['b'];
$objeto->opr=$_REQUEST['opr'];
$objeto->operar();



echo "Resultado= $objeto->result<br><br>";
}

?>

</body>
</html>