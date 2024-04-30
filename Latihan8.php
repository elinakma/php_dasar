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
    
    // data kelas dengan array 2 dimensi
    $array = array(
        "1C" =>array("udin", "ismail", "adi"),
        "1D" =>array("lukman", "fajri", "mahmud")
    );

    // menampilkan data array
    print_r($array);
    // menampilkan kelas 1C
    print_r($array['1C']);
    // menampilkan kelas 1D dengan index 0
    echo "<br>Menampilkan kelas 1D dengan index 0: ";
    echo $array['1D'][0];
    //tampilkan fajri
    echo "<br>Menampilkan fajri: ";
    echo $array['1D'][1];
    // tampilkan adi
    echo "<br>Menampilkan adi: ";
    echo $array['1C'][2];

    // data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" =>["udin", "ismail", "adi"],
        "1D" =>["lukman", "fajri", "mahmud"]
    ];
    ?>
</body>
</html>