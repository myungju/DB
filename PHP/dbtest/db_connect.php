<?php
    $db_host = "";
    $db_user = "";
    $db_passwd = "";
    $db_name = "";
    $conn = mysqli_connect($db_host,$db_user,$db_passwd,$dbname);
    if(mysqli_connect_errno($conn)){
        echo "데이터베이스 연결 실패" .mysqli_connect_error();
    }
    else{
        echo "성공";
    }
?>

<html>
<head>
</head>
<body>
</body>
</html>