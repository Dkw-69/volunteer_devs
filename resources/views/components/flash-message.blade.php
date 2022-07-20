@if(session()->has('message'))
	<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="alert alert-success fixed-top m-5" role="alert">
	  <p>{{session('message')}}</p>
	</div>
@endif