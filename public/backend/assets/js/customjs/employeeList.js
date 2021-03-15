var EmployeeList = function() {


    var list = function() {

        var dataArr = {};
        var columnWidth = { "width": "5%", "targets": 0 };
        var arrList = {
            'tableID': '#employee-list',
            'ajaxURL': baseurl + "employee-ajaxaction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0],
            'noSearchApply': [0],
            'defaultSortColumn': [0],
            'defaultSortOrder': 'DESC',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        $("body").on("click", ".deleteEmployee", function() {
            var id = $(this).data('id');
            setTimeout(function() {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function() {

            var id = $(this).attr('data-id');
            // alert(id);
            var data = { id: id, _token: $('#_token').val() };
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "employee-ajaxaction",
                data: { 'action': 'deleteEmployee', 'data': data },
                success: function(data) {
                    $("#loader").show();
                    handleAjaxResponse(data);
                }
            });
        });
    }

    var add = function() {


    };
    var edit = function() {

        var form = $('#edit-employee-form');
        var rules = {
            fullname: { required: true },
            dob: { required: true },
            address: { required: true },
            mobile: { required: true, minlength: 10, maxlength: 10 },
            emrgencyContact: { required: true, minlength: 10, maxlength: 10 },
            email: { required: true, email: true },
            edu_with_passing_year: { required: true },
            expreiance: { required: true },
            adharCard: { required: true },
            panCard: { required: true },
            dateofJoining: { required: true },
            basicSalary: { required: true },
            designation: { required: true },
            department: { required: true },
            notes: { required: true },

        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        list: function() {
            list();
        },

        add: function() {
            add();
        },
        edit: function() {
            edit();
        },
    }
}();
