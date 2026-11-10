<?php
function hitungDiskon($totalBelanja) {
    $diskon = 0;
    
    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja;
    }
    
    return $diskon;
}

// Data uji coba
$totalBelanja = 120000;
$diskon = hitungDiskon($totalBelanja);
$totalBayar = $totalBelanja - $diskon;

// Output khusus Terminal / CLI
echo "=== PROGRAM PERHITUNGAN DISKON ===\n";
echo "Total Belanja           : Rp " . number_format($totalBelanja, 0, ',', '.') . "\n";
echo "Diskon                  : Rp " . number_format($diskon, 0, ',', '.') . "\n";
echo "-----------------------------------\n";
echo "Total yang Harus Dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "\n";
?>