<?php
// Commit 7
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>";

foreach ($beli as $i => $item) {
    $total[$i] = $harga_barang[$item] * $jumlah[$i];
    $grandtotal += $total[$i];

    echo "<tr>
            <td>" . $kode_barang[$item] . "</td>
            <td>" . $nama_barang[$item] . "</td>
            <td>Rp " . $harga_barang[$item] . "</td>
            <td>" . $jumlah[$i] . "</td>
            <td>Rp " . $total[$i] . "</td>
          </tr>";
}

echo "</table>";
?>