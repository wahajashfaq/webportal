// Call the dataTables jQuery plugin
$(document).ready(function() {
 $('#MemberdataTable').DataTable();
 $('#UserdataTable').DataTable();
});


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

//Add all the Jquer above it. DataTable call should be in the end. It was Ceating problem and doesnt working 
//for further pages of data table
$('#dataTable').DataTable();
 $('#UserdataTable').DataTable();

