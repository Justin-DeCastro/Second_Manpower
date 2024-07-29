<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <!-- External CSS -->
   
</head>
<body>

    <!-- Header -->
    @include('Components.header')

    <!-- Spinner -->
    @include('Components.spinner')

    <!-- Topbar -->
    @include('Components.topbar')

    <!-- Navbar & Hero -->
    @include('Components.navbar')

    <!-- Main Content -->
    <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">News</h4>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
    @foreach($bulletins as $board)
    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="icon-box border rounded p-3 h-100 d-flex flex-column">
            <i class="bi bi-megaphone"></i>
            <div class="flex-grow-1 d-flex flex-column justify-content-between">
                <div>
                    <h4 class="mb-3"><a href="{{ $board->link }}">{{ $board->title }}</a></h4>
                    <p class="mb-3">{{ $board->description }}</p>
                </div>
                <div class="mt-auto">
                    <a href="{{ $board->link }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


    </div>
</div>


                <!-- Right Column: Internship Form -->
                

    <!-- Footer -->
    @include('Components.footer')

    <!-- Copyright -->
   

    <!-- Back to Top -->


    <!-- External JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
