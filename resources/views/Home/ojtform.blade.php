<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT FORM</title>
    
    <!-- External CSS -->

</head>
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
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Empowering Your Business</h4>
                        <h1 class="display-4 mb-4">Reliable Manpower Solutions</h1>
                        <p class="mb-4">At Our Manpower Solutions, we specialize in providing reliable and skilled professionals tailored to meet your business needs. Whether you require temporary staffing or permanent placements, we ensure seamless integration into your workforce.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Skilled Professionals</h5>
                                        <p class="mb-0">Our candidates are rigorously screened and trained to deliver high performance in diverse industries.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Flexible Solutions</h5>
                                        <p class="mb-0">We offer flexible staffing solutions that adapt to your business fluctuations and operational needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="img/contact.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <div class="overlay">
                                        <!-- <h5 class="text-white">Contact Us Today!</h5>
                                        <p class="text-white">Call us at <a href="tel:+1234567890" class="text-white fw-bold">+1 (234) 567-890</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
            </div>
        </div>
    </div>

    @include('Components.footer')

    <!-- Copyright -->
   

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

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
