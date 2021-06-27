<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T28 - Ejercicio 4</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorFuente;
  private $colorFondo;
  public function __construct($tit,$ubi,$colorFuen,$colorFond)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorFuente=$colorFuen;
    $this->colorFondo=$colorFond;
  }
  public function graficar()
  {
    echo '<div style="font-family: Segoe UI;font-size:28px;text-align:'.$this->ubicacion.';color:';
    echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('Título de la cabecera con color y fondo','center','#FF1A11','#CDE7E7');
$cabecera->graficar();
?>

</body>
</html>