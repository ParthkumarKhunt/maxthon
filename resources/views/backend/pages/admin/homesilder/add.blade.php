@extends('backend.layout.layout')
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
                <form class="form" id="add-home-silder-form" method="POST">@csrf

                    <div class="card-body">

                        <div class="form-group ">
                            <label class="col-form-label ">Title
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"  />
                        </div>

                        <div class="form-group ">
                            <label class="col-form-label ">Description
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="description" name="description"  />
                        </div>

                        <div class="form-group ">
                            <label class="col-form-label ">Image (Size : 480px * 520px)
                            <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" class="form-control" id="image" name="image" />
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