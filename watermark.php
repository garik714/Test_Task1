<?php
use Intervention\Image\ImageManagerStatic as Image;

require 'vendor/autoload.php';

// Путь к исходному изображению
$imagePath_pnj = '/home/garik/Downloads/Photo_png.png'; // Путь к PNG или JPG файлу
$imagePath_jpg = '/home/garik/Downloads/Photo_jpj.jpg';

// Путь к водяному знаку
$watermarkPath = '/home/garik/Downloads/watermark.png'; // Путь к PNG файлу с водяным знаком
$watermark = Image::make($watermarkPath);
$watermark->opacity(45);
// Загружаем исходное изображение
$png_image = Image::make($imagePath_pnj);
$jpg_image = Image::make($imagePath_jpg);
// Накладываем водяной знак на исходное изображение
$png_image->insert($watermark, 'top-right', );
$jpg_image->insert($watermark, 'top-right', );
// Сохраняем измененное изображение
$png_image->save('output.png/pngfile.png');
$jpg_image->save('output.jpg/pngfile.jpg');



echo 'Водяной знак успешно добавлен.';


