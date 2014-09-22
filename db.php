<?php

session_start();

$link = mysql_connect('localhost', 'dbuser', 'dbuser');

if (!$link) {
	die('接続失敗です。'.mysql_error());
}

	// print("<p>接続に成功。</p>");

$db_selected = mysql_select_db('bike_sns_php', $link);
if (!$db_selected){
	die('データベース選択失敗です。'.mysql_error());
}

	// print("<p>データベース選択成功。</p>");

mysql_set_charset('utf8');

$result = mysql_query('SELECT * FROM users');
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}


while ($row = mysql_fetch_assoc($result)) {

// 中身確認用
	// printf("<p>");
 //    print("id=".$row['id']);
 //    print(" name=".$row['name']);
 //    print(" email=".$row['email']);
 //    print(" pass=".$row['password']);
 //    print(" create=".$row['created']);
	// printf("</p>");


	if ($_POST['id']===$row['id'] && $_POST['pass']===$row['password']) {
		    // print("id=".$row['id']);
		    // print(" pass=".$row['password']);

		    $_SESSION['id'] = $row['id'];
		    // print("session['id']= ".$_SESSION['id']);

		header("HTTP/1.1 301 Moved Permanently");
		header("Location: http://localhost/touring/touring_1.php");
		exit();
	}

}
echo "ログイン失敗";

mysql_close($link);

?>
