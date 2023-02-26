<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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

</body>

</html>