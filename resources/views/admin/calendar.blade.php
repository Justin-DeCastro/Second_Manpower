<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="images/logo-removebg-preview.png" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Calendar CSS -->
    <link href="calendar/fullcalendar/packages/core/main.css" rel="stylesheet" />
    <link href="calendar/fullcalendar/packages/daygrid/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="calendar/css/bootstrap.min.css" />
    <link rel="stylesheet" href="calendar/css/style.css" />

    <!-- Admin CSS -->
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="Admin/assets/css/demo.css">

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="Admin/assets/css/fonts.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Components.admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="Admin/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>

                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="images/logo-removebg-preview.png" alt="..." class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">{{ $user->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="images/logo-removebg-preview.png" alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>{{ $user->name }}</h4>
                                                    <p class="text-muted">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </li>
                                         <li>
    <div class="user-box">
        <div class="avatar-lg">
          
            <video src="VideoTutorial/VideoTutorial.mp4" alt="video profile" class="avatar-img rounded" controls>
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="u-text">
            <h4>Video Tutorial</h4>
        </div>
    </div>
</li>
<li>
    <div class="user-box">
        <div class="avatar-lg">
         
<a href="VideoTutorial/UsersManual.pdf" target="_blank" style="text-decoration: none;"download>
    <button style="
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        width: 200px; /* Adjust the width to make the button longer */
        cursor: pointer;
        transition: background-color 0.3s;
    ">
        View Users Manual
    </button>
</a>

        </div>
        <div class="u-text">
            <!--<h4>Admin Manual</h4>-->
        </div>
    </div>
</li>

<li>
    <div class="user-box">
        <div class="avatar-lg">
         
<a href="VideoTutorial/Admin.pdf" target="_blank" style="text-decoration: none;"download>
    <button style="
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        width: 200px; /* Adjust the width to make the button longer */
        cursor: pointer;
        transition: background-color 0.3s;
    ">
        View Admin Manual
    </button>
</a>

        </div>
        <div class="u-text">
            <!--<h4>Admin Manual</h4>-->
        </div>
    </div>
</li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="logout">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <!-- Layout wrapper -->
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <div class="layout-page">
                        <div class="content-wrapper">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <h4 class="py-3 mb-4">CALENDAR</h4>
                                <hr class="my-5" />
                                <div class="card">
                                    <div class="card-header flex-column flex-md-row">
                                        <h5 class="card-header">SCHEDULE FOR INTERVIEW</h5>
                                    </div>
                                    <div class="content" style="margin-top: -50px">
                                        <div id='calendar'></div>
                                    </div>

                                    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="eventModalLabel">Appointment Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Interview Date:</strong> <span id="eventStart"></span></p>
                                                    <p><strong>Name:</strong> <span id="eventName"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

    <!-- Calendar JS -->
    <script src="calendar/js/jquery-3.3.1.min.js"></script>
    <script src="calendar/js/popper.min.js"></script>
    <script src="calendar/js/bootstrap.min.js"></script>
    <script src='calendar/fullcalendar/packages/core/main.js'></script>
    <script src='calendar/fullcalendar/packages/interaction/main.js'></script>
    <script src='calendar/fullcalendar/packages/daygrid/main.js'></script>
    <script src="calendar/js/main.js"></script>

 <script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
                <script src="Admin/assets/js/core/popper.min.js"></script>
                <script src="Admin/assets/js/core/bootstrap.min.js"></script>

                <!-- jQuery Scrollbar -->
                <script src="Admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

                <!-- Chart JS -->
                <script src="Admin/assets/js/plugin/chart.js/chart.min.js"></script>

                <!-- jQuery Sparkline -->
                <script src="Admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

                <!-- Chart Circle -->
                <script src="Admin/assets/js/plugin/chart-circle/circles.min.js"></script>

                <!-- Datatables -->
                <script src="Admin/assets/js/plugin/datatables/datatables.min.js"></script>

                <!-- Bootstrap Notify -->
                <script src="Admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

                <!-- jQuery Vector Maps -->
                <script src="Admin/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
                <script src="Admin/assets/js/plugin/jsvectormap/world.js"></script>

                <!-- Sweet Alert -->
                <script src="Admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

                <!-- Kaiadmin JS -->
                <script src="Admin/assets/js/kaiadmin.min.js"></script>

                <!-- Kaiadmin DEMO methods, don't include it in your project! -->
                <script src="Admin/assets/js/setting-demo.js"></script>
                <script src="Admin/assets/js/demo.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var interviews = @json($interviews);

            var events = interviews.map(function (interview) {
                return {
                    title: interview.name,
                    start: interview.date,
                    job_name: interview.position,
                    job_category: interview.address,
                    extendedProps: {
                        id: interview.id,
                        name: interview.name,
                        phone: interview.phone,
                        email: interview.email,
                    }
                };
            });

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'bootstrap'],
                themeSystem: 'bootstrap',
                defaultView: 'dayGridMonth',
                editable: false,
                events: events,
                eventClick: function (info) {
                    var event = info.event;
                    $('#eventModal #eventJobName').text(event.extendedProps.job_name || '');
                    $('#eventModal #eventJobCategory').text(event.extendedProps.job_category || '');
                    $('#eventModal #eventStart').text(event.start.toLocaleString());
                    $('#eventModal #eventName').text(event.extendedProps.name || '');
                    $('#eventModal #eventPhone').text(event.extendedProps.phone || '');
                    $('#eventModal #eventEmail').text(event.extendedProps.email || '');

                    $('#hiddenEventName').val(event.extendedProps.name);
                    $('#hiddenEventPhone').val(event.extendedProps.phone);
                    $('#hiddenEventEmail').val(event.extendedProps.email);

                    $('#eventModal').modal('show');
                }
            });

            calendar.render();
        });
    </script>
</body>

</html>
