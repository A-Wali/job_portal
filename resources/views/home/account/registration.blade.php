@extends('home.layouts.app')
@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>
                    <form action="{{route('account.processregistration')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control @error ('name') @enderror" placeholder="Enter Name">
                            @error('name')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" value="{{old('email')}}" name="email" id="email" class="form-control @error ('email') @enderror" placeholder="Enter Email">
                            @error('email')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Password*</label>
                            <input type="password" name="password" id="password" class="form-control @error ('password') @enderror" placeholder="Enter Password">
                            @error('password')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Confirm Password*</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error ('password_confirmation') @enderror" placeholder="Please Confirm Password">
                            @error('password_confirmation')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div> 
                        <button class="btn btn-primary mt-2">Register</button>
                    </form>                    
                </div>
                <div class="mt-4 text-center">
                    <p>Have an account? <a  href="login.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
