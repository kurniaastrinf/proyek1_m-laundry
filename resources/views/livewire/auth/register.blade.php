<div>
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
        <form wire:submit.prevent="requestRegister()" class="register-form">
            <fieldset>
                <div class="form">
                    <div class="form-row">
                        <span class="fa fa-user"></span>
                        <input type="text" class="form-text" placeholder="Username" wire:model="username">
                        @error('username')
                            <small style="color: wheat;">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-row">
                        <span class="fa fa-envelope"></span>
                        <input type="email" class="form-text" placeholder="Email Address" wire:model="email">
                        @error('email')
                            <small style="color: wheat;">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-row">
                        <span class="fa fa-lock"></span>
                        <input type="password" class="form-text" placeholder="Password" wire:model="password">
                        @error('password')
                            <small style="color: wheat;">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-row">
                        <span class="fa fa-lock"></span>
                        <input type="password" class="form-text" placeholder="Confirm Password"
                            wire:model="confirm_password">
                        @error('confirm_password')
                            <small style="color: wheat;">
                                {{ $message }}
                            </small>
                        @enderror
                        @if (session()->has('message'))
                            <small style="color: wheat;">
                                {{ session('message') }}
                            </small>
                        @endif
                    </div>
                    <div class="form-row button-login">
                        <button class="btn btn-login">Register</button>
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
        <p class="already">Already have an account <a href="{{ route('login') }}">Sign In</a></p>
    </div>
</div>
