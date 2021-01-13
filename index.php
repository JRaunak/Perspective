<?php
    require_once "pdo.php";
    $id = $_GET["id"];
    $stmt = $pdo->query("SELECT Video_Name FROM perspective WHERE Video_Group = $id");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $Vid1 = htmlentities($rows[0]);
    $Vid2 = htmlentities($rows[1]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, no-cache, no-store">
    <title>Singhvi</title>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="container">

        <video src="<?=$Vid1?>" type="video/mp4" autoplay id="v1" onclick="V1(); return false;"></video>
        <video src="<?=$Vid2?>" type="video/mp4" autoplay id="v2" onclick="V2(); return false;"></video>
        <button id="control" onclick="Toggle()"><img
                src="https://cdn2.iconfinder.com/data/icons/simple-ui-games/512/1-128.png" width="30vw"></button>

    </div>
</body>
<script>
    var run = false;
    document.getElementById("v1").volume = 1;
    document.getElementById("v2").volume = 0;
</script>

</html>