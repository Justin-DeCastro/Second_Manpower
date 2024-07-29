<!DOCTYPE html>
<html lang="en">
<style>
    .accordion_one .panel-group {
    
    border: 1px solid #f1f1f1;
    margin-top:100px;
    
    
}

a:link {
    text-decoration: none
}

.accordion_one .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0px solid transparent;
    border-radius: 0;
    margin: 0;
}

.accordion_one .panel-default {
    border: 0;
}

.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px;
}

h4 {
    font-size: 18px;
    line-height: 24px;
}

.accordion_one .panel .panel-heading a.collapsed {
    color: #999999;
    display: block;
    padding: 12px 30px;
    border-top: 0px;
}

.accordion_one .panel .panel-heading a {
    display: block;
    padding: 12px 30px;
    background: #fff;
    color: #313131;
    border-bottom: 1px solid #f1f1f1;
}

.accordion-wrap .panel .panel-heading a {
    font-size: 14px;
}

.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 25px 30px 30px 35px;
    background: #fff;
    color: #999999;
}

.img-accordion {
    width: 81px;
    float: left;
    margin-right: 15px;
    display: block;
}

.accordion_one .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #999999;
    background: #f1f1f1;
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
   
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}
.accordion_one .panel .panel-heading a:after {
    content: "\2212";
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}


</style>
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
        <!-- Navbar & Hero End -->


        <!-- Services Start -->
        <div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">OUR JOB FAIRS</h4>
            </div>
            <!-- <h1 class="display-3 mb-4">Our Service Given Physiotherapy By Experts</h1> -->
            <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        </div>

        <div class="row g-4 justify-content-center">
    @foreach ($Jobs as $job)
    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded h-100">
            <div class="service-img rounded-top" style="height: 200px; overflow: hidden;">
                <img src="{{ asset('images/' . $job->companyimage) }}" class="img-fluid w-100 h-100 object-cover" alt="{{ $job->companyname }}">
            </div>
            <div class="service-content rounded-bottom bg-light p-4 d-flex flex-column">
                <div class="service-content-inner flex-grow-1">
                    <h5 class="mb-4">{{ $job->servicename }}</h5>
                    <p class="mb-4">{{ $job->description }}</p>
                    {{$job->companyname}}
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Placeholder for more services link -->
    <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">See More Services</a>
    </div> -->
</div>

    </div>
</div>

        <!-- Services End -->


        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="home/homeimage/image8.png" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <!-- <div class="about-img-inner">
                                <img src="home/homeimage/logo-removebg-preview.png" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div> -->
                            <div class="about-experience">15 years experience</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
    <div class="section-title text-start mb-5">
        <h2>Our Mission Vision and Values</h2>
        <!-- <h1 class="display-3 mb-4">We are Ready to Help Improve Your Treatment.</h1> -->
        <!-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        <!-- <div class="mb-4">
            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Refreshing to get such a personal touch.</p>
            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Duis aute irure dolor in reprehenderit in voluptate.</p>
            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a> -->
    </div>

    <div class="mb-5">
        <h3>Vision</h3>
        <p>To build a future where every business can thrive with the support of a skilled and motivated workforce, and every professional can achieve their career aspirations through meaningful employment opportunities.</p>
    </div>

    <div class="mb-5">
        <h3>Mission</h3>
        <p>To empower businesses by providing exceptional staffing solutions that match the right talent with the right opportunities, ensuring growth and success for both employers and employees. We are committed to delivering excellence, fostering a culture of integrity, and creating value for our clients through innovative and customized workforce solutions.</p>
    </div>

    <div class="mb-5">
        <h3>Values</h3>
        <p style="line-height: 1.5; display: block; text-align:left;">
            <span style="font-size: 20px; margin-right: 10px;"><strong>A</strong></span>ccountability – We are committed to taking professional accountability to our clients.<br>
            <span style="font-size: 20px; margin-right: 10px;"><strong>B</strong></span>eyond – Dedicated to going the extra mile to cater to client’s manpower specifications while ensuring to deploy competent talents.<br>
            <span style="font-size: 20px; margin-right: 10px;"><strong>I</strong></span>ntegrity – Driven to uphold honesty, fairness, and decency.<br>
            <span style="font-size: 20px; margin-right: 10px;"><strong>C</strong></span>ustomized Client-Oriented – Always determined to provide exceptional service tailored to meet client’s needs.
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
                <div class="col-md-6"> <!-- Increased column width to half of the row -->
                    <img src="images/logo_cleanup.jpg" class="img-fluid" alt="" width="1200" height="auto">
                </div>
                <div class="col-md-6">
                    <p>
                        A licensee of Department of Labor and Employment <a href="https://clients.ncr.dole.gov.ph/clientsearch/search/pages/consubcon.php">(DOLE)</a> Manpower, ABIC MANPOWER SERVICE CORP is committed in linking exceptional talents with boundless career opportunities across the Philippines. With our determination to implement compulsory labor standards in the Philippines, our team ensures that the proper, updated, and accurate information from Department of Labor and Employment (DOLE) is discussed, explained, and communicated well to our clients. Ensuring that our exceptional talents will receive correct labor due and campaigning competitive package in the market. We are driven by our core ethics of accountability, beyond boundaries, integrity, and customized client-oriented. Through these principles, our inimitable execution of recruitment and selection has been producing clients' satisfactory and advancement of viability given the career choices.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Feature items here -->
        </div>
    </div>
</div>



        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Services</h4>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4" style="height: 400px; display: flex; flex-direction: column;">
                    <div class="col-12" style="flex: 1;">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-users fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column" style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="mb-4">Recruitment Services</h5>
                            <p class="mb-0">Conducting candidate sourcing, screening, and selection processes to match qualified individuals with job openings.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4" style="height: 400px; display: flex; flex-direction: column;">
                    <div class="col-12" style="flex: 1;">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-building fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column" style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="mb-4">Outsourcing</h5>
                            <p class="mb-0">Managing specific business functions or processes on behalf of clients, such as payroll administration or HR management.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4" style="height: 400px; display: flex; flex-direction: column;">
                    <div class="col-12" style="flex: 1;">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-briefcase fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column" style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="mb-4">Staffing Solutions</h5>
                            <p class="mb-0">Providing temporary, permanent, or contract staff to meet short-term or long-term workforce needs of businesses.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4" style="height: 400px; display: flex; flex-direction: column;">
                    <div class="col-12" style="flex: 1;">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-handshake fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column" style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="mb-4">Direct Hiring</h5>
                            <p class="mb-0">Helping companies find and hire employees directly for their workforce needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                    
                    <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                    </div> -->
                </div>
     
        <!-- Feature End -->


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
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
                    <!-- <div class="text-start mb-4">
                        <a href="tel:+1234567890" class="btn btn-primary rounded-pill text-white py-3 px-5">Contact Us</a>
                    </div> -->
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
                            
                            <form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <h1 class="title text-center mb-4">Talk to Us</h1>

    <!-- Name -->
    <div class="form-group position-relative">
        <label for="formName" class="d-block">
            <i class="icon" data-feather="user"></i>
        </label>
        <input type="text" name="name" id="formName" class="form-control form-control-lg thick" placeholder="Full Name" required>
    </div>

    <!-- Email and Contact Number (2 columns) -->
    <div class="row">
        <!-- E-mail -->
        <div class="form-group col-md-6 position-relative">
            <label for="formEmail" class="d-block">
                <i class="icon" data-feather="mail"></i>
            </label>
            <input type="email" name="email" id="formEmail" class="form-control form-control-lg thick" placeholder="E-mail" required>
        </div>

        <!-- Contact Number -->
        <div class="form-group col-md-6 position-relative">
            <label for="formContact" class="d-block">
                <i class="icon" data-feather="phone"></i>
            </label>
            <input type="tel" name="contact_number" id="formContact" class="form-control form-control-lg thick" placeholder="Contact Number" required>
        </div>
    </div>

    <!-- Country -->
    <div class="form-group position-relative">
        <label for="formCountry" class="d-block">
            <i class="icon" data-feather="globe"></i>
        </label>
        <input type="text" name="country" id="formCountry" class="form-control form-control-lg thick" placeholder="Country" required>
    </div>

    <!-- Subject -->
    <div class="form-group position-relative">
        <label for="formSubject" class="d-block">
            <i class="icon" data-feather="tag"></i>
        </label>
        <select name="subject" id="formSubject" class="form-control form-control-lg thick" required>
            <option value="" disabled selected>Select Subject</option>
            <option value="Applicant-Inquiries">Applicant Inquiries</option>
            <option value="Applicant-Follow Up">Applicant Follow Up</option>
            <option value="Employer-Inquiries">Employer Inquiries</option>
            <option value="Employer-Manpower Request">Employer Manpower Request</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <!-- Message -->
    <div class="form-group message">
        <textarea name="message" id="formMessage" class="form-control form-control-lg" rows="7" placeholder="Message" required></textarea>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">SUBMIT NOW</button>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


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
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients are Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                @foreach($feedback as $message)
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/user.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">{{ $message->message }}
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">{{ $message->name }}</h5>
                                <!-- <p class="mb-2 text-white-50">New York, USA</p> -->
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
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


<div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
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
                    <!-- <div class="text-start mb-4">
                        <a href="tel:+1234567890" class="btn btn-primary rounded-pill text-white py-3 px-5">Contact Us</a>
                    </div> -->
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
                            <p class="fs-4 text-uppercase text-primary">Frequently Ask Questions</p>
                            
                            <div class="container mt-5">
        <div class="accordion" id="accordionExample">
            <!-- Accordion Item 1 -->
            <!-- Accordion Item 1 -->
<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            What are the pre-employment requirements?
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <ul>Pre-Employment Requirements
                <li>SSS E-1 Form and UMID ID</li>
                <li>Philhealth Number and ID</li>
                <li>Pag-Ibig Number and ID</li>
                <li>TIN Number and ID</li>
                <li>Latest 2X2 picture and 1x1 picture</li>
                <li>COE or Clearance Certificate</li>
                <li>School TOR or Diploma</li>
                <li>NBI Latest 3 months validity (original)</li>
                <li>PSA or NSO</li>
            </ul>
            <ul>Pre-Employment Medical Valid for 6 months (original)
                <li>(Examination includes Urinalysis, Fecalysis,
                -Physical Exam, X-Ray, CBC, Drug Test)</li>
                <li>Vaccination Card</li>
            </ul>
            <ul>Note: For Makati based employees
                <li>Sanitary/Health Permit (Makati)</li>
            </ul>
        </div>
    </div>
</div>

            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Do you have an agency fee or any charge for processing?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Contact Details -->
                        <p>No, we are not charging any fees for the process during employment.</p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Age limit requirement?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Country Information -->
                        <p>20 to 45 years old Male or Female (older than 45 are subject to screening depending on the experience and positions needed)</p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    The work location of the jobs?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Subject Details -->
                        <li>National Capital Region</li>
                        <li>Luzon</li>
                        <li>Visayas</li>
                        <li>Mindanao</li>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Do you accept part-time employees?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>We are looking for full-time employees that will support the client's operations/business.</p>
                    </div>
                </div>
            </div>
           
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Do you accept PWD?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>Yes, we welcome and accommodate persons with disabilities (PWD).</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Do you accept applicants with tattoo?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>Yes, we accept applicants with tattoos</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Do you accept walk-ins?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>Yes, you may visit our office located at Unit 403 Campos Rueda Bilding Urban Avenue, Pio Del Pilar, Makati City. Monday through Friday from 9:00 a.m. to 4:00 p.m</p>
                    </div>
                </div>
            </div>
            <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Office Hours
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>We follow government working hours Monday through Friday at 8 a.m. to 5 p.m.</p>
                    </div>
                </div>
            </div>
            <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Is the medical expense covered by the company?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Content for Message -->
                        <p>No, the applicant will shoulder the medical expenses. The applicant can conduct his or her medicals at any clinic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        
        <!-- Blog End -->


        <!-- Footer Start -->
   @include('Components.footer')
        
        <!-- Copyright Start -->
      
        <!-- Copyright End -->

        <!-- Back to Top -->
       
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    </body>

</html>