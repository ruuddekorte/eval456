<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">

@include ('includes.head')

<body>

	@include('includes.header')


	<main>

	    @if (\Session::has('success'))   
	    <!-- notification used for e.g. : succesful booking -->
	     <div> &nbsp; </div>  <!-- empty div inserted as spacer -->
	        <div class="alert alert-success">
	          <p>{{ \Session::get('success') }}</p>
	        </div>
	     @endif


	     <div> &nbsp; </div>  <!-- empty div inserted as spacer -->

	  	@yield('content')

	</main>

	@include ('includes.footer')

</body>

</html>