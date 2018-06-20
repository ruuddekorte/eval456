@extends('layouts.app')

    <title>Room list - Hotel California</title>

@section('content')

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-8">
					<h2>Room list</h2>
					<table class="table table-striped ">

					<thead>
						<tr>
							<th>Room</th>
							<th>Type</th>
							<th> </th>
							<th>PMR</th>
							<th>Prix/nuit</th>
							<th> </th>
						</tr>
					</thead>


					<tbody>

					@foreach($rooms as $room)
						<tr>
							<td><div class="roomname"><a href="{{action('RoomController@show', $room['id'])}}" >{{$room['name']}}</a></div></td>
							<td>@if ($room ['is_suite'] == 1)
									Suite
								@else 
									Standard
								@endif   </td>
							<td>(

								{{$room ['bed_type']->bed_type}} bed
								)
							</td>
							<td>@if ($room ['reduced_mobility_access'] == 1)
									Oui
								@else 
									Non
								@endif  
							</td>
							<td>{{$room['price']}} &euro;</td>
							<td class="text-right roominfo btn btn-primary btn-md"><a href="{{action('RoomController@show', $room['id'])}}">Voir</a></td> 
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
					<div>{{ $rooms->links() }}</div>
					<div> &nbsp; </div>  <!-- empty div inserted as spacer -->	
				</div>

			</div> <!-- end row -->
		</div> <!-- end container -->


	</div> <!-- end wrapper -->

@endsection