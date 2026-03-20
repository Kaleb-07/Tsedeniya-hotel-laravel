<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }
    public function add_booking(Request $request, $id)
    {
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required',
            // 'phone' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'date|after:start_date',
        ]);
        $data = new Booking;
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;


        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $isBooked = Booking::where('room_id', $id)->where('start_date', '<=', $end_date)->where('end_date', '>=', $start_date)->exists();

        if ($isBooked) {
            return redirect()->back()->with('message', 'Room already booked please try different data');
        }

        else {
            $data->start_date = $request->start_date;
            $data->end_date = $request->end_date;
            $data->save();
            return redirect()->back()->with('message', 'Room booked successfully');
        }
    }
    // public function contact()
    // {
    //     return view('home.contact');

    // }
    public function add_contact(Request $request)
    {
        $data = new Contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('message', 'Message sent successfully');
    }
    public function our_rooms()
    {
        $room = Room::all();
        return view('home.our_rooms', compact('room'));
    }
    public function hotel_gallary()
    {
        $gallary = Gallary::all();
        return view('home.hotel_gallary', compact('gallary'));
    }
    public function hotel_contact()
    {
        return view('home.hotel_contact');
    }
}
