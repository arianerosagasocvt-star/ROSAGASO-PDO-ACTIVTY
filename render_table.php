<?php
require_once 'core/dbConfig.php';

$sql = "SELECT * FROM switzerland_grocery_table";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Switzerland Grocery Items</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Item ID</th>
            <th>Product Name</th>
            <th>Brand Name</th>
            <th>Category</th>
            <th>Unit Size</th>
            <th>Price (CHF)</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?= $row['item_id'] ?></td>
            <td><?= $row['product_name'] ?></td>
            <td><?= $row['brand_name'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['unit_size'] ?></td>
            <td><?= $row['price_chf'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>