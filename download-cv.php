<?php
$pdfPath = __DIR__ . '/assets/resume/Farrukh_Ahmed_Khan_Resume.pdf';
$downloadName = 'Farrukh_Ahmed_Khan_Resume.pdf';

if (!file_exists($pdfPath)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo "Resume PDF not found.\n\nPlease place your file at:\nassets/resume/Farrukh_Ahmed_Khan_Resume.pdf";
    exit;
}

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($pdfPath));
readfile($pdfPath);
exit;
