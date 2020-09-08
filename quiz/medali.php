<?php

function perolehan_medali($array = null)
{
    if ($array == null) {
        return array("no data");
    } else {
        for ($i = 0; $i < count($array); $i++) {
            $hasil[$i]['negara'] = $array[$i][0];
            $hasil[$i]['emas'] = 0;
            $hasil[$i]['perak'] = 0;
            $hasil[$i]['perunggu'] = 0;
        }
        $hasil = array_unique($hasil, SORT_REGULAR);

        for ($i = 0; $i < count($array); $i++) {
            if (array_search($array[$i][0], array_column($hasil, 'negara')) >= 0 && $array[$i][1] == 'emas') {
                $key = array_search($array[$i][0], array_column($hasil, 'negara'));
                $hasil[$key]['emas'] += 1;
            } else if (array_search($array[$i][0], array_column($hasil, 'negara')) >= 0 && $array[$i][1] == 'perak') {
                $key = array_search($array[$i][0], array_column($hasil, 'negara'));
                $hasil[$key]['perak'] += 1;
            } else if (array_search($array[$i][0], array_column($hasil, 'negara')) >= 0 && $array[$i][1] == 'perunggu') {
                $key = array_search($array[$i][0], array_column($hasil, 'negara'));
                $hasil[$key]['perunggu'] += 1;
            }
        }

        return $hasil;
    }
}

print_r(perolehan_medali(
    array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas'),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas')
    )
));

print_r(perolehan_medali());
