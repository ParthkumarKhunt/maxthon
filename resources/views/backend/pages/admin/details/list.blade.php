@extends('backend.layout.layout')
@section('section')

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <!--begin::Card-->
             <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                   <h3 class="card-title">Details</h3>
                </div>
                <!--begin::Form-->
                <form class="form" id="add-details-form" method="POST">@csrf
                   <div class="card-body">

                        <div class="form-group">
                            <label class="form-control-label">Address Line 1
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Please enter addressline 1" name="addresline_one" value="{{ $details[0]->addresline_1 }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Address Line 2
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Please enter twitter address line 2" name="addresline_two" value="{{ $details[0]->addresline_2 }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Please enter email" name="email" value="{{ $details[0]->email }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Phone Number
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control onlyNumber" placeholder="Please enter phone number" name="phoneno" value="{{ $details[0]->phonenumber }}"/>
                        </div>
                   </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-success font-weight-bold mr-2 submitbtn">Submit</button>
                      <button type="reset" class="btn btn-light-success font-weight-bold">Reset</button>
                   </div>
                </form>
                <!--end::Form-->
             </div>
             <!--end::Card-->

          </div>
       </div>
    </div>
</div>
@endsection
