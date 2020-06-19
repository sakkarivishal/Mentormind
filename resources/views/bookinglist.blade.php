<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>Booking List</title>
  </head>
  <style>
        #navigation .nav-link{
            font-weight: bold;
            color: #000;
        }
        .navbar-light{
            background-color: #e3f2fd;
        }
        #navigation .nav-link:hover {
            background-color: #000080;
            color: #ffffff;
        }
        #booking-list{
            margin-top: 10px;
        }
        table {
            color: #ffffff;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #bec7d1;
        }

        tr:nth-child(even) {
            background-color: #868f99;
        }

        tr:hover {
            background-color: #80856680;
        }
  </style>
   <header>
        <nav class="navbar  navbar-expand-md navbar-light" id="navigation" >
        	<img src="images/logo.jpg" class="logo">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav ml-auto" align="right">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home/#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home/#contact-us">Contact Us</a>
                    </li>
                    @if(Session::get('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="/bookinglist">Bookings List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                    </li> 
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Admin Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <body>
        <div class="container-fluid" id="booking-list">
            <table class="table table-responsive-sm">
                <thead class="thead-dark">
                    <tr>

                        <th scope="col">User-Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email Id</th>
                        <th scope="col">Age</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Test Name</th>
                        <th scope="col">Lab</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time Slot</th>
                        
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phonenumber}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->sex}}</td>
                        <td>{{$item->booking->test_name}}</td>
                        <td>{{$item->booking->lab_name}}</td>
                        <td>{{$item->date_of_test}}</td>
                        <td>{{$item->time_slot}}</td>
                        
                        <td>{{$item->address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>