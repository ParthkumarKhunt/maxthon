@extends('backend.employee.layout.layout')
@section('section')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">{{$header['title']}}</h3>
                    </div>
                    <div id="alertDiv">

                    </div>
                    <!--begin::Form-->
                    <form class="form" id="add-employee-form" method="POST">@csrf

                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name" />
                                </div>
                                <div class="col-lg-6">
                                    <label>DOB:</label>
                                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter DOB" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <textarea class="form-control" id="address" name="address" placeholder="Please address"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Mobile No:</label>
                                    <input type="text" class="form-control onlyNumber" name="mobile" id="mobile" placeholder="Enter Mobile No" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Emrgency Contact No:</label>
                                    <input type="text" class="form-control onlyNumber" name="emrgencyContact" id="emrgencyContact" placeholder="Enter Emrgency Contact No" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Email Address:</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Address" />
                                </div>
                                <div class="col-lg-6">
                                <label>Education with Passing Year:</label>
                                    <input type="text" class="form-control" name="edu_with_passing_year" id="edu_with_passing_year"
                                        placeholder="Enter Education with Passing Year" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Aadhar Card No:</label>
                                    <input type="text" class="form-control" name="adharCard" id="adharCard" placeholder="Enter Aadhar Card No" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Pan Card No:</label>
                                    <input type="text" class="form-control" name="panCard" id="panCard" placeholder="Enter Pan Card No" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Employee Image:</label>
                                    <input type="file" class="form-control" name="employeeImage" id="employeeImage" placeholder="Enter Employee Image" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Date of Joining:</label>
                                    <input type="text" class="form-control" name="dateofJoining" id="dateofJoining" placeholder="Enter Date of Joining" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Basic Salary:</label>
                                    <input type="text" class="form-control" name="basicSalary" id="basicSalary" placeholder="Enter Basic Salary" />
                                </div>
                                <div class="col-lg-6">
                                <label>Expreiance:</label>
                                    <input type="text" class="form-control" name="expreiance" id="expreiance" placeholder="Enter Expreiance" />
                                 </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="exampleSelect1">Department <span class="text-danger">*</span></label>
                                    <select class="form-control" id="department" name="department">
                                        <option value="">-- Select -- </option>
                                        @foreach($menu as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                <label for="exampleSelect1">Designation <span class="text-danger">*</span></label>
                                    <select class="form-control" id="designation" name="designation">
                                        <option value="">-- Select -- </option>
                                        @foreach($designation as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->designation }}</option>
                                        @endforeach
                                    </select>
                               </div>
                            </div>
                            <div class="form-group">
                                <label>Notes:</label>
                                <textarea class="form-control" id="notes" name="notes" placeholder="Please note"></textarea>
                        </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                                    <button type="reset" class="btn btn-light-primary font-weight-bold">Reset</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Row-->

        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->


@endsection