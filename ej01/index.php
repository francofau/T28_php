<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T28 - Ejercicio 1</title>
</head>
<body>
<?php
  class Empleado {
    private $nombre;
    private $sueldo;
    public function inicializar($nom,$sue)
    {
      $this->nombre=$nom;
      $this->sueldo=$sue;
    }
    public function pagaImpuestos()
    {
      echo $this->nombre;
      echo ' ';
      if ($this->sueldo>3000)
        echo 'paga impuestos'.'<br>';
      else
        echo 'no paga impuestos'.'<br>';
    }
  }

  $empleado1=new Empleado();
  $empleado1->inicializar('Franco',2995);
  $empleado1->pagaImpuestos();
  $empleado1=new Empleado();
  $empleado1->inicializar('Gabriel',6100);
  $empleado1->pagaImpuestos();
?>
</body>
</html>