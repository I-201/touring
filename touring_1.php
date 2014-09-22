<?php

session_start();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>touring_page1</title>
</head>

<body>
<p><?php echo"ようこそ".$_SESSION['id']."さん" ?></p><hr>
<p>Profile</p>

<table border="1" width="250" cellspacing="0" cellpadding="5" bordercolor="#333333">
<tr>
<th bgcolor="#FFFFFF"><font color="black"></font>項目</th>
<th bgcolor="#cccccc" width="150"><font color="black">内容</font></th>
</tr>
<tr>
<td bgcolor="#cccccc" align="center" nowrap>ID</td>
<td bgcolor="#FFFFFF" valign="top" width="150">内容</td>
</tr>
<tr>
<td bgcolor="#cccccc" align="center" nowrap>名前</td>
<td bgcolor="#FFFFFF" valign="top" width="150">内容</td>
<tr>
<td bgcolor="#cccccc" align="center" nowrap>E-Mail</td>
<td bgcolor="#FFFFFF" valign="top" width="150">内容</td>
</tr>
<tr>
<td bgcolor="#cccccc" align="center" nowrap>Pass</td>
<td bgcolor="#FFFFFF" valign="top" width="150">内容</td>
</tr>
<tr>
<td bgcolor="#cccccc" align="center" nowrap>作成日</td>
<td bgcolor="#FFFFFF" valign="top" width="150">内容</td>
</tr>
</table>

</body>
<html>