<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BullsEye System - Mockup 1.0</title>
        <link rel="stylesheet" href="../styles.css">
        <script src="../main.js"></script>
    </head>
    <?php
    $store = filter_input(INPUT_POST, "store");
    echo "<h1>BullsEye Inventory for " . $store . "</h1><br><br>";
    ?>
    <div id="invContainer">
        <table id="table">
            <tr><th>ID</th><th>Alerts</th><th>Status</th><th>Supplier</th><th>Name</th><th>Description</th><th>Amount</th><th>Case Size</th><th>Aisle Location</th><th>Department</th><th>Price</th></tr> 
            <tr><td>12345</td><td class="statusCell"><img src="../images/Backordered.png" title="Backordered" alt="Backordered Product" class="statusImage"></td><td>Backordered until: November 11, 2019</td><td>Bauer</td><td>Warrior Alpha QX Grip Senior Hockey Stick</td><td>Hockey Sticks</td><td>10</td><td>20</td><td>B1</td><td>Equipment & Gear</td><td>$10.99</td></tr>
            <tr><td>12346</td><td class="statusCell"><img src="../images/LowInventory.png" title="Low Inventory" alt="Low Inventory Product" class="statusImage"></td><td>Low Inventory: Added to next order</td><td>Fitbit</td><td>Fitbit Versa Smartwatch</td><td>Smart Watch</td><td>8</td><td>10</td><td>A1</td><td>Electronics</td><td>$219.95</td></tr>
            <tr><td>23456</td><td class="statusCell"></td><td></td><td>New Balance</td><td>New Balance Men's FuelCell Echo Triple Cell Running Shoes - Black/White</td><td>Foot Wear</td><td>50</td><td>10</td><td>C1</td><td>Footwear</td><td>$230.00</td></tr>

        </table>
    </div>
</body>
</html>