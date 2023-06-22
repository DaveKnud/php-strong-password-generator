<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $passwordUtente = $_GET['text'];
        $lunghezzapassword = strlen($passwordUtente);
    ?>

    <?php
        //FUNZIONE GENERA PASSWORD
        function randomPassword($lunghezzapassword) {
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $count = mb_strlen($chars);
        
            for ($i = 0, $result = ''; $i < $lunghezzapassword ; $i++) {
                $index = rand(0, $count - 1);
                $result .= mb_substr($chars, $index, 1);
            }
        
            return $result;
        };
    ?>
    
</body>
</html>