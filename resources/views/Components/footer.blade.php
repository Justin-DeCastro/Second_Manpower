<!-- Footer Section -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Footer Logo and Social Media -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h3 class="text-white mb-4">
                        <img src="Home/Homeimage/logo-removebg-preview.png" alt="ABIC Manpower Service Corp Logo" class="me-3" style="width: 90px; height: auto;">
                        ABIC Manpower Service Corp
                    </h3>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/profile.php?id=100090318514723"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://x.com/AbicManpower"><i class="fab fa-twitter"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <!-- Quick Links -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Quick Links</h4>
                    <a href="about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="bulletin"><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                    <a href="team"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                </div>
            </div>
            <!-- Our Services -->
            <div class="col-md-6 col-lg-6 col-xl-3">
    <div class="footer-item d-flex flex-column">
        <h4 class="mb-4 text-white">Our Services</h4>
        <span><i class="fas fa-angle-right me-2"></i> Recruitment Services</span>
        <span><i class="fas fa-angle-right me-2"></i> Outsourcing</span>
        <span><i class="fas fa-angle-right me-2"></i> Staffing Solutions</span>
        <span><i class="fas fa-angle-right me-2"></i> Direct Hiring</span>
    </div>
</div>

            <!-- Contact Info -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Contact Info</h4>
                    <a href="https://maps.app.goo.gl/9aDHCoWoEZi78nXE9"><i class="fa fa-map-marker-alt me-2"></i> Unit 403, Campos Rueda Building, 101 Urban Ave, Makati City, 1206 Metro Manila</a>
                    <a href="mailto:abicmanpower@gmail.com"><i class="fas fa-envelope me-2"></i> abicmanpower@gmail.com</a>
                    <a href="tel:+639069381261"><i class="fas fa-mobile me-2"></i> +63 906-938-1261</a>
                    <a href="tel:(02)82405150" class="mb-3"><i class="fas fa-phone me-2"></i> (02) 8240 5150</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center text-white">
                Copyright © <a class="border-bottom" >2024 ABIC Manpower Service Corp. All rights reserved.</a>
            </div>
            <div class="col-md-6 text-end text-white">
                Powered By: <a class="border-bottom" href="https://www.facebook.com/profile.php?id=61562146592005">Infinitech Advertising Corporation</a>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--<script src='/js/widget.js'></script>-->
<script src="js/element.js"></script>
<script>
    var botman = botmanInit();
    function botmanInit() {
        return BotMan.create({
            baseUrl: '/botman',
            introMessage: 'Hello! How can I assist you?',
            chatServer: '/botman',
            title: 'ChatBot',
            mainColor: '#408EAF',
        });
    }
    
    var botmanWidget = {
        aboutText: "You're currently engaging with an AI",
        introMessage: "Hello, How Can I Help You?",
        title: "ABIC MANPOWER SERVICE CORP!",
        mainColor: "#575757",
        bubbleAvatarUrl: "{{ asset('img/cs.png') }}",
        headerTextColor: "#ffffff"
    };
    
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'af,sq,am,ar,hy,az,eu,be,bn,bs,bg,ca,ceb,ny,zh-CN,zh-TW,co,hr,cs,da,nl,en,eo,et,tl,fi,fr,fy,gl,ka,de,el,gu,ht,ha,haw,iw,hi,hmn,hu,is,ig,id,ga,it,ja,jw,kn,kk,km,ko,ku,ky,lo,la,lv,lt,lb,mk,mg,ms,ml,mt,mi,mr,mn,my,ne,no,or,ps,fa,pl,pt,pa,ro,ru,sm,gd,sr,st,sn,sd,si,sk,sl,so,es,su,sw,sv,tg,ta,tt,te,th,tr,tk,uk,ur,ug,uz,vi,cy,xh,yi,yo,zu',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false,
        }, 'google_translate_element');
    }
</script>
<!--<script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>-->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
