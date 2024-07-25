<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT FORM</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="path/to/your/style.css">

</head>
<body>
    <!-- Header -->
    <header>
        @include('Components.header')
    </header>

    <!-- Spinner Start -->

    <!-- Topbar Start -->
    @include('Components.topbar')

    <!-- Navbar & Hero Start -->
    @include('Components.navbar')

    <div class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Left Column: Reliable Manpower Solutions -->
                <div class="col-lg-6">
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
                                        <h5 class="text-white">Contact Us Today!</h5>
                                        <p class="text-white">Call us at <a href="tel:+1234567890" class="text-white fw-bold">+1 (234) 567-890</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Multi-Step Form -->
                <div class="col-lg-6">
                    <div class="appointment-form rounded p-5">
                        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>

                        <!-- Multi-Step Form -->
                        <form id="multi-step-form" action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="title text-center mb-4">Company Profile Form</h1>

                            <!-- Step 1: Company Information -->
                            <div class="step" id="step-1" aria-labelledby="step-1-title">
                                <h2 id="step-1-title" class="mb-3">Step 1: Company Information</h2>
                                <div class="form-group">
                                    <label for="form_name">Company Name:</label>
                                    <input type="text" name="name" id="form_name" class="form-control" placeholder="Enter company name" required>
                                </div>
                                <div class="form-group">
                                    <label for="form_phone">Phone Number:</label>
                                    <input type="tel" name="phone" id="form_phone" class="form-control" placeholder="Enter phone number" pattern="[0-9]{11}" required maxlength="11" data-error="Phone number must be 11 digits.">
                                </div>
                                <div class="form-group">
                                    <label for="form_email">Email:</label>
                                    <input type="email" name="email" id="form_email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="form_website">Company Website:</label>
                                    <input type="url" name="website" id="form_website" class="form-control" placeholder="Enter company website" required>
                                </div>
                                <button type="button" class="btn btn-primary next-btn">Next</button>
                            </div>

                            <!-- Step 2: Job Details -->
                            <div class="step" id="step-2" aria-labelledby="step-2-title" style="display: none;">
                                <h2 id="step-2-title" class="mb-3">Step 2: Job Details</h2>
                                <div class="form-group">
                                    <label for="work_type">Employment Type:</label>
                                    <select id="work_type" name="work_type" class="form-control">
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Project Based">Project Based</option>
                                        <option value="Contractual">Contractual</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="vacant_position">Vacant Position:</label>
                                    <input type="text" id="vacant_position" name="vacant_position" class="form-control" placeholder="Vacant Position" required>
                                </div>
                                <div class="form-group">
                                    <label for="job_category">Job Category:</label>
                                    <select id="job_category" name="job_category" class="form-control" required>
                                        <option value="">Select Job Category</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Electrical Engineer">Electrical Engineer</option>
                                        <option value="Machine Operators">Machine Operators</option>
                                        <option value="Office Support">Office Support</option>
                                        <option value="Customer Service Representative">Customer Service Representative</option>
                                        <option value="Executive Assistant">Executive Assistant</option>
                                        <option value="Driver Riders">Driver Riders</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                <button type="button" class="btn btn-primary next-btn">Next</button>
                            </div>

                            <!-- Step 3: Additional Details -->
                            <div class="step" id="step-3" aria-labelledby="step-3-title" style="display: none;">
                                <h2 id="step-3-title" class="mb-3">Step 3: Additional Details</h2>
                                <div class="form-group">
                                    <label for="no_of_vacancy">Number of Vacancies:</label>
                                    <input type="number" id="no_of_vacancy" name="no_of_vacancy" class="form-control" placeholder="Number of Vacancies" required>
                                </div>
                                <div class="form-group">
                                    <label for="years_experience">Years of Experience Required:</label>
                                    <input type="text" id="years_experience" name="years_experience" class="form-control" placeholder="Years of Experience" required>
                                </div>
                                <div class="form-group">
                                    <label for="working_location">Work Location:</label>
                                    <input type="text" id="working_location" name="working_location" class="form-control" placeholder="Working Location" required>
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                <button type="button" class="btn btn-primary next-btn">Next</button>
                            </div>

                            <!-- Step 4: Final Details -->
                            <div class="step" id="step-4" aria-labelledby="step-4-title" style="display: none;">
                                <h2 id="step-4-title" class="mb-3">Step 4: Final Details</h2>
                                <div class="form-group">
                                    <label for="job_requirements">Job Requirements:</label>
                                    <textarea id="job_requirements" name="job_requirements" class="form-control" rows="4" placeholder="Job Requirements"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="job_description">Job Description:</label>
                                    <textarea id="job_description" name="job_description" class="form-control" rows="4" placeholder="Job Description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="salary_from">Salary Range (From):</label>
                                    <input type="text" id="salary_from" name="salary_from" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group">
                                    <label for="salary_to">Salary Range (To):</label>
                                    <input type="text" id="salary_to" name="salary_to" class="form-control" placeholder="To">
                                </div>
                                <div class="form-group-three">
                                    <label for="qualifications">Qualifications:</label>
                                    <div class="checkbox-row">
                                        <div class="checkbox-group">
                                            <label>
                                                <input type="checkbox" name="qualifications[]" value="CPA License"> CPA LICENSE
                                            </label>
                                        </div>
                                        <div class="checkbox-group">
                                            <label>
                                                <input type="checkbox" name="qualifications[]" value="National Certificate"> National Certificate
                                            </label>
                                        </div>
                                        <div class="checkbox-group">
                                            Licensed Professional:
                                            <select name="qualifications[]">
                                                <option value="">-Click To Select-</option>
                                                <option value="Registered Nurse">Registered Nurse</option>
                                                <option value="Licensed Engineer">Licensed Engineer</option>
                                                <option value="Licensed Teacher">Licensed Teacher</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="checkbox-row">
                                        <label>Others: <input type="text" name="other_qualification"></label>
                                    </div>
                                    <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        @include('Components.footer')

        <!-- Copyright -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- External JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Multi-step form functionality
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('multi-step-form');
            const steps = form.querySelectorAll('.step');
            let currentStep = 0;

            function showStep(stepIndex) {
                steps.forEach((step, index) => {
                    if (index === stepIndex) {
                        step.style.display = 'block';
                    } else {
                        step.style.display = 'none';
                    }
                });
            }

            function goToNextStep() {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }

            function goToPrevStep() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            }

            // Event listeners for next and previous buttons
            const nextButtons = form.querySelectorAll('.next-btn');
            const prevButtons = form.querySelectorAll('.prev-btn');

            nextButtons.forEach(button => {
                button.addEventListener('click', function () {
                    goToNextStep();
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function () {
                    goToPrevStep();
                });
            });

            // Show the first step initially
            showStep(currentStep);
        });
    </script>

</body>
</html>
