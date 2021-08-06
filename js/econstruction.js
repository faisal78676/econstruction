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
            // alert('sdf');
            contactData.push({name:'action',value:'contact'});
            console.log('registerData',contactData);
            $.ajax({        
                url: '../services/form.controller.php',                   
                type: "POST",                
                data: contactData,                
                success: function (response) {
                    var result = JSON.parse(response);            
                    if (result.success) {
                        $('#resp_show').css('display','block');                        
                        $('#resp_show').html(`<div style="color:green;font-weight:bold;margin-top:20px;font-size:18px">${result.message}</div>`);
                        jQuery("#contact_form").trigger("reset");
                        setTimeout(function(){
                            $('#resp_show').html('');
                            $('#resp_show').css('display','none');                        
                        },2000);
                    } else {                                      
                        $('#resp_show').html(result.message);                        
                        if(result.errorcode==1){
                            $('#resp_show').html(`<div class="thk-clo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg>
                            </div>${result.message}`);
                            $('#submit-wrap').css('display','none');
                        }
                        $('.resp_show').css('display','block');                        
                    }
                     
                }
            })
        }
    });
});