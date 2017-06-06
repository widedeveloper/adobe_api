<?php
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('ReportAU_2145225.pdf');
 // Retrieve all pages from the pdf file.
$pages  = $pdf->getPages();
 // Loop over each page to extract text.
$i = 0;
foreach ($pages as $page) {
  //$page_obj = $page->getTextArray();
  $page_obj = $page->getTextArray();

  $i++;
  if($i==1){
   $header = array();
    $header[0] = $page_obj[0][0];
    $header[1] = $page_obj[0][1];
    $header[2] = $page_obj[0][2];
    $header[3] = $page_obj[0][3];
    $header[4] = $page_obj[0][4];
    $header[5] = $page_obj[0][5];
    $header[6] = $page_obj[0][6];
    $header[7] = $page_obj[0][7];
    $header[8] = $page_obj[0][8];
    $header[9] = $page_obj[0][9];
    $header[10] = $page_obj[0][10];
    $header[11] = $page_obj[0][11];

    for($j = 1;$j<count($page_obj);$j++){
      $con[] = array(
        'item'=>$page_obj[$j][0],
        'conn_date'=>$page_obj[$j][1],
        'conn_time'=>$page_obj[$j][2],
        'seizure_time'=>$page_obj[$j][3],
        'et'=>$page_obj[$j][4],
        'originating'=>$page_obj[$j][6],
        'terminating'=>$page_obj[$j][7],
        'imei'=>$page_obj[$j][8],
        'imsi'=>$page_obj[$j][9],
        'ct'=>$page_obj[$j][10],
        'feature'=>$page_obj[$j][11],
        'cell_location'=>$page_obj[$j][12]
      );
    }



    //var_dump($header);echo "<br>";
    var_dump($con);

    //var_dump($page_obj);
  }


  // $arr = explode('\n',$page_obj);


}

?>
