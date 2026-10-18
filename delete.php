<?php
require_once 'core/dbConfig.php';

$sql = "DELETE FROM switzerland_grocery_table WHERE item_id = :item_id";
$stmt = $pdo->prepare($sql);

// delete item with id 1
$stmt->execute([':item_id' => 1]);

echo "Record deleted successfully!";
?>
