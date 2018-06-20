@extends('layouts.app')

<title>Booking list - Hotel California</title>

@section('content')

<div class="wrapper">
    <div class="container">
<!-- $room_name = App\Room::find(1); -->
        <div class="row">

            <div class="col-md-3"> </div>

            <div class="col-md-6">
                <h2>Booking reservation</h2>

				<form method="post" action="{{url('booking')}}" enctype="multipart/form-data">
					@csrf

                    <table class="table table-striped ">
                        <tbody>
      	
                            <tr>
                                <td>			
                                    <div class="form-group">
										<label class="form-label" for="room_id">Room <span class="mandatory">*</span> : </label>
                                        <select id="room_id" class="form-field" name="room_id" required>
	        	  							@foreach($rooms as $room)
		        	  							<!-- selected="selected" -->
										      	<option value="{{$room['id']}}">{{$room['name']}} ({{$room['id']}}) </option>
											@endforeach
										</select> 

									</div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form_group">
                                        <label class="form-label" for="customer_id"> Customer <span class="mandatory">*</span> : </label>
										<select id="customer_id" class="form-field" name="customer_id" required>
											@foreach($customers as $customer)
                                            	<option value="{{$customer['id']}}">{{$customer['last_name']}}, {{$customer['first_name']}}</option>
											@endforeach
										</select>
                                    </div>
                                </td>
                            </tr>
   
                            <tr>
                                <td>
	                                <div class="form_group arrival">
	                                    <label class="form-label" for="arrival_date">Arrival date <span class="mandatory">*</span> : </label>
	                                    <input type="date" id="arrival_date" class="form-field date" name="arrival_date" required value="2018-10-10 14:00:00">
	                                </div>
                            	</td>
                            </tr>

                            <tr>
                                <td>
	                                <div class="form_group departure">
	                                    <label class="form-label" for="departure_date">Departure date <span class="mandatory">*</span> : </label>
	                                    <input type="date" id="departure_date" class="form-field date" name="departure_date" required value="2018-10-12 14:00:00">
	                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form_group">

                                        <label class="form-label" for="booking_status_id">Booking status <span class="mandatory">*</span> : </label>
                                        <select id="booking_status_id" class="form-field" name="booking_status_id" required>
	        	  							@foreach($booking_statuses as $booking_status)
										      	<option 
										      	@if($booking_status['id']==1)
										      		selected="selected"
									      		@endif 
										      	value="{{$booking_status['id']}}">{{$booking_status['booking_status']}}</option>
											@endforeach
										</select>     
                                    </div>
                                </td>
                            </tr>

                            <tr>
                            	<td>
									<span class="mandatory">*</span> = mandatory
                            	</td>
                            </tr>

                            <tr>
                            	<td class="text-right">
        	  						<button type="submit" class="btn btn-success">Submit reservation</button>                      		
                            	</td>
                            </tr>

                            <tr>
                            	<td>
									&nbsp;	<!-- one empty line as spacer -->	
                            	</td>
                            </tr>

                        </tbody>
                    </table>

               </form>

            </div> <!-- end col -->

        </div> <!-- end row -->

    </div> <!-- end container -->
</div> <!-- end wrapper -->

@endsection


