<?php
    $btnAll = ["C", "7", "8", "9", "&plus;", "=", "4", "5", "6", "&minus;", "E", "1", "2", "3", "&times;", ".", "0","&divide;"];

    $btns = "";
    foreach($btnAll as $key => $value){
        $btns .= "<input class='btns' type='submit' name='btn-submit' value='$value'  />";
    }

    $msg = "<p>Nothing has been clicked.</p>";
    $display = "";

    session_start();

    if(!isset($_SESSION['display'])){
        $_SESSION["display"] = [];
    }

    if(isset($_GET["btn-submit"])){
        array_push($_SESSION["display"], $_GET["btn-submit"]);
        $display = implode("", $_SESSION["display"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"></link>
    <title>PHP Calculator - BEDMASS</title>
</head>
<body>
    <div id="container">
        <div id="display-area">
            <?= $display ?>
        </div>
        <form id="btn-area" action="<?= $_SERVER['PHP_SELF']?>" method="get" id="btn-area">
            <?= $btns ?>
        </form>
        <div>
            <?= $msg ?>
        </div>
    </div>
</body>
</html>