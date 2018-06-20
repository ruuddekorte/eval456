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
		//find($id)
		$rooms = \App\Room::orderBy('name','ASC')->get();
		$customers = \App\Customer::orderBy('last_name','ASC')->get();
		$booking_statuses = \App\Booking_status::orderBy('id','ASC')->get();
        
        return view('bookingreservation', compact ('rooms','customers','booking_statuses'));
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

        // temporary removed arrival date and departure date
        $booking->arrival_date=$request->get('arrival_date');
		$booking->departure_date=$request->get('arrival_date');

        $booking->booking_status_id=$request->get('booking_status_id');

        $booking->save();
        
        return redirect('booking')->with('success', 'Reservation has been added to the booking list');
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

    public function getCustomers($name)
    {
        $customers = DB::table('customers')->get();
        $status = DB::table('booking_statuses')->get();
        $room = DB::table('rooms')->get()->where('name', $name);
        return View::make('booking')
            ->with('customers', $customers)
            ->with('status', $status)
            ->with('name', $name);
    }






}
