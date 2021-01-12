var Details = function() {
    var addDetails = function() {
        $(".onlyNumber").keypress(function(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

        // login-form
        var form = $('#details-form');
        var rules = {
            phoneno: { required: true, minlength: 10, maxlength: 10 },
            email: { required: true, email: true },
            address_line1: { required: true },
            address_line2: { required: true },
            // logo: { required: true },
            // favicon: { required: true },
            aboutus: { required: true },
            map: { required: true },
            // facebook: { required: true },
            // twitter: { required: true },
            // linkedin: { required: true },
            // instagram: { required: true },
            // github: { required: true },


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
