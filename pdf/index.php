<?php
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('ReportAU_2145225.pdf');
 // Retrieve all pages from the pdf file.
$pages  = $pdf->getPages();
 // Loop over each page to extract text.
$i = 0;
foreach ($pages as $page) {
  $page_obj = $page->getTextArray();
  $i++;
  if($i==1){
    $header = array();
    $header[0] = $page_obj[0].$page_obj[1];
    $header[1] = $page_obj[2].$page_obj[3];
    $header[2] = $page_obj[4].$page_obj[5].$page_obj[6];
    $header[3] = $page_obj[7].$page_obj[8];
    $header[4] = $page_obj[9];
    $header[5] = $page_obj[10].$page_obj[11];
    $header[6] = $page_obj[12].$page_obj[13];
    $header[7] = $page_obj[14];
    $header[8] = $page_obj[15];
    $header[9] = $page_obj[16];
    $header[10] = $page_obj[17];
    $header[11] = $page_obj[18];

    $con = array();

  // $arr = explode('\n',$page_obj);
    var_dump($header);
  }
}

?>
