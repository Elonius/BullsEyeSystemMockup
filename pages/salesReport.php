<?php
session_start();
$projectRoot = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . '/Systems_Mockup_ReportSystem';
require_once ($projectRoot . '/utils/ChromePhp.php');
$option = "";
$store = "";
$date = "";
if(isset($_POST['submit'])) {
    $option = $_POST['submit'];
    
    if($option === "Daily") {
        $date = date("M, d Y");
    }
    else if($option === "Weekly") {
        $date = date("M, d Y", strtotime("-1 week")) ." - " .date("M, d Y", strtotime("0 week"));
    } 
    
    else if($option === "Monthly") {
        $date = date("F", strtotime("-1 month")) . " - " .date("F", strtotime("0 month"));
    }
    else {
        $date = date("o", strtotime("-1 year")) . " - " .date("o", strtotime("0 year"));
    }
}
if(isset($_SESSION['store'])) {
    ChromePhp::log($_SESSION['store']);
    $store = $_SESSION['store'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BullsEye System - Mockup 1.0</title>
        <link rel="stylesheet" href="../styles.css">
        <script src="../main.js"></script>
    </head>
    <body>
<?php echo "<h1>" .$date  ." Sales For ".$store ."</h1>" ?>;
   <div id="invContainer">
            <table id="table">
                <tr><th>ID</th><th>Supplier</th><th>Name</th><th>Description</th><th>Amount Sold</th><th>Aisle Location</th><th>Department</th><th>Price</th></tr> 
                <tr><td>12345</td><td>Bauer</td><td>Warrior Alpha QX Grip Senior Hockey Stick</td><td>Hockey Sticks</td><td>1</td><td>B1</td><td>Equipment & Gear</td><td>$10.99</td></tr>
                 <tr><td>12346</td><td>Fitbit</td><td>Fitbit Versa Smartwatch</td><td>Smart Watch</td><td>1</td><td>A1</td><td>Electronics</td><td>$219.95</td></tr>
                 <tr><td colspan="7">Total Sales:</td><td>$230.94</td></tr>
            </table>
        </div>
    </body>
</html>


