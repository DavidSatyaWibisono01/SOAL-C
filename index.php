<!DOCTYPE html>
<html>
<head>
    <title>Warung Makan Toni</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <h1>Warung Makan Toni</h1>
    <h2>Paket Menu:</h2>
    <ul id="menu-list">
        <!-- Daftar menu akan ditambahkan menggunakan JavaScript -->
    </ul>

    <h2>Order Sekarang:</h2>
    <form action="order.php" method="POST">
        <label for="menu">Pilih Menu:</label>
        <select id="menu" name="menu">
            <!-- Menu ditampilkan melalui JS -->
        </select>
        <label for="qty">Jumlah:</label>
        <input type="number" id="qty" name="qty" min="1" required>
        <button type="submit">Pesan</button>
    </form>

    <h3>Pesanan Anda</h3>
    <div id="order-data">
        <!-- Data pemesanan ditampikan melalui JS -->
    </div>
    <a href="delete_order.php" class="button">Hapus Pesanan</a>
</body>
</html>
