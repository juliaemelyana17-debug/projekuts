<?php
// Commit 9: Diskon Belanja
$diskon = 0;

if ($grandtotal < 50000) {
    $diskon = 0.05 * $grandtotal;
} elseif ($grandtotal <= 100000) {
    $diskon = 0.10 * $grandtotal;
} else {
    $diskon = 0.15 * $grandtotal;
}

$total_bayar = $grandtotal - $diskon;

echo "<h3>Diskon: Rp $diskon</h3>";
echo "<h2>Total Bayar: Rp $total_bayar</h2>";
?>