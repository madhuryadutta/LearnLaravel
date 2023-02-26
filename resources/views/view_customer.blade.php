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
      
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>customer_id</th>
                    <th>customer_name</th>
                    <th>customer_email</th>
                    <th>customer_gender</th>
                    <th>customer_address</th>
                    <th>customer_city</th>
                    <th>customer_state</th>
                    <th>customer_dob</th>
                    <th>martial_status</th>
                    <th>points</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    
                
                <tr>
                    <td scope="row">{{$customer->customer_id}}</td>
                    <td>{{$customer->customer_name}}</td>
                    <td>{{$customer->customer_email}}</td>
                    <td>
                        @if ($customer->customer_gender == 'M')
                        Male
                        @elseif($customer->customer_gender == 'F')
                        Female
                        @else
                        Other                             
                        @endif
                    </td>
                    <td>{{$customer->customer_address}}</td>
                    <td>{{$customer->customer_city}}</td>
                    <th>{{$customer->customer_state}}</td>
                    <td>{{$customer->customer_dob}}</td>
                    <td>@if ($customer->martial_status ==1)
                        Unmarried
                        @else
                        Married
                    @endif</td>
                    <td>{{$customer->points}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>