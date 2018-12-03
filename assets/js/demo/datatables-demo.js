// Call the dataTables jQuery plugin
$(document).ready(function() {
 $('#MemberdataTable').DataTable();
 $('#UserdataTable').DataTable();
 $('#StockdataTable').DataTable();
 $('.text-danger').hide();
 $('.Error2').hide();
 $('.Error3').hide();
 $('.SelectGroup').hide();

 //alert(arr[2].s_Name);
 //alert(arr.length);
  if(arr)
      {
      	for (var i = 0; i < arr.length; i++) 
      	{
      		className=arr[i].name;
      	    className=className.replace(/\s+/g,'');
      		option.push(className);
      	 };

        for (var i = 0; i < option.length; i++) 
		{
		  Optionclass = '.';
		  Optionclass += option[i];
		  $(Optionclass).fadeOut();
	    };
      }

           if (option.length==0) 
			  {
			  	// $(':input[type="submit"]').prop('disabled', true);
                $('.AddProductBtn').prop('disabled', true);           
			    $(".AddProduct").addClass("not-allowed");
			   }
			else
			   {
			   	    //$(':input[type="submit"]').prop('disabled', false);
			   	$('.AddProductBtn').prop('disabled', false);
			   	$(".AddProduct").removeClass("not-allowed");
			   }
     
  });

// $(document).load(function(){
// $('.text-danger').hide();
// });
var option=[];
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
   	var	Stock= document.getElementById('StockID').value;
   	item = Stock.split('/');
   	var item_id=item[0];
    var available = item_id;
  //  alert(item_id);
   	if (+item_id!=0)
   	 {
       	  if(+Input!=0)
	   	  {
	   	    	$('.Error3').fadeOut();
	   	  	    $('.Error2').fadeOut();
		   	  	if(+Input <= +available)
		   	  	{
			   	  $('.Error3').fadeOut();
			   	     $('.text-danger').fadeOut();
			   	  	 $('.Error2').fadeOut();
			   	  	 var className =item[1];
			   	  	 className=className.replace(/\s+/g, '');	
			   	  	 //alert(className);
			   	  	 option.push(className);
			   	    $('.SelectGroup').show("slow");
			   	    $('.SelectGroupforEdit').show("slow");
			   	    
			   	    var Optionclass;
	                 if (option.length==0) 
				   	 {
				   	    //$(':input[type="submit"]').prop('disabled', true);

                        $('.AddProductBtn').prop('disabled', true);

				   	    
				   	    
				   	 }
				   	 else
				   	 {
				   	  // $(':input[type="submit"]').prop('disabled', false)
				   	  ;
				   	 $('.AddProductBtn').prop('disabled', false);

				   	    
				   	 }
				   	    for (var i = 0; i < option.length; i++) 
			   	    {
		                 Optionclass = '.';
		                 Optionclass += option[i];
		                 $(Optionclass).fadeOut();
			   	    };
		             
			   	  	 var html = '<tr id='+className+'><input type="hidden" id="name" name="sname[]" value="'+item[1]+'"><td>'+item[1]+'</td><input type="hidden" id="name" name="sweight[]" value="'+Input+'"><td>'+Input+'</td><td><a  style="border-radius:1.8rem" id="'+className+'" class="BtnRemove btn btn-danger"><i class="fa fa-minus"></i></a></td></tr>';
			         $('#SelectedItemTable').append(html);
			          document.getElementById('StockID').value=0;
                      document.getElementById('QuantityAvailable').value=0;
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

	  
    });

$('select').on('change', function() {
var	Stock= document.getElementById('StockID').value;
   	item = Stock.split('/');
   	var available=item[0];
    document.getElementById('QuantityAvailable').value=available;
    });


$(document).on('click','.BtnRemove',(function(){
	if (confirm("Do you want to remove this entry"))
	{
		 
		var count = $('#SelectedItemTable tr').length; //this returns total rows including header
		count = count-2; //So we need to dec by 1. But when there is only one row and length is 1
		//alert(count);  //We need to hide whole table view as there will be 0 rows now after delete
		if (count==0) 
			{
				$('.SelectGroup').fadeOut();
				$('.SelectGroupforEdit').fadeOut();
				//$(':input[type="submit"]').prop('disabled', true);
                $('.AddProductBtn').prop('disabled', true);
			}else
			{
				//$(':input[type="submit"]').prop('disabled', false);
				$('.AddProductBtn').prop('disabled', false);
			}
			var id = $(this).attr("id");	
			var index = option.indexOf(id);
			//alert(option);
			if (index > -1)
			{
  				option.splice(index, 1);
               }
               RemovedClassName = "." + id;
               $(RemovedClassName).show();
               var Optionclass;
	  
	   	    for (var i = 0; i < option.length; i++) 
	   	    {
                 Optionclass = '.';
                 Optionclass += option[i];
                 $(Optionclass).fadeOut();
	   	    };
             
	   $(this).closest('tr').remove();	
	};
}));

//Add all the Jquer above it. DataTable call should be in the end. It was Ceating problem and doesnt working 
//for further pages of data table
$('#dataTable').DataTable();
 $('#UserdataTable').DataTable();
$('#StockdataTable').DataTable();
$('#MemberdataTable').DataTable();