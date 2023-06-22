<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form>
        <label for="password">Scegli il numero di caratteri per la tua password</label>
        <input type="number" name="text" id='text'>
        <input type="submit" value="generate password" id=sumbit> 
    </form>

    <?php
    include 'functions.php';

    session_start();
     $_SESSION['val'] = "HELLO WORLD";
    // header('Location: ./functions.php');
    ?>
    <a href="about.php">ABOUT</a>
    
    <span> La password suggerita e': <php randomPassword($passwordUtente); ?> </span> 
</body>
</html>