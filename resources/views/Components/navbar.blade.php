<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
<div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0 d-flex align-items-center">
    <img src="home/Homeimage/logo-removebg-preview.png" alt="Logo" style="width: 60px; height: 80px; margin-right: 10px;">
    <div>
    <h1 class="m-0" style="color:#172A88;">ABIC Manpower Service Corp</h1>

        <i>CREATING FUTURE FOR FILIPINO PEOPLE</i>
    </div>
</a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> For Job Seekers </a>
                            <div class="dropdown-menu m-0">
                                <a href="careers" class="dropdown-item">Careers</a>
                                <a href="ojtform" class="dropdown-item">Internship</a>
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> For Corporate Partner </a>
                            <div class="dropdown-menu m-0">
                                <a href="profile" class="dropdown-item">Profile</a>
                                <a href="requisition" class="dropdown-item">Manpower Requisition</a>
                                <a href="labor" class="dropdown-item">Labor Standard Checklist</a>
                                
                            </div>
                        </div>
                        <a href="bulletin" class="nav-item nav-link">Bulletin Board</a>
                        <a href="awards" class="nav-item nav-link">Awards and Achievements</a>
                        <a href="careers" class="nav-item nav-link">Apply Now</a>
                    </div>
                    <a href="login" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
                </div>
            </nav>


            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                <img src="images/job5.png" width="100" height="auto"  alt="Image">

    
                </div>
                <!-- <div class="header-carousel-item">
                    <img src="img/front1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">ABIC Manpower Service Corp</h5>
                           
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Carousel End -->
        
        <div class="wrapper">
    <a class="social" href="https://www.facebook.com/profile.php?id=100090318514723"><i class="fab fa-facebook fa-2x"></i></a>
    <a class="social" href="#"> <i class="fab fa-telegram fa-2x"></i></i></a>
    <a class="close-button" href="#">  <i class="fab fa-instagram fa-2x"></i></i></a>
    <a class="social" href="#"> <i class="fab fa-viber fa-2x"> </i></a>
</div>
<style>
    


/* Wrapper for centering text */


/* Text styles */
.text {
    font-family: 'Dancing Script', cursive;
    font-size: 2rem;
    color: #333;
    white-space: nowrap;
    display: inline-block;
    border-right: 0.15em solid #333; /* Create a cursor effect */
    animation: typing 6s steps(50, end), blink-caret 0.75s step-end infinite;
    overflow: hidden; /* Ensure text stays within bounds */
    width: 0; /* Start width at 0 */
}

/* Typing animation */
@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

/* Blinking cursor */
@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: #333; }
}

.wrapper{
    position:fixed;
    top:500px;
    right:20px;
    z-index:1000;
}

.wrapper a:nth-child(1){
    background-color:blue;
}

.wrapper a:nth-child(2){
    background-color:#17BBFE;
}
.wrapper a:nth-child(4){
    background-color:#8f5db7;
}

.wrapper a:nth-child(3) {
        background: linear-gradient(to right, #ff8a00, #e52e71); /* Example gradient colors */
        transition: all 0.3s;
    }


.wrapper a:hover:nth-child(3){

    background-color:yellow;
}


@keyframes FadeIn {
    0% {
     transform:rotate(0deg);
    }
    100% {
      transform:rotate(360deg);
    }
}


.hide{
    position:absolute;
    bottom:0px !important;
    z-index:-1;
    transition:all 2s;

}

.social{

}

.wrapper a{
    height:50px;
    width:50px;
    background:#000;
    padding:10px;
    display:flex;
    flex-direction:row;
    border-radius:50%;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    color:#fff;
    margin:2px;
}
</style>