<?php

        ini_set('display_errors',true);
        $dbh = new PDO('mysql:host=host;dbname=mysql','user','password');
        $stmt = $dbh->prepare('select user,host,plugin from user');
        $stmt->execute();

        foreach($stmt as $row){
                echo $row['user'].'<br>';
        }
