@extends('layouts.app')

@section('content')

   <body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">

					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{asset('dashboard_asset') }}images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>


                                        @if ($errors ->any())
                                              <div class="alert alert-danger">
                                                  @foreach ($errors-> all() as $error)
                                                   <li>{{ $error }}</li>
                                                 @endforeach
                                                </div>

                                        @endif


                                        <form method="POST" action="{{ route('register') }}">
                                           @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="name"   >
                                        </div>

                                         @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="form-group">
                                            <label class="mb-1 text-white" for="email" :value="__('Email')" ><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" " name="email"  >
                                        </div>
                                      @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group">
                                            <label class="mb-1 text-white" for="Password" :value="__('Password')"  ><strong>Password</strong></label>
                                            <input type="password" class="form-control"name="password" >
                                        </div>
                                        @error('Password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                         <div class="form-group">
                                            <label class="mb-1 text-white"  for="password_confirmation" :value="__('Confirm Password')" ><strong>confirm Password</strong></label>
                                            <input type="password" class="form-control" value="Password"  id="password_confirmation" class="block mt-1 w-full" type="password"    name="password_confirmation" required>
                                        </div>

                                           <div class="form-group">
                                            <label class="mb-1 text-white"  ><strong>number</strong></label>
                                            <input type="tel" class="form-control" placeholder="016++++" name="phn_number"  >
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block" href="{{ __('Register') }}"">Sign me up</button>
                                        </div>




                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? {{ __('Already registered?') }}<a class="text-white"  href="{{ __('login') }}">Sign in</a></p>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
