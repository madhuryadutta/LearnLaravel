<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{url('/register')}}" method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">
            Registration Form </h1>
         <x-input type="text" name="u_name" label="please Enter your name"/>
         <x-input type="email" name="u_email" label="please Enter your Email"/>  
         <x-input type="password" name="u_password" label="please Enter your Password"/>  
         <x-input type="password" name="confirm_password" label="Confirm your Password"/>     
        <button class="btn btn-primary"> Submit</button>
    </div>
</form>

</body>

</html>