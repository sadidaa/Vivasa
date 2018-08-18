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

    $con=new mysqli("den1.mysql2.gear.host","vivasa","Se9kZQ-_GnnF","vivasa");
    $sql = "insert into vivasa values($kind,$lat,$longi,$avrat,'$review',$noofrat,$noofacc);";
    $sql2 = "select (*) from vivasa;";
		
	mysqli_query($con);	
	
    /*if($con->query($sql) === TRUE){
        echo "Succes\n";
    }else{
        echo "Fail\n";
    }*/
    //echo mysqli_query($con,$sql2);

    //echo $lat;

   // echo "Wrote to database \n\n";*/
	echo '2';
	echo $kind;
?>

</body>
</html>
