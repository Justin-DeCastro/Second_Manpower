<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
<div class="container-fluid position-relative p-0">
           <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0 d-flex align-items-center">
            <img src="Home/Homeimage/logo-removebg-preview.png" alt="Logo" style="width: 60px; height: 80px; margin-right: 10px;">
            <div>
                <h2 class="m-0" style="color:#172A88;">ABIC Manpower Service Corp.</h1>
                <i>Creating Future for Filipino People</i>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Apply Now</a>
                    <div class="dropdown-menu m-0">
                        <a href="careers" class="dropdown-item">Careers</a>
                        <a href="ojtform" class="dropdown-item">Internship</a>
                    </div>
                </div>
                 <a href="requisition" class="nav-item nav-link">Employer</a>
                <!--<div class="nav-item dropdown">-->
                <!--    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Employer</a>-->
                <!--    <div class="dropdown-menu m-0">-->
                        <!--<a href="profile" class="dropdown-item">Profile</a>-->
                        <!--<a href="requisition" class="dropdown-item">Manpower Requisition</a>-->
                        <!--<a href="labor" class="dropdown-item">Labor Standard Checklist</a>-->
                <!--    </div>-->
                <!--</div>-->
                <a href="bulletin" class="nav-item nav-link">News</a>
                <a href="awards" class="nav-item nav-link">Awards</a>
                <a href="resumebuilder" class="nav-item nav-link">Resume</a>
               <a href="/App/application1.apk" class="nav-item nav-link" download>Download Our App</a>

            </div>
            <a href="login" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
        </div>
    </nav>


            <!-- Carousel Start -->
           <div class="header-banner">
                <img src="images/t6.jpg" alt="Cover Banner Image" width="100%" height="auto">

            </div>
            <!-- Carousel End -->
        
    <div class="wrapper d-none d-md-flex">
    <a class="social" href="https://www.facebook.com/profile.php?id=100090318514723"><i class="fab fa-facebook fa-2x"></i></a>
    <a class="social" href="https://x.com/AbicManpower">
    <img src="images/twitter.png" alt="X Logo" style="width: 32px; height: 32px;">
</a>
<a class="social" href="https://web.telegram.org/k/#7369565607" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-telegram fa-2x"></i>
</a>


    <a class="social" href="#"><i class="fab fa-viber fa-2x"></i></a>
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var path = window.location.pathname;
            var navLinks = document.querySelectorAll('.navbar-nav .nav-item a');
            
            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === path) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    
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


.wrapper {
    position: fixed;
    top: 50%; /* Adjusts the vertical position */
    right: 20px;
    z-index: 1000;
    transform: translateY(-50%); /* Centers the wrapper vertically */
    display: flex;
    flex-direction: column; /* Align items vertically */
    align-items: center; /* Center items horizontally */
}

.wrapper a {
    height: 50px;
    width: 50px;
    background: #000;
    padding: 10px;
    display: flex;
    flex-direction: row;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #fff;
    margin: 10px 0; /* Adjust the spacing between icons */
}

/* Hide social icons on small screens */
@media (max-width: 767.98px) {
    .wrapper {
        display: none;
    }
}


.wrapper a:nth-child(1){
    background-color:blue;
}

.wrapper a:nth-child(2){
    background-color:#000000;
}
.wrapper a:nth-child(4){
    background-color:#8f5db7;
}

.wrapper a:nth-child(3) {
       background: linear-gradient(to right, #0088cc, #005c8e);

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



</style>