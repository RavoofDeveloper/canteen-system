<?php
$item = $_GET['item'];
$qty = $_GET['qty'];
$price = $_GET['price'];
$total = $_GET['total'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>🧾 Canteen Bill</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #fdfdfd;
            color: royalblue;
            padding: 30px;
        }
        h1 {
            color: red;
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            border: 1px dashed royalblue;
            padding: 10px;
            text-align: center;
        }
        .total {
            font-weight: bold;
            font-size: 20px;
            color: royalblue;
            text-align: right;
            padding-top: 20px;
        }
        .center {
            text-align: center;
        }
        .print-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background: red;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>🧾 CANTEEN BILL</h1>

    <table>
        <tr>
            <th>Item</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <tr>
            <td><?= $item ?></td>
            <td><?= $qty ?></td>
            <td>₹<?= $price ?></td>
            <td>₹<?= $total ?></td>
        </tr>
    </table>

    <p class="total">Grand Total: ₹<?= $total ?></p>

    <button class="print-btn" onclick="window.print()">🖨️ Print Bill</button>
</body>
</html>
