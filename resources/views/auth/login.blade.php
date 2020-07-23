@extends('layouts.master')

@section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">تسجيل الدخول</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">الرئيسية /</a></li>
                        <li class="current">تسجيل الدخول</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="login-form login-area">
                    <h3>
                    ادخل الان
                    </h3>
                    
                  @if(session('status'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                    </div>
                     @endif 
                    <form class="form-horizontal login-form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <input type="email" name="email" id="sender-email" class="form-control" name="email" placeholder="البريد الالكتروني" value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input id="password" type="password" class="form-control" name="password" placeholder="كلمة المرور" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkedall" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="checkedall">البقاء متصلا</label>
                            </div>
                        <a class="forgetpassword" href="{{url('/register')}}">انشاء حساب جديد</a><br>
                        <a class="forgetpassword" href="{{ url('/forgot-password') }}">نسيت كلمة المرور ؟</a>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-common log-btn">دخول</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
