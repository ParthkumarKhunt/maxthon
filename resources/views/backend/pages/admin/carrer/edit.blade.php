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
                    <form class="form" id="edit-career-form" method="POST">@csrf
                        <input type="hidden" class="form-control" id="editId" name="editId"
                            value="{{  $details[0]->id }}" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleSelect1">Department Category <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="department_id" name="department_id">
                                    <option value="">-- Select -- </option>
                                    @foreach($menu as $key => $value)
                                    <option value="{{ $value->id }}"
                                        {{ $value->id == $details[0]->department_id ? "selected='selected'" : "" }}>
                                        {{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group ">
                                <label class="col-form-label ">Headline
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="headline" name="headline"
                                    value="{{  $details[0]->headline }}" placeholder="Please enter headline" />
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label ">Details
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="details1" name="details"
                                    value="{{  $details[0]->details }}" placeholder="Please enter details" />
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label ">Experience
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="experience" name="experience"
                                    value="{{  $details[0]->experience }}" placeholder="Please enter experience" />
                            </div>



                            <div class="form-group ">
                                <label class="col-form-label ">Skills<span class="text-danger">*</span></label>
                                <div class="form-group ">
                                    <!-- [skills_details] => dfsdf
                            [skills_id] => 3 -->
                                    @if(!empty($details[0]))
                                    @foreach($details as $value)
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="experience" name="experience"
                                                value="{{  $value->skills_details}}"
                                                placeholder="Please enter experience" />
                                        </div>
                                        <div class="col-3">
                                            <button type="button"
                                                class="btn btn-danger font-weight-bold deleteSkills btn-block" data-id="{{$value->skills_id}}" data-toggle="modal" data-target="#deleteModel"><i></i>Delete
                                                skills</button>
                                        </div>
                                    </div><br>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="appendDiv">
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="skills" name="skills[]"
                                                placeholder="Please enter skills" />
                                        </div>
                                        <div class="col-3">
                                            <button type="button"
                                                class="btn  btn-primary font-weight-bold addSkills btn-block"><i
                                                    class="feather icon-plus"></i>Add skills</button>
                                        </div>
                                    </div>
                                </div>
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