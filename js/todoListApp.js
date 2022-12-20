/**
    Author: Thu Nguyen, 000832893
    Date:  Dec 2022
    Purpose: Placeholder for later
    Statement of Authorship: I, Thu Nguyen, 000832893 certify that this material is my
    original work. No other person's work has been used without due acknowledgement.
 */
$(document).ready(function(){
    $("#signUpDiv").hide();
    $("#showRegisterForm").click(function(){
        $("#signUpDiv").show();
        $("#signInDiv").hide();});


    $("#cancelButton").click((e)=>{
        e.preventDefault();
        $("signInDiv").show();
        $("#signUpDiv").hide();

    });


    $("#registerButton").click((e)=>{
        e.preventDefault();
        
    });
});