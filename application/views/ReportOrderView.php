<?php include_once('Templates/Admin_header.php');?>

    <title>Order Report</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Reports </a>
            </li>
            <li class="breadcrumb-item active">Order Report</li>
          </ol>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">   <!--Ref https://www.w3schools.com/php/func_date_date_format.asp-->
                        <div class="col-md-5" style="align:right;"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h2><p class="font-weight-bold mb-1">Orders Report</p></h2>
                            <p class="text-muted">As of Date : <?=date("jS M ,Y");?></p>
                        </div>
                        <div class="col-md-3" >

                      </div>

                          <div class="col-md-4" style="align:right;"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h2><p class="font-weight-bold mb-1">Customer</p></h2>
                      <p class="text-muted">Name : <?=(isset($data[0]->Name)) ? $data[0]->Name:"No Record";?></p>
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
                                  <th class="border-0 text-uppercase small font-weight-bold">Reference</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Order Date</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Deliver Date</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Discount</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Grand Total</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Due Payment</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">View</th>
                                 </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    if ($data)
                                    {
                                        foreach ($data as $key => $p)
                                        {
                                    ?>
                                    <tr>
                                        <td><?=$p->OrderID?></td>
                                        <td><?=$p->Reference?></td>
                                        <td><?=date("jS M,Y", strtotime($p->OrderDate));?></td>
                                        <td><?=date("jS M,Y", strtotime($p->DeliverDate));?></td>
                                        <td><?=$p->Discount?></td>
                                        <td><?=$p->GrandTotal?></td>
                                        <td><?=$p->Due_Payment?></td>
                                        <td style="width:5%"><a href="<?php echo base_url();?>Orders/ViewOrderDetail?DataID=<?php echo $p->OrderID?>&flag=1" data-placement="top" data-toggle="tooltip" title="View"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a></td>     
                     
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

                </div>
            </div>
        </div>
    </div>


</div>

      <div class="card-footer small text-muted"></div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>
