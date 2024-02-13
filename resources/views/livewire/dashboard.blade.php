<div>
    <div class="container pt-5"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <a href="/customers"><h4>Total Customer</h4></a>
                        </div>
                        <div class="card-body">
                            {{ $customer }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-secondary">
                        <i class="far fa-dog"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <a href="/pet"><h4>Total Pets</h4></a>
                        </div>
                        <div class="card-body">
                            {{ $pets }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fad fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <a href="/petbookings"><h4>Total Pet Bookings</h4></a>
                        </div>
                        <div class="card-body">
                            {{ $pet_booking }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <a href="/contactus"><h4>Total Messages</h4></a>
                        </div>
                        <div class="card-body">
                            {{ $contactus }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
