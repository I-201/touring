<html>
<head>
<title>PHP TEST</title>
</head>
<body>

<?php
$link = mysql_connect('localhost', 'dbuser', 'dbuser');

if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print("<p>接続に成功。</p>");

$db_selected = mysql_select_db('bike_sns_php', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print("<p>データベース選択成功。</p>");

mysql_set_charset('utf8');

$result = mysql_query('SELECT * FROM users');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}


while ($row = mysql_fetch_assoc($result)) {
	printf("<p>");
    print("id=".$row['id']);
    print(" name=".$row['name']);
    print(" email=".$row['email']);
    print(" pass=".$row['password']);
    print(" create=".$row['created']);
	printf("</p>");
}



mysql_close($link);

?>
</body>
</html>