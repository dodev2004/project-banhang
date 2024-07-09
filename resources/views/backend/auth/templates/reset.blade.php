@extends('backend.auth.index')
@section("style")
@include('backend.components.head')
@endsection
@section("content")
<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <h3>Register to IN+</h3>
        <p>Create account to see it in action.</p>
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        <form class="m-t" role="form" action="{{route('password.update')}}" method="POST">
            @method("POST")
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ $email ?? old('email')}}" placeholder="Email" >
                 @error("email")
                <div class="text-left">
                      <span class="text-danger text-start">{{$message}}</span>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password"  placeholder="Password" >
                 @error("password")
                <div class="text-left">
                      <span class="text-danger text-start">{{$message}}</span>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="re-password" placeholder="Password repeat" >
                 @error("re-password")
                <div class="text-left">
                      <span class="text-danger text-start">{{$message}}</span>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Xác nhận</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>      
@endsection
@push("scripts")
@include("backend.components.scripts")
@endpush