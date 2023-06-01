<?php
use Intervention\Image\ImageManagerStatic as Image;

require 'vendor/autoload.php';

// Путь к исходному изображению
$pathToPngImage = './InputImages/Photo1.png'; // Путь к PNG или JPG файлу
$pathToJpgImage = './InputImages/Photo2.jpg';

// Путь к водяному знаку
$watermarkPath = './Watermarks/watermark1.png'; // Путь к PNG файлу с водяным знаком
$watermark1 = Image::make($watermarkPath);
$watermark1->rotate(110);
// Zoom the watermark image to the desired dimensions
$watermark1->resize(1800, 1800);

$watermark1->opacity(45);

$watermark2 = Image::make($watermarkPath);
$watermark2->rotate(110);
// Zoom the watermark image to the desired dimensions
$watermark2->resize(1400, 1400);

$watermark2->opacity(23);


// Загружаем исходное изображение
$PngImage = Image::make($pathToPngImage);
$JpgImage = Image::make($pathToJpgImage);

// Накладываем водяной знак на исходное изображение
$PngImage->insert($watermark2, 'center', );
$JpgImage->insert($watermark1, 'center', );

// Сохраняем измененное изображение
$PngImage->save('OutputImages/PngImage.png');
$JpgImage->save('OutputImages/JpgImage.jpg');



echo 'Водяной знак успешно добавлен.';


