<?php
require_once 'core/dbConfig.php';

$sql = "SELECT * FROM switzerland_grocery_table";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// fetch all rows
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result); // print all data
echo "</pre>";
?>
