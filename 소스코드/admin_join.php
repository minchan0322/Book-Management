<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
	$id = $_REQUEST["id"];
	$pw = $_REQUEST["pw"];
	$name = $_REQUEST["name"];
	$phonenum = $_REQUEST["phonenum"];
	$addr = $_REQUEST["address"];
	
	require("db_connect.php");
	
	if ( !($id && $pw && $name && $phonenum && $addr)) { // 빈칸이 하나라도 있으면
?>
		<script>
			alert("빈칸 없이 입력해야 합니다.");
			history.back();
		</script>
<?php
	} else if ($db->query("select * from admin where id='$id'")->fetch()) { //이미 있는 아이디 이면
?>
		<script>
			alert("이미 등록된 아이디 입니다.");
			history.back();
		</script>
<?php
	} else {		
		$db->exec("insert into admin values ('$id', '$pw', '$name', '$phonenum', '$addr')");
?>
		<script>
			alert("가입이 완료되었습니다!");
			window.close();
		</script>
<?php
	}
?>


</body>
</html>
