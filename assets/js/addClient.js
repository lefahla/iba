
$(document).ready(
    function(){
        
        var text_max = 70;
        $('#feedback').html(text_max + ' characters remaining');

        $('#Address').keyup(function(){
          var text_length = $('#Address').val().length;
          var text_remaining = text_max - text_length;

          $('#feedback').html(text_remaining+ ' characters remaining');

        });

        $('#AddBtn').click(function(e) {
            
           
            var firstname = $('#FirstName').val();
            var lastname = $('#LastName').val();
            var gender = $('#Gender').val();
            var phonenumber = $('#PhoneNumber').val();
            var otherphonenumber = $('#OtherPhoneNumber').val();
            var email = $('#Email').val();
            var address = $('#Address').val();
            var city = $('#City').val();

        if(firstname!=="" & lastname!=="" & gender!=="" & phonenumber!=="" & email!=="" & address!=="" & city!=="") 
        {                                 
        $.post('./scripts/ScriptAddClient.php',{
                  phonenumber:phonenumber,
                  lastname:lastname,
                  gender:gender,
                  otherphonenumber:otherphonenumber,
                  city:city,
                  email:email,
                  address:address,
                  firstname:firstname
                  },function(data){
                           
                            
                           console.log(data);
                           // Now clear the data from the input form
                         /*  $('#FirstName').val("");
                           $('#LastName').val("");
                           $('#Gender').val("");
                           $('#PhoneNumber').val("");
                           $('#OtherPhoneNumber').val("");
                           $('#Email').val("");
                           $('#Address').val("");
                           $('#City').val("");

                           Rather refresh the page in 3sec
    */ 
                          if (data = 'registered') {
                                $("#output").removeClass('alert alert-danger');
                                $("#output").addClass("alert alert-info animated fadeInUp").html('Successfully saved client <b>'+firstname+' '+lastname+'</b> into repository');
                                
                                
                           }else{ 
                           //remove success mesage replaced with error message
                                $("#output").removeClass(' alert alert-success');          
                            
                                 // add the class for error message for the feedback from the 'reverse-forward-login.php'
                                $("#output").addClass("alert alert-warning animated fadeInUp").html('Client information not saved');                     
                                
                                 }                                    
          
                        }).error(function(){ 
                              //remove success mesage replaced with error message
                                $("#output").removeClass(' alert alert-success');          
                            
                                 // add the class for error message for the feedback from the 'reverse-forward-login.php'
                                $("#output").addClass("alert alert-danger animated fadeInUp").html("Tehnical error, Data not saved");                     
                                
                        });
                            
                        } else {
                                //remove success mesage replaced with error message
                                $("#output").removeClass(' alert alert-success');
                                // add the class for error message 
                                $("#output").addClass('alert alert-danger animated fadeInUp').html("All data has to be filled in the form");
                     } 

                             
    });

});

