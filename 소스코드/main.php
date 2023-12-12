<?php
	require("db_connect.php");
?>
<!doctype html>
<html>
<head>
	<title>신구 도서</title>
    <meta charset="utf-8">
</head>
<body>
	<center>
	<h1>신구 도서</h1>
		<h2>
		<form action="book_list.php" method="post">
			<input type="submit" value="도서검색"><br><br>
		</form>
		<form action="admin_login_main.php" method="post">
			<input type="submit" value="관리자 로그인">
		</form>
		</h2>
	</center>
</body>
</html>