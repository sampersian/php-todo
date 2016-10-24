<?php
/*The home page for the site. */

session_start();


$current_date = gmDate("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FFL Records</title>
</head>
<body>
    <h1>Fantasy League Front Office</h1>
    <hr style="margin: 0px;">
    <div class="soloDiv soloDivCenter">
    <?php
        echo $current_date;
    ?>
    </div>
</body>
</html>
