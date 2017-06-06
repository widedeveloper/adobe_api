<?php


include('class.pdf2text.php');
$a = new PDF2Text();
$a->setFilename('aaa.pdf');
$a->decodePDF();
echo $a->output();
?>
