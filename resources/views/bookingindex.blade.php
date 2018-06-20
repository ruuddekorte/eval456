@extends('layouts.app')

    <title>Booking list - Hotel California</title>

@section('content')

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-1"> </div>
				<div class="col-md-10">
					<h2>Booking list</h2>
					<br />

					<table class="table table-striped ">

					<thead>
						<tr>
							<th>Room</th>
							<th>Customer</th>
							<th>Arrival</th>
							<th>Departure</th>
							<th>Status</th>
						</tr>
					</thead>


					<tbody>

					@foreach ($bookings as $booking)
						<tr>
							<td>{{$booking ['room_id']}} -			
								{{$booking ['room']->name}}				</td>
							<td>{{$booking ['customer_id']}} -			
								{{$booking ['customer']->last_name}}, 			
								{{$booking ['customer']->first_name}}	</td>
							<td>{{$booking ['arrival_date']}}			</td>
							<td>{{$booking ['departure_date']}}			</td>
							<td>{{$booking ['booking_status_id']}} -			
								{{$booking ['booking_status']->booking_status}}		</td>
						</tr>
					@endforeach

					</tbody>
					</table>
						
					<!-- insert pagination code here -->

				</div>
				<div class="col-md-4"> </div>
				<div class="col-md-7">
					<div> &nbsp; </div>  <!-- empty div inserted as spacer -->
					<!-- insert pagination code here -->
					<div>{{ $bookings->links() }}</div>
					<div> &nbsp; </div>  <!-- empty div inserted as spacer -->
				</div>

			</div> <!-- end row -->
		</div> <!-- end container -->


	</div> <!-- end wrapper -->

@endsection
