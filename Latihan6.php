<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Div dan Span</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307009">
    <meta name="author" content="Elin Akma Pratama">
</head>
<body>
    <h1>Halaman PHP Elin</h1>
    <?php
    // While loop
    $x = 10;
    while ($x > 5) {
        echo "Nomor : $x<br>";
        $x--;
    }

    // Do while
    $x = 1;
    do {
        echo "Nomor : $x <br>";
        $x++;
    } while ($x <= 5);

    // Foreach
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    // For 
    for ($x = 0; $x < 10; $x++) {
        echo "Nomor : $x <br>";
    }

    // For loop dengan break
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "Nomor : $x <br>";
    }
    ?>
</body>
</html>