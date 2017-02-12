<?php
sleep(2);
ini_set('max_execution_time', 80);
for ($i=190; $i <= 195; $i++) {
    $no = $i.'/pdf';
    $url = 'https://www.leybook.com/doc/'.$no;
    $url2 = file_get_contents('https://www.leybook.com/doc/'.$i);
    preg_match_all("'<strong>(.*?)</strong>'si", $url2, $match, PREG_PATTERN_ORDER);

    $pdf = file_get_contents($url);
    file_put_contents('C:/LeyBook/'.$i.'_'.trim(strip_tags($match[0][1])).'_'.trim(strip_tags($match[0][2])).'_'.trim(strip_tags($match[0][3])).'_'.str_replace("/","", trim(strip_tags($match[0][5]))).'_'.str_replace("/","", trim(strip_tags($match[0][6]))).'.pdf', $pdf);
    echo 'Se ha descargado Ley Book #'.$i.' '.trim(strip_tags($match[0][1])).' '.trim(strip_tags($match[0][2])).'<br>';
}
?>
