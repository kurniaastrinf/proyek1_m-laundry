@extends('auth.master')
@section('title', 'Register')
@section('auth_form')
<div class="bottom-grid">
    <div class="logo">
        <h1> <a href="index.html"> M - Laundry Sign Up Form</a></h1>
    </div>
</div>
<!-- register -->
<div class="w3lhny-register">
    <div class="iconhny">
       <span class="fa fa-user-plus"></span>
     </div>
    <form action="#" method="post" class="register-form">
        <fieldset>
            <div class="form">
                <div class="form-row">
                    <span class="fa fa-user"></span>
                    <input type="text" class="form-text" placeholder="Username" required="">
                </div>
                <div class="form-row">
                    <span class="fa fa-envelope"></span>

                    <input type="email" class="form-text" placeholder="Email Address" required="">
                </div>
                <div class="form-row">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="form-text" placeholder="Password" required="">
                </div>
                <div class="form-row button-login">
                    <button class="btn btn-login">Sign Up</button>
                </div>
            </div>
        </fieldset>
        </form>

        <span class="create-account">Or Continue With!</span>

        <div class="social-media">
            <a href="#facebook" class="fb"><span class="fa fa-facebook"></span></a>
            <a href="#twitter" class="tw"><span class="fa fa-twitter"></span></a>
            <a href="#pinterest" class="pi"><span class="fa fa-pinterest"></span></a>
        </div>
        <p class="already">Already have an account <a href="#">Sign In</a></p>
</div>
@endsection
