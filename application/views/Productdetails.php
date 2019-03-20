<?php include_once('Templates/Admin_header.php');?>

    <title>Order Details</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Product </a>
            </li>
            <li class="breadcrumb-item active">Product Details</li>
          </ol>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">   <!--Ref https://www.w3schools.com/php/func_date_date_format.asp-->
                        <div class="col-md-6"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h3><p class="font-weight-bold mb-1">Product Name: <?= $product->ProductName ?></p></h3>
                            <p class="text-muted">Completed on: <?=date("dS M,Y", strtotime($product->ProductDate));?></p>
                        </div>
                        <div class="col-md-6" >
                         
                            <p class="mb-1"><span class="text-muted"><b>Unit: </b></span><?= $product->unit ?></p>
                            <p class="mb-1"><span class="text-muted"><b>Quantity Produced </b></span> <?= $product->QuantityProduced?></p>
                            <p class="mb-1"><span class="text-muted"><b>Quantity Issued: </b></span><?= $product->QuantityIssued ?></p>
                            <p class="mb-1"><span class="text-muted"><b>Price per <?= $product->unit ?>: </b></span><?=$product->PriceperKG?></p>
                        
                        </div>

                    </div>

                    <hr class="my-3">

                    <div class="row p-5">
                        <div class="col-md-12">
                            <h2>Used Stock</h2>
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th class="border-0 text-uppercase small font-weight-bold">No#</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Stock Date</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Quantity Used</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Unit</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Cost Per Unit</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Total Cost</th>
                                 </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    if ($SelectedData)
                                    {
                                        foreach ($SelectedData as $key => $p)
                                        {
                                    ?>
                                    <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$p->name?></td>
                                        <td><?=date("dS M,Y", strtotime($p->StockDate));?></td>
                                        <td><?= $p->issued ?></td>
                                        <td><?=$p->unit?></td>
                                        <td><?=$p->PriceperKG?></td>
                                        <td><?=$p->PriceperKG*$p->issued?></td>
                                    </tr>
                                    <?php
                                         }//End Of ForEach
                                    } //End of if
                                    else{
                                    ?>
                                    <tr>
                                      <td colspan="9">
                                        No Records Found..!!
                                      </td>
                                   </tr>
                                   <?php } //Enf of Else
                                   ?>

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
                            <div class="h3 font-weight-light"><?=$product->total?> PKR</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

      <div class="card-footer small text-muted"></div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>
