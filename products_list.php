<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRODUCTS</title>
        <link rel="stylesheet" href="style/prod.css">
    </head>
    <body>
        <header>
                <a href="#default" class="logo">MAGASIN</a>
                <div class="header-right">
                    <a href="index.php">Add Product</a>
                    <a href="">List of products</a>
                </div>
            </header>
            <?php
                include './config.php'; //Requires DB credentials

                $product = array(
                    'id' => 'id',
                    'name' => 'name',
                    'price' => 'price',
                    'description' => 'description'
                );
                $result = mysqli_query($link, "SELECT id, name, price, description FROM All_products");
                while($row= mysqli_fetch_array($result)) {
                    $_id = $row['id'];
                    $_name = $row['name'];
                    $_price = $row['price'];
                    $_description = $row['description'];
                    echo "<div class='prod_infos'>";
                    echo "<p> $_name </p>";
                    echo "<p> $_price </p>";
                    echo "<p> $_description </p>";
                    echo "<form action='delete.php' method='post'>";
                    echo "<input type='number' id='_idelete' name='prod_id' value=";
                    echo $row['id'];
                    echo ">";
                    echo "<input type='submit' value=DELETE>";
                    echo "</form>";
                    echo "</div>";
                    // echo '<br><br>';
                    echo "<div class='prod_infos'>";
                    echo "<form id='product_edit' action='send_update.php' method='post'>";
                    echo "<input type='number' id='_id' name='prod_id' value=";
                    echo $row['id'];
                    echo ">";
                    echo "<input type='text' id='_name' name='prod_name'>";
                    echo "<input type='number' id='_price' name='prod_price'>";
                    echo "<input type='text' id='_desc' name='prod_desc'>";
                    echo "<input type='submit' value=EDIT>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
    </body>
</html>