@extends('frontend.layouts.app_frontend')
@section('content')
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--10">
                <!-- Textual inputs start -->
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="login-form-head ">THÊM MỚI</h4>
                                @include('frontend.category.form');
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->
            </div>
        </div>
    </div>
@stop
