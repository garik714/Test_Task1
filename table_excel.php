<?php


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require 'vendor/autoload.php';

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Фамилия');
$sheet->setCellValue('B1', 'Имя');
$sheet->setCellValue('C1', 'Адрес электронной почты');

$sheet->setCellValue('A2', 'Арстамян');
$sheet->setCellValue('B2', 'Гарик');
$sheet->setCellValue('C2', 'arstamyang@list.ru');


$writer = new Xlsx($spreadsheet);
$filename = 'example.xlsx';
$writer->save($filename);

echo 'Excel документ успешно создан.';

?>
