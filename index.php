<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="kalkulator-container">
        <div class="text-center mb-1">
                <img src="./assets/img/logo.png" alt="Logo Kalkulator" class="logo-img">
            </div>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="bilangan1" class="form-label">Bilangan 1:</label>
                    <input type="number" name="bilangan1" id="bilangan1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="bilangan2" class="form-label">Bilangan 2:</label>
                    <input type="number" name="bilangan2" id="bilangan2" class="form-control" required>
                </div>

                <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
            </form>
            <?php
    if (isset($_POST['hitung'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];

        // Melakukan operasi matematika
        $hasil_tambah = $bilangan1 + $bilangan2;
        $hasil_kurang = $bilangan1 - $bilangan2;
        $hasil_kali = $bilangan1 * $bilangan2;

        if ($bilangan2 == 0) {
            $hasil_bagi = "Tidak bisa melakukan pembagian dengan bilangan 0.";
        } else {
            $hasil_bagi = $bilangan1 / $bilangan2;
        }

        // Menampilkan hasil perhitungan
        echo "<br>Bilangan 1 = $bilangan1 <br>";
        echo "Bilangan 2 = $bilangan2 <br>";
        echo "<hr>";
        echo "Hasil pertambahan adalah: $hasil_tambah <br>";
        echo "Hasil pengurangan adalah: $hasil_kurang <br>";
        echo "Hasil perkalian adalah: $hasil_kali <br>";
        echo "Hasil pembagian adalah: $hasil_bagi";
    }
    ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
