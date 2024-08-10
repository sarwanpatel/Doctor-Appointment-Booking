@extends('frontend.layouts.master')
@section('main-content')
    <section class="how-work-section p-t-100 p-b-100 m-5">




        <div class="container" style="height: 400px;">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background: #0d6efd; color:#f1f7fa; font-weight:bold;">
                            Login
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p style="color:red;">{{ $error }}</p>
                            @endforeach
                        @endif

                        @if (Session::has('error'))
                            <p style="color:red;">{{ Session::get('error') }}</p>
                        @endif
                        <div class="card-body">

                            <form class="w-px-500 p-3 p-md-3 needs-validation" action="{{ route('afterlogin') }}"
                                method="post" role="form">
                                @csrf
                                <div class="row mb-3 form-group">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="row mb-3 form-group">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <a href="{{ route('registration') }}">Registration</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
