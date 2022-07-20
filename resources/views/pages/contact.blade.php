<x-layout>

	<!-- Contact - us  -->
      <div class="container mt-5 mb-5">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Get In Touch</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              	@csrf
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" name="name" class="form-control" id="Name" style="background-color: #f4f4f4 !important;">
                  @error('name')
	            	<small style="color: #FF0000;">{{$message}}</small>
	              @enderror
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" name="email" class="form-control" id="Email-1" style="background-color: #f4f4f4 !important;">
                  @error('email')
	            	<small style="color: #FF0000;">{{$message}}</small>
	              @enderror
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" name="msg" id="Message" style="background-color: #f4f4f4 !important;"></textarea>
                  @error('msg')
	            	<small style="color: #FF0000;">{{$message}}</small>
	              @enderror
                </div>
                <div class="mb-4" style="margin-left: 0;">
	              <button type="submit" class="btn btn-success">Submit</button>
	            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

</x-layout>