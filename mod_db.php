<?php
    function insert_in_db($_name, $_price, $_description)
    {
        include './config.php'; //Requires DB credentials

        $result = "INSERT INTO $table (name, price, description) VALUES(?, ?, ?)";
        if ($link->execute_query($result, [$_name, $_price, $_description]) === TRUE)
            echo "record inserted successfully";
        else
            echo "Error: " . $sql . "<br>" . $link->error;
        header('Location: products_list.php');
    }

    function delete_from_db($_id)
    {
        require_once('./config.php');

        $result = mysqli_query($link, "DELETE FROM $table WHERE id=$_id");

        if ($result === TRUE)
            echo "Record deleted successfully";
        else
            echo "Error deleting record: " . $connect->error;
        header('Location: products_list.php');
    }

    function update_product($_id, $_name, $_price, $_description)
    {
        require_once('./config.php');

        echo $sql;
        $sql = "UPDATE $table SET name=?, price=?, description=? WHERE id=?";
        echo "TEST";
        if ($link->execute_query($sql, [$_name, $_price, $_description, $_id]) === TRUE)
            echo "Record updated successfully";
        else
            echo "Error updating record: " . $connect->error;
        header('Location: products_list.php');
    }
?>