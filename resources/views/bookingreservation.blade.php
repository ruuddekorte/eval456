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
										<input class="form-field" id="room_id" name="room_id" type="text" required>
									</div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form_group">
                                        <label class="form-label" for="customer_id"> Customer <span class="mandatory">*</span> : </label>
                                        <input type="text" id="customer_id" class="form-field" name="customer_id" required>
                                    </div>
                                </td>
                            </tr>
   
                            <tr>
                                <td>
	                                <div class="form_group">
	                                    <label class="form-label" for="arrival_date">Arrival date <span class="mandatory">*</span> : </label>
	                                    <input type="text" id="arrival_date" class="form-field date datepicker" name="arrival_date" required>
	                                </div>
                            	</td>
                            </tr>

                            <tr>
                                <td>
	                                <div class="form_group">
	                                    <label class="form-label" for="departure_date">Departure date <span class="mandatory">*</span> : </label>
	                                    <input type="text" id="departure_date" class="form-field date datepicker" name="departure_date" required>
	                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form_group">
                                        <label class="form-label" for="booking_status_id">Booking status <span class="mandatory">*</span> : </label>
                                        <select id="booking_status_id" class="form-field" name="booking_status_id" required>
                                            <option value="1">Pending</option>
                                            <option value="2">Confirmed</option>
                                            <option value="3">Arrived</option>
                                            <option value="4">Completed</option>
                                            <option value="5">Cancelled</option>
                                            <option value="6">Invoiced</option>
                                            <option value="7">Paid</option>
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


