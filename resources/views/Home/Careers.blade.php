<!DOCTYPE html>
<html lang="en">

    @include('Components.header')
    <body>
  
        <!-- Spinner Start -->
        @include('Components.spinner')
        <!-- Spinner End -->


        <!-- Topbar Start -->
        @include('Components.topbar')
       
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        @include('Components.navbar')
<style>
    <style>
    /* Style for form labels */
    label {
        font-weight: bold;
    }

    /* Style for form inputs */
    .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 8px 12px;
        margin-bottom: 15px;
        box-sizing: border-box;
        width: 100%;
    }

    /* Style for file input */
    .form-control-file {
        margin-top: 5px;
    }

    /* Style for submit button */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    /* Optional: Style for form rows (spacing between rows) */
    .form-row {
        margin-bottom: 15px;
    }

    /* Optional: Responsive styling */
    @media (max-width: 768px) {
        .form-group {
            width: 100%;
        }
    }
</style>

</style>
<div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0">We Are Hiring</h4>
                            <h1 class="display-4 mb-4"></h1>
                            <p class="mb-4"></p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Human Resources</h5>
                                           
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Accounting</h5>
                                            
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Office Support</h5>
                                            
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Liaison Assistant</h5>
                                            
                                        </div>
                                        <!-- <div class="text-start mb-4">
                                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video h-100">
                                        <img src="home/homeimage/4.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="appointment-form rounded p-5">
                        <table class="job-table">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic rows from $joboffer -->
                    @foreach($joboffer as $job)
                        <tr>
                            <td>{{ $job->location }}</td>
                            <td>{{ $job->title }}</td>
                            <td>
                            <button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#applyModal" style="width: 80%;">Apply Now</button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('apply.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <!-- Contact Number -->
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="phone">
                    </div>
                    <!-- Position Applied -->
                    <div class="form-group">
                        <label for="position_applied">Position Applied</label>
                        <input type="text" class="form-control" id="position_applied" name="position" required>
                    </div>
                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <!-- Upload Resume -->
                    <div class="form-group">
                        <label for="resume">Upload Resume</label>
                        <input type="file" class="form-control-file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</div>

        @include('Components.footer')
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>