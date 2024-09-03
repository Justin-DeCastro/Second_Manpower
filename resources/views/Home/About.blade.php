<!DOCTYPE html>
<html lang="en">

<head>
       @include('Components.header')
    <!-- Include FontAwesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
   
    <style>
        /* Move inline CSS styles here */
        .about-img {
            position: relative;
            text-align: center;
        }

        .container2 {
            width: 300px;
            height: 300px;
            position: relative;
            margin: 50px auto;
            overflow: hidden;
            animation: rotate 10s linear infinite;
        }

        .circle {
            border-radius: 50%;
        }

        .one:after {
            background-image: url('img/round.jpg');
        }

        .main {
            width: 100%;
            height: 100%;
        }

        .main.two {
            top: 100%;
        }

        .one {
            transform: rotate(0deg);
        }

        .two {
            transform: rotate(180deg);
        }

        .main,
        .big,
        .small {
            position: absolute;
            overflow: hidden;
        }

        .main:after,
        .big:after,
        .small:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background-size: 100% 100%;
        }

        .small.two {
            left: 62.5%;
        }

        .small:after {
            top: -150%;
            left: -50%;
        }

        .static-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            color: white;
        }

        .static-text p {
            font-size: 20px;
            font-weight: bold;
        }

        .text2 {
            color: #208eae;
            font-size: 30px;
        }

        .text1 {
            color: #c71156;
            font-size: 30px;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }

        .card {
    width: 240px; /* Fixed width */
    height: 400px; /* Fixed height */
    background: #fff;
    padding: 15px;
    border-radius: var(--br);
    transition: 0.5s;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    overflow: hidden; /* Ensures content doesn't overflow */
}

.card img {
    width: 200px; /* Fixed width for images */
    height: 400px; /* Fixed height for images */
    border-radius: 50%; /* Circular images */
    border: 4px solid var(--bc, #000);
    object-fit: cover; /* Ensures image doesn't stretch */
    margin-bottom: 15px;
}

.card h2 {
    font-size: 18px; /* Ensure consistent font size */
    margin: 10px 0;
}

.card .role, .card p {
    font-size: 14px; /* Smaller font size for role and email */
    margin: 5px 0;
}


        @media (max-width: 767px) {
            .row {
                flex-wrap: wrap;
                justify-content: center;
                padding: 10px;
            }

            .card {
                flex: 0 0 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media (max-width: 420px) {
            .card {
                flex: 0 0 calc(100% - 20px);
                max-width: calc(100% - 20px);
            }
        }
    </style>
</head>

<body>

    <!-- Include Components -->

    @include('Components.topbar')
    @include('Components.navbar')

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <div class="container2 circle">
                            <div class="main one"></div>
                            <div class="main two"></div>
                            <div class="big circle one"></div>
                            <div class="big circle two"></div>
                            <div class="small circle one"></div>
                            <div class="small circle two"></div>
                        </div>
                        <div class="static-text" style="padding-left:40px">
                            <p><span class="text2">About<br></span> <span class="text1">Us</span></p>
                        </div>
                        <div class="about-experience" style="padding-top:100px">15 years experience</div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h2>Our Mission Vision and Values</h2>
                    </div>
                    <div class="mb-5" style="text-align: justify;">
                        <h3>Vision</h3>
                        <p>To build a future where every business can thrive with the support of a skilled and motivated
                            workforce, and every professional can achieve their career aspirations through meaningful
                            employment opportunities.</p>
                    </div>
                    <div class="mb-5" style="text-align: justify;">
                        <h3>Mission</h3>
                        <p>To empower businesses by providing exceptional staffing solutions that match the right talent
                            with the right opportunities, ensuring growth and success for both employers and employees.
                            We are committed to delivering excellence, fostering a culture of integrity, and creating
                            value for our clients through innovative and customized workforce solutions.</p>
                    </div>
                    <div class="mb-5" style="text-align: justify;">
                        <h3>Values</h3>
                        <p style="line-height: 1.5; display: block; text-align:left;">
                            <span style="font-size: 20px; margin-right: 10px;"><strong>A</strong></span>ccountability –
                            We are committed to taking professional accountability to our clients.<br>
                            <span style="font-size: 20px; margin-right: 10px;"><strong>B</strong></span>eyond –
                            Dedicated to going the extra mile to cater to client’s manpower specifications while
                            ensuring to deploy competent talents.<br>
                            <span style="font-size: 20px; margin-right: 10px;"><strong>I</strong></span>ntegrity –
                            Driven to uphold honesty, fairness, and decency.<br>
                            <span style="font-size: 20px; margin-right: 10px;"><strong>C</strong></span>ustomized
                            Client-Oriented – Always determined to provide exceptional service tailored to meet client’s
                            needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Why Choose Us?</h4>
                </div>
                <h1 class="display-3 mb-4"> ABIC MANPOWER SERVICE CORP</h1>
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/logo_cleanup.jpg" class="img-fluid" alt="Company Logo" width="1200" height="auto">
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: justify;">
                            A licensee of Department of Labor and Employment <a href="https://www.dole.gov.ph"
                                target="_blank">DOLE</a>, we specialize in placing manpower to support the operations of
                            various companies. We cater to the requirements of different industries including:
                            Manufacturing, Construction, Retail, BPOs, Logistics, and many others.<br><br>
                            With our team of seasoned experts, we’re able to recruit the right talent quickly and
                            efficiently, allowing our clients to focus on their core business activities. Our commitment
                            to understanding your specific needs ensures we deliver the best fit for your organization’s
                            requirements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
<!-- Our Team Start -->
<!--<div class="container">-->
<!--    <h1>Our Team</h1>-->
<!--    <div class="row">-->
<!--        @foreach($executives as $executive)-->
<!--            <div class="col-md-3 col-sm-6 mb-4">-->
<!--                <div class="card" style="--bc: #8E9792; --btn: #8E9792;">-->
<!--                    <img src="{{ asset($executive->companyimage) }}" alt="Profile picture of {{ $executive->companyname }}">-->
<!--                    <h2>{{ $executive->companyname }}</h2>-->
<!--                    <p class="role">{{ $executive->position }}</p>-->
<!--                    <p>{{ $executive->email }}</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        @endforeach-->
<!--    </div>-->
<!--</div>-->
<!-- Our Team End -->
<div class="container" style="width: 80%; margin: auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h1 class="section-title" style="text-align: center; color: #333;">Meet Our Team</h1>

    <!-- Leadership Team -->
    <div class="leadership-team" style="display: flex; flex-direction: column; align-items: center; gap: 40px; margin: 20px 0;">
        <!-- CEO -->
        <div class="ceo-section" style="text-align: center;">
            @foreach ($executives as $executive)
                @if ($executive->position === 'CEO')
                    <div class="team-member" style="text-align: center;">
                        <a href="{{ asset($executive->companyimage) }}" data-lightbox="team" data-title="{{ $executive->companyname }}">
                            <img src="{{ asset($executive->companyimage) }}" alt="{{ $executive->companyname }}" style="border-radius: 60%; width: 200px; height: 200px; object-fit: cover; border: 4px solid #ddd;">
                        </a>
                        <h3 style="margin: 10px 0 5px; color: #333;">{{ $executive->companyname }}</h3>
                        <p style="margin: 0; color: #666;">{{ $executive->position }}</p>
                        <p style="margin: 0; color: #999;">{{ $executive->bio }}</p>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- President -->
        <div class="president-section" style="text-align: center;">
            @foreach ($executives as $executive)
                @if ($executive->position === 'President')
                    <div class="team-member" style="text-align: center;">
                        <a href="{{ asset($executive->companyimage) }}" data-lightbox="team" data-title="{{ $executive->companyname }}">
                            <img src="{{ asset($executive->companyimage) }}" alt="{{ $executive->companyname }}" style="border-radius: 60%; width: 200px; height: 200px; object-fit: cover; border: 4px solid #ddd;">
                        </a>
                        <h3 style="margin: 10px 0 5px; color: #333;">{{ $executive->companyname }}</h3>
                        <p style="margin: 0; color: #666;">{{ $executive->position }}</p>
                        <p style="margin: 0; color: #999;">{{ $executive->bio }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Additional Team Members -->
    <div class="additional-members" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach ($executives as $executive)
            @if ($executive->position !== 'CEO' && $executive->position !== 'President')
                <div class="team-member" style="text-align: center; width: 250px;">
                    <a href="{{ asset($executive->companyimage) }}" data-lightbox="team" data-title="{{ $executive->companyname }}">
                        <img src="{{ asset($executive->companyimage) }}" alt="{{ $executive->companyname }}" style="border-radius: 70%; width: 180px; height: 200px; object-fit: cover; border: 3px solid #ddd;">
                    </a>
                    <h3 style="margin: 5px 0 3px; color: #333;">{{ $executive->companyname }}</h3>
                    <p style="margin: 0; color: #666;">{{ $executive->position }}</p>
                    <p style="margin: 0; color: #999;">{{ $executive->bio }}</p>
                </div>
            @endif
        @endforeach
    </div>
</div>



    <!-- Include Footer -->
    @include('Components.footer')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
        // Initialize WOW.js
        new WOW().init();

        // Function to display success message
        function showSuccessMessage() {
            alert("Form submitted successfully!");
        }

        // Function to display error message
        function showErrorMessage() {
            alert("There was an error submitting the form.");
        }
    </script>
</body>

</html>
