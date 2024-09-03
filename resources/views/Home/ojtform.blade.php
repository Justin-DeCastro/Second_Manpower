<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT FORM</title>
    
    <!-- External CSS -->

<link rel="shortcut icon" type="xicon" href="images/logo-removebg-preview.png">
<body>
    @include('Components.header')

    <!-- Spinner Start -->
    @include('Components.spinner')

    <!-- Topbar Start -->
    @include('Components.topbar')

    <!-- Navbar & Hero Start -->
    @include('Components.navbar')

<div class="container-fluid appointment py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Career Updates Section -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                @foreach($ojtupdate as $career)
                <div class="section-title text-start">
                    <h4 class="sub-title pe-3 mb-0">Empowering Your Business</h4>
                    <h1 class="display-4 mb-4">{{ $career->title }}</h1>
                    <p class="mb-4">{{ $career->description }}</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4">
                                    <!-- Split the profession string by comma -->
                                    @php
                                        $professions = explode(',', $career->profession);
                                    @endphp
                                    @foreach($professions as $profession)
                                        <h5 class="mb-3">
                                            <i class="fa fa-check text-primary me-2"></i>
                                            {{ trim($profession) }} <!-- Trim to remove any extra spaces -->
                                        </h5>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="video h-100">
                                @if($career->image)
                                    <img src="{{ asset($career->image) }}" alt="Career Image" class="img-fluid">
                                @endif
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Internship Form Section -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="appointment-form rounded p-5">
                    <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                    <form action="{{ route('ojt.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="title text-center mb-4">Internship Form</h1>

                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="form_fullname">Full Name</label>
                            <input id="form_fullname" type="text" name="fullname" class="form-control thick" placeholder="Please enter your full name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="form_email">Email</label>
                            <input id="form_email" type="email" name="email" class="form-control thick" placeholder="Please enter your email" required>
                        </div>

                        <!-- School/University and Course/Program (2 columns) -->
                        <div class="row">
                            <!-- School/University -->
                            <div class="form-group col-md-6">
                                <label for="form_school">School/University</label>
                                <input id="form_school" type="text" name="school" class="form-control thick" placeholder="Please enter your school/university" required>
                            </div>

                            <!-- Course/Program -->
                            <div class="form-group col-md-6">
                                <label for="form_course">Course/Program</label>
                                <input id="form_course" type="text" name="course" class="form-control thick" placeholder="Please enter your course/program" required>
                            </div>
                        </div>

                        <!-- Phone Number and OJT Hours (2 columns) -->
                        <div class="row">
                            <!-- Phone Number -->
                            <div class="form-group col-md-6">
                                <label for="form_phone">Phone Number</label>
                                <input id="form_phone" type="text" name="phone" class="form-control thick" placeholder="Please enter your phone number" required>
                            </div>

                            <!-- OJT Hours -->
                            <div class="form-group col-md-6">
                                <label for="form_ojt_hours">OJT Hours</label>
                                <input id="form_ojt_hours" type="text" name="ojt_hours" class="form-control thick" placeholder="Please enter your OJT hours" required>
                            </div>
                        </div>

                        <!-- Resume Upload -->
                        <div class="form-group">
                            <label for="form_resume">Upload Resume</label><br>
                            <input id="form_resume" type="file" name="resume" class="form-control-file" required>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="form_message">Message</label>
                            <textarea id="form_message" name="message" class="form-control thick" placeholder="Write your message here." rows="7" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-send pt-2 btn-block">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- Closing the row div -->
    </div> <!-- Closing the container div -->
</div> <!-- Closing the container-fluid div -->


    @include('Components.footer')

    <!-- Copyright -->
    <script>
document.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    @if(session('failed'))
        Swal.fire({
            title: 'Failed!',
            text: '{{ session('failed') }}',
            icon: 'Failed',
            confirmButtonText: 'OK'
        });
    @endif
});
</script>

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
