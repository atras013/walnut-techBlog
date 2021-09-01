@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/log-in/style.css') }}">
@stop

@section('content')

   <div class="container">
       <div class="log-in">
           <div class="card ">
            <div class="card-header"> <h3>ورود</h3> </div>
            
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group column">
                        <label for="email" class="col-md-4 col-form-label text-md-right">ایمیل</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12 offset-md-4 mr-3">
                            <div class=" form-check ">
                                <label class="form-check-label ml-2 " for="remember">
                                     به یاد داشتن 
                                </label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="login-button btn btn-primary col-md-12">
                               ورود 
                            </button>

                           
                        </div>
                    </div>
                    <div class="last-row form-group row ">
                        <div class="d-flex justify-content-between col-md-12 offset-md-4">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    رمز عبور را فراموش کردید؟
                                </a>
                            @endif
                            
                            <a class="btn btn-link" href="{{ route('register') }}">
                                ثبت نام
                            </a>
                        

                           
                        </div>
                    </div>
                </form>
           
           </div>
       </div>
   </div>
 
 

@endsection
