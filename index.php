<?php
    $btnAll = ["C", "7", "8", "9", "&plus;", "=", "4", "5", "6", "&minus;", "E", "1", "2", "3", "&times;", ".", "0","&divide;"];
    $btns = "<div class='btns'>";
    $display = "Type as much stuff as possible to see what happens.";

    $msg = "<p>Nothing has been clicked.</p>";

    foreach($btnAll as $key => $value){
        if($key % 5 == 0){
            $btns .= "</div><div class='btns'><input type='submit' name='btn-submit' value='$value'  />";
            continue;
        }
        $btns .= "<input type='submit' name='btn-submit' value='$value'  />";
    }

    if(isset($_GET["btn-submit"])){
        $msg .= "<p>Clicked</p>";
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
        <form id="display-area" action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <?= $display ?>
        </form>
        <div id="btn-area">
            <?= $btns ?>
        </div>
        <div>
            <?= $msg ?>
        </div>
    </div>
</body>
</html>