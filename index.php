<?php

    $hostname = "127.0.0.1";
    $username = "root";
    $password =" ";
    $dbname = "lesson01";
 
    $link = mysqli_connect($hostname, $username, $password, $dbname);
 
    if ($link) {
        $query = "select * from fish";
        $result = mysqli_query($link, $query);
 
        while($row = mysqli_fetch_array($result)){
            echo $row['id'];
        }
 
    mysqli_free_result($result);
    mysqli_close($link);
 
    } else {
        echo 'DB connect failure';
    }


?>