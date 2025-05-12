<?php
// Load data
$items = json_decode(file_get_contents('data.json'), true);

// Get inputs
$index = $_POST['index'];
$qty = $_POST['qty'];

// Get item
$item = $items[$index];

// Reduce stock
$items[$index]['stock'] -= $qty;

// Save updated stock
file_put_contents('data.json', json_encode($items, JSON_PRETTY_PRINT));

// Calculate total
$total = $item['price'] * $qty;

// Redirect to bill page with data
header("Location: bill.php?item={$item['name']}&qty=$qty&price={$item['price']}&total=$total");
exit;
