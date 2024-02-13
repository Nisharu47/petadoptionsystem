<div>
    <div class="hero-wrap js-fullheight" style="background-image: url('front_assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-11 ftco-animate text-center">
                    <h1 class="mb-4">Find Your Furry Companion </h1>
                    <p>
                        @if (Auth::guard('customer')->check())
                        <a href="/adopt-your-pet" class="btn btn-primary mr-md-4 py-3 px-4">Find <span class="ion-ios-arrow-forward"></span></a>
                        @else
                        <a href="/flogin" class="btn btn-primary mr-md-4 py-3 px-4">Find <span class="ion-ios-arrow-forward"></span></a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services active text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-blind"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pet Care</h3>
                            <p>Proper pet care involves providing nutritious food, regular exercise, grooming, and veterinary check-ups.
                                 Create a safe environment, offer love and attention, and ensure their happiness for a healthy and fulfilling life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-dog-eating"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pet Adoption</h3>
                            <p>Pet adoption is a compassionate choice that saves lives.
                                By adopting a pet from a shelter or rescue organization, you provide a loving home and a second chance for a deserving animal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-grooming"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Charity</h3>
                            <p>Charity plays a crucial role in supporting those in need. By donating time, resources, or funds to charitable organizations,
                                 we can make a positive impact and bring hope to individuals and communities facing adversity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="56">0</strong>
                        </div>
                        <div class="text">
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="179">0</strong>
                        </div>
                        <div class="text">
                            <span>Pets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="71">0</strong>
                        </div>
                        <div class="text">
                            <span>Adoptations</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="344">0</strong>
                        </div>
                        <div class="text">
                            <span>Pets Rescued</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
