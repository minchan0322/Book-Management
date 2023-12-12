<?php
	$title = $_REQUEST["title"];
    
    require("db_connect.php");

    $query = $db->query("select * from booklist where title='$title'");
	
    $row = $query->fetch();
    $title = $row["title"];
    $author = $row["author"];
	$publisher = $row["publisher"];
	$year = $row["year"];
	$class = $row["class"];
	
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="book_update.php" method="post">
    <table>
        <tr>
            <td>책 제목</td>
            <td><input type="text" name="title" value="<?=$title?>"></td>
        </tr>
        
        <tr>    
            <td>저자</td>
            <td><input type="text" name="author" value="<?=$author?>"></td>
        </tr>
        
        <tr>
            <td>출판사</td>
            <td><input type="text" name="publisher" value="<?=$publisher?>"></td>
        </tr>
		<tr>
            <td>출판년도</td>
            <td><input type="text" name="year" value="<?=$year?>"></td>
        </tr>
		<tr>
            <td>분류</td><td>
					<input type="checkbox" name="class[]" value="총류">총류
					<input type="checkbox" name="class[]" value="철학">철학
					<input type="checkbox" name="class[]" value="종교">종교
					<input type="checkbox" name="class[]" value="사회과학">사회과학
					<input type="checkbox" name="class[]" value="자연과학">자연과학
					<input type="checkbox" name="class[]" value="기술과학">기술과학
					<input type="checkbox" name="class[]" value="예술">예술
					<input type="checkbox" name="class[]" value="언어">언어
					<input type="checkbox" name="class[]" value="문학">문학
					<input type="checkbox" name="class[]" value="역사">역사</td>
 
        </tr>
        </table>
    <input type="submit" value="수정">
</form>
</body>
</html>
