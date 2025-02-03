@extends('layouts.default')

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Edit</b>User</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Edit User</p>
                <form action="{{ url('/user')}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id"
                        value="{{ $user->id }}">
                    <div class="input-group mb-3">
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" placeholder="Full name" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock"></span></div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div>
@endsection
