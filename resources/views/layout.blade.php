<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> @yield('title') - Page</title>
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
#intro{
	margin-top: 10px;
}
#one{
	background-color: #a5fff3;
}
#two{
	padding: 20px;
}
.image{
	border-radius: 25px;
}
#btn{
	text-align: center;
	margin-top: 20px;
}
#book-btn{
	border-radius: 20px;
	padding: 10px;
	font-weight: bolder;
	font-style: italic;
}
#details{
	margin-top: 20px;
}
#features , #advantages{
	background-color:#cecece;
	border-radius: 15px;
	padding: 10px;
	margin-top: 10px;
}
#about div{
	margin-top: 30px;
	background-color:#e9f9f9;
	text-align: center;
}
#details p, #about p{
    padding: 15px;
    font-size: 18px;
}
#Booking,#booking-details{
	background-color: #8af9ef;
	margin-top: 10px;
	padding-bottom: 50px;
}
#Booking h2,#booking-details{
	text-align: center;
}
footer{
	background-color: #6c7377;
	margin-top: 30px;
	padding-top: 30px;
	color: #ffffff;
}
#contact-us{
	text-align: center;
}
#links ul{
	list-style-type: none;
}
#links ul li a{
	color: #FFF;
	text-decoration: none;
}
  </style>
  @section('header')
   <header>
        <nav class="navbar  navbar-expand-md navbar-light" id="navigation" >
        	<img src="{{asset('images/logo.jpg')}}" class="logo">
           
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
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                    @if(Session::get('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="/bookinglist">Bookings List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
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
    @show
  <body>
  @yield('content')
  </body>
   <footer>
        <div class="row justify-content-around">
            <div class="col-11 col-sm-6" id="contact-us">
                <h2>Contact Us</h2>
                <p>Have questions about our products, support services, or anything else? Let us know and we&apos;ll get back to you.</p>
                <div id="address">
                    <h4>Address</h4>
                    <p>Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd, Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076</p>
                   
                </div>
            </div>
            <div class="col-11 col-sm-5 col-md-4" id="links">
                <h2>Social</h2>
                <ul id="social-links">
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="https://www.facebook.com/practo">Facebook</a></li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="https://twitter.com/Practo">Twitter</a>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="https://www.linkedin.com/company/practo-technologies-pvt-ltd">Linkedin</a>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="https://www.youtube.com/user/PractoSupport">Youtube</a>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="https://github.com/practo">Github</a>
                    </li>
                </ul>

            </div>
        </div>
    </footer>
</html>