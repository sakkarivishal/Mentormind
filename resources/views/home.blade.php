@extends('layout')
@section('title','Home')
@section('content')
<body>
    <div class="container-fluid" id="intro">
    	<div class="row justify-content-around" id="one">
    		<div class="col-12 col-md-8 col-lg-6">
    			 <h3>Get lab tests and full body checkups from the comfort of your home.</h3>
			      <p>Get your diagnostic tests at your door-step .</p>
			      <p>Make your life easy and happy</p>
			      <h4>Why book with us?</h4>
			      <ul>
			        <li>A certified professional will collect your sample from a location of your preference.</li>
			        <li>Access your reports anytime on your Practo account. We will email you a copy.</li>
			        <li>To ensure the accuracy of reports.</li>
			      </ul>
    			
    		</div>
    		<div class="col-12 col-md-6 col-lg-6" id="two">
    			 <img src="{{asset('images/test.jpg')}}" alt="lab-test" class="image">
    		</div>
    	</div>
    	<div class="row" id="btn">
            <div class="col-12">
                    <button class="btn btn-success" onclick="location.href='book';" id="book-btn">Book a Diagnostic Test</button >
            </div>
         </div>
    	
    </div>
    <div class="container-fluid" id="details">
    	<div class="row justify-content-around">
    		 <div class="col-11 col-md-5" id="features">
                    <h2>Features</h2>
                    <ul>
                        <li>Search doctors nearby</li>
                        <li>Online consultations</li>
                        <li>Book your appointments online</li>
                        <li>Setting up the reminders for the medicine</li>
                        <li>Online booking for a lab test</li>
                        <li>24/7 service</li>
                    </ul>
                </div>
                <div class="col-11 col-md-5" id="advantages">
                    <h2>Advantages</h2>
                    <ul>
                        <li>No Need to Travel</li>
                        <li>Improved ways to check your symptoms</li>
                        <li>Save Your Money</li>
                        <li>Privacy and Security</li>
                        <li>Comfortable and Convenient</li>
                        <li>No Risk of Infections From the Doctor's Clinic</li>
                    </ul>
                </div>
    	</div>	
    </div>
    <div class="container-fluid" id="about">
            <div >
                <h2>Your home for health</h2>
                <p>
                    For millions of people, Practo is the trusted and familiar home where they know they&apos;ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.<br><br>
                    Healthcare providers can also harness the power of Practo as the definitive platform that helps them build their presence, grow establishments and engage patients more deeply than ever.
                </p>
            </div>
            <div>
                <h2>#DoGreat</h2>
                <p>Do Great is our motto and is the hallmark of a true Practeon. It signifies the intrinsic motivation in each Practeon to strive for excellence. Every time. This means Practeons do their best work, not for want of rewards or recognitions but because they expect it of themselves.</p>
            </div>
        </div>
    <!-- Optionbl JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  @endsection