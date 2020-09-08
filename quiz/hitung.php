<?php
function hitung($string_data)
{
    $hasil = 0;
    if (strpos($string_data, "+")) {
        $angka = explode("+", $string_data);
        $hasil = $angka[0] + $angka[1];
    } else if (strpos($string_data, "-")) {
        $angka = explode("-", $string_data);
        $hasil = $angka[0] - $angka[1];
    } else if (strpos($string_data, "*")) {
        $angka = explode("*", $string_data);
        $hasil = $angka[0] * $angka[1];
    } else if (strpos($string_data, ":")) {
        $angka = explode(":", $string_data);
        $hasil = $angka[0] / $angka[1];
    } else if (strpos($string_data, "%")) {
        $angka = explode("%", $string_data);
        $hasil = $angka[0] % $angka[1];
    }

    return $hasil;
}

echo hitung("102*2");
echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");
echo "<br>";
