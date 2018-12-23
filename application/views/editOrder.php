<?php include_once('Templates/Admin_header.php');?>   
 
    <title>Edit Orders</title>

<script type="text/javascript">
var arr = <?php echo json_encode($SelectedData)?>;
</script>
<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Orders</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Orders/UpdateOrderEntry" method="POST">
<fieldset>

<div class = "row">
  
   <div class="col-md-3 ">
    <div class="form-group">
      <label class="control-label" for="Reference">Order Reference</label>  
      <input id="Reference" name="Reference" value="<?=$Order->Reference?>" type="text" placeholder="Order Reference" class="form-control input-md" required="">
       <?php echo form_hidden('DataID', $Order->OrderID, 'id="DataID"'); ?>
    </div>
   </div>

  <div class="col-md-3 ">
     <div class="form-group">
     <label class="control-label" for="CustomerID">Customers</label>
        <select  required id="CustomerID" name="CustomerID" class="form-control" >
         <?php
          if ($Customers) 
          {
           ?>
           <option value="0">Select Customer</option>
          <?php foreach ($Customers as $Customer):?>
          <option  value="<?php echo $Customer->cid;?>"<?=$Customer->cid == $Order->CustomerID ? ' selected="selected"' : '';?> class="CustomerOption <?php echo preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ','', $Customer->Cname));?>"><?php echo $Customer->Cname?></option>
          <?php endforeach;
           }else
           {?>
              <option value="0" selected>No Customer In system</option>  
           <?php
           }
          ?>
        </select>    
     </div>
     <?php 
     if ($Customers) 
     { }
      else{
      ?>
      <span style="color:red" class="Error4">No Customer Registered</span>
      <?php
      }
     ?>
     <span style="color:red" class="Error3">Must Select Valid Products to proceed</span>

  </div>

  <div class="col-md-2">
     <div class="form-group">
     <label class="control-label" for="Selling Price">Price</label>  
     <input id="Selling_Price" name="Selling_Price" value="<?= $Order->Selling_Price?>" min=0 type="number" placeholder="0" class="form-control input-md" >
     </div>
  </div>
  
</div>




<div class = "row">
   <div class="col-md-3">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="OrderDate">Order Date</label>
        <input class="form-control"  value="<?php echo date("Y-m-d", strtotime($Order->OrderDate ));?>" id="OrderDate" name="OrderDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>
    <div class="col-md-3">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="DeliverDate">Delivery Date</label>
        <input class="form-control"  value="<?php echo date("Y-m-d", strtotime($Order->DeliverDate ));?>" id="DeliverDate" name="DeliverDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>

    <div class="col-md-2">
     <div class="form-group">
     <label class="control-label"  for="Discount">Discount</label>  
     <input id="Discount" name="Discount" value="<?= $Order->Discount?>" min=0 type="number" placeholder="0" class="form-control input-md" >
     </div>
    </div>
     

</div>

<div class = "row">
    
    <div class="col-md-4 ">
     <div class="form-group">
     <label class="control-label" for="StockID">Products</label>
        <select id="StockID" name="StockID" class="form-control" >
         <?php
          if ($Products) 
          {
           ?>
           <option value="0" selected>Select one</option>
          <?php foreach ($Products as $Product):?>
          <option  value="<?php echo $Product->quantity."/".$Product->p_Name;?>" 
            class="ProductOption <?php echo preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ','', $Product->p_Name));?>">
            <?php echo $Product->p_Name?>
          </option>
          <?php endforeach;
           }else
           {?>
              <option value="0" selected>Product Are Empty</option>  
           <?php
           }
          ?>
        </select>    
     </div>
     <?php 
     if ($Products) 
     { }
      else{
      ?>
      <span style="color:red" class="Error4">No Products Available for Order</span>
      <?php
      }
     ?>
     <span style="color:red" class="Error3">Must Select Valid Products to proceed</span>

    </div>


    <div class="col-md-4 ">
    <div class="form-group">
     
     <div class="row">
      
       <div class="col-md-4">
       <div class="form-group">
       <label class="control-label"  for="QuantityAvailable">Available(KG)</label>  
       <input id="QuantityAvailable" disabled name="QuantityAvailable" type="number" placeholder="000" class="form-control input-md" >
       </div>
       </div>
     
       <div class="col-md-4">
       <div class="form-group">
       <label class="control-label"  for="InputAmount">Amount(KG)</label>  
       <input id="InputAmount" name="InputAmount"  type="number" placeholder="000" class="form-control input-md" >
       </div>
       </div>
     
     <div class="col-md-4">
       <div class="form-group">    
       <label class="control-label" for="AddPoduct">Add Product</label></br>
       <a name="AddPoduct" id="AddPoduct" style="border-radius:1.8rem" class="AddItem btn btn-md btn-primary"><i class="fa fa-plus"></i></a>    
       </div>
       </div>
     </div>
       <span class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input Amount should be less than available</span>
       <span style="color:red" class="Error2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Must Add input amount to proceed</span>

    </div>
   </div>
       
</div>


<div class = "SelectGroupforOrder row">
   <div class="col-md-8 ">
      <div class="form-group"> <!-- Date input -->
        <label class="card mb-3 card-header control-label" for="ProductDate"><b>Selected Items</b></label>
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
                      <?php if(count($SelectedData)):
                         foreach ($SelectedData as $stock):
                        ?>
                      <tr>
                      <input type="hidden" id="name" name="sname[]" value="<?php echo $stock->name;?>"> 
                      <td><?=$stock->name?></td>
                      <input type="hidden" id="name" name="sweight[]" value="<?php echo $stock->amount;?>">
                      <td><?=$stock->amount?></td>
                      <td>
                      <a  style="border-radius:1.8rem" id="<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ','', $stock->name));?>" class="BtnRemove btn btn-danger"><i class="fa fa-minus"></i></a>
                      </td> 
                    </tr>
                          <?php
                          endforeach;
                          else:
                          ?>
                        <tr>
                          <td colspan="9">
                            No Records Found..!!
                          </td>
                        </tr>
                      <?php endif;?>

                  </tbody>
                      </table>
                  </div>
              </div>
        </div>
    </div>
</div>

<div class = "row">
   <div class="col-md-8">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50"><?=$Order->comments?></textarea>
      </div>
  </div>
</div>


<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="AddProduct AddProductBtn btn btn-md btn-primary" type="submit" value="Add Order">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   




