<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar</title>
</head>
<body>
<h2>Program Menghitung Umur & Gaji</h2>

<form method="post">
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tgl"><br><br>

    <label>Pekerjaan:</label><br>
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
        <option value="Admin">Admin</option>
    </select><br><br>

    <input type="submit" value="Proses">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung Umur
    $lahir = new DateTime($tgl);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($lahir)->y;

    // Gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case "Programmer": $gaji = 8000000; break;
        case "Designer":   $gaji = 6000000; break;
        case "Manager":    $gaji = 12000000; break;
        case "Admin":      $gaji = 4500000; break;
        default:           $gaji = 0;
    }

    echo "<b>Hasil Output:</b><br>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: $tgl <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.') . "<br>";
}
?>
</body>
</html>
