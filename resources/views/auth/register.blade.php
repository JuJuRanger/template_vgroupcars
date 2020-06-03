@extends('layouts.app')
@section('title') Register @parent @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="fullname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                                required autocomplete="name" autofocus> --}}

                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}

                                <input id="fullname" type="text"
                                    class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}"
                                    name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                required autocomplete="email"> --}}

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}

                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}

                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}

                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6 pt-2">

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="male"> Male
                                    </label> &nbsp;&nbsp;
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="female"> Female
                                    </label>
                                </div>

                                @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel"
                                    class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"
                                    value="{{ old('tel') }}">

                                @if ($errors->has('tel'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_image"
                                class="col-md-4 col-form-label text-md-right">{{ __('User_Image') }}</label>

                            <div class="col-md-6">
                                <img src="{{asset('assets/images/no_avatar.jpg')}}" id="output"
                                    class="img-circle" width="50" height="50">
                                <span class="btn btn-primary btn-file">
                                    เลือกไฟล์ <input type="file" name="product_image" id="product_image"
                                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isAdmin"
                                class="col-md-4 col-form-label text-md-right">{{ __('isAdmin') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="isAdmin" id="isAdmin">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>

                                @if ($errors->has('isAdmin'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('isAdmin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="status" id="status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
@endsection
