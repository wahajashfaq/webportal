<?php
include_once('Templates/Admin_header.php');?>

    <title>Creditor Details</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Reports </a>
            </li>
            <li class="breadcrumb-item active">Creditor Payment details</li>
          </ol>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">   <!--Ref https://www.w3schools.com/php/func_date_date_format.asp-->
                        <div class="col-md-6" style="align:right;"> <!--dS gives 11th M gives month name and Y gives year-->
                           <h2><p class="font-weight-bold mb-1">Creditor Payment details</p></h2>
                            <p class="text-muted">As of Stock name: <strong><?=$sname ?></strong> added on: <strong><?=date("jS M,Y", strtotime($sdate));?></strong></p>
                        </div>
                        <div class="col-md-6" >
                            <h2><p class="font-weight-bold mb-1">Supplier Name</p></h2>
                            <p class="text-muted"><?= $Name[0]->Name." ".$Name[0]->Lname; ?></p>
                        </div>

                    </div>

                    <hr class="my-3">

                      <form class="form-horizontal" action="<?php echo base_url('Stocks/AddCreditEntery/'.$ID)?>" method="post">
                    <div class="row pb-4 p-4">
                        <div class="col-md-3">
                          <div class="form-group">
                          <h4>Add Amount</h4>
                          <input class="form-control" id="PayAmount" name="PayAmount" placeholder="Enter Amount" type="number" required="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                          <h4>Date</h4>
                          <input class="form-control" id="PayDate" name="PayDate" placeholder="MM/DD/YYY" type="date" required="">
                          </div>
                        </div>
                    </div>

                      <div class="row pb-4 p-4">
                        <div class="col-md-3">
                          <div class="form-group">
                          <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add Payment">
                          </div>
                        </div>
                    </div>
                      </form>

                      <?php if($Error){ ?>
                      <div class="row pb-4 p-4">
                        <div class="col-md-6">
                            <h4><?= $Error ?></h4>  
                        </div>
                      </div>
                      <?php } ?>

                        

                    <hr class="my-3">

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th class="border-0 text-uppercase small font-weight-bold">No#</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Amount paid</th>
                                  <th class="border-0 text-uppercase small font-weight-bold">Date</th>
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
                                        <td><?=$p->amount?></td>
                                        <td><?=date("jS M,Y", strtotime($p->date));?></td>
                                        <td><?=anchor("Stocks/DeleteCreditEntery/".$p->id."/".$ID,"Delete",array('onclick' => "return confirm('Do you want delete this record')" ,'class' => "btn btn-sm btn-danger"))?></td>
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
                            <div class="h3 mb-1">Due Payament</div>
                            <div class="h3 font-weight-light"><?=$Owe ?> PKR&nbsp;&nbsp;&nbsp;</div>
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
