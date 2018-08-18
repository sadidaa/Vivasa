<html>
<body>
<?php
echo "dawdwda \n";
?>
 <!-- <?php
   $con=mysqli_connect("den1.mysql2.gear.host","vivasa","Se9kZQ-_GnnF","vivasa");
   $sql="CREATE TABLE table1(Username CHAR(30),Password CHAR(30),Role CHAR(30))";
   $sql2="INSERT INTO table1 VALUES ('Dawawdwad','htd','25')";
   $sql3 = "select * from table1";
    //echo mysql_fetch_row(mysqli_query($sql3))[0] ;
     
$result = mysqli_query($con,"select * from table1");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // the email value

echo $_GET['a'];
?>
-->
<?php
	$kind = $_GET('kind');
    $lat = $_GET('lat');
    $longi = $_GET('longi');
    $avrat = $_GET('avrat');
    $review = $_GET('review');
    $noofrat = $_GET('noofrat');
    $noofacc = $_GET('noofacc');

    $con=mysqli_connect("den1.mysql2.gear.host","vivasa","Se9kZQ-_GnnF","vivasa");
    $sql = mysqli_connect("insert into vivasa values($lat,$longi,$avrat,$review,$noofrat,$noofacc);");

    echo " Wrote to database \n\n";
?>
</body>
</html>