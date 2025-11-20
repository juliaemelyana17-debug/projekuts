<?php
// Commit 6
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// loop 5x sesuai jumlah produk
for ($i = 0; $i < 5; $i++) {
    $beli[$i] = rand(0, 4); // index barang acak
    $jumlah[$i] = rand(1, 5); // jumlah beli 1–5
}
?>