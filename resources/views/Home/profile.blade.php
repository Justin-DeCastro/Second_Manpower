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
                                        <!-- <h5 class="text-white">Contact Us Today!</h5>
                                        <p class="text-white">Call us at <a href="tel:+1234567890" class="text-white fw-bold">+1 (234) 567-890</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Internship Form -->
                <div class="col-lg-6">
                    <div class="appointment-form rounded p-5">
                        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>

                        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="title text-center mb-4">Company Profile Form</h1>

                            <!-- Company Name -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="user"></i>
                                    <label for="form_name">Company Name</label>
                                </div>
                                <input type="text" name="name" id="form_name" class="form-control thick" placeholder="Enter company name" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="phone"></i>
                                    <label for="form_phone">Phone Number</label>
                                </div>
                                <input type="tel" name="phone" id="form_phone" class="form-control thick" placeholder="Enter phone number" pattern="[0-9]{11}" required maxlength="11" data-error="Phone number must be 11 digits.">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="mail"></i>
                                    <label for="form_email">Email</label>
                                </div>
                                <input type="email" name="email" id="form_email" class="form-control thick" placeholder="Enter email" required>
                            </div>

                            <!-- SEC Certificate and Business Permit (Side by Side) -->
                            
                            <!-- Company Website -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="link"></i>
                                    <label for="form_website">Company Website</label>
                                </div>
                                <input type="url" name="website" id="form_website" class="form-control thick" placeholder="Enter company website" required>
                            </div>

                            <!-- Position -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="briefcase"></i>
                                    <label for="form_position">Position</label>
                                </div>
                                <input type="text" name="position" id="form_position" class="form-control thick" placeholder="Enter position" required>
                            </div>

                            <!-- Contact Person -->
                            <div class="form-group">
                                <div class="icon-label">
                                    <i class="icon" data-feather="user-check"></i>
                                    <label for="form_person">Contact Person</label>
                                </div>
                                <input type="text" name="person" id="form_person" class="form-control thick" placeholder="Enter contact person" required>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="icon-label">
                                            <i class="icon" data-feather="file"></i>
                                            <label for="form_sec_certificate">SEC Certificate</label>
                                        </div>
                                        <input type="file" name="sec_certificate" id="form_sec_certificate" class="form-control-file" required>
                                        @error('sec_certificate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (request()->hasFile('sec_certificate'))
                                        <p class="mt-2">Uploaded Filename: {{ request()->file('sec_certificate')->getClientOriginalName() }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="icon-label">
                                            <i class="icon" data-feather="file-text"></i>
                                            <label for="form_business_permit">Business Permit</label>
                                        </div>
                                        <input type="file" name="business_permit" id="form_business_permit" class="form-control-file" required>
                                        @error('business_permit')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (request()->hasFile('business_permit'))
                                        <p class="mt-2">Uploaded Filename: {{ request()->file('business_permit')->getClientOriginalName() }}</p>
                                        @endif
                                    </div>
                                </div> -->
                            </div>


                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-send pt-2 btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('Components.footer')
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
