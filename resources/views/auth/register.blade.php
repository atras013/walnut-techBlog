@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/log-in/style.css') }}">
@stop
@section('content')

<div class="container">
    <div class="register">
        <div class="card ">
         <div class="card-header"> <h4 class="mt-2" >ثبت نام</h4> </div>
         
            <form class="form" method="POST" action="{{ route('register') }}">
                 @csrf

                

                 <div class="form-group column">
                    <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                 <div class="form-group column">
                    <label for="username" class="col-md-4 col-form-label text-md-right">نام کاربری</label>

                    <div class="col-md-12">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="name" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group column">
                    <label for="email" class="col-md-4 col-form-label text-md-right"> ایمیل</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                 <div class="form-group column">
                    <label for="password" class="col-md-4 col-form-label text-md-right">رمز</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group column">
                    <label for="password-confirm" class="col-md-12 col-form-label text-md-right">تکرار رمز عبور</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                    </div>
                </div>

                <div class="last-row form-group mt-5 align-items-end">
                    <div class="col-md-12 offset-md-4">
                        <button type="submit" class="login-button btn btn-success col-md-12">
                            ثبت نام
                        </button>
                    </div>
                </div>

                 
             </form>
         
        </div>
    </div>
</div>

@endsection
