@include('data.header')


<section class="d-flex flex-row"  >

    <div class="col-8" style="background-image: url(/img/dash.jpg);
    background-size: cover; background-position:center center;
    height: 609px;">
    </div>

<div class="container col-3 p-2">
    <div class="row">
        <div>
            <div class="container offset-md-1">
                <div class="mt-3 text-center text-primary" style="font-size: 40px">{{ __('Register') }}</div>

                <div class="mt-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group d-flex flex-column">
                            <label for="name" class="col-md-12"  style="font-size: 15px">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="email" class="col-md-12"  style="font-size: 15px">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="password" class="col-md-12"  style="font-size: 15px">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="password-confirm" class="col-md-12"  style="font-size: 15px">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
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

</section>

@include('data.footer')


