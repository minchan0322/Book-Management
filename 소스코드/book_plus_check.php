<?php	
	require("db_connect.php");

	$title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
	$year = $_POST["year"];
	$class = $_POST["class"];
	
	if ( !($title && $author && $publisher && $year)) { // 빈칸이 하나라도 있으면
?>
		<script>
			alert("빈칸 없이 입력해야 합니다.");
			history.back();
		</script>
		
<?php
	} else {
		$s = implode(', ', $class);
	    $query = $db->exec("insert into booklist (title, author, publisher, year, class)
							values ('$title', '$author', '$publisher', '$year', '$s')");
	
	echo "<h3><center>추가할 책의 제목은 {$title}, 작가명은 {$author}, 출판사는 {$publisher}, 출판 년도는 {$year}, 분류는 {$s}</h3>";
?>
		<script>
			alert("등록이 완료되었습니다!");
			window.close();
		</script>
<?php
	}
?>
<!doctype html>
<html>
<head>
	<title>도서 등록</title>
    <meta charset="utf-8">
</head>
<body>
<center>
	<form action="book_plus.php" method="post">
		<input type="submit" value="다른도서 등록">
	</form>
	<form action="admin_login_main.php" method="post">
		<input type="submit" value="관리자 홈으로">
	</form>
</body>
</html>