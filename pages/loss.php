<?php
session_start();
$projectRoot = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . '/Systems_Mockup_ReportSystem';
require_once ($projectRoot . '/utils/ChromePhp.php');

$store = filter_input(INPUT_POST, "store");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BullsEye System - Mockup 1.0</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <?php echo "<h1> Losses For " . $store . "</h1>" ?>;
        <div id="invContainer">
            <table id="table">
                <tr><th>ID</th><th>Supplier</th><th>Name</th><th>Description</th><th>Amount Loss</th><th>Aisle Location</th><th>Department</th><th>Price</th></tr> 
                <tr><td>12345</td><td>Bauer</td><td>Warrior Alpha QX Grip Senior Hockey Stick</td><td>Hockey Sticks</td><td>1</td><td>B1</td><td>Equipment & Gear</td><td>$10.99</td></tr>
                <tr><td>12346</td><td>Fitbit</td><td>Fitbit Versa Smartwatch</td><td>Smart Watch</td><td>1</td><td>A1</td><td>Electronics</td><td>$219.95</td></tr>
                <tr><td colspan="7">Total Losses:</td><td>$230.94</td></tr>
            </table>
        </div>
    </body>
</html>

