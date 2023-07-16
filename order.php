<?php

    $menu = $_POST['menu'];
    $qty = $_POST['qty'];

    $orderData = "Menu: $menu, Jumlah: $qty" . PHP_EOL;

    $file = fopen("order_data.txt", "a");
    fwrite($file, $orderData);
    fclose($file);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Warung Makan Toni - Pesanan Diterima</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <h1>Warung Makan Toni</h1>
    <h2>Pesanan Diterima!</h2>

    <p>Pesanan Anda untuk <?php echo $menu; ?> sebanyak <?php echo $qty; ?> telah diterima.</p>

    <a href="index.php" class="button">kembali</a>
</body>
</html>