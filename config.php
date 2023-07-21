<?php
    $server = 'hostname';
    $user = 'username';
    $password = 'pswd';
    $dbname = 'database';
    $table = 'table';

    $link = new mysqli($server, $user, $password, $dbname);
    if ($link->connect_errno)
        die("ERROR: " . $link->connect_error);
?>