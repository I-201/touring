<?php
$dsn = 'mysql:dbname=touring;host=localhost';
$user = 'root';
$password = 'root';

try{
	print("接続完了\n");
    $dbh = new PDO($dsn, $user, $password);

$dbh->query('SET NAMES sjis');

    $sql = 'select name from image';
    foreach ($dbh->query($sql) as $row) {
        print($row['name'].'<br>');
	}

$dbh->query('SET NAMES sjis');
	$sql = 'select name ,X(latlng),Y(latlng),ASTEXT(latlng) from image';
	foreach ($dbh->query($sql) as $row) {
	        print($row['geom'].'<br>');
		}


}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>
