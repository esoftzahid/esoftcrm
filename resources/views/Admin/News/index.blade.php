@extends('Admin.DashboardMaster')
@section('title','All News | Journal Management System')
@section('script')

    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- Include Bootstrap JS for features like sorting arrows -->
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        // Initialize DataTable with Bootstrap styling
        $(document).ready(function() {
            $('#employeeTable').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@section('mainpanel')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Dasboard</a>
                <a class="breadcrumb-item" href="#">News</a>
                <span class="breadcrumb-item active">All News</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">All News</h4>
            <p class="mg-b-0">Here is your all News</p>
        </div>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">All News</h6>
                <div class="form-layout form-layout-1">
                    <a style="float:right;color: white;" href="{{ route('addnews') }}" class="btn btn-info tx-11 pd-y-12 tx-uppercase tx-spacing-2">Add News</a>
                    @if(Session::has('successMsg'))
                        <script>
                            // Display the SweetAlert notification when the page loads
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    title: 'Success!',
                                    text: "{{ Session::get('successMsg') }}",
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK',
                                });
                            });
                        </script>
                    @endif

                    <table id="employeeTable" class="table table-striped table-bordered" style="width:100%">
                        <thead class="thead-dark">
                        <tr>
                            <th>SL.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th width="17%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $key=>$news)
                            <tr class="odd gradeX">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $news->title }}</td>
                                <td><img src="{{ asset('uploads/news/'.$news->image) }}" class="img-thumbnail" width="100" height="100" /></td>
                                <td><a href="{{route('news.edit',$news->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <form id="delete-form-{{ $news->id }}" action="{{ route('news.destroy',$news->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="submit" onclick="if(confirm('Are you sure? You want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $news->id }}').submit();
                                            }else {
                                            event.preventDefault();
                                            }" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- br-pagebody -->

        @include('Admin.footer')
    </div><!-- br-mainpanel -->
@endsection
