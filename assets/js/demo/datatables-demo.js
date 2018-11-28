// Call the dataTables jQuery plugin
$(document).ready(function() {
 $('#MemberdataTable').DataTable();
 $('#UserdataTable').DataTable();
 $('#StockdataTable').DataTable();
 $('.text-danger').hide();
 $('.Error2').hide();
 $('.Error3').hide();
 $('.SelectGroup').hide();
 
  });

// $(document).load(function(){
// $('.text-danger').hide();
// });

   $('.UserDelete').click(function()
   {
	    if (confirm("Do you want to delete this record?")) 
	    {
	    	//The Value of This becomes undefined in Ajax Success or error section 
	    	//So we Need to Store Table and Row objects
	    	var obj = $(this).parents('tr');
	    	var table = $('#UserdataTable').DataTable();
	    	//Base_URL is not available in external JS file(here) So we need to Generate it from URL
	    	var domain = window.location.origin; //To get the domain part from url
	    	var pathArray = window.location.pathname.split('/'); // to split all string after domain
	    	var host = pathArray[1]; //This will return the host or root in Url part
	    	var base_url = domain +'/'+ host + '/'; //Combinng all to get base_url same as codeigniter
	    	var id = $(this).attr("id");//Getiing the ID to Delete on server side 

	        $.ajax({
	            url:  base_url+ 'User/deleteUser',
	            type: 'POST',
	            data: {uid:id},
	            dataSrc : "",
	            success: function () 
	            {
	            	table.row(obj).remove().draw(false);
	                //$('#dataTable').DataTable().ajax.reload(); require a json object a parameter
	                // and that was throwing JSON parse error.
	                //SO we are just removing that particular row after successful Ajax delete
	            },
	            error: function ()
	                   {
	                    alert('Request failure');
	                   }
	            
	                });
            
	    }
	    
    });


   $('.Delete').click(function()
   {
	    if (confirm("Do you want to delete this record?")) 
	    {
	    	//The Value of This becomes undefined in Ajax Success or error section 
	    	//So we Need to Store Table and Row objects
	    	var obj = $(this).parents('tr');
	    	var table = $('#MemberdataTable').DataTable();
	    	//Base_URL is not available in external JS file(here) So we need to Generate it from URL
	    	var domain = window.location.origin; //To get the domain part from url
	    	var pathArray = window.location.pathname.split('/'); // to split all string after domain
	    	var host = pathArray[1]; //This will return the host or root in Url part
	    	var base_url = domain +'/'+ host + '/'; //Combinng all to get base_url same as codeigniter
	    	var id = $(this).attr("id");//Getiing the ID to Delete on server side 

	        $.ajax({
	            url:  base_url+ 'Members/deleteMember',
	            type: 'POST',
	            data: {uid:id},
	            dataSrc : "",
	            success: function () 
	            {
	            	table.row(obj).remove().draw(false);
	                //$('#dataTable').DataTable().ajax.reload(); require a json object a parameter
	                // and that was throwing JSON parse error.
	                //SO we are just removing that particular row after successful Ajax delete
	            },
	            error: function ()
	                   {
	                    alert('Request failure');
	                   }
	            
	                });
            
	    }
	    
    });

//StockDelete
   $('.StockDelete').click(function()
   {
	    if (confirm("Do you want to delete this record?")) 
	    {
	    	//The Value of This becomes undefined in Ajax Success or error section 
	    	//So we Need to Store Table and Row objects
	    	var obj = $(this).parents('tr');
	    	var table = $('#StockdataTable').DataTable();
	    	//Base_URL is not available in external JS file(here) So we need to Generate it from URL
	    	var domain = window.location.origin; //To get the domain part from url
	    	var pathArray = window.location.pathname.split('/'); // to split all string after domain
	    	var host = pathArray[1]; //This will return the host or root in Url part
	    	var base_url = domain +'/'+ host + '/'; //Combinng all to get base_url same as codeigniter
	    	var id = $(this).attr("id");//Getiing the ID to Delete on server side 

	        $.ajax({
	            url:  base_url+ 'Stocks/deleteStock',
	            type: 'POST',
	            data: {uid:id},
	            dataSrc : "",
	            success: function () 
	            {
	            	table.row(obj).remove().draw(false);
	            },
	            error: function ()
	                   {
	                    alert('Request failure');
	                   }
	            
	                });
            
	    }
	    
    });

 $('.AddItem').click(function()
   {
   var Input= document.getElementById('InputAmount').value;
   	var available= document.getElementById('QuantityAvailable').value;
   	var Stock= document.getElementById('StockID').value;
   	var item = Stock.split('/');
   	var item_id=item[0];
  // 	alert(item_id);
   	if (+item_id!=0)
   	 {
         // alert("Husnain Ajmal " + a + " " + b);
	   	  if(+Input!=0)
	   	  {
	   	  	$('.Error3').fadeOut();
	   	  	//alert("Husnain Ajmal " + a + " " + b);
	   	  	$('.Error2').fadeOut();
	   	  //	alert(a + "/" + b);
	   	  	if(+Input <= +available)
	   	  	{
	   	  //		alert(a + " / Husnain Ajmal" + b);
	   	  $('.Error3').fadeOut();
	   	     $('.text-danger').fadeOut();
	   	  	 $('.Error2').fadeOut();	
	   	    $('.SelectGroup').show("slow");
	   	  	 var html = '<tr id='+item_id+'><td>'+item[1]+'</td><td>'+Input+'</td><td><a  style="border-radius:1.8rem" data-toggle="tooltip" title="Remove" class="BtnRemove btn btn-danger"><i class="fa fa-minus"></i></a></td></tr>';
	         $('#SelectedItemTable').append(html);
	   	  	}
	   	  	else
	   	  	{
	   	  		 $('.Error3').fadeOut();
	   	  	  $('.Error2').fadeOut();
	   	      $('.text-danger').show();
	   	  	 }
	   	  }
	   	  else
	   	  {
	   	  	 $('.Error3').fadeOut();
	   	  	$('.text-danger').fadeOut();
	   	    $('.Error2').show("slow");
	   	  }

   	 }
   	 else
   	 {
  	       $('.text-danger').fadeOut();
	   	   $('.Error2').fadeOut();
           $('.Error3').show("slow");
   	 }         
   	 
	   /* if (confirm("Do you want to delete this record?")) 
	    {
	    	//The Value of This becomes undefined in Ajax Success or error section 
	    	//So we Need to Store Table and Row objects
	    	var obj = $(this).parents('tr');
	    	var table = $('#MemberdataTable').DataTable();
	    	//Base_URL is not available in external JS file(here) So we need to Generate it from URL
	    	var domain = window.location.origin; //To get the domain part from url
	    	var pathArray = window.location.pathname.split('/'); // to split all string after domain
	    	var host = pathArray[1]; //This will return the host or root in Url part
	    	var base_url = domain +'/'+ host + '/'; //Combinng all to get base_url same as codeigniter
	    	var id = $(this).attr("id");//Getiing the ID to Delete on server side 

	        $.ajax({
	            url:  base_url+ 'Members/deleteMember',
	            type: 'POST',
	            data: {uid:id},
	            dataSrc : "",
	            success: function () 
	            {
	            	table.row(obj).remove().draw(false);
	                //$('#dataTable').DataTable().ajax.reload(); require a json object a parameter
	                // and that was throwing JSON parse error.
	                //SO we are just removing that particular row after successful Ajax delete
	            },
	            error: function ()
	                   {
	                    alert('Request failure');
	                   }
	            
	                });
            
	    }
	    */
	  
    });


$('.BtnRemove').click(function(){
	alert("Husnain Ajmal");
var btn_id = $(this).attr("id");
$('#id').remove();
});

//Add all the Jquer above it. DataTable call should be in the end. It was Ceating problem and doesnt working 
//for further pages of data table
$('#dataTable').DataTable();
 $('#UserdataTable').DataTable();
$('#StockdataTable').DataTable();
$('#MemberdataTable').DataTable();