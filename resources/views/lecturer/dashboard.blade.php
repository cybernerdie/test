@extends('layouts.app')
@section('content')
    <!--Course content-->
    <div class="main-section">
        <!--school + department-->
        <div class="schl-dept">
        <div class="school">School: <span>Lagos State University Ojo</span></div>
        <div class="department">Department: <span>Computer Science </span></div>
        </div>

        <!--list of courses-->
        <div class="list-of-courses">
            <div class="loc">List of courses</div>
            <div class="loc-line"></div>
        </div>
        
        <!--course cards-->
        <a href="./pages/course-details.html">
        <div class="course-card">
            <div class="course-title"> Introduction to computer science (CSC 101)</div>
            <div class="c-info"> <img src="./images/info.svg" class="info-img"/>  <img src="./images/arrows.svg" class="right-img"/> </div>
        </div>
        </a>
        <!--2-->
        <!--course cards-->
        <div class="course-card">
            <div class="course-title"> Trigonometry (MAT 101) </div>
            <div class="c-info"> <img src="./images/info.svg" class="info-img"/>  <img src="./images/arrows.svg" class="right-img"/> </div>
        </div>
        <!--3-->
        <!--course cards-->
        <div class="course-card">
            <div class="course-title"> Use of library (GNS 101) </div>
            <div class="c-info"> <img src="./images/info.svg" class="info-img"/>  <img src="./images/arrows.svg" class="right-img"/> </div>
        </div>
        <!--4-->
        <!--course cards-->
        <div class="course-card">
            <div class="course-title"> Basic heat (PHY 103) </div>
            <div class="c-info"> <img src="./images/info.svg" class="info-img"/>  <img src="./images/arrows.svg" class="right-img"/> </div>
        </div>
        <!--5-->
        <!--course cards-->
        <div class="course-card">
            <div class="course-title"> General chemistry (CHM 101) </div>
            <div class="c-info"> <img src="./images/info.svg" class="info-img"/>  <img src="./images/arrows.svg" class="right-img"/> </div>
        </div>
    </div>
    </div>
@endsection