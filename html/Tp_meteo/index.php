<!DOCTYPE html>
<html>

<?php include_once('header.php')?>
<body>
    <?php  
    $date = date('l jS \of F Y ');
    echo $date;
    ?>
    <?php
    $heure = date('H:i');
    echo $heure;
    ?>
    <br>
    <a href="paris.php">Paris</a>
    <br>
    <a href="bordeaux.php">Bordeaux</a>
</body>

</html>
