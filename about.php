<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  
    <a href="index.php">ABOUT</a>

    <?php
       session_start();
       $val =  $_SESSION['val'];
       echo $val;
        include 'functions.php';
    ?>

</body>
</html>