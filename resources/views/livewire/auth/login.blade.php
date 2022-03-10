<div>
    <div class="bottom-grid">
        <div class="logo">
            <h1> <a href="index.html"> M - Laundry Sign In Form</a></h1>
        </div>
    </div>
    <!-- register -->
    <div class="w3lhny-register">
        <div class="iconhny">
            <span class="fa fa-user-plus"></span>
        </div>
        <form wire:submit.prevent="loginRequest" class="register-form">
            {{-- {{ csrf_field() }} --}}
            <fieldset>
                <div class="form">
                    <div class="form-row">
                        <span class="fa fa-user"></span>
                        <input type="text" class="form-text" placeholder="Username or Email" wire:model="username">
                        @error('username')
                            <small style="color: wheat;">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-row">
                        <span class="fa fa-lock"></span>
                        <input type="password" class="form-text" placeholder="Password" wire:model="password">
                        @error('password')
                            <small style="color: wheat;">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-light" style="color: white;">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="form-row button-login">
                        <button class="btn btn-login">Login</button>
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
        <p class="already">Don't have an account <a href="{{ route('register') }}">Register</a></p>
    </div>

</div>
