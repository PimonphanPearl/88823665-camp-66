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
                <form action="{{ url('/register')}}" onsubmit="return myfunction();"  method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                        <div class="valid-feedback">
                        OK
                        </div>
                        <div class="invalid-feedback" id="invalid-name"> 
                            กรุณาระบุข้อมูล name
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
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

                <button  onclick="myfunction()">Click me</button>
                    
                <p class="mb-0">
                    <a href="login" class="text-center"> I already have a membership </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let $myval
    var myval2 = "value of myval2"
    const myval3 = ""

    console.log("Hello World!")

 //   alert("Hello World !!")

/**/
//
// error
// ALERT("Hello World !!")
function myfunction(){
   let name = document.getElementById('name')
  name = $('#name')
   let email = document.getElementById('email')
   let pass = document.getElementById('pass')
   let mycheckbox = document.getElementById('termsCheck')
   //document.getElementByClass()
   //name.value = "My Name Value"
  // name.val("My Name Value")
   console.log(name.val() , email.value , pass.value ,mycheckbox.checked)
    if(name.val() == "My Name Value"){
        name.addClass('is-invalid');
        $('#invalid-name').html("<b><u> ใส่ name เป็นค่านี้ไม่ได้ </u></b>")
    }else{
        name.removeClass("is-invalid");
    }

}
// myfunction()
</script>
<script>
   @section('scripts')
<script>
function myfunction() {
    let name = $('#name');
    let email = $('#email');
    let pass = $('#pass');
    let mycheckbox = $('#termsCheck');
    let valid = true;

    // Validate Name
    if (name.val().trim() === "") {
        name.addClass('is-invalid');
        $('#invalid-name').html("กรุณาระบุข้อมูล name");
        valid = false;
    } else {
        name.removeClass("is-invalid");
    }

    // Validate Email
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.val())) {
        email.addClass('is-invalid');
        email.after('<div class="invalid-feedback">กรุณาระบุอีเมลที่ถูกต้อง</div>');
        valid = false;
    } else {
        email.removeClass("is-invalid");
    }

    // Validate Password
    let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if (!passwordPattern.test(pass.val())) {
        pass.addClass('is-invalid');
        pass.after('<div class="invalid-feedback">รหัสผ่านต้องมีตัวเลข, ตัวพิมพ์เล็ก และตัวพิมพ์ใหญ่</div>');
        valid = false;
    } else {
        pass.removeClass("is-invalid");
    }

    // Validate Checkbox
    if (!mycheckbox.is(':checked')) {
        mycheckbox.addClass('is-invalid');
        mycheckbox.after('<div class="invalid-feedback">กรุณายอมรับเงื่อนไข</div>');
        valid = false;
    } else {
        mycheckbox.removeClass("is-invalid");
    }

    return valid;
}
</script>
@endsection


@endsection