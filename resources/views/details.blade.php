@extends('layout')
@section('title','Details')
@section('content')

<body>
    <div class="container" id="booking-details">
        <form method="post" action="details">
        @csrf
            <div >
                <h2>Details</h2>
                <h4><span style="color:green">{{session('status')}}</span></h4>
            </div>
            <div class="row justify-content-around" style="padding-bottom: 30px">
                <div class="col-10 col-md-5">
                     <div class="row" style="padding-bottom: 20px">
                        <label for="name">Name</label>
                        @error('name')
                         <span style="color:red">{{$message}}</span>
                         @enderror
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name">   
                     </div> 
                     <div class="row" style="padding-bottom: 20px">
                       <label for="contact-no">Contact Number</label>
                       @error('phonenumber')
                         <span style="color:red">{{$message}}</span>
                        @enderror
                        <input class="form-control" id="contact-no" name="phonenumber" type="text" placeholder="Contact Number">  
                     </div>
                     <div class="row" style="padding-bottom: 20px">
                       <label for="email"> Email</label>
                       @error('email')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email">  
                     </div>
                     

                </div>
                <div class="col-10 col-md-4">
                    <div class="row" style="padding-bottom: 20px">
                        <label for="age">Age</label>
                        @error('age')
                         <span style="color:red">{{$message}}</span>
                        @enderror
                        <input class="form-control" id="age" name="age" type="text">
                    </div>
                    <div class="row" style="padding-bottom: 20px">
                        <label for="sex">Sex</label>
                        @error('sex')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                        <select class="form-control" id="sex" name="sex" type="text">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                            <option value="" selected>None</option>
                        </select>
                    </div>
                    
                </div>                    
             </div>
             <div class="row justify-content-around" style="padding-bottom: 20px">
                <div class="col-10 col-md-5">
                     <div class="row" style="padding-bottom: 20px">
                        <label for="date">Select a Date</label>
                        @error('date')
                        <span style="color:red">{{$message}}</span>
                         @enderror
                        <input class="form-control" id="date" name="date" type="date">
                    </div>
                </div>
                <div class="col-10 col-md-4">
                   <div class="row" style="padding-bottom: 20px">
                        <label for="timeslot">Pick a Timeslot</label>
                        @error('timeslot')
                         <span style="color:red">{{$message}}</span>
                        @enderror
                         <select class="form-control" id="timeslot" name="timeslot" type="text">
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                                <option value="" selected>None</option>
                        </select>
                    </div>
                </div>  
             </div>
             <div class="row justify-content-around" style="padding-bottom: 30px" >
                    <div class="col-11">
                        <div class="row">
                            <label for="details">Delivery Details</label>
                            @error('details')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                            <textarea class="form-control" id="address" name="address" type="text"></textarea>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-around">
                    <div class="col-3">
                        <button type="submit" class="form-control btn btn-success">Submit</button>
                    </div>
                    <div class="col-3">
                    <a class="form-control btn btn-danger" href='home'>Cancel</a>
                    </div>
             </div>
        </form>
        
    </div>
    <!-- Optionbl JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  @endsection