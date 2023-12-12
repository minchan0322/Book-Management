<?php
    session_start();
    $id = $_SESSION["id"];
    
    require("db_connect.php");
    
    $query = $db->query("select * from admin where id='$id'");
    $row = $query->fetch();
        
    $pw = $row["pw"];
    $name = $row["name"];
	$phonenum = $row["phonenum"];
	$address = $row["address"];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="admin_update.php" method="post">
    <table>
        <tr>
            <td>아이디</td>
            <td><input type="text" name="id" readonly value="<?=$id?>"></td>
        </tr>
        
        <tr>    
            <td>비밀번호</td>
            <td><input type="password" name="pw" value="<?=$pw?>"></td>
        </tr>
        
        <tr>
            <td>이름</td>
            <td><input type="text" name="name" value="<?=$name?>"></td>
        </tr>
		<tr>
            <td>전화번호</td>
            <td><input type="text" name="phonenum" value="<?=$phonenum?>"></td>
        </tr>
		<tr>
            <td>주소</td>
            <td><input type="text" name="address" value="<?=$address?>"></td>
        </tr>
        </table>
    <input type="submit" value="수정">
</form>
</body>
</html>
