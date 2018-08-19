<html>
<body>
<?php

class entity{
  public $kind = -1;
  public $lat = 0;
  public $longi = 0;
  public $avrat = 0;
  public $review = "";
  public $noofrate = 0;
  public $noofacc = 0;
}
  
  function convert($arr)
  {
    $obj = new entity();
    $obj->kind = $arr['kind'];
    $obj->lat = $arr['lat'];
    $obj->longi = $arr['longi'];
    $obj->avrat = $arr[3];
    $obj->review = $arr[4];
    $obj->noofrate = $arr[5];
    $obj->noofacc = $arr[6];
    return $obj;
  }
  
$lat = $_GET['lat'];
$longi = $_GET['longi'];

$obj = new entity();
  
 $con=mysqli_connect("den1.mysql2.gear.host","vivasa","Se9kZQ-_GnnF","vivasa");
  $sql = "select * from vivasa;";
  $sql2 = "select count(*) from vivasa;";
  
  $temp = mysqli_query($con,$sql2);
  $counta = mysqli_fetch_row($temp);
  $count = $counta[0];
  
  	$out = mysqli_query($con,$sql);
  	//$row = mysqli_fetch_row($out);
  
    while($x = mysql_fetch_array($out, MYSQL_ASSOC)) {
     $obj = convert($x);
      echo json_encode($obj);
   }
  
  //echo json_encode($obj);
echo "2";
  //echo $count;


?>
</body>
</html>
