var Contactus = function(){
    var addMail = function(){


        // login-form
        var form = $('#add-mail-form');
        var rules = {
            email: { required: true, email: true },
        };
        handleFormValidate(form, rules,function(form) {
            handleAjaxFormSubmit(form,true);
        });
    };
    return {
        init:function(){
            addMail();
        }
    }
}();
