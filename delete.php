<?php
    $_id = $_POST["prod_id"];
    require_once('./mod_db.php');
    echo $_id;
    echo "TEST pre deletion";

    delete_from_db($_id)
?>