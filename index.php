﻿<?php
require_once 'src/TesseractOCR/TesseractOCR.php';
//or require_once 'vendor/autoload.php' if you are using composer

$tesseract = new TesseractOCR();
$tesseract->setImage('tests/images/hello.png');
echo $tesseract->recognize();
?>