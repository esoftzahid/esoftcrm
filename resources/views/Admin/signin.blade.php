@extends('Admin.AdminMaster')
@section('title','Login')
@section('main')
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <form role="form" action="{{ route('admin.login') }}" method="post">
                @csrf
                {{--<div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-normal">]</span></div>--}}
                <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><img style="height: 50px;" src="https://esoft.com.bd/assets/view/images/logo.png" alt=""></div>
                <div class="tx-center mg-b-60"></div>

                <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Enter your username" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Invalid Details',
                                text: '{{ $errors->first('email') }}',
                            });
                        </script>
                    @endif
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Enter your password">
                    @if($errors->has('password'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Invalid Detailsd',
                                text: '{{ $errors->first('password') }}',
                            });
                        </script>
                    @endif
                </div>
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </form>
            {{--<div class="mg-t-60 tx-center">Not yet a member? <a href="#" class="tx-info">Sign Up</a></div>--}}

        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
@endsection
