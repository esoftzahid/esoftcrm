@extends('Admin.DashboardMaster')
@section('title','Add Page | Journal Management System')
@section('mainpanel')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Dasboard</a>
            <a class="breadcrumb-item" href="#">Page</a>
            <span class="breadcrumb-item active">Add Page</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Add Page</h4>
        <p class="mg-b-0">Here you can create your page</p>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Page</h6>

            <form role="form" method="post" action="{{ route('page.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Title</h6>
                            <input class="form-control" type="text" name="title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Select Menu</h6>
                            <select name="title_uri" class="form-control" style="width:100%">
                                <option> Select Menu </option>
                                @foreach($menu_all as $main_menu)
                                    <option value="{{$main_menu->slug}}">{{$main_menu->menu_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <textarea class="form-control ckeditor" rows="3" name="description"></textarea>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-info" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
            </form>


        </div>
    </div><!-- br-pagebody -->

    @include('Admin.footer')
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')

@endsection