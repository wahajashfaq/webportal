<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 20);

// add a page
$pdf->AddPage();

$html ='
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">   <!--Ref https://www.w3schools.com/php/func_date_date_format.asp-->
                        <div class="col-md-6"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h3><p class="font-weight-bold mb-1">Order#<?= $Order->oid?></p></h3>
                            <p class="text-muted">Due to: <?=date("dS M,Y", strtotime($Order->dDate));?></p>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row pb-4 p-4">

                    <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Customer Details</p>
                            <p class="mb-1"><span class="text-muted"><b>NAME:</b></span> <?=$Order->CName?></p>
                            <p class="mb-1"><span class="text-muted"><b>EMAIL ID: </b></span><?=$Order->email?></p>
                            <p class="mb-1"><span class="text-muted"><b>CONTACT: </b></span><?=$Order->number?></p>
                            <p class="mb-1" style="width:500px"><span class="text-muted"><b>ADDRESS:</b></span>
                                <?=$Order->Caddr?>
                            </p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Order Details</p>
                            <p class="mb-1"><span class="text-muted"><b>Order ID: </b></span><?= $Order->oid?></p>
                            <p class="mb-1"><span class="text-muted"><b>REFERENCE: </b></span> <?= $Order->ref?></p>
                            <p class="mb-1"><span class="text-muted"><b>Payment Type: </b></span> Root</p>
                            <p class="mb-1"><span class="text-muted"><b>DATE: </b></span><?=date("jS M,Y", strtotime($Order->oDate));?></p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th class="border-0 text-uppercase small font-weight-bold">No#</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Unit Price</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                 </tr>
                              </thead>
                              <tbody>';
                                
                                    if ($products)
                                    {
                                        foreach ($products as $key => $p)
                                        {
                                   
                                    $html.= "
                                    <tr>
                                        <td>". $key ."</td>
                                        <td>". $p->Name ."</td>
                                        <td>". $p->amount ."</td>
                                        <td>". $p->PerKg ."</td>
                                        <td>". $p->SubTotal ."</td>
                                    </tr>
                                    ";
                                    
                                   
                                         }//End Of ForEach
                                    } //End of if
                                    else{
                                    	$html .="
                                    <tr>
                                      <td colspan=9>
                                        No Records Found..!!
                                      </td>
                                   </tr>
                                   ";
                                    } //Enf of Else
                                   $html.='
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-1">

                            <div class="py-3 px-4 text-right">
                            <div class="mb-2"></div>
                            <div class="h2 font-weight-light"></div>
                        </div>
                        <div class="py-3 px-5 text-right">
                            <div class="mb-1">Grand Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="h3 font-weight-light"><?=$Order->Total?> PKR</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-1">Discount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="h3 font-weight-light"><?=$Order->disc?> PKR</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>';

$pdf->writeHTML($html, true, false, true, false, '');
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

//Close and output PDF document
$pdf->Output('Invoice.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+