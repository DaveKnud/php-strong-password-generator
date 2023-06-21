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
        <label for="password">Password</label>
        <input type="text" name="text" id='text'>
        <input type="submit" value="generate password" id=sumbit> 
    </form>

    <?php
        $passwordUtente = $_GET['text'];
    ?>

    <?php
        //FUNZIONE GENERA PASSWORD
       function randomPassword() {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $count = mb_strlen($alphabet);

            for ($i = 0, $result = ''; $i < $length; $i++) {
                $index = rand(0, $count - 1);
                $result .= mb_substr($alphabet, $index, 1);
            }

            return $result;
}

        echo randomPassword($passwordUtente);
        var_dump($passwordUtente);
    ?>

    <?php
        /*
            if($password === ""){
                function randomPassword()
            };
        */
    ?>


</body>
</html>