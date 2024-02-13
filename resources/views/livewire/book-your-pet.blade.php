<div>
    <div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
                    <img alt="image" src="{{ Storage::url($petview[0]->file_name) }}" class="block-20 rounded" style="width: 500px; height:400px; object-fit:cover; margin-top:100px;">
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">{{ $petview[0]->name }}</h2>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="text pl-3">
	    						<h4>{{ $petview[0]->age }}</h4>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="text pl-3">
	    						<h4>{{ $petview[0]->gender }}</h4>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="text pl-3">
	    						<h4>{{ $petview[0]->species }}</h4>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="text pl-3">
	    						<h4>{{ $petview[0]->description }}</h4>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>
    <div class="row no-gutters">
        <div class="col-lg-12">
            <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Book Your Pet</h3>
                <form action="/book-your-pet" method="GET">
                    <div class="row">
                        <div class="col-md-6" style="display: none;">
                            <div class="form-group">
                                <label class="label" for="name">Pet ID</label>
                                <input type="number" class="form-control @error('pet_id') is-invalid @enderror" name="pet_id" value="{{ $petview[0]->id }}"  id="pet_id" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Booking Date</label>
                                <input type="date" class="form-control  @error('booking_date') is-invalid @enderror" name="booking_date"  id="booking_date"  >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Adoption Date</label>
                                <input type="date" class="form-control @error('adoption_date') is-invalid @enderror" name="adoption_date"  id="adoption_date" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Donation</label>
                                <input type="number" class="form-control @error('donation') is-invalid @enderror" name="donation"  id="donation" placeholder="Donation">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Book</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
