<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second page in Laravel</title>
</head>

<body>
    <h1>This is my second page in Laravel</h1>
    <div>
        <h4>My name is {{$name}}</h4>
    </div>
    {{-- @if($id != "")
    <div>
        <h4>and my id is {{$id}}</h4>
    </div>
    @endif --}}
    @isset($id)
    <div>
        <h4>and my id is {{$id}}</h4>
    </div>
    @endisset

    <div>
        <h2>Date and Time</h2>
        Date: {{date('d-m-y')}}
        <br>
        Time: {{time()}}
    </div>


</body>

</html>