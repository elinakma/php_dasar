<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabel PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307009">
    <meta name="author" content="Elin Akma Pratama">
</head>
<body>
    <h1>Halaman PHP Elin</h1>

    <?php
    // Gaji pokok dan tunjangan
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;

    // Menghitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Menghitung pajak (10% dari gaji kotor)
    $pajak = 0.1 * $gajiKotor;

    // Menghitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;

    // Menampilkan hasil
    echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
    echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
    echo "Pajak: Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "Gaji Bersih: Rp. " . number_format($gajiBersih, 0, ',', '.') . "<br>";
    ?>

</body>
</html>