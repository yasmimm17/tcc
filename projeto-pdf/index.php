<?php

    require_once __DIR__ . '../vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>tntgdhth!</h1>');
    $mpdf->Output();
    exit;
?>