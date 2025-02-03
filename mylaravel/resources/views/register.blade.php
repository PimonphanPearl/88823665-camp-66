@extends('layouts.default')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="register-box">
        <div class="register-logo">
            <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{ url('/register')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" />
                        <div class="input-group-text"><span class="bi bi-lock"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="termsCheck" />
                                <label class="form-check-label" for="termsCheck"> I agree to the terms </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-0">
                    <a href="login" class="text-center"> I already have a membership </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
