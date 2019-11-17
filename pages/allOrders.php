<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BullsEye System - Mockup 1.0</title>
        <link rel="stylesheet" href="../styles.css">
        <script src="../main.js"></script>
    </head>
    <h1>BullsEye Warehouse - Store Order Lists</h1>
    <h2>Nov. 17th - Nov 23rd</h2>
    <div id="invContainer">
        <table id="table">
            <!--unsubmitted (white), received (yellow), being prepared (orange), and when it’s about to be delivered (green)-->
            <tr><th>Store Name</th><th>Order Status</th><th>Delivery Day</th></tr>
            <tr><td>Saint John</td><td id="green">Ready for delivery</td><td>Monday</td></tr>
            <tr><td>Moncton</td><td id="orange">Being assembled</td><td>Tuesday</td></tr>
            <tr><td>Dieppe</td><td id="yellow">Received</td><td>Tuesday</td></tr>
            <tr><td>Oromocto</td><td id="yellow">Received</td><td>Wednesday</td></tr>
            <tr><td>Fredericton</td><td id="yellow">Received</td><td>Wednesday</td></tr>
            <tr><td>Miramichi</td><td id="white">Not received</td><td>Thursday</td></tr>
            <tr><td>Sussex</td><td id="yellow">Received</td><td>Friday</td></tr>
        </table>
    </div>
</body>
</html>