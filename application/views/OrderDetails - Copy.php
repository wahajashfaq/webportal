<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Order Details</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">OrderDetails</li>
          </ol>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-1">
                        <div class="col-md-6">
                           <h3><p class="font-weight-bold mb-1">Order #550</p></h3> 
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                        <div class="col-md-6" >
                        <div class="col-md-2 pull-right">
                        <button data-placement="top" data-toggle="tooltip" title="Print" style="color:White" 
                        class="OrderPDFBtn btn btn-md    btn-info pull-right mb-1">
                          <i class="fa fa-arrow-left" aria-hidden="true"></i>
                          Back    
                         </button>
                        
                        </div>
                        <div class="col-md-2 pull-right">
                         <button data-placement="top" data-toggle="tooltip" title="Print" style="color:White" 
                         class="OrderPDFBtn btn btn-md btn-primary pull-right mb-1">
                          <i class="fa fa-file-pdf-o" aria-hidden="true"  ></i>
                           Export PDF
                         </button>
                        
                        </div> 
                      </div>

                    </div>

                    <hr class="my-3">

                    <div class="row pb-4 p-4">
                        
                    <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Customer Details</p>
                            <p class="mb-1"><span class="text-muted"><b>VAT: </b></span> 1425782</p>
                            <p class="mb-1"><span class="text-muted"><b>VAT ID: </b></span> 10253642</p>
                            <p class="mb-1"><span class="text-muted"><b>Payment Type: </b></span> Root</p>
                            <p class="mb-1"><span class="text-muted"><b>Name: </b></span> John Doe</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Order Details</p>
                            <p class="mb-1"><span class="text-muted"><b>VAT: </b></span> 1425782</p>
                            <p class="mb-1"><span class="text-muted"><b>VAT ID: </b></span> 10253642</p>
                            <p class="mb-1"><span class="text-muted"><b>Payment Type: </b></span> Root</p>
                            <p class="mb-1"><span class="text-muted"><b>Name: </b></span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>21</td>
                                        <td>$321</td>
                                        <td>$3452</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>234</td>
                                        <td>$6356</td>
                                        <td>$23423</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>4534</td>
                                        <td>$354</td>
                                        <td>$23434</td>
                                    </tr>
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
                            <div class="mb-2">Grand Total</div>
                            <div class="h3 font-weight-light">234,234 PKR</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h3 font-weight-light">10 PKR</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
</div>



       
      
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>   
