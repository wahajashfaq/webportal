<?php
//============================================================+


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Order Invoice');
$pdf->SetSubject('Order Invoice');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, PDF_MARGIN_TOP,10);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// ---------------------------------------------------------

// set font
//$pdf->SetFont('times', '', 15);

// add a page
$pdf->AddPage();

$pdf->SetFont('helveticaBI','I',20);
$pdf->Cell(40,3,'T',0,0,'C', 0, '', 2);


$pdf->Cell(25,5,'',0,0);

$pdf->SetFont('timesB','B',20);
$pdf->Cell(70,3,'TIMETEX INDUSTRIES',0,0,'C', 0, '', 2);

$pdf->Cell(25,5,'',0,0);

$pdf->SetFont('timesB','B',10);
// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
$pdf->MultiCell(30, 2, utf8_decode("Original" . chr(10) ."___________". chr(10). "Duplicate"), 0, 'L', 0, 0, '', '', true);

$pdf->Ln(10);

$pdf->SetFont('helveticaBI','I',20);
$pdf->Cell(40,3,'T',0,0,'C', 0, '', 2);


$pdf->Cell(20,5,'',0,0);

$txt = "Canal Bank Housing Scheme, 29-Latif Block, St # 5 Near Mehar Feyaaz Colony Fateh Garh, Lahore\n";
$txt .= "NTN 3607541- B : STRN 0300360754110\n";
$txt .= "Ph: 042-707557 :tti.info@yahoo.com";

$pdf->SetFont('timesB','B',10);
$pdf->MultiCell(80,2,$txt, 0, 'C', 0, 0, '', '', true);

$pdf->Ln(10);
$pdf->SetFont('helveticaBI','I',18);
$pdf->Cell(10,1,'',0,0);
$pdf->Cell(20,3,'I',0,0,'C', 0, '', 2);

$pdf->Ln(12);

$pdf->Cell(70,1,'',0,0);
$pdf->SetFont('timesB','B',18);
$pdf->Cell(60,5,'SALES TAX INVOICE',0,1,'C');

$pdf->Ln(12);
$pdf->SetFont('timesB','B',10);
$pdf->Cell(30 ,5,'Sold To',1,0,'L');
$pdf->SetFont('times','',10);
$pdf->Cell(80 ,5,$Order->CName,1,0,'L');//end of line
$pdf->SetFont('timesB','B',10);
$pdf->Cell(30,1,'',0,0);
$pdf->Cell(30 ,5,'Seriel #',0,0,'L');
$pdf->Cell(80 ,5,$Order->oid,0,1,'L');//end of line


$pdf->Cell(30 ,10,'Address',1,0,'L');
$pdf->SetFont('times','',10);
$pdf->Cell(80 ,10,$Order->Caddr,1,0,'L');//end of line

$pdf->SetFont('timesB','B',10);
$pdf->Cell(30,1,'',0,0);
$pdf->Cell(25 ,10,'Date',0,0,'L');
$pdf->Cell(60 ,10,date("dS M,Y", strtotime($Order->oDate)),0,1,'L');//end of line

$pdf->SetFont('timesB','B',10);
$pdf->Cell(30 ,5,'Sales Tax Reg No',1,0,'L');
$pdf->SetFont('times','',10);
$pdf->Cell(50 ,5,'03-11-5205-002-28',1,0,'L');//end of line
$pdf->SetFont('timesB','B',10);
$pdf->Cell(60,1,'',0,0);
$pdf->Cell(30 ,5,'PO#',0,0,'L');
$pdf->Cell(80 ,5,'',0,1,'L');//end of line


$pdf->SetFont('timesB','B',10);
$pdf->Cell(30 ,5,'NTN',1,0,'L');
$pdf->SetFont('times','',10);
$pdf->Cell(50 ,5,'1125487-4',1,0,'L');//end of line

// set some text to print
/*
$txt = <<<EOD
TCPDF Example 002

Default page header and footer are disabled using setPrintHeader() and setPrintFooter() methods.
EOD;

// print a block of text using Write()
$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
*/
// ---------------------------------------------------------

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

//invoice contents
$pdf->SetFont('times','B',12);
$pdf->Cell(10 ,20,'Sr',1,0,'C');
$pdf->SetFillColor(249, 249, 249);

$pdf->Cell(50 ,20,'Description',1,0,'C');
$pdf->Cell(20 ,20,'Quantity',1,0,'C');
$pdf->Cell(20 ,20,'Unit',1,0,'C');
$pdf->Cell(20 ,20,'Rate',1,0,'C');
$txt  = "Value Exclusive of\nSales Tax";
$pdf->MultiCell(25,20,$txt, 1, 'C', 0, 0, '', '', true);

$txt  = "Sales Tax Percentage\n17%";
$pdf->MultiCell(25,20,$txt, 1, 'C', 0, 0, '', '', true);

$txt  = "Value Inclusive of \nSales Tax";
$pdf->MultiCell(25,20,$txt, 1, 'C', 0, 0, '', '', true);
$pdf->SetFillColor(249, 249, 249);
$pdf->Cell(200 ,20,' ',0,1,'');

$pdf->SetFont('times','',10);
   // echo "<pre>";
   // print_r($products);exit;

if ($products) 
{
   foreach ($products as $key => $p) 
   {
      $pdf->Cell(10 ,5,$key +1,1,0,'C');
      $pdf->Cell(50 ,5,$p->Name,1,0,'C');
      $pdf->Cell(20 ,5,$p->amount,1,0,'C');
      $pdf->Cell(20 ,5,$p->unit[0]->unit,1,0,'C');
      $pdf->Cell(20 ,5,$p->PerKg,1,0,'C');
      $pdf->Cell(25,5,$p->SubTotal, 1,0, 'C' );
      $pdf->Cell(25,5,($p->SubTotal * 0.17), 1,0, 'C');
      $pdf->Cell(25,5,$p->SubTotal + ($p->SubTotal *0.17), 1,1, 'C');
   }
} 
else
{

}

$pdf->Cell(10 ,10,'',1,0,'C');
$pdf->Cell(50 ,10,'Total',1,0,'C');
$pdf->Cell(20 ,10,'',1,0,'C');
$pdf->Cell(20 ,10,'',1,0,'C');
$pdf->Cell(20 ,10,'',1,0,'C');
$pdf->MultiCell(25,10,$Order->Total, 1, 'C', 0, 0, '', '', true);


$pdf->MultiCell(25,10,$Order->Total * 0.17, 1, 'C', 0, 0, '', '', true);


$pdf->MultiCell(25,10,$Order->Total *(1+0.17), 1, 'C', 0, 0, '', '', true);
$pdf->SetFillColor(249, 249, 249);
$pdf->Cell(200 ,20,' ',0,1,'');

$pdf->Cell(200 ,70,' ',0,1,'');
$pdf->SetFont('times','B',12);

$txt  = "...................................\nPrepared By";
$pdf->MultiCell(40,20,$txt, 0, 'L', 0, 0, '', '', true);
$pdf->Cell(20 ,5,' ',0,0,'');

$txt  = "...................................\nChecked By";
$pdf->MultiCell(40,20,$txt, 0, 'L', 0, 0, '', '', true);
$pdf->Cell(20 ,5,' ',0,0,'');


$txt  = ".........................................\nAuthorized Signature ";
$pdf->MultiCell(60,20,$txt, 0, 'L', 0, 0, '', '', true);

//Close and output PDF document
$pdf->Output('Invoice.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+