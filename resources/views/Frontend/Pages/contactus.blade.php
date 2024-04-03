@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Get In touch</h2>
                    <span class="ipn-subtitle">Get all latest news and updates</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Contact Start ================================== -->
    <section>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <label class="label text-success bg-light-success">Grow Your Business</label>
                        <h2>Activate Next Now</h2>
                        <p>Please fill the form and we will guide you to the best solution. Our experts will get in touch
                            soon.</p>
                    </div>
                </div>
            </div>

            <!-- row Start -->
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-10 col-md-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control simple">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control simple">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control simple">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone.</label>
                                <input type="text" class="form-control simple">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control simple"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->

            <!-- row Start -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 col-md-12">

                    <div class="ctr-veshm-box">
                        <div class="ctr-veshm-signl">
                            <div class="ctr-veshm-signl-ico"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="ctr-veshm-signl-caption">
                                <h5>Hyderabad</h5>
                                <p>Krishe Emerald, Whitefields, Kondapur, Hyderabad, Telangana 500081</p>
                                <p>themezhub@gmail.com</p>
                            </div>
                        </div>
                        <div class="ctr-veshm-signl">
                            <div class="ctr-veshm-signl-ico"><i class="fa-solid fa-map-location-dot"></i></div>
                            <div class="ctr-veshm-signl-caption">
                                <h5>Bengaluru</h5>
                                <p>Prestige Cube, Koramangala, Bengaluru, Karnataka 560029</p>
                                <p>themezhub@gmail.com</p>
                            </div>
                        </div>
                        <div class="ctr-veshm-signl">
                            <div class="ctr-veshm-signl-ico"><i class="fa-solid fa-map-location"></i></div>
                            <div class="ctr-veshm-signl-caption">
                                <h5>Nagpur</h5>
                                <p>B-101, Vedant Sapphire, Sneha Nagar, Nagpur, Maharashtra, 440015</p>
                                <p>themezhub@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Contact End ================================== -->
@endsection
