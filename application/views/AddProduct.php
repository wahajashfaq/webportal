<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Add Products</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Products</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Products/AddProductEntry" method="POST">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
      <label class="control-label" for="ProductName">Product Name</label>  
      <input id="ProductName" name="ProductName" type="text" placeholder="Product Name" class="form-control input-md" required="">
    </div>
   </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
        
    </div>
  </div>
</div>



<div class = "row">
    <div class="col-md-3 ">
    <div class="form-group">
    <label class="control-label" for="QuantityProduced">Quantity Produced(KG)</label>  
    <input id="QuantityProduced" name="QuantityProduced" type="number" placeholder="e.g 10" class="form-control input-md" required="">      
    </div>
   </div>

    <div class="col-md-2 ">
    <div class="form-group">
    <label class="control-label" for="QuantityIssued">Quantity Issued(KG)</label>  
    <input id="QuantityIssued" name="QuantityIssued" type="number" placeholder="000" class="form-control input-md" >      
    </div>
   </div>

    <div class="col-md-2">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="ProductDate">Product Date</label>
        <input class="form-control" id="ProductDate" name="ProductDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>
</div>

<div class = "row">
    <div class="col-md-3 ">
     <div class="form-group">
     <label class="control-label" for="StockID">Stocks</label>
        <select id="StockID" name="StockID" class="form-control" >
         <option value="0" selected>Select one</option>
          <?php foreach ($Stocks as $Stock):?>
          <option  value="<?php echo $Stock->quantity."/".$Stock->s_Name;?>" class="StockOption <?php echo str_replace(' ','', $Stock->s_Name);?>"><?php echo $Stock->s_Name?></option>
          <?php endforeach;?>
        </select>    
     </div>
     <span style="color:red" class="Error3">Must Select Valid Stock to proceed</span>

    </div>

    <div class="col-md-4 ">
    <div class="form-group">
     <div class="row">
      
       <div class="col-md-6">
       <div class="form-group">
       <label class="control-label"  for="QuantityAvailable">Available(KG)</label>  
       <input id="QuantityAvailable" disabled name="QuantityAvailable" type="number" placeholder="000" class="form-control input-md" >
       </div>
       </div>
     
       <div class="col-md-6">
       <div class="form-group">
       <label class="control-label" for="InputAmount">Amount(KG)</label>  
       <input id="InputAmount" name="InputAmount" type="number" placeholder="000" class="form-control input-md" >
       </div>
       </div>
       <span class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input Amount should be less than available</span>
       <span style="color:red" class="Error2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Must Add input amount to proceed</span>

     </div>
    </div>
   </div>
       
    <div class="col-md-2 ">
     <div class="form-group">    
    <label class="control-label" for="AddItem">Add Item</label></br>
     <a name="AddItem" id="AddItem" style="border-radius:1.8rem" class="AddItem btn btn-md btn-primary"><i class="fa fa-plus"></i></a>    
     </div>
   </div>
</div>


<div class = "SelectGroup row">
   <div class="col-md-8 ">
      <div class="form-group"> <!-- Date input -->
        <label class="card mb-3 card-header control-label" for="ProductDate">Selected Items</label>
            <div class="container">
                <div class="table-responsive">
                    <table class=" table table-striped" id="SelectedItemTable" width="100%" cellspacing="0">
                        <thead>
                        <tr >
                          <th>Name</th>
                          <th>Selected Amount</th>
                          <th>Remove</th>
                        </tr>
                      </thead>
                     
                        <tbody>      
                        </tbody>
                      </table>
                  </div>
              </div>
        </div>
    </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50">

      </textarea>
      </div>
  </div>
</div>


<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add Product">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   



