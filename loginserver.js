$(document).ready(function() {
    $('.buttonlogin').click(function(event){
    
        data = $('.passinput').val();
        var len = data.length;
        
        if(len < 1) {
            alert("Password cannot be blank");
            event.preventDefault();
        }
         
        if($('.passinput').val() != $('.confirmpassinput').val()) {
            alert("Password and Confirm Password don't match");
            event.preventDefault();
        }
         
    });
});
