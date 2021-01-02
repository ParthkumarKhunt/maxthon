var Details = function(){
    var addDetails = function(){
        $(".onlyNumber").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                      return false;
           }
        });

        // login-form
        var form = $('#add-details-form');
        var rules = {
            email: { required: true, email: true },
            addresline_one: { required: true },
            addresline_two: { required: true },
            phoneno: { required: true , minlength:10 , maxlength:10},
        };
        handleFormValidate(form, rules,function(form) {
            handleAjaxFormSubmit(form,true);
        });
    };
    return {
        init:function(){
            addDetails();
        }
    }
}();
