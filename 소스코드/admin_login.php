<?php 
    $id = $_REQUEST["id"];
    $pw = $_REQUEST["pw"];
    
		require("db_connect.php");
        $query = $db->query("select * from admin where id='$id' and pw='$pw'");
        if ($row = $query->fetch()) {
            session_start();
            
            $_SESSION["id"] = $row["id"  ];
            $_SESSION["name"] = $row["name"];
            
            header("Location:admin_login_main.php");
            exit;
        }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<script>
    alert('아이디 또는 비밀번호가 틀렸습니다.');
	history.back();
</script>

</body>
</html>
