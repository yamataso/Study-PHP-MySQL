<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample04</title>
</head>
<body>
<?php
    $db = new mysqli("localhost:8889", "root", "root", "mydb");
    $messeage = "フォームからのメモです";
    $stmt = $db->prepare('insert into memos(memo) values(?)');
    if (!$stmt):
        die($db->error);
    endif;
    $stmt->bind_param("s", $messeage);
    $ret = $stmt->execute();
    if ($ret):
        echo "データを挿入しました";
    else:
        echo $db->error;
    endif;
    ?>
</body>
</html>