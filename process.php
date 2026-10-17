<?php
// Atur zona waktu
date_default_timezone_set("Asia/Jakarta");

// Cek apakah data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $catatan = $_POST['catatan'];

    // Tentukan harga produk
    $harga = 0;
    if ($produk == "Butter Croissant") {
        $harga = 18000;
    } elseif ($produk == "Chocolate Muffin") {
        $harga = 20000;
    } elseif ($produk == "Cinnamon Roll") {
        $harga = 22000;
    } elseif ($produk == "Cheese Garlic Bread") {
        $harga = 25000;
    }

    // Hitung subtotal
    $subtotal = $harga * $jumlah;

    // Logika diskon sederhana
    $diskon = 0;
    if ($subtotal >= 100000) {
        $diskon = $subtotal * 0.10; // Diskon 10%
    }

    $total_bayar = $subtotal - $diskon;

    $tanggal = date("d-m-Y");
    $jam = date("H:i:s");
} else {
    // Jika bukan method post, balik ke index
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🥨Sweet Delights Bakery🥨</h1>
        <p>Hasil Konfirmasi Pesanan</p>
    </header>

    <div class="container">
        <h2>Detail Pesanan Anda</h2>
        <p>Terima kasih <b><?php echo $nama; ?></b>, pesanan Anda telah kami terima.</p>
        
        <p><b>Waktu Transaksi:</b> <?php echo $tanggal; ?> pukul <?php echo $jam; ?> WIB</p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        
        <hr>

        <h3>Rincian Biaya:</h3>
        <ul>
            <li><b>Produk:</b> <?php echo $produk; ?></li>
            <li><b>Harga Satuan:</b> Rp <?php echo number_format($harga, 0, ',', '.'); ?></li>
            <li><b>Jumlah:</b> <?php echo $jumlah; ?> pcs</li>
            <li><b>Subtotal:</b> Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></li>
            <li><b>Diskon:</b> Rp <?php echo number_format($diskon, 0, ',', '.'); ?></li>
            <li><b>Total yang Harus Dibayar:</b> Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></li>
        </ul>

        <p><b>Catatan Khusus:</b> <?php echo $catatan; ?></p>

        <br>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>

    <footer>
        <p>&copy; 2026 Sweet Delights Bakery</p>
    </footer>

</body>
</html>