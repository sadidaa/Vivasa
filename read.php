<html>
<body>
<?php

class entity{
  public $a = 5;
  public $c = 6;
}
$lat = $_GET['lat'];
$longi = $_GET['longi'];

$obj = new entity();
$obj->a = 3;

   echo json_encode($obj);




echo "1";


?>
</body>
</html>
