// "use strict";var KTWizard3=function(){var e,t,i,a=[];return{init:function(){e=KTUtil.getById("kt_wizard_v3"),t=KTUtil.getById("kt_form"),(i=new KTWizard(e,{startStep:1,clickableSteps:!0})).on("change",(function(e){if(!(e.getStep()>e.getNewStep())){var t=a[e.getStep()-1];return t&&t.validate().then((function(t){"Valid"==t?(e.goTo(e.getNewStep()),KTUtil.scrollTop()):Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn font-weight-bold btn-light"}}).then((function(){KTUtil.scrollTop()}))})),!1}})),i.on("changed",(function(e){KTUtil.scrollTop()})),i.on("submit",(function(e){var i=a[e.getStep()-1];i&&i.validate().then((function(e){"Valid"==e?t.submit():Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn font-weight-bold btn-light"}}).then((function(){KTUtil.scrollTop()}))}))})),a.push(FormValidation.formValidation(t,{fields:{address1:{validators:{notEmpty:{message:"Address is required"}}},postcode:{validators:{notEmpty:{message:"Postcode is required"}}},city:{validators:{notEmpty:{message:"City is required"}}},state:{validators:{notEmpty:{message:"State is required"}}},country:{validators:{notEmpty:{message:"Country is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}})),a.push(FormValidation.formValidation(t,{fields:{package:{validators:{notEmpty:{message:"Package details is required"}}},weight:{validators:{notEmpty:{message:"Package weight is required"},digits:{message:"The value added is not valid"}}},width:{validators:{notEmpty:{message:"Package width is required"},digits:{message:"The value added is not valid"}}},height:{validators:{notEmpty:{message:"Package height is required"},digits:{message:"The value added is not valid"}}},packagelength:{validators:{notEmpty:{message:"Package length is required"},digits:{message:"The value added is not valid"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}})),a.push(FormValidation.formValidation(t,{fields:{delivery:{validators:{notEmpty:{message:"Delivery type is required"}}},packaging:{validators:{notEmpty:{message:"Packaging type is required"}}},preferreddelivery:{validators:{notEmpty:{message:"Preferred delivery window is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}})),a.push(FormValidation.formValidation(t,{fields:{locaddress1:{validators:{notEmpty:{message:"Address is required"}}},locpostcode:{validators:{notEmpty:{message:"Postcode is required"}}},loccity:{validators:{notEmpty:{message:"City is required"}}},locstate:{validators:{notEmpty:{message:"State is required"}}},loccountry:{validators:{notEmpty:{message:"Country is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}}))}}}();jQuery(document).ready((function(){KTWizard3.init()}));

"use strict";
var KTWizard3 = (function () {
    var e,
        t,
        i,
        a = [];
    return {
        init: function () {

            (e = KTUtil.getById("kt_wizard_v3")),
                (t = KTUtil.getById("kt_form")),
                (i = new KTWizard(e, { startStep: 1, clickableSteps: !0 })).on("change", function (e) {
                    if (!(e.getStep() > e.getNewStep())) {
                        var t = a[e.getStep() - 1];
                        return (
                            t &&
                                t.validate().then(function (t) {

                                    "Valid" == t
                                        ? (e.goTo(e.getNewStep()), KTUtil.scrollTop())
                                        : ''
                                }),
                            !1
                        );
                    }
                }),

                i.on("changed", function (e) {
                    KTUtil.scrollTop();
                }),
                i.on("submit", function (e) {
                    var i = a[e.getStep() - 1];
                    i &&
                        i.validate().then(function (e) {
                            "Valid" == e
                                ? t.submit()
                                : Swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn font-weight-bold btn-light" },
                                  }).then(function () {
                                      KTUtil.scrollTop();
                                  });
                        });
                }),

                a.push(
                    FormValidation.formValidation(t, {
                        fields: {
                            empNo: { validators: { notEmpty: { message: "Please enter employee number" } } },
                            empImage: { validators: { notEmpty: { message: "Please select employee image" } } },
                            empFirstName: { validators: { notEmpty: { message: "Please enter employee first name" } } },
                            empLastName: { validators: { notEmpty: { message: "Please enter employee father/husband name & surname" } } },
                            empEmail: { validators: { notEmpty: { message: "Please enter employee email" },  emailAddress: { message: "Please enter vaild employee email" } } },
                            empDob: { validators: { notEmpty: { message: "Please enter employee date of birth" } } },
                            empMobileNo: { validators: { notEmpty: { message: "Please enter employee mobile no"  }, digits: { message: "Please enter vaild employee mobile no" } } },
                            empEmrNo: { validators: { notEmpty: { message: "Please enter employee emergency contact no"  }, digits: { message: "Please enter vaild emergency contact no" } } },
                            empgender: { validators: { notEmpty: { message: "Please select employee gender"  } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap({ eleValidClass: "" }) },
                    })
                ),

                a.push(
                    FormValidation.formValidation(t, {
                        fields: {
                            empEducation: { validators: { notEmpty: { message: "Please enter your employee education" } } },
                            empPassingYear: { validators: { notEmpty: { message: "Select employee passing year" } } },
                            empCollageName: { validators: { notEmpty: { message: "Please enter your employee college/institute name" } } },
                            empAddress: { validators: { notEmpty: { message: "Please enter employee address" } } },
                            empExperience: { validators: { notEmpty: { message: "Select employee no of yeras experience" } } },
                            empCountry: { validators: { notEmpty: { message: "Please select Employee country" } } },
                            empState: { validators: { notEmpty: { message: "Please select Employee state" } } },
                            empCity: { validators: { notEmpty: { message: "Please select Employee city" } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap({ eleValidClass: "" }) },
                    })
                ),

                a.push(
                    FormValidation.formValidation(t, {
                        fields: {
                            empDepartment: { validators: { notEmpty: { message: "Select employee department" } } },
                            empDesignation: { validators: { notEmpty: { message: "Select employee designation" } } },
                            empSalary: { validators: { notEmpty: { message: "Please enter your employee salary" } } },
                            empDoj: { validators: { notEmpty: { message: "Please enter your employee date of joining" } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap({ eleValidClass: "" }) },
                    })
                ),
                a.push(
                    FormValidation.formValidation(t, {
                        fields: {
                            empAadharCard: { validators: { notEmpty: { message: "Please enter your employee aadhar card number" } } },
                            empPanCard: { validators: { notEmpty: { message: "Please enter your employee pan card number" } } },
                            empBank: { validators: { notEmpty: { message: "Please enter bank name" } } },
                            empBranch: { validators: { notEmpty: { message: "Please enter bank branch name" } } },
                            empIfsc: { validators: { notEmpty: { message: "Please enter IFSC Code" } } },
                            empAccount: { validators: { notEmpty: { message: "Please enter bank account number" } } },
                            empPfno: { validators: { notEmpty: { message: "Please enter employee P.F. No" } } },
                            empEsl: { validators: { notEmpty: { message: "Please enter employee ESI No" } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap({ eleValidClass: "" }) },
                    })
                );
        },
    };
})();
jQuery(document).ready(function () {
    KTWizard3.init();
});
