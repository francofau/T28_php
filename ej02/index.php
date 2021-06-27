<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T28 - Ejercicio 2</title>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  public function menuHorizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo $this->enlaces[$f].$this->titulos[$f];
      echo " - ";
    }
  }
  public function menuVertical()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo $this->enlaces[$f].$this->titulos[$f];
      echo "<br>";
    }
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('Opción 1 ','Título 1 ');
$menu1->cargarOpcion('Opción 2 ','Título 2 ');
$menu1->cargarOpcion('Opción 3 ','Título 3 ');
$menu1->cargarOpcion('Opción 4 ','Título 4 ');
$menu1->cargarOpcion('Opción 4 ','Título 5 ');
$menu1->menuVertical();
echo "<br>";
$menu1=new Menu();
$menu1->cargarOpcion('Opción 1 ','Título 1 ');
$menu1->cargarOpcion('Opción 2 ','Título 2 ');
$menu1->cargarOpcion('Opción 3 ','Título 3 ');
$menu1->cargarOpcion('Opción 4 ','Título 4 ');
$menu1->cargarOpcion('Opción 4 ','Título 5 ');
$menu1->menuHorizontal();
?>
</body>
</html>