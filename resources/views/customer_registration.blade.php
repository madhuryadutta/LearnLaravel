{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">
        Customer Registration Form </h1>
    <form action="{{url('/customer')}}" method="POST">
        @csrf
    <div class="container">
        <x-input type="text" name="customer_name" label="please Enter your name" value="">
         <x-input type="email" name="customer_email" label="please Enter your Email"/> 
         Gender  :    Male<input type="radio" name="customer_gender" label="M" value="M">Female <input type="radio" name="customer_gender" label="F" value="F"> Other<input type="radio" name="customer_gender" label="O" value="O">  
         <x-input type="text" name="customer_address" label="please Enter your Address"/> 
         <x-input type="text" name="customer_city" label="please Enter your Cityname"/>
         <x-input type="text" name="customer_state" label="please Enter your State name"/>
         <x-input type="date" name="customer_dob" label="please Enter your DOB"/>    
         <x-input type="password" name="customer_password" label="please Enter your Password"/>  
         <x-input type="password" name="confirm_password" label="Confirm your Password"/>
        <button class="btn btn-primary"> Submit</button>
    </div>
    </form>
</body>
</html> --}}


@extends('layouts.main')
@push('title')
    <title>Index</title>
@endpush
@section('main-section')
<h1 class="text-center">
   Register Customer</h1>
<form action="{{route('customer.create')}}" method="POST">
    @csrf
<div class="container">
    
    <div class="form-group">
        <label for="">please Enter your name</label>
        <input type="text" name="customer_name" label="please Enter your name" class="form-control border border-success" >
    </div>
    <div class="form-group">
        <label for="">please Enter your Email</label>
        <input type="email" name="customer_email" label="please Enter your Email" class="form-control border border-success" >
    </div>

    <div class="form-group">
        <label for="">"please Enter your Address</label>
        <input type="text" name="customer_address" label="please Enter your Address" class="form-control border border-success"  >
    </div>
      
    <div class="form-group">
        <label for=""></label>
        Gender  :    Male<input type="radio" name="customer_gender" label="M" value="M">
        Female <input type="radio" name="customer_gender" label="F" value="F" > 
        Other<input type="radio" name="customer_gender" label="O" value="O" >  
    </div>

    <div class="form-group">
        <label for="">please Enter your Cityname</label>
        <input type="text" name="customer_city" label="please Enter your Cityname" class="form-control border border-success"  >
    </div>
    <div class="form-group">
        <label for="">please Enter your State name</label>
        <input type="text" name="customer_state" label="please Enter your State name"  class="form-control border border-success"  >
    </div>
    <div class="form-group">
        <label for="">please Enter your DOB</label>
        <input type="date" name="customer_dob" label="please Enter your DOB" class="form-control border border-success"  >
    </div>

    <div class="form-group">
        <label for="">please Enter your Password</label>
        <input type="password" name="customer_password"  class="form-control border border-success"  >
    </div>
    <div class="form-group">
        <label for="">please Confirm your Password</label>
        <input type="password" name="confirm_password" label="Confirm your Password" class="form-control border border-success"  >
    </div>
    <button class="btn btn-primary"> Submit</button>

</div>
</form>
@endsection
