@extends('backend.employee.layout.layout')
@section('section')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <!--begin::Details-->
                <div class="d-flex mb-9">
                    <!--begin: Pic-->
                    <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                        <div class="symbol symbol-50 symbol-lg-120">
                            <img src="{{ asset('public/upload/employeeImage/'.$employeeDetails[0]->image) }}" alt="image" />
                        </div>
                        <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                            <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between flex-wrap mt-1">
                            <div class="d-flex mr-3">
                                <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{  $employeeDetails[0]->firstname }} {{ $employeeDetails[0]->lastname }}</a>

                            </div>
                        </div>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap justify-content-between mt-1">
                            <div class="d-flex flex-column flex-grow-1 pr-8">

                                <div class="d-flex flex-wrap mb-4">
                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <i class="fa fa-angle-double-right mr-2 font-size-lg"></i>{{  $employeeDetails[0]->emp_no }}</a>
                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <i class="fa fa-birthday-cake mr-2 font-size-lg"></i>{{  date("d F ,Y", strtotime($employeeDetails[0]->dob)) }}</a>
                                </div>

                                <div class="d-flex flex-wrap mb-4">
                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <i class="fa fa-envelope-open mr-2 font-size-lg"></i>{{  $employeeDetails[0]->email }}</a>

                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <i class="fa fa-phone mr-2 font-size-lg"></i>{{  $employeeDetails[0]->mobileno }}</a>

                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <i class="fa fa-ambulance mr-2 font-size-lg"></i>{{  $employeeDetails[0]->mobileno }}</a>

                                </div>

                                <div class="d-flex flex-wrap mb-4">


                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <i class="fa fa-user mr-2 font-size-lg"></i>{{  $employeeDetails[0]->designation }}</a>


                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <i class="fa fa-map-pin mr-2 font-size-lg"></i>{{  $employeeDetails[0]->city }} , {{  $employeeDetails[0]->state }} , {{  $employeeDetails[0]->country }}
                                        </a>

                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <i class="fa fa-location-arrow mr-2 font-size-lg"></i>
                                        @if ($employeeDetails[0]->gender == "F")
                                            {{ "Female" }}
                                        @endif
                                        @if ($employeeDetails[0]->gender == "M")
                                            {{ "Male" }}
                                        @endif
                                        @if ($employeeDetails[0]->gender == "O")
                                            {{ "Others" }}
                                        @endif
                                        </a>
                                </div>

                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <div class="separator separator-solid"></div>
                <!--begin::Items-->
                <div class="d-flex align-items-center flex-wrap mt-8">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Earnings</span>
                            <span class="font-weight-bolder font-size-h5">
                            <span class="text-dark-50 font-weight-bold">$</span>249,500</span>
                        </div>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                            <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Expenses</span>
                            <span class="font-weight-bolder font-size-h5">
                            <span class="text-dark-50 font-weight-bold">$</span>164,700</span>
                        </div>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                            <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Net</span>
                            <span class="font-weight-bolder font-size-h5">
                            <span class="text-dark-50 font-weight-bold">$</span>782,300</span>
                        </div>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                            <i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column flex-lg-fill">
                            <span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>
                            <a href="#" class="text-primary font-weight-bolder">View</a>
                        </div>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                            <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column">
                            <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                            <a href="#" class="text-primary font-weight-bolder">View</a>
                        </div>
                    </div>
                    <!--end::Item-->

                </div>
                <!--begin::Items-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection
