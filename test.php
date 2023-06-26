<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <?
    // require_once('./Config/config.php');
    // require_once('./Config/db.php');
    // require_once('./Config/common.php');
    // $db =Db::getInstance();
    // $result = $db->first("select * from hemayat", true);
    // echo $result['Year'];



    require_once("./Config/main.php");
    $isges = !isset($_SESSION['suname']);
    $db = Db::getInstance();
    $us = $_SESSION['suname'];
    $records = $db->doquery("select * from hemayat where user='$us'");
    dump($records);



    ?>
</body>

</html>