<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Kasir Toko Sederhana</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; text-align: center; }
        .box { background: white; max-width: 400px; margin: 20px auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        input, button { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background: #27ae60; color: white; font-weight: bold; cursor: pointer; border: none; }
        button:hover { background: #219653; }
        .hasil { background: #e8f8f5; padding: 15px; border-left: 5px solid #27ae60; text-align: left; margin-top: 15px; }
    </style>
</head>
<body>

<div class="box">
    <h2>🛒 Kasir Toko Ardi Dev</h2>
    <form method="POST" action="">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="harga" placeholder="Harga Satuan (Rp)" required min="0">
        <input type="number" name="jumlah" placeholder="Jumlah Beli" required min="1">
        <button type="submit" name="hitung">Hitung Total</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        // Mengambil data dari form input
        $nama_barang = htmlspecialchars($_POST['nama_barang']);
        $harga = intval($_POST['harga']);
        $jumlah = intval($_POST['jumlah']);
        
        // Rumus Logika Matematika Perhitungan Kasir
        $total_kotor = $harga * $jumlah;
        
        // Logika Diskon: Jika belanja di atas Rp 100.000, dapet diskon 10%
        $diskon = 0;
        if ($total_kotor >= 100000) {
            $diskon = $total_kotor * 0.10;
        }
        
        $total_akhir = $total_kotor - $diskon;

        // Menampilkan hasil ke layar
        echo "<div class='hasil'>";
        echo "<strong>Struk Belanja:</strong><br>";
        echo "Barang: " . $nama_barang . "<br>";
        echo "Total Awal: Rp " . number_format($total_kotor, 0, ',', '.') . "<br>";
        echo "Diskon (10%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
        echo "<hr>";
        echo "<strong>Total Bayar: Rp " . number_format($total_akhir, 0, ',', '.') . "</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
