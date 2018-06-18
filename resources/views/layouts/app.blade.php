<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">

@include ('includes.head')

<body>

	@include('includes.header')


	<main>

	    @if (\Session::has('success'))
	        <div class="alert alert-success">
	          <p>{{ \Session::get('success') }}</p>
	        </div>
	        <br />
	     @endif

	  	@yield('content')

	</main>

	@include ('includes.footer')

</body>

</html>