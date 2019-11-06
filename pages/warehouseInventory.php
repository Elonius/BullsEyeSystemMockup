<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BullsEye System - Mockup 1.0</title>
        <link rel="stylesheet" href="../styles.css">
        <script src="../main.js"></script>
    </head>
    <?php
    $store = "";
    if (isset($_POST['store'])) {
        $store = $_POST['store'];
    }
    echo "<h1>BullsEye Warehouse Inventory</h1><br><br>";
    ?>
    <div id="invContainer">
        <table id="table">
            <tr><th>ID</th><th>Alerts</th><th>Status</th><th>Supplier</th><th>Name</th><th>Description</th><th>Amount</th><th>Case Size</th><th>BIN Location</th><th>Department</th><th>Retail Price</th><th>Supplier Price</th><th>Weight Per Item</th></tr> 
            <tr><td>12345</td><td class="statusCell"><img src="../images/Backordered.png" title="Backordered" alt="Backordered Product" class="statusImage"></td><td>Backordered until: November 11, 2019</td><td>Bauer</td><td>Warrior Alpha QX Grip Senior Hockey Stick</td><td>Hockey Sticks</td><td>500</td><td>20</td><td>A-1-1</td><td>Equipment & Gear</td><td>$10.99</td><td>$8.99</td><td>8 ounces</td></tr>
            <tr><td>12346</td><td class="statusCell"><img src="../images/LowInventory.png" title="Low Inventory" alt="Low Inventory Product" class="statusImage"></td><td>Low Inventory: Added to next order</td><td>Fitbit</td><td>Fitbit Versa Smartwatch</td><td>Smart Watch</td><td>100</td><td>10</td><td>A-1-2</td><td>Electronics</td><td>$219.95</td><td>$180.99</td><td>2.2 ounces</td></tr>
            <tr><td>23456</td><td class="statusCell"></td><td></td><td>New Balance</td><td>New Balance Men's FuelCell Echo Triple Cell Running Shoes - Black/White</td><td>Foot Wear</td><td>50</td><td>10</td><td>A-1-3</td><td>Footwear</td><td>$230.00</td><td>$180.99</td><td>9.5 ounces</td></tr>
        </table>
    </div>
</body>
</html>