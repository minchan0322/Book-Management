<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<center>
<h1>도서 검색</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
            <div class="" style="text-align: center; padding: 10px">
			<style>
                table     { width:1380px; text-align:center; }
                th        { background-color:yellowgreen; }
				td		{text-align:left; border:1px solid gray;}
                
                .isbn      { width: 180px; }
                .title    { width:1530px; }
                .author   { width:600px; }
                .publisher  { width:600px; }
				.year  { width:180px; }
				.class { width:180px; }
            
                a         { text-decoration:none; }    
                a:link    { color:blue; }
                a:visited { color:gray; }
                a:hover   { color:red;  }
               
                .left     { text-align:left; }
            </style>

                <input type="text" name="title" placeholder="제목" maxlength="100" style="width: 500px;">
                <input type="text" name="author" placeholder="저자" maxlength="20" style="width: 150;">
                <input type="text" name="publisher" placeholder="출판사" maxlength="20" style="width: 150;">
                <input type="text" name="year" placeholder="출판년도" maxlength="4" style="width: 100px;">
                <input type="submit" name="search" value="검색" maxlength="5" style="width: 150;">
                <input type="reset" value="모두 지우기">
				<input type="button" value="관리자 홈으로" onclick="location.href='admin_login_main.php'">
            </div>
        </form>
		
<table>&nbsp;&nbsp;
    <tr>
		<th class="isbn">ISBN</th>
		<th class="title" width="1000">제목</th>
		<th class="author">저자</th>
		<th class="publisher">출판사</th>
		<th class="year">출판년도</th>
		<th class="class">분류</th>
		<th class="update">수정</th>
		<th class="delete">삭제</th>
	</tr>

<?php
	require("db_connect.php");
	$title = $_POST['title'] ?? "";
	$author = $_POST['author'] ?? "";
	$publisher = $_POST['publisher'] ?? "";
	$year = $_POST['year'] ?? "";
	if($title) { 
	$query = $db->query("select * from booklist where title like '%$title%'");
	} elseif($author) { 
	$query = $db->query("select * from booklist where author like '%$author%'");
	} elseif($publisher) { 
	$query = $db->query("select * from booklist where publisher like '%$publisher%'");
	} elseif($year) { 
	$query = $db->query("select * from booklist where year like '%$year%'");
	} else {
	$query = $db->query("select * from booklist");
	}
	while ($row = $query->fetch()) {
		$title = $row["title"];
		$author = $row["author"];
		$publisher = $row["publisher"];
		$year = $row["year"];
		$class = $row["class"];
?>
    <tr>
		<td><center><?=$row["isbn"]?></td>
		<td><?=$row["title"]?></td>
		<td><?=$row["author"]?></td>
		<td><?=$row["publisher"]?></td>
		<td><center><?=$row["year"]?></td>
		<td><center><?=$row["class"]?></td>
		<td><center>
			<input type="button" value="수정"
					onclick="window.open('book_update_form.php?title=<?=$row["title"]?>', 'popup', 'width=1000, height=500')">
		</td>
		<td><center>
		<form action="book_delete.php?title=<?=$row["title"]?>" method="post">
			<input type="submit" value="삭제" onclick="if(!confirm('삭제하시면 복구할 수 없습니다. \n 정말로 삭제하시겠습니까?')){return false;}">
		</form>
		</td>
	</tr>
<?php
	}
?>
</table>

</body>
</html>