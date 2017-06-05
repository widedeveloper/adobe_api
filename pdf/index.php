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
	$i++;
	if($i==1){
		
		$page_obj = $page->getTextArray();	
		
		
		
		// $arr = explode('\n',$page_obj);
		var_dump($page_obj);
	}
    
}
 
?>