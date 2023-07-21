<?php
    $_name = $_POST["_name"];
    $_price = $_POST["_price"];
    $_description = $_POST["_desc"];
    require_once('./mod_db.php');

    insert_in_db($_name, $_price, $_description);
?>