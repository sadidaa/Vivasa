<html>
<body>

<?php
    $kind = $_GET['kind'];
    $lat = $_GET['lat'];
    $longi = $_GET['longi'];
    $avrat = $_GET['rating'];
    $review = $_GET['review'];
    $noofrat = $_GET['noofrat'];
    $noofacc = $_GET['noofacc'];

    $con=mysqli_connect("den1.mysql2.gear.host","vivasa","Se9kZQ-_GnnF","vivasa");
    //$sql = "insert into vivasa values((int)$kind,(float)$lat,(float)$longi,(float)$avrat,$review,(int)$noofrat,(int)$noofacc);";
	$a = "ooo";
	
	//The following works
	$sql = "insert into vivasa values((int)$kind,3,4,5,$kind,4,3);";
	
	$sql2 = "select count(*) from vivasa;";
		//dawdwa
	//$temp = mysqli_query($con);	
	$store = mysqli_query($con,$sql);
	$store1 = mysqli_query($con,$sql2);
	if (!$store){
		echo 'fail';
	}
	$row = mysqli_fetch_row($store1);
	echo $row[0];
    /*if($con->query($sql) === TRUE){
        echo "Succes\n";
    }else{
        echo "Fail\n";
    }*/
    //echo mysqli_query($con,$sql,$sql2);

    //echo $lat;

   // echo "Wrote to database \n\n";*/
	echo '2';
	echo $review;
	mysqli_close($con);
	echo gettype($kind);
?>

</body>
</html>
