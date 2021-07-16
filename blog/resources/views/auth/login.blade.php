@include('data.header')

<section style="background-image: url(/img/back.jpg);
background-size: cover; background-position:center center;
height: 609px;" >

    <div class="container col-4 p-2 login">
       <div class="row">
           <div class="col-md-12">
               <div class="container">
                   <div class="logo"></div>
                   <div class=" text-center text-primary" style="font-size: 40px">{{ __('Login') }}</div>
   
                   <div class="">
                       <form method="POST" action="{{ route('login') }}">
                           @csrf
   
                           <div class="form-group d-flex flex-column">
                               <label for="email"  class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>
   
                               <div class="col-md-12">
                                   <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
   
                                   @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>
   
                           <div class="form-group d-flex flex-column">
                               <label for="password" class="col-md-1 col-form-label ">{{ __('Password') }}</label>
   
                               <div class="col-md-12">
                                   <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
   
                                   @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>
   
                           <div class="form-group row">
                               <div class="col-md-8 offset-md-1">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
   
                                       <label class="form-check-label" for="remember">
                                           {{ __('Remember Me') }}
                                       </label>
                                   </div>
                               </div>
                           </div>
   
                           <div class="form-group row mb-0">
                               <div class="col-md-12 offset-md-1">
                                   <button type="submit" class="btn btn-primary">
                                       {{ __('Login') }}
                                   </button>
   
                                   @if (Route::has('password.request'))
                                       <a class="btn btn-link" href="{{ route('password.request') }}">
                                           {{ __('Forgot Your Password?') }}
                                       </a>
                                   @endif
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



<style>
    .login{
        position: absolute;
        top: 10%;
        left: 35%;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 14px;
    }
    .logo{
  background-image: url("/img/blooog1.png");
  background-size: 100px 100px; 
  height: 120px;
  width:120px;
  margin-left: auto;
  margin-right: auto; 
  background-position: center center;
  background-repeat: no-repeat;
}
</style>


