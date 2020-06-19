<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\details;

class bookingspage extends Controller
{
    //
    public function bookings(Request $req )
    {
        $req->validate([
            'tests'=>'required',
            'lab'=>'required',
            'prescription'=>'required',
        ]);
       

            $booking = new booking;

            $booking->test_name = $req->tests;
            $booking->lab_name = $req->lab;
            $file=$req->file('prescription');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $booking->prescription=$filename;
            $booking->save();
        return redirect('details');
    }

    public function details(Request $req )
    {
        $req->validate([
            'name'=>'required',
            'phonenumber'=>'required|digits:10',
            'age'=>'required|integer|max:100',
            'sex'=>'required',
            'email'=>'required|email',
            'date'=>'required|date|after:today',
            'timeslot'=>'required',
            'address'=>'required',
        ]);

        $details= new details;
        $diag=booking::take(1)->orderBy('user_id','DESC')->get();
        $details->user_id=$diag[0]['user_id'];
         $details->name=$req->name;
         $details->phonenumber=$req->phonenumber;
         $details->email=$req->email;
         $details->age=$req->age;
         $details->sex=$req->sex;
         $details->date_of_test=$req->date;
         $details->time_slot=$req->timeslot;
         $details->address=$req->address;

        $details->save();

        $req->Session()->flash('status', 'Booking Confirmed!');
        return redirect('details');
    }

    public function login(Request $req )
    {
        $req->validate([
            'admin'=>'required',
            'password'=>'required'
            
        ]);
        $req->session()->put('admin',$req->input());
        return redirect('home');

    }

    public function logout()
    {
        session()->forget('admin');
        return redirect('login');
    }
      public function data()
    {
        $data=details::all();
        $x=booking::all();
        if(!session()->has('admin'))
        {
            return redirect('login');
        }
        return view('bookinglist', ['data' => $data, 'x' => $x]);
    } 
}
