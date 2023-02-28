@extends('layouts.main')
@push('title')
    <title>Index</title>
@endpush
@section('main-section')
<h1 class="text-center">
    Customer Registration Form </h1>
<form action="{{url('/customer')}}" method="POST">
    @csrf
<div class="container">
    
     <x-input type="text" name="customer_name" label="please Enter your name"/>
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
@endsection