<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Add Stock</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Stock</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Stocks/AddStockEntry" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-3 ">
    <div class="form-group">
      <label class="control-label" for="StockName">Stock Name</label>  
      <!--input id="StockName" name="StockName" type="text" placeholder="Stock Name" class="form-control input-md" required=""-->
      <select id="StockName" name="StockName" class="form-control" >
         <option value="" selected>Select one</option>
          <?php foreach ($stocksname as $Stockname):?>
          <option value="<?php echo $Stockname->name;?>"><?php echo  $Stockname->name;?></option>
          <?php endforeach;?>
      </select>
    </div>
   </div>


   <div class="col-md-3">
    <div class="form-group">
        <label class="control-label" for="SupplierID">Supplier</label>
        <select id="SupplierID" name="SupplierID" class="form-control" >
         <option value="" selected>Select one</option>
          <?php foreach ($suppliers as $Supplier):?>
          <option value="<?php echo $Supplier->ID;?>"><?php echo $Supplier->Name." ".$Supplier->Lname;?></option>
          <?php endforeach;?>
        </select>
     </div>
    </div>

    <div class="col-md-2">
      <!--div class="form-group">
      <label class="control-label" for="owe">Owing Amount</label>  
      <input id="owe" name="owe" type="number" min="0" placeholder="e.g 1000 PKR" class="form-control input-md" required="">      
      </div-->
   </div>

</div>




<div class = "row">
    <div class="col-md-3 ">
    <div class="form-group">
    <label class="control-label" for="QuantityPurchased">Quantity Purchased(UNIT)</label>  
    <input id="QuantityPurchased" name="QuantityPurchased" type="number" placeholder="e.g 10" class="form-control input-md" required="">      
    </div>
   </div>

    <div class="col-md-3 ">
    <!--div class="form-group">
    <label class="control-label" for="QuantityIssued">Quantity Issued(UNIT)</label>  
    <input id="QuantityIssued" name="QuantityIssued" type="number" placeholder="000" class="form-control input-md" >      
    </div-->
    <div class="form-group">
    <label class="control-label" for="PriceperKG">Cost Per(UNIT)</label>  
    <input id="PriceperKG" name="PriceperKG" type="number" placeholder="e.g 1000 PKR" class="form-control input-md" required="">      
     <?php echo form_hidden('TotalPrice', 0, 'id="TotalPrice"'); ?>
    </div>
   </div>

    <div class="col-md-2">
    
   </div>

</div>


<div class = "row">
   <div class="col-md-3 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="StockDate">Purchaes Date</label>
        <input class="form-control" id="StockDate" name="StockDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>
   <div class="col-md-3 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="unit">Unit</label>
        <select id="unit" name="unit" class="form-control" >
         <option value="" selected>Select one</option>
          <?php foreach ($units as $unit):?>
          <option value="<?php echo $unit->name ?>"><?php echo $unit->name ?></option>
          <?php endforeach;?>
        </select>
      </div>
   </div>
</div>


<div class = "row">
   <div class="col-md-8 ">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50"></textarea>
      </div>
  </div>
</div>


<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add Stock">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   




