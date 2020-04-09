$(document).ready(function(){
	$.get('http://localhost/System_iba/index.php/dashboard/client_names',function(Data)
		{
             $('#client_names').empty();
             $('#client_names').html(Data);                    
        });

	// Inititalize the select plug-in
	 var select2 = $('.select2').select2();


	 // Select the value name of the client in order to assign a new loan	
	 $('.select2').on('select2:select',function(e)// Select clientname
	 {		

	    // Get the selected client name from DB		
	  	var client_name = select2.val();

	  	$("#selName").attr('value',client_name)

		// Make an instantanious call to get the client previous loan 
		$.post('http://localhost/System_iba/index.php/dashboard/get_previous_loan',{client_name:client_name},function(Data)
		{
			
			var responseData = parseFloat(Data);

			$('#previous_loan').attr('value',responseData);			
			var previous_loan = $('#previous_loan').val();

			$('#total').attr('value',parseFloat(previous_loan));			 
			var total = $('#total').val();

			$('#interest').attr('value',parseFloat(total*0.2),true);
			var interest = $('#interest').val();			

			$('#new_total').attr('value',parseFloat(interest)+parseFloat(total));

		}); 

			$('#get_loan').on('ifClicked',function(event)
			{				
					$(this).on('ifChecked',function(){
						 
						$('#new_loan').removeAttr('disabled');
                        $('#new_loan').focus();
						
						// Get the values of the active variable before making a new loan
                        	var var_previous_loan = $('#previous_loan').val();
                        	var var_total = $('#total').val();
                        	var var_interest = $('#interest').val();
                        	var var_new_total = $('#new_total').val();

                        $('#new_loan').keyup(function()
                        {
                        	
                        	var newLoan = $(this).val();

                        	if (newLoan != '') 
                        	{
	                        	var newLoan_previous_loan = $('#previous_loan').val();

	                        	$('#total').attr('value',parseFloat(newLoan_previous_loan) + parseFloat(newLoan));
	                        	var newLoan_total = $('#total').val();

	                        	$('#interest').attr('value',parseFloat(newLoan_total) * 0.2);
	                        	var newLoan_interest =  $('#interest').val();

	          					$('#new_total').attr('value',parseFloat(newLoan_total)+parseFloat(newLoan_interest));          					

                        	}else
                        	{
                        		$('#previous_loan').attr('value',var_previous_loan);
                        	    $('#total').attr('value',var_total);
                        	    $('#interest').attr('value',var_interest);
                        	    $('#new_total').attr('value',var_new_total);
                        	}
                        });
					});

					$(this).on('ifUnchecked',function()
					{
						$('#new_loan').empty();
						$('#new_loan').attr('disabled',true);						
					});
            });

		    var amount_due = $('#amount_due'); 
            $('#loan_paid').keyup(function()
             {             		 
			        amount_due.attr('value',parseFloat($('#new_total').val())-parseFloat($(this).val()));	              	    
	                 
             });
   		}); // End select client_name
	}); 