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
        <p class="side-word">Create an account</p>
    </div>

    <!--Choose with option-->
    <form class="form" name="contact" method="POST" data-netlify="true" action="{{ route('verify') }}" netlify>
        @csrf
        <div class="form-group-container">
            <div class="question-box">
                <div class="option-text">Select the option that best describes you.</div>
                <!--select option-->
                <div class="describe-cover">
                <div class="describe-option">
                    <input type="radio" name="role" value="student"/>
                    <div>Student</div>
                </div>
                <div class="describe-option">
                    <input type="radio" name="role" value="lecturer"/>
                    <div>Lecturer</div>
                </div>
                </div>
            </div>        
        </div>
        <!-- <div class="orange-color small-text forgot-password-text"><a href="#">Forgot Password?</a></div> -->
        <button class="btn-auth orange-color-bg" id="" type="submit">Create Account</button>
    </form>
    

<!-- modal ends -->
</div>
</div>
</div>
@endsection