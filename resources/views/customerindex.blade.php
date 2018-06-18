@extends('layouts.app')

    <title>Customer list - Hotel California</title>

@section('content')

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-1"> </div>
				<div class="col-md-10">
					<h2>Customer list</h2>
					<table class="table table-striped ">

					<thead>
						<tr>
							<th>Name</th>
							<th>First&nbsp;name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>E-Mail</th>
						</tr>
					</thead>


					<tbody>

					@foreach ($customers as $customer)
						<tr>
							<td>{{$customer ['last_name']}}	</td>
							<td>{{$customer ['first_name']}}	</td>
							<td>{{$customer ['address']}}		</td>
							<td>{{$customer ['phone']}}		</td>
							<td>{{$customer ['email']}}		</td>
						</tr>
					@endforeach

					</tbody>
					</table>
						
					<!-- insert pagination code here -->

				</div>
				<div class="col-md-3"> </div>
				<div class="col-md-8">
					<!-- insert pagination code here -->
					{{ $customers->links() }}
				</div>

			</div> <!-- end row -->
		</div> <!-- end container -->


	</div> <!-- end wrapper -->

@endsection