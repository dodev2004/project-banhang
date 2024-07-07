@extends('backend.auth.index')
@section("style")
@include('backend.components.head')
@endsection
@section("content")
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>

        <h3>Welcome to IN+</h3>
    
        <p>Login in. To see it in action.</p>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        <form class="m-t" role="form" action="{{route('admin.login.auth')}}" method="POST">
            @csrf
            @method("POST")
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email">
                @error("email")
                <div class="text-left">
                      <span class="text-danger text-start">{{$message}}</span>
                </div>
              
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" >
                @error("password")
                <div class="text-left">
                      <span class="text-danger text-start">{{$message}}</span>
                </div>
                @enderror
                
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
        </form>

    </div>
</div>
@endsection
@push("scripts")
@include("backend.components.scripts")
@endpush