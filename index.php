<html>
<body>

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

    mysqli_query($con,$sql);

    echo "Wrote to database \n\n";
?>
</body>
</html>