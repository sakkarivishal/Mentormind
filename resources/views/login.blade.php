@extends('layout')
@section('title','Login Page')
@section('content')
<body>
<div class="container" id="Booking">
        <form method="post" action='login'>
            @csrf
            <div>
                <h2>Admin Login</h2>
            </div>
            <div class="row " style="padding-bottom: 50px;">
                <div class="col-12 col-md-6">
                    <label for="admin">Admin</label>
                    @error('admin')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                        <input class="form-control" id="admin" name="admin" type="text">
                </div>       
             </div>
            <div class="row " style="padding-bottom: 50px;">
                    <div class="col-12 col-md-6" >
                            <label for="password">Password</label>
                            @error('password')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                            <input class="form-control" id="password" name="password" type="password">
                            
                        </div>
             </div>
             <div class="row ">
             
                    <div class="col-4 col-md-2">
                        <button type="submit" class="form-control btn btn-success">Login</button>
                    </div>
                    <div class="col-4 col-md-2">
                        <a class="form-control btn btn-danger" href='home'>Cancel</a>
                    </div>
             </div>
            
        </form>
        
    </div>
</body>
@endsection








