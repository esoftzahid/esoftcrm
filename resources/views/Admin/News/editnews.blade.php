@extends('Admin.DashboardMaster')
@section('title','Edit News | Journal Management System')
@section('mainpanel')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Dasboard</a>
                <a class="breadcrumb-item" href="#">News</a>
                <span class="breadcrumb-item active">Add News</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Edit News</h4>
            <p class="mg-b-0">Here you can Edit your News</p>
        </div>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit News</h6>

                <form role="form" method="post" action="{{ route('news.update',$news->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Title</h6>
                                    <input class="form-control" type="text" name="title" placeholder="Enter Title" value="{{ $news->title }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Date</h6>
                                    <input class="form-control" type="text" name="sub_title" placeholder="Enter Date" value="{{ $news->sub_title }}">
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Description</h6>
                                <textarea class="form-control ckeditor" rows="3" name="description">{{ $news->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-3">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Feature Image</h6>
                                <input class="form-control" type="file" name="image" id="imageInput" placeholder="Image" accept="image/*">
                                <div id="imagePreview" class="mt-2">
                                    @if(isset($news) && $news->image)
                                        <img src="{{ asset('uploads/news/'.$news->image) }}" class="img-thumbnail" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <label class="ckbox">
                                    <input type="checkbox" name="news"  value="1" @if($news->news==1) checked="checked" @endif>
                                    <span>News</span>
                                </label>
                                <label class="ckbox">
                                    <input type="checkbox" name="notice"  value="1" @if($news->notice==1) checked="checked" @endif>
                                    <span>Notice</span>
                                </label>
                            </div>
                        </div><!-- row -->
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
    <style>
        #imagePreview {
            max-width: 100%;
            max-height: 200px; /* Adjust the maximum height as needed */
            margin-top: 10px;
        }
    </style>

    <script>
        document.getElementById('imageInput').addEventListener('change', function (event) {
            var input = event.target;
            var preview = document.getElementById('imagePreview');

            while (preview.firstChild) {
                preview.removeChild(preview.firstChild);
            }
            var file = input.files[0];
            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

@endsection