<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="admin_join.php" method="post">
    <table>
        <tr>
            <td>아이디</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td>성명</td>
            <td><input type="text" name="name"></td>
        </tr>
		<tr>
            <td>전화번호</td>
            <td><input type="text" name="phonenum" placeholder=" ' - ' 없이 숫자만 입력"></td>
        </tr>
		<tr>
            <td>주소</td>
            <td><input type="text" name="address"></td>
        </tr>
    </table>    
    <input type="submit" value="가입 완료"> 
</form>

</body>
</html>
