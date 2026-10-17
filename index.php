<?php
// Fitur Page View Counter
$file_counter = "counter.txt";
if (file_exists($file_counter)) {
    $jumlah_view = (int)file_get_contents($file_counter);
    $jumlah_view++;
    file_put_contents($file_counter, $jumlah_view);
} else {
    $jumlah_view = 1;
    file_put_contents($file_counter, $jumlah_view);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sweet Delights Bakery-Official Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header & 4 Navigasi Minimal -->
    <header>
        <h1>🥨Sweet Delights Bakery🥨</h1>
        <nav>
            <a href="#home">Home</a> | 
            <a href="#about">About</a> | 
            <a href="#produk">Produk</a> | 
            <a href="#pesan">Pemesanan</a>
        </nav>
    </header>

    <div class="container">

        <!-- Section Home -->
        <div id="home">
            <h2>Selamat Datang</h2>
            <p>Selamat datang di toko online Sweet Delights Bakery. Kami menjual berbagai jenis roti dan kue yang dibuat segar setiap hari.</p>
        </div>
        <hr>

        <!-- Section About -->
        <div id="about">
            <h2>Tentang Kami</h2>
            <p>Sweet Delights Bakery didirikan untuk memberikan pilihan roti manis dan lezat bagi pelanggan. Keunggulan toko kami:</p>
            <ul>
                <li>Bahan 100% alami berkualitas dan halal</li>
                <li>Dibuat segar setiap pagi (*Freshly Baked*)</li>
                <li>Harga terjangkau dan Higienis terjamin</li>
            </ul>
        </div>
        <hr>

       <!-- SECTION 3: PRODUCTS (SYARAT 2: HTML IMPLEMENTATION - IMAGES & GRID) -->
        <section id="products">
            <h2 class="section-title">Katalog Produk Unggulan</h2>
            <div class="product-grid">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1586657263857-346c4b712ff5?w=200" alt="Butter Croissant">
                    <h3>Butter Croissant</h3>
                    <p class="price">Rp 18.000</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1616151030851-644f0f96c1a5?w=200" alt="Chocolate Muffin">
                    <h3>Chocolate Muffin</h3>
                    <p class="price">Rp 20.000</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1694632288834-17d86b340745?w=200"  alt="Cinnamon Roll">
                    <h3>Cinnamon Roll</h3>
                    <p class="price">Rp 22.000</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1573140401552-3fab0b24306f?w=200"  alt="Cheese Garlic Bread">
                    <h3>Cheese Garlic Bread</h3>
                    <p class="price">Rp 25.000</p>
                </div>
            </div>
        </section>

        <!-- Section Form Pemesanan -->
        <div id="pesan">
            <h2>Formulir Pemesanan</h2>
            <form action="process.php" method="post">
                
                <div class="form-group">
                    <label>Nama Pemesan:</label>
                    <input type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>Pilih Produk:</label>
                    <select name="produk" required>
                        <option value="">-- Pilih Roti --</option>
                        <option value="Butter Croissant">Butter Croissant - Rp 18.000</option>
                        <option value="Chocolate Muffin">Chocolate Muffin - Rp 20.000</option>
                        <option value="Cinnamon Roll">Cinnamon Roll - Rp 22.000</option>
                        <option value="Cheese Garlic Bread">Cheese Garlic Bread - Rp 25.000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah:</label>
                    <input type="number" name="jumlah" min="1" value="1" required>
                </div>

                <div class="form-group">
                    <label>Catatan Pesanan:</label>
                    <textarea name="catatan" rows="3"></textarea>
                </div>

                <input type="submit" value="Kirim Pesanan">
            </form>
        </div>

    </div>

    <!-- Footer & Counter -->
    <footer>
        <p>&copy; 2026 Sweet Delights Bakery</p>
        <p>Total Pengunjung Halaman: <b><?php echo $jumlah_view; ?></b></p>
    </footer>

</body>
</html>