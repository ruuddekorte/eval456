@extends('layouts.app')

    <title>Room list - Hotel California</title>

@section('content')

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-8">
					<h2>{{$room['name']}} room details<h2>
					<table class="table table-striped ">




					<tbody>

						<tr>
							<td>room name :	       			</td>
							<td>{{$room['name']}}			</td>
						</tr>
						<tr>
							<td>room type :	       			</td>
							<td>@if ($room ['is_suite'] == 1)
									Suite
								@else 
									Standaard
								@endif						</td>
						</tr>
						<tr>
							<td>floor :	       				</td>
							<td>{{$room['floor']}}		
								@if ($room ['floor'] == 1)
									<sup>st</sup> 
								@else 
									@if ($room ['floor'] == 2)
										<sup>nd</sup> 
									@else 
										@if ($room ['floor'] == 1)
											<sup>rd</sup> 
										@else 
											<sup>th</sup> 
										@endif	
									@endif	
								@endif	
								floor						</td>
						</tr>
						<tr>
							<td>bed type :	       			</td>
							<td>{{$room ['bed_type']->bed_type}} bed			</td>
						</tr>
						<tr>
							<td>bathroom type :	       		</td>
							<td>{{$room ['bathroom_type']->bathroom_type}}		</td>
						</tr>
						<tr>
							<td>view :	       				</td>
							<td>{{$room ['view']->view}}	</td>
						</tr>
						<tr>
							<td>reduced mobility access :	 </td>
							<td>@if ($room ['reduced_mobility_access'] == 1)
									Oui
								@else 
									Non
								@endif  					</td>
						</tr>
						<tr>
							<td>area :	       				</td>
							<td>{{$room['area']}}			</td>
						</tr>
						<tr>
							<td>price :	       				</td>
							<td>{{$room['price']}}&euro;	</td>
						</tr>
						<tr>
							<td>&nbsp;	      				</td>
							<td><div ><a href="{{action('RoomController@show', $room['id'])}}" class="roombook btn btn-succes">Book this room</a></td>
						</tr>
						<tr>
							<td>{{$room['created_at']}}	   	</td>
							<td>{{$room['updated_at']}}		</td>
						</tr>

					</tbody>
					</table>
					
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end wrapper -->

@endsection