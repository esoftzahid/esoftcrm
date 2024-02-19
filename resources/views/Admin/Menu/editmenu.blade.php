@extends('Admin.DashboardMaster')
@section('title','Edit Menu | Journal Management System')
@section('mainpanel')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Dasboard</a>
                <a class="breadcrumb-item" href="#">Menu</a>
                <span class="breadcrumb-item active">Edit Menu</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Add Menu</h4>
            <p class="mg-b-0">Here you can Edit your Menu</p>
        </div>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Menu</h6>

                <form role="form" method="post" action="{{ route('menu.update',$menu->id) }}">
                    @csrf
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Title</h6>
                                    <input class="form-control" name="menu_name" value="{{ $menu->menu_name }}" placeholder="Title" />
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row mg-b-25">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Parent Menu</h6>
                                    <select name="root_id" class="form-control"   onchange="ajaxSearch(this.value,'subcatid','root_id')">
                                        @if (!(empty($parent_id_for->menu_name)))
                                            <option value="">{{$parent_id_for->menu_name}}</option>

                                        @else
                                            <option value="NULL">Select Menu</option>

                                        @endif

                                        @foreach($main as $main_menu)

                                            <option value="{{$main_menu->id}}">{{$main_menu->menu_name}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div id="LoadingImageE" style="width:100%; height:auto; text-align:left;display:none; ">

                                    <img src="{{ asset('Admin/assets/img/loader7.gif')}}" style="width:30px; height:auto" /></div>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Sub Menu</h6>
                                    <div id="subcatid">
                                        <select name="sroot_id" class="form-control" onChange="">

                                            @if (!(empty($sub_id_for->menu_name)))
                                                <option value="">{{$sub_id_for->menu_name}}</option>

                                            @else
                                                <option value="NULL">Select Sub Menu</option>

                                            @endif


                                            @foreach($sub_main as $sub_main)

                                                <option value="{{$sub_main->id}}">{{$sub_main->menu_name}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Last Menu</h6>
                                    <div id="lastcatid">
                                        <select name="troot_id" class="form-control" onChange="">

                                            @if (!(empty($last_id_for->menu_name)))
                                                <option value="">{{$last_id_for->menu_name}}</option>

                                            @else
                                                <option value="NULL">Select Last Menu</option>

                                            @endif


                                            @foreach($menu_all as $main_menu)

                                                <option value="{{$main_menu->id}}">{{$main_menu->menu_name}}</option>

                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Menu Type</h6>
                                    <select name="page_type" class="form-control" onChange="">
                                        @if (!(empty($menu->page_type)))
                                            <option value="{{$menu->page_type}}">{{$menu->page_type}}</option>
                                        @else

                                            <option value="">Select Page Type</option>

                                        @endif
                                        <option value="page">Page</option>
                                        <option value="Service">Service</option>
                                        <option value="gallery">Picture Gallery</option>
                                        <option value="video">Video Gallery</option>
                                        <option value="contact">Contact Us</option>
                                        <option value="url">Url</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">External Link</h6>
                                    <input class="form-control" name="external" placeholder="External Link" value="{{$menu->external_link}}" />
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Sequence</h6>
                                    <input class="form-control" name="sequence" value="{{ $menu->sequence }}" placeholder="Sequence" />
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{--<label class="form-control-label">Title: <span class="tx-danger">*</span></label>--}}
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Target Window</h6>
                                    <select name="target" class="form-control" onChange="">
                                        <option value="">Target Window</option>

                                        <option value="_self">Same Window</option>
                                        <option value="_blank">New Window</option>

                                    </select>
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <label class="ckbox">
                                    <input type="checkbox" name="display"  value="1" @if($menu->display==1) checked="checked" @endif>
                                    <span>Main Menu</span>
                                </label>
                                <label class="ckbox">
                                    <input type="checkbox" name="footer1"  value="1" @if($menu->footer1==1) checked="checked" @endif>
                                    <span>Footer Menu</span>
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

    <script>
        function ajaxSearch(keywords,id,colid)
        {
            //alert(keywords+id+colid);
            if(keywords==0 ){
                return false;
            }
            else{
                var surl = '{{ route("menu.ajaxsearch") }}';
                $.ajax({
                    type: "GET",
                    url: surl,
                    data: {'keywords':keywords,'colid':colid},

                    cache: false,
                    beforeSend: function(){
                        $('#LoadingImageE').show();
                    },
                    complete: function(){
                        $('#LoadingImageE').hide();
                    },
                    success: function(response) {
                        $('#'+id).html(response);
                        //$("#LoadingImageE").hide();
                    },
                    error: function (xhr, status) {
                        $("#LoadingImageE").hide();
                        alert('Unknown error ' + status);
                    }
                });
            }
        }
    </script>
@endsection