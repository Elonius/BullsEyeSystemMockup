<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../styles.css">
        <title>BullsEye System - Mockup 1.0</title>
    </head>
    <body>
        <form action="salesReport.php" method="POST">
            <?php
            session_start();
            $store = filter_input(INPUT_POST, "store");
            $_SESSION['store'] = $store;
            
            echo "<h1>Sales for " . $store . "</h1>";
            ?>
        </h1>
        <div class="flex-container">

            <button type="submit" name="submit" value="Daily">Daily</button>
            <form action="salesReport.php" method="POST">
                <button type="submit" name="submit" value="Weekly">Weekly</button>
                <form action="salesReport.php" method="POST">
                    <button type="submit" name="submit" value="Monthly">Monthly</button>
                    <button type="submit" name="submit" value="Yearly">Yearly</button>
                </form>
        </div>
        <div class="content"></div>
</body>
</html>
