<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$barang = [
    ["kode" => "K005", "nama" => "Chitose", "harga" => 3000],
    ["kode" => "K001", "nama" => "Teh Pucuk", "harga" => 5000],
    ["kode" => "K003", "nama" => "Sprite", "harga" => 4000],
    ["kode" => "K002", "nama" => "Subro",  "harga" => 1000],
    ["kode" => "K004", "nama" => "Cimory", "harga" => 9000],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - POLGAN MART</title>
    <style>
        table { width:600px; margin:auto; border-collapse:collapse; }
        th, td { border:1px solid #ccc; padding:8px; text-align:center; }
    </style>
</head>
<body>
<h3 style="text-align:center;">--POLGAN MART--</h3>
<p style="text-align:right; margin-right:40px;">
    Selamat datang, <?= $_SESSION['username']; ?>!
    <br>Role: <?= $_SESSION['role']; ?>
    <br><a href="logout.php">Logout</a>
</p>

<table>
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>

<?php
$grandTotal = 0;

// Commit 6 & 7 — jumlah random + total
foreach ($barang as $b) {
    $jumlah = rand(1, 5);
    $total = $jumlah * $b["harga"];
    $grandTotal += $total;

    echo "<tr>
            <td>{$b['kode']}</td>
            <td>{$b['nama']}</td>
            <td>Rp ".number_format($b['harga'],0,',','.')."</td>
            <td>$jumlah</td>
            <td>Rp ".number_format($total,0,',','.')."</td>
        </tr>";
}
?>

</table>

<br><br>

<?php
// Commit 8 — total belanja
echo "<center><h3>Total Belanja: Rp " . number_format($grandTotal, 0, ',', '.') . "</h3></center>";

// Commit 9 — diskon
$diskon = 0;
if ($grandTotal < 50000) {
    $diskon = 0.05;
} elseif ($grandTotal <= 100000) {
    $diskon = 0.10;
} else {
    $diskon = 0.15;
}

$nilaiDiskon = $grandTotal * $diskon;
$totalBayar = $grandTotal - $nilaiDiskon;
?>

<center>
    <p>Diskon: Rp <?= number_format($nilaiDiskon,0,',','.') ?> (<?= $diskon*100 ?>%)</p>
    <h3>Total Bayar: Rp <?= number_format($totalBayar,0,',','.') ?></h3>
</center>

</body>
</html>