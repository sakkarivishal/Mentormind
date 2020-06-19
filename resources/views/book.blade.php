@extends('layout')
@section('title','Booking')
@section('content')

<body>
    <div class="container" id="Booking">
        <form method="post" action='bookingspage' enctype="multipart/form-data">
            @csrf
            <div>
                <h2>Book a Diagnostic Test</h2>
            </div>
            <div class="row justify-content-around" style="padding-bottom: 50px;">
                <div class="col-12 col-md-6">
                @error('select-tests')
                <span style="color:red">{{$message}}</span>
                @enderror
                    <label for="select-tests">Select a Test</label>
                     <select class="form-control" id="select-tests" name="tests" type="text">
                                <option value="test1">Test 1</option>
                                <option value="test2">Test 2</option>
                                <option value="test2">Test 3</option>
                                <option value="" selected>None</option>
                    </select>
                </div>
                <div class="col-12 col-md-6" >
                    <label for="prescription">Upload Prescription</label>
                    @error('prescription')
                    <span style="color:red">{{$message}}</span>
                     @enderror
                     <input class="form-control" id="prescription" name="prescription" type="file" style="padding: 3px">
                    
                </div>
                    
             </div>
            <div class="row justify-content-around" style="padding-bottom: 50px;">
                    <div class="col-12">
                     <label for="select-lab">Select Lab</label>
                         @error('select-lab')
                         <span style="color:red">{{$message}}</span>
                         @enderror
                     <select class="form-control" id="select-lab" name="lab" type="text">
                                <option value="lab1">Lab 1</option>
                                <option value="lab2">Lab 2</option>
                                <option value="lab2">Lab 3</option>
                                <option value="" selected>None</option>
                    </select>
                    </div>
             </div>
             <div class="row justify-content-around">
             
                    <div class="col-5 col-md-4">
                        <button type="submit" class="form-control btn btn-success">Submit</button>
                    </div>
                    <div class="col-5 col-md-4">
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