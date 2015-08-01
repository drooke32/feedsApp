/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $('#regSubmit').on('click', function(e){
        e.preventDefault();
        if(clientValidation()){
            $(this).find('.fa-cog').removeClass('hidden');
            validateRegistration();
        }        
    });
});

function validateRegistration(){
    $.post("/users/register", $("#regForm").serialize())
        .done(validateSuccess)
        .fail(validateFail)
        .always(validateComplete);
}

function validateSuccess(e){
    //redirect to the users feed page
    window.redirect("/feeds/list");
}

function validateFail(e){
    $('#regSubmit').find('.fa-cog').addClass('hidden');
    //show error/validation failure info
}

function validateComplete(e){
   $('#regSubmit').find('.fa-cog').addClass('hidden');
}

function clientValidation(){
    var valid = validateEmail(); 
    valid &= validUsername(); 
    valid &= validateRegPasswords();
    return valid;
}
/**
 * Validate the username and show/hide error message accordingly
 * @returns {Boolean}
 */
function validUsername(){
    if($('#regUsername').val()){
        hideErrorState($('#regUsername'));
        return true;
    }
    showErrorState($('#regUsername'));
    return false;
}
/**
 * Validate the email address and show/hide error message accordingly
 * @returns {Boolean}
 */
function validateEmail(){
    if(new RegExp("[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$").test($('#regEmail').val())){
        hideErrorState($('#regEmail'));
        return true;
    }
    showErrorState($('#regEmail'));
    return false;   
}

/**
 * Validate the passwords and show/hide error message accordingly
 * @returns {Boolean}
 */
function validateRegPasswords(){
    if($('#regPassword1').val()){
        hideErrorState($('#regPassword1'));
        if($('#regPassword1').val() === $('#regPassword2').val()){
            hideErrorState($('#regPassword2'));
            return true; 
        }
        showErrorState($('#regPassword2'));
        return false;
    }
    showErrorState($('#regPassword1'));
    return false;
}

function showErrorState($element){
    var $formGroup = $($element).closest(".form-group");
    $formGroup.addClass("has-error has-feedback");
    var $errorSymbol = $formGroup.find('.form-control-feedback');
    $errorSymbol.removeClass('hidden');
    var $helpText = $formGroup.find('.help-block');
    $helpText.removeClass('hidden');
}
function hideErrorState($element){
    var $formGroup = $($element).closest(".form-group");
    $formGroup.removeClass("has-error has-feedback");
    var $errorSymbol = $formGroup.find('.form-control-feedback');
    $errorSymbol.addClass('hidden');
    var $helpText = $formGroup.find('.help-block');
    $helpText.addClass('hidden');
}
