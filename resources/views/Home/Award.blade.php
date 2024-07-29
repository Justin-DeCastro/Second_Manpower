<!DOCTYPE html>
<html lang="en">



<body>
    @include('Components.header')

    <!-- Spinner Start -->
    @include('Components.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('Components.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    @include('Components.navbar')
    <!-- Navbar & Hero End -->

    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">OUR AWARDS AND ACHIEVEMENTS</h4>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($awards as $job)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="service-img rounded-top" style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('images/' . $job->companyimage) }}" class="img-fluid w-100 h-100 object-cover" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4 d-flex flex-column">
                            <div class="service-content-inner flex-grow-1">
                                {{$job->companyname}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($executives as $award)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{ asset('images/' . $award->companyimage) }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>{{ $award->companyname }}</h5>
                            <p class="mb-0">{{ $award->position }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    @include('Components.footer')
    <!-- Footer End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
