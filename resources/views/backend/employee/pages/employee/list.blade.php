@extends('backend.employee.layout.layout')
@section('section')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-title">{{$header['title']}}</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{  route('employee-add') }}" class="btn btn-primary font-weight-bolder">
                    <i class="far fa-plus-square"></i> New Employee</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">@csrf
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="employee-list" >
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Employee Image</th>
                            <th>Full Name</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Mobile No</th>
                            <th>Emrgency Contact No</th>
                            <th>Email Address</th>
                            <th>Education with Passing Year</th>
                            <th>Expreiance</th>
                            <th>Aadhar Card No</th>
                            <th>Pan Card No</th>
                            <th>Date of Joining</th>
                            <th>Basic Salary</th>
                            <th>Notes</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection
