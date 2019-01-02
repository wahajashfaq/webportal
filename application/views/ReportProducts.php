<?php include_once('Templates/Admin_header.php');?>

    <title>Product Report</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Reports </a>
            </li>
            <li class="breadcrumb-item active">Product Report</li>
          </ol>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">   <!--Ref https://www.w3schools.com/php/func_date_date_format.asp-->
                        <div class="col-md-8" style="align:right;"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h2><p class="font-weight-bold mb-1">Product Valuation Report</p></h2>
                            <p class="text-muted">As of Date : <?=date("jS M ,Y");?></p>
                        </div>
                        <div class="col-md-3" >

                      </div>

                    </div>

                    <hr class="my-3">

                    <div class="row pb-4 p-4">

                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th class="border-0 text-uppercase small font-weight-bold">No#</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Product Name</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Quantity Available</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Price</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Net Total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    if ($Records)
                                    {
                                        foreach ($Records as $key => $p)
                                        {
                                    ?>
                                    <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$p->Name?></td>
                                        <td><?=$p->qa?></td>
                                        <td><?=$p->price?></td>
                                        <td><?=$p->total?></td>
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
                            <div class="h3 mb-1">Total Value of Products</div>
                            <div class="h3 font-weight-light"><?=$Total?> PKR&nbsp;&nbsp;&nbsp;</div>
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
