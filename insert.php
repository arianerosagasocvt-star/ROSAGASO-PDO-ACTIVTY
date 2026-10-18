<?php
require_once 'core/dbConfig.php';

$sql = "INSERT INTO switzerland_grocery_table 
        (item_id, product_name, brand_name, category, unit_size, price_chf) 
        VALUES (:item_id, :product_name, :brand_name, :category, :unit_size, :price_chf)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':item_id'      => 1, // must change this manually each time
    ':product_name' => 'Swiss Chocolate',
    ':brand_name'   => 'Lindt',
    ':category'     => 'Snacks',
    ':unit_size'    => '100g',
    ':price_chf'    => 4.50
]);

echo "Record inserted successfully!";
?>
