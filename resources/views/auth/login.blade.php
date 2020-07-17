@extends('layouts.main')
@section('content')
    <!--split 2 screen-->
    <div class="parent-split">
        <!--left-->
        <div class="left-split">
            <div class="left-text">Learn Anywhere, <br> Learn Everywhere</div>
            <div class="float-img"> <img src="{{asset ('images/laptop.png')}}"/> </div>
        </div>
        <!--right-->
        <div class="right-split">


 <!-- modal starts V2-->
 <div class="auth-modal-container" id="create-account-div">
    <div class="top-form-design">
        <p class="side-word">Login to your account</p>
    </div>

    <!-- ALERT STARTS -->
<!--DANGER-->
<!--
    <div class="alert alert-danger" role="alert">
        Incorrect username and password
     </div> -->
    <!-- ALERT ENDS -->

    <!-- login form starts -->
    <form class="form" name="contact" method="POST" data-netlify="true" action="{{ route('login') }}" netlify>
        @csrf
        <div class="form-group-container">
        <div class="form-group">
                <label for="email" class="form-label signup-label-email">Email</label>
          <div class="form-input">
            <input name="email" type="email" class="form-input-signup create-acc-input form-control-input create-email" id="email">
            <span id="create-acc-email-error-span"></span>
          </div>
        </div>
        <div class="form-group">
            <label for="password" class="form-label signup-label-password">Password</label>
            <div class="form-input">
                <input name="password" type="password" class="form-input-signup create-acc-input form-control-input create-password" id="password">
                <span id="create-acc-password-error-span"></span>
            </div>
          </div>
          <!--end-->
        </div>
        <!-- <div class="orange-color small-text forgot-password-text"><a href="#">Forgot Password?</a></div> -->
        <button class="btn-auth orange-color-bg" id="" type="submit">Log in</button>
    </form>
    <!--Gmail and Facebook Login-->
    <div class="external-auth-container">
        <p class="or-divider">OR</p>
      <!-- second login auth ends -->
      <a href="{{ route('facebookredirect') }}" class="btn-fb"><img src="../images/facebook icon.svg" alt="FB"> Register with Facebook</a>
      <a href="{{ route('googleredirect') }}" class="btn-google"><img src="../images/google icon.svg" alt="google">Register with Google</a>
    
</div>



    </div>
    </div>

@endsection