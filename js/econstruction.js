jQuery(document).ready(function () {
    
    var validators = jQuery("#contact_form").validate({
        rules: {
            fname: {required: true},
            emailId:  {required: true},
            work: {required: true},
            messageId:{required:true},
          },
        submitHandler: function (form) { // for demo                        
            contactData = $(form).serializeArray();
            
            contactData.push({name:'action',value:'contact'});
            console.log('registerData',contactData);
            $.ajax({        
                url: '../services/form_actions.php',                   
                type: "post",                
                data: {name:'sdfs'},                
                success: function (response) {
                        console.log('response',response);
                }
            })
        }
    });
});