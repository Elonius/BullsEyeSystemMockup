<?php
$projectRoot = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . '/Systems_Mockup_ReportSystem';
require_once ($projectRoot . '/utils/ChromePhp.php');

$option = filter_input(INPUT_POST, "submit");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../styles.css">
        <script src="../main.js"></script>
        <title>BullsEye System - Mockup 1.0</title>
    </head>
    <body>
        <?php echo "<form action=" . $option . ".php method=POST" ?>
        <form action=.php" method="POST">
            <h1>Select Store</h1>
            <select name="store">
                <option>Saint John</option>
                <option>Sussex</option>
                <option>Dieppe</option>
                <option>Moncton</option>
                <option>Oromocto</option>
                <option>Fredericton</option>
                <option>Miramichi</option>
            </select><br><br>
            <button type="submit" class="confirm">Confirm</button>
    </body>
</html>
