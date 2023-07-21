<?php
    $_id = $_POST['prod_id'];
    $_name = $_POST['prod_name'];
    $_price = $_POST['prod_price'];
    $_description = $_POST['prod_desc'];
    require_once('./mod_db.php');

    update_product($_id, $_name, $_price, $_description);
?>