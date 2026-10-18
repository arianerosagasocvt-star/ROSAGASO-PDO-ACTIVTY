<?php
require_once 'core/dbConfig.php';

$sql = "UPDATE switzerland_grocery_table 
        SET price_chf = :price_chf 
        WHERE item_id = :item_id";

$stmt = $pdo->prepare($sql);

// update price of item 2
$stmt->execute([
    ':price_chf' => 5.00,
    ':item_id'   => 2
]);

echo "Record updated successfully!";
?>
