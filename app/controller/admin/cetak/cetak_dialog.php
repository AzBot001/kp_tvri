<?php
require_once '../../../../public/vendor/autoload.php';

ob_start();
include 'template_dialog.php';
$content = ob_get_clean();

$encryption = crypt("cetakdialog", "heCTast");
$file = $encryption.'.pdf';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [210, 330],
    'orientation' => 'P'
]);
$mpdf->WriteHTML($content);
$mpdf->Output($file, 'I');
exit;