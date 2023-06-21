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

        echo"<span> La password suggerita e': </span>" ."". randomPassword($passwordUtente);
       
    ?>