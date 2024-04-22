@php
    session();
@endphp
@extends('templateBoss')

@section('content')
@foreach ($employee as $item)
<section class="section-flex">
    <div class="form_containerEmployee">
            <!-- Title -->
            <div class="TitleBoss">
                <h1 class="Title1">Profile Employee</h1>
            </div>
            <!-- Name -->
            <div class="container">
                <div class="boxtitle">
                    <h6>Name</h6>
                    <p>{{ $item->name }}</p>
                </div>
                <div class="boxtitle">
                    <h6>Last Name</h6>
                    <p>{{ $item->lastName }}</p>
                </div> 
            </div>
            <!-- PhoneNumber -->
            <div class="container">
                <div class="boxtitle">
                    <h6>Phone Number</h6>
                    <p>{{ $item->phoneNumber }}</p>
                </div>
                <div class="boxtitle">
                    <h6>Department</h6>
                    <p>{{ $item->department }}</p>
                </div>  
            </div>
            <!-- PhoneNumber -->
            <div class="container">
                <div class="boxtitle">
                    <h6>Position</h6>
                    <p>{{ $item->position }}</p>
                </div>  
                <div class="boxtitle">
                    <h6>Salary</h6>
                    <p>${{ $item->salary }}</p>
                </div>   
            </div>
    </div>
</section>
@endforeach
@endsection