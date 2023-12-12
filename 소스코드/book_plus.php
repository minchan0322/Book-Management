<!doctype html>
<html>
<head>
	<title>도서 추가</title>
    <meta charset="utf-8">
</head>
<body>
<center>
	<h2>도서 추가하기</h2>
	<h3>등록할 책 정보를 입력해주세요</h3><hr>
	<form action="book_plus_check.php" method="post">
		<table>
			<tr>
				<td>책 제목</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>작가</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td>출판사</td>
				<td><input type="text" name="publisher"></td>
			</tr>
			<tr>
				<td>출판년도</td>
				<td><input type="text" name="year" placeholder="숫자 4자">년
			</tr>
			<tr>
				<td>책 분류</td>
				<td>
					<input type="checkbox" name="class[]" value="총류">총류
					<input type="checkbox" name="class[]" value="철학">철학
					<input type="checkbox" name="class[]" value="종교">종교
					<input type="checkbox" name="class[]" value="사회과학">사회과학
					<input type="checkbox" name="class[]" value="자연과학">자연과학
					<input type="checkbox" name="class[]" value="기술과학">기술과학
					<input type="checkbox" name="class[]" value="예술">예술
					<input type="checkbox" name="class[]" value="언어">언어
					<input type="checkbox" name="class[]" value="문학">문학
					<input type="checkbox" name="class[]" value="역사">역사
					&nbsp;&nbsp;&nbsp;<input type="reset" value="모두 지우기"></td>
			</tr>
		</table>
		<input type="submit" value="도서 등록"><br><br>
	</form>
	<form action="admin_login_main.php" method="post">
		<input type="submit" value="관리자 홈으로">
</form>
</body>
</html>
