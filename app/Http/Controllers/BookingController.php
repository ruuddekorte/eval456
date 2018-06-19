<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=\App\Booking::paginate(15);
        return view('bookingindex',compact('bookings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookingreservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $booking= new \App\Booking;
        
        $booking->customer_id=$request->get('customer_id');

        $booking->room_id=$request->get('room_id');

        $arrival_date=date_create($request->get('arrival_date'));
        $format_a = date_format($arrival_date,"Y-m-d");
        $booking->arrival_date = strtotime($format_a);
        
        $departure_date=date_create($request->get('departure_date'));
        $format_d = date_format($departure_date,"Y-m-d");
        $booking->departure_date = strtotime($format_d);
        
        $booking->booking_status_id=$request->get('booking_status_id');

        $booking->save();
        
        return redirect('bookingindex')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
