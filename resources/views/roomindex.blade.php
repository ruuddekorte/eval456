@extends('layouts.app')

@section('content')

	<table class="table">
	<tbody>

	@foreach($rooms as $room)
		<tr>
			<td>{{$room['name']}}</td>
			<td class="text-right"><a href="{{action('RoomController@show', $personnage['id'])}}" class="btn">Voir</a></td>
		</tr>
	@endforeach

	</tbody>
	</table>

@endsection