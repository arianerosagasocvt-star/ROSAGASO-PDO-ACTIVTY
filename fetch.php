<?php
require_once 'core/dbConfig.php';

$sql = "SELECT * FROM switzerland_grocery_table LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// fetch one row only
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";
?>
