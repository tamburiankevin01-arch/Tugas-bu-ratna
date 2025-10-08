<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Ganjil 1-20</title>
</head>
<body>
    <h2>Bilangan Ganjil dari 1 sampai 20</h2>

    <!-- Menggunakan For Loop -->
    <h3>1. Menggunakan For Loop</h3>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    ?>

    <!-- Menggunakan While Loop -->
    <h3>2. Menggunakan While Loop</h3>
    <?php
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
        $i++;
    }
    ?>

    <!-- Menggunakan Do While Loop -->
    <h3>3. Menggunakan Do While Loop</h3>
    <?php
    $i = 1;
    do {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= 20);
    ?>
</body>
</html>