<div class="container">
	<div class="row height d-flex justify-content-center align-items-center">
	  <div class="col-md-6">
	  	<form action="" role="search">
		    <div class="form">
		      <i class="fa fa-search"></i>
		      <input type="text" name="search" class="form-control form-input" value="{{ request()->get('search') }}" placeholder="Search jobs...">
		      <input type="hidden" value="submit">
		      <span class="left-pan"><i class="fa-solid fa-laptop-code"></i></span>
		    </div>
		</form>
	  </div>
	</div>
</div>