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
        <?php
        $user = filter_input(INPUT_POST, "username");

        // Use header("location: store/regional/finance.php") depending on user ??
        if ($user == "CEO") {
            $title = "Regional Manager";
        } else if ($user == "FinanceManager") {
            $title = "Finance Manager";
        } else if ($user == "StoreManager") {
            $title = "Store Manager";
        }

        echo "<h1>Logged In as $title</h1><br>";
        ?>

        <hr>
        <div id="container2">
            <div id="menu" class="box">
                <form action="storeMenu.php" method="POST">
                    <button class="btn" type="submit" name="submit" value="sales">Sales</button> <br><br>
                </form>
                <form action="storeMenu.php" method="POST">
                    <button class="btn" type="submit" name="submit" value="loss">Loss</button> <br><br>
                </form>
                <form action="storeMenu.php" method="POST">
                    <button class="btn" type="submit" name="submit" value="trends">Trends</button><br><br>
                </form>
                <form action="inventoryMenu.php" method="POST">
                    <button id="inventory" class="btn" type="submit" name="submit" value="inventory">Inventory</button><br>
                </form>
            </div>
        </div>
    </body>
</html>