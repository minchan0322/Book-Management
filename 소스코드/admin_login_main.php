<?php
    session_start();
?>

<!doctype html>
<html>
<head>
	<title>관리자 로그인</title>
    <meta charset="utf-8">
</head>
<body>
<center> 
<h1>관리자 로그인</h1>
&ensp;
<?php
    if (empty($_SESSION["name"])) {
?>        
        <form action="admin_login.php" method="post">
            아이디:   <input type="text"     name="id">&ensp;
            비밀번호: <input type="password" name="pw">&ensp;
            <input type="submit" value="로그인">
            <input type="button" value="회원 가입" 
                   onclick="window.open('admin_join_form.php', 'popup', 'width=500, height=300')">
        </form>&ensp;&ensp;&ensp;
		<form action="main.php" method="post">
			<input type="submit" value="메인으로">
<?php
    } else {
?>
        <form action="logout.php" method="post">
            <h2><?=$_SESSION["name"]?>님 로그인
            <input type="submit" value="로그아웃">
            <input type="button" value="관리자정보 수정" 
                   onclick="window.open('admin_update_form.php', 'popup', 'width=500, height=300')">
				   </h2>
		<h2>
		</form>
		<form action="book_plus.php" method="post">
			<input type="submit" value="도서 등록">
		</form>
		<form action="book_updel.php" method="post">
			<input type="hidden" name="id" value="<?=$_SESSION["id"]?>">
			<input type="submit" value="도서 수정 및 삭제">
		</form>
		<form action="admin_delete.php" method="get">
			<input type="hidden" name="id" value="<?=$_SESSION["id"]?>">
			<input type="submit" value="회원탈퇴" onclick="if(!confirm('탈퇴하시면 복구할 수 없습니다. \n 정말로 탈퇴하시겠습니까?')){return false;}">
		</form>
		<h2>
<?php        
    }
?>
</center>
</body>
</html>