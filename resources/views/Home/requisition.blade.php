<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manpower Requisition</title>
    
    <!-- External CSS -->


<link rel="shortcut icon" type="xicon" href="images/logo-removebg-preview.png">
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
        <div class="row">
            <!-- Career Updates Section -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                @foreach($manpowers as $career)
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

                <!-- Right Column: Multi-Step Form -->
  <div class="col-lg-6">
    <div class="appointment-form rounded p-5">
        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>

        <!-- Multi-Step Form -->
        <!-- resources/views/companies/create.blade.php -->

        <form id="multi-step-form" action="{{ route('submit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="title text-center mb-4">Manpower Requisition Form</h1>

            <!-- Row to hold side-by-side fields -->
            <div class="row">
                <!-- Company Name Input Field -->
                <div class="col-md-6 mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Enter Company Name" required>
                </div>

                <!-- Company Website Input Field -->
                <div class="col-md-6 mb-3">
                    <label for="company_website" class="form-label">Company Website</label>
                    <input type="url" id="company_website" name="company_website" class="form-control" placeholder="Enter Company Website URL" required>
                </div>
            </div>
             <div class="row">
                <!-- Company Name Input Field -->
                <div class="col-md-6 mb-3">
                    <label for="company_name" class="form-label">Contact Name</label>
                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Enter Contact Name" required>
                </div>

                <!-- Company Website Input Field -->
                <div class="col-md-6 mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input type="text" id="contact_number" name="contact_number" class="form-control" placeholder="Enter Contact Number" required>
                </div>
            </div>
    <!-- Step 1: Job Details -->
    <div class="step" id="step-1">
        <h2 class="mb-3">Step 1: Job Details</h2>
        <div class="form-row-three">
        <div class="form-group-three">
                <label for="preferred_gender">Preferred Gender:</label>
                <select id="preferred_gender" name="preferred_gender" class="form-control form-control-lg">
                    <option value="">Select Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
            <div class="form-group-three">
                <label for="work_type">Employment Type:</label>
                <select id="work_type" name="work_type" class="form-control form-control-lg" required>
                <option value="">Select Employment Type</option>
                    <option value="Full Time">Full Time</option>
                    <!-- <option value="Part Time">Part Time</option> -->
                    <option value="Project Based">Project Based</option>
                    <option value="Contractual">Contractual</option>
                </select>
            </div>
            
            <div class="form-group-three">
                <label for="vacant_position">Vacant Position:</label>
                <input type="text" id="vacant_position" name="vacant_position" class="form-control form-control-lg" placeholder="Input Vacant Position here" required>
            </div>
            <div class="form-group-three">
                <label for="job_category">Job Category:</label>
                <select id="job_category" name="job_category" class="form-control form-control-lg" required>
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
            <div class="form-group-three">
                <label for="job_description">Job Description:</label>
                <textarea id="job_description" name="job_description" class="form-control form-control-lg" rows="4" placeholder="Input Job Description here" required></textarea>
            </div>
        </div>
        <button type="button" class="btn btn-primary next-btn">Next</button>
    </div>

    <!-- Step 2: Additional Details -->
    <div class="step" id="step-2" style="display: none;">
        <h2 class="mb-3">Step 2: Additional Details</h2>
        <div class="form-group-three">
                <label for="job_requirements">Job Requirements:</label>
                <textarea id="job_requirements" name="job_requirements" class="form-control" rows="4" placeholder="List the skills, experience, and qualifications required for this position"></textarea>
            </div>
        <div class="form-row-three">
            <div class="form-group-three">
                <label for="no_of_vacancy">Number of Vacancies:</label>
                <input type="number" id="no_of_vacancy" name="no_of_vacancy" class="form-control form-control-lg" placeholder="Provide details of available job openings here" required>
            </div>
            <div class="form-group-three">
                <label for="years_experience">Years of Experience Required:</label>
                <input type="text" id="years_experience" name="years_experience" class="form-control form-control-lg" placeholder="Specify the number of years of experience needed" required>
            </div>
            <div class="form-group-three">
                <label for="working_location">Work Location:</label>
                <input type="text" id="working_location" name="working_location" class="form-control form-control-lg" placeholder="Enter the job's work location or address" required>
            </div>
            <div class="form-group-three">
                    <label for="target_date">Target Date of Deployment:</label>
                    <input type="date" id="target_date" name="target_date" class="form-control">
                </div>
        </div>
        <button type="button" class="btn btn-secondary prev-btn">Previous</button>
        <button type="button" class="btn btn-primary next-btn">Next</button>
    </div>

    <!-- Step 3: Additional Details -->
    <div class="step" id="step-3" style="display: none;">
        <h2 class="mb-3">Step 3: Additional Details</h2>
        <div class="form-group-three">
                <label for="working_schedule_hours">Working Schedule Hours:</label>
                <input type="text" id="working_schedule_hours" name="working_schedule_hours" class="form-control form-control-lg" placeholder="Specify the work hours  required">
            </div>
            <div class="form-group-three">
                <label for="working_schedule_days">Working Schedule Days:</label>
                <input type="text" id="working_schedule_days" name="working_schedule_days" class="form-control form-control-lg" placeholder="Specify the work days  required">
            </div>
        <div class="form-row-three">
            <div class="form-group-three">
                <label for="payout_firstdate">First Payout:</label>
                <input type="text" id="payout_firstdate" name="payout_firstdate" class="form-control form-control-lg" placeholder="Enter the date of the first payout" required>
            </div>
            <div class="form-group-three">
                <label for="payout_seconddate">Second Payout:</label>
                <input type="text" id="payout_seconddate" name="payout_seconddate" class="form-control form-control-lg" placeholder="Enter the date of the second payout" required>
            </div>
           
        </div>
        <button type="button" class="btn btn-secondary prev-btn">Previous</button>
        <button type="button" class="btn btn-primary next-btn">Next</button>
    </div>

    <!-- Step 4: Final Details -->
    <div class="step" id="step-4" style="display: none;">
        <h2 class="mb-3">Step 4: Final Details</h2>
        <div class="form-row-three">
            <class="form-group-three">
            <label for="screening_method">Screening Method:</label>
    <select id="screening_method" name="screening_method" class="form-control form-control-lg" required>
        <option value="" disabled selected>Select Screening Method</option>
        <option value="face_to_face">Face to Face</option>
        <option value="virtual">Virtual</option>
    </select>
          
        </div>
        <div class="form-row-three">
           
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
                    <div class="checkbox-group">
                        <label>Others: <input type="text" name="other_qualification"></label>
                    </div>
                </div>
            </div>
            <div class="form-group-three">
                <label for="other_requirements">Other Requirements:</label>
                <textarea id="other_requirements" name="other_requirements" class="form-control" rows="4" placeholder="Specify other requirements"></textarea>
            </div>
        </div>
        <div class="form-row-three">
            <div class="form-group-three">
                <label for="salary_from">Salary Range (From):</label>
                <input type="text" id="salary_from" name="salary_from" class="form-control form-control-lg" placeholder="Salary Range From">
            </div>
            <div class="form-group-three">
                <label for="salary_to">Salary Range (To):</label>
                <input type="text" id="salary_to" name="salary_to" class="form-control form-control-lg" placeholder="Salary Range To">
            </div>
            
        </div>
        <button type="button" class="btn btn-secondary prev-btn">Previous</button>
        <button type="submit" class="btn btn-primary">Submit</button>
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
     
    </footer>

    <!-- Back to Top -->
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
