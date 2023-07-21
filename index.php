<?php
    require_once('./config.php');

?>

<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
        <title>Digipart Robertson</title>
        <link rel="stylesheet" href="style/index.css">
    </head>
 <body>
    <header>
        <a href="#default" class="logo">MAGASIN</a>
        <div class="header-right">
            <a href="">Add Product</a>
            <a href="./products_list.php">List of products</a>
        </div>
    </header>
    <form action="send_new.php" method="post">
        <input type="text" id="_name" name="_name" required>
        <input type="number" id="_price" name="_price" required>
        <input type="text" id="_desc" name="_desc" required>
        <input type="submit">
    </form>
 </body>
</html>