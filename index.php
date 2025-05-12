<?php
$items = json_decode(file_get_contents('data.json'), true);

// Show success message
if (isset($_GET['success'])) {
    echo "<p style='color: green; font-weight:bold;'>✅ Purchase successful!</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Canteen Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <body>
    <h2>🍽️ Welcome to Canteen</h2>

    <table>
        <tr>
            <th>Item</th>
            <th>Price (₹)</th>
            <th>Stock</th>
            <th>Buy</th>
        </tr>
        <?php foreach ($items as $index => $item): ?>
        <tr>
            <td>
                <div class="item-container">
                    <span class="emoji">
                        <?php
                        // Emoji icons
                        $emoji = [
                            'coffee' => '☕',
                            'tea' => '🍵',
                            'samosa' => '🥟'
                        ];
                        $key = strtolower($item['name']);
                        echo $emoji[$key] ?? '🍽️';
                        ?>
                    </span>
                    <strong><?= $item['name'] ?></strong>
                </div>
            </td>
            <td>₹<?= $item['price'] ?></td>
            <td><?= $item['stock'] ?></td>
            <td>
                <form method="post" action="buy.php">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <input type="number" name="qty" min="1" max="<?= $item['stock'] ?>" required>
                    <input type="submit" value="Buy">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
