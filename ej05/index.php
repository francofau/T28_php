<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T28 - Ejercicio 5</title>
</head>
<body>
<?php
class Tabla {
  /* valores que van a estar en la tabla */
  private $mat=array();
  /* dimensión de la tabla f*c*/
  private $cantFilas;
  private $cantColumnas;

  /*  constructor que recibe los parámetros */
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  /* cargamos los datos */
  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }

  public function inicioTabla()
  {
    echo '<table border="2">';
  }
    
  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(3,6);
$tabla1->cargar(1,1,"1");
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"3");
$tabla1->cargar(1,4,"4");
$tabla1->cargar(1,5,"5");
$tabla1->cargar(1,6,"6");
$tabla1->cargar(2,1,"1");
$tabla1->cargar(2,2,"2");
$tabla1->cargar(2,3,"3");
$tabla1->cargar(2,4,"4");
$tabla1->cargar(2,5,"5");
$tabla1->cargar(2,6,"6");
$tabla1->cargar(3,1,"1");
$tabla1->cargar(3,2,"2");
$tabla1->cargar(3,3,"3");
$tabla1->cargar(3,4,"4");
$tabla1->cargar(3,5,"5");
$tabla1->cargar(3,6,"6");
$tabla1->graficar();
?>

</body>
</html>