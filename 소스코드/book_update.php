<?php 
    session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php 
    $title = $_REQUEST["title"];
    $author = $_REQUEST["author"];
	$publisher = $_REQUEST["publisher"];
	$year = $_REQUEST["year"];
	$class = $_REQUEST["class"];
    
    require("db_connect.php");

        if (!($title && $author && $publisher && $year && $class)) {
?>
            <script>
                alert('빈칸 없이 입력해야 합니다.');
                history.back();
            </script>
<?php            
        } else {
			$s = implode(', ', $class);
            $db->exec("update booklist set title='$title', author='$author', publisher='$publisher', year='$year', class='$s' where title='$title'");
            
            $_SESSION["title"] = $title;
?>            
            <script>
                alert('수정이 완료되었습니다.');
                opener.location.reload();
                window.close();
            </script>
<?php            
        }
?>
</body>
</html>
