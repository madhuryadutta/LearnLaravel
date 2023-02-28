@extends('layouts.main')
@push('title')
    <title>Index</title>
@endpush
@section('main-section')
<h1 class="text-center">
   Update Customer Data </h1>
<form action="{{route('customer.update',['id' =>$customer->customer_id])}}" method="POST">
    @csrf
<div class="container">
    
    <div class="form-group">
        <label for="">please Enter your name</label>
        <input type="text" name="customer_name" label="please Enter your name" class="form-control border border-success" value="{{$customer->customer_name}}">
    </div>
    <div class="form-group">
        <label for="">please Enter your Email</label>
        <input type="email" name="customer_email" label="please Enter your Email" class="form-control border border-success" value=" {{$customer->customer_email}}">
    </div>

    <div class="form-group">
        <label for="">"please Enter your Address</label>
        <input type="text" name="customer_address" label="please Enter your Address" class="form-control border border-success"  value="{{$customer->customer_address}}">
    </div>
      
    <div class="form-group">
        <label for=""></label>
        Gender  :    Male<input type="radio" name="customer_gender" label="M" value="M" {{$customer->customer_gender =="M" ?'checked':'' }}>
        Female <input type="radio" name="customer_gender" label="F" value="F" {{$customer->customer_gender =="F" ?'checked':'' }}> 
        Other<input type="radio" name="customer_gender" label="O" value="O" {{$customer->customer_gender =="O" ?'checked':'' }}>  
    </div>

   

    <div class="form-group">
        <label for="">please Enter your Cityname</label>
        <input type="text" name="customer_city" label="please Enter your Cityname" class="form-control border border-success"  value="{{$customer->customer_city}}">
    </div>
    <div class="form-group">
        <label for="">please Enter your State name</label>
        <input type="text" name="customer_state" label="please Enter your State name"  class="form-control border border-success"  value="{{$customer->customer_state}}">
    </div>
    <div class="form-group">
        <label for="">please Enter your DOB</label>
        <input type="date" name="customer_dob" label="please Enter your DOB" class="form-control border border-success"  value="{{$customer->customer_dob}}">
    </div>

    <button class="btn btn-primary"> Submit</button>

</div>
</form>
@endsection
