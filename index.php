<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Pertemuan 1 - Form Processing</title>
</head>
<body>
    <h2>Form Input Nilai Ujian</h2>
    
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>
        
        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $nilai = (float) $_POST['nilai'];

        // Struktur Kendali
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        // Tampilkan Hasil
        echo "<h3>Hasil Processing:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai Ujian: " . $nilai . "<br>";
        echo "Status: <strong>" . $status . "</strong>";
    }
    ?>
</body>
</html>