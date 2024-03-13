<?php
$date1 = "2024-03-13";
$date2 = "2002-10-10";

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

$diffInSeconds = abs($timestamp2 - $timestamp1);

$diffInMinutes = $diffInSeconds / 60;

$diffInHours = $diffInSeconds / (60 * 60);

$diffInDays = floor($diffInSeconds / (60 * 60 * 24));

echo "Selisih antara tanggal $date1 dan $date2 adalah:\n";
echo "Detik: $diffInSeconds\n";
echo "Menit: $diffInMinutes\n";
echo "Jam: $diffInHours\n";
echo "Hari: $diffInDays\n";
?>