<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker test</title>
</head>
<body>
<?php

    $result = file_get_contents("http://node-container:3333/products");
    $products = json_decode($result);

?>

<table>
    <?php foreach($products as $product) {?>
        <tr>
            <td><?php echo($product->name); ?></td>
            <td><?php echo($product->price); ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>