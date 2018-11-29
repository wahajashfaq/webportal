<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Edit Product</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Product</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Stocks/UpdateStockService" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
      <label class="control-label" for="StockName">Stock Name</label>  
      <input id="StockName" name="StockName" value="<?php echo $stock->StockName?>" type="text" placeholder="Stock Name" class="form-control input-md" required="">
      <?php echo form_hidden('DataID', $stock->s_ID, 'id="DataID"'); ?>
    </div>
   </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
        <label class="control-label" for="SupplierID">Supplier</label>
        <select id="SupplierID" name="SupplierID" class="form-control" >
         <option value="<?php echo $supplierID?>" selected><?php echo $stock->SupplierName?></option>
          <?php foreach ($suppliers as $Supplier):
           if ($Supplier->Name.$Supplier->Lname !=$stock->SupplierName) 
           {
          ?>
          <option value="<?php echo $Supplier->ID;?>"><?php echo $Supplier->Name." ".$Supplier->Lname;?></option>
          <?php 
            }
          endforeach;?>
        </select>
    </div>
  </div>
</div>



<div class = "row">
    <div class="col-md-3 ">
    <div class="form-group">
    <label class="control-label" for="QuantityPurchased">Quantity Purchased(KG)</label>  
    <input id="QuantityPurchased" value="<?php echo $stock->QP?>" name="QuantityPurchased" type="number" placeholder="e.g 10" class="form-control input-md" required="">      
    </div>
   </div>

    <div class="col-md-3 ">
    <div class="form-group">
    <label class="control-label" for="QuantityIssued">Quantity Issued(KG)</label>  
    <input id="QuantityIssued" name="QuantityIssued" value="<?php echo $stock->Qissue?>" type="number" placeholder="000" class="form-control input-md" >      
    </div>
   </div>

    <div class="col-md-2">
    <div class="form-group">
    <label class="control-label" for="PriceperKG">Cost Per(KG)</label>  
    <input id="PriceperKG" name="PriceperKG" value="<?php echo $stock->Price?>" type="number" placeholder="e.g 1000 PKR" class="form-control input-md" required="">      
     <?php echo form_hidden('TotalPrice',0, 'id="TotalPrice"'); ?>
    </div>
   </div>

</div>


<div class = "row">
   <div class="col-md-3 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="StockDate">Purchaes Date</label>
        <input class="form-control" id="StockDate" value="<?php echo date("Y-m-d", strtotime($stock->date ));?>" name="StockDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50"><?php echo $stock->comment?>
      </textarea>
      </div>
  </div>
</div>




<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Update Stock">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   




