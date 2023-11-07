<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jsons = file_get_contents("http://localhost/abundia/product.php");
        $jsons = json_decode($jsons);
    ?>

    <table border=1px>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>timestamp</th>
        </thead>

        <tbody>

        <?php
            foreach ($jsons as $products) {
            
            echo '<tr>' ;
                echo '<td>' .$products->ID. '</td>' ;
                echo '<td>' .$products->Name. '</td>' ;
                echo '<td>' .$products->Timestamp. '</td>' ;

            echo '</tr>' ;

            }
            ?>
        </tbody>
    </table>
</body>
</html>