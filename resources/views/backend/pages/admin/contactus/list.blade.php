@extends('backend.layout.layout')
@section('section')


<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <!--begin::Card-->
             <div class="card card-custom gutter-b example example-compact">
                <!--begin::Form-->
                <form class="form" id="add-mail-form" method="POST">@csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Please enter contact details reciving email" name="email" value="{{ $details[0]->email }}"/>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success font-weight-bold mr-2 submitbtn form-control">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!--end::Form-->
             </div>
             <!--end::Card-->

          </div>
       </div>
    </div>
</div>


<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <!--begin::Card-->
             <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                   <h3 class="card-title">Contact Us Details</h3>
                </div>

             </div>
             <!--end::Card-->

          </div>
       </div>
    </div>
</div>
@endsection
