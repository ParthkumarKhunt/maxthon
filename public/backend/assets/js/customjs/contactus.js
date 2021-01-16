var Contactus = function() {
    var addDetails = function() {
        var form = $('#details-form');
        var rules = {
            details: { required: true }
        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        init: function() {
            addDetails();
        }
    }
}();