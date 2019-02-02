<?php include_once('Templates/Admin_header.php');?>

    <title>Order Details</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Orders </a>
            </li>
            <li class="breadcrumb-item active">OrderDetails</li>
          </ol>


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
                        <div class="col-md-6" >
                         <?php 
                          if ($flag ==true) 
                          {?>
                         <div class="col-md-2 pull-right">
                        <a href="javascript:history.go(-2)" data-toggle="tooltip" title="Back" style="color:White"
                        class="btn btn-md btn-info pull-right mb-1">
                          <i class="fa fa-arrow-left" aria-hidden="true"></i>
                          Back
                         </a>
                        </div>
                        <?php
                          } else {
                            ?>
                        <div class="col-md-2 pull-right">
                        <a href="<?php echo base_url().'Orders/ShowOrders'?>" data-toggle="tooltip" title="Back" style="color:White"
                        class="btn btn-md btn-info pull-right mb-1">
                          <i class="fa fa-arrow-left" aria-hidden="true"></i>
                          Back
                         </a>
                        </div>

                        <div class="col-md-2 pull-right">
                        <a href="<?php echo base_url()?>Orders/editOrder?DataID=<?php echo $Order->oid?>" data-toggle="tooltip" title="Back" style="color:White"
                        class="btn btn-md btn-info pull-right mb-1">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Edit
                         </a>
                        </div>
                          <?php
                          }
                         ?>
                        <div class="col-md-2 pull-right">
                         <a href="<?php echo base_url()?>Orders/GenerateInvoice?DataID=<?php echo $Order->oid?>" data-placement="top" data-toggle="tooltip" title="Print" style="color:White"
                         class="OrderPDFBtn btn btn-md btn-info pull-right mb-1">
                          <i class="fa fa-file-pdf-o" aria-hidden="true"  ></i>
                           Export PDF
                         </a>

                        </div>
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
                              <tbody>
                                    <?php
                                    if ($products)
                                    {
                                        foreach ($products as $key => $p)
                                        {
                                    ?>
                                    <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$p->Name?></td>
                                        <td><?=$p->amount?></td>
                                        <td><?=$p->PerKg?></td>
                                        <td><?=$p->SubTotal?></td>
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


</div>

      <div class="card-footer small text-muted"></div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>
