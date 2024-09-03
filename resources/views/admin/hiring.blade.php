<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="Admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["Admin/assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
<link rel="shortcut icon" type="xicon" href="images/logo-removebg-preview.png">
    <!-- CSS Files -->
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="Admin/assets/css/demo.css" />
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
                            <img src="Admin/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
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
                        <!-- <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav> -->

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false" aria-haspopup="true">
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
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="images/logo-removebg-preview.png" alt="..."
                                            class="avatar-img rounded-circle" />
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
                                                    <img src="images/logo-removebg-preview.png" alt="image profile"
                                                        class="avatar-img rounded" />
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
                                            <!-- <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div> -->
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

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Job Applications</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Job Application Details</h4>
                                    <div class="dt-buttons btn-group d-flex justify-content-end gap-2">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class='bx bx-export'></i> Export
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button type="button" id="copyBtn" class="btn dropdown-item"><i class='bx bx-copy'></i> Copy</button></li>
                                                <li><button type="button" id="printBtn" class="btn dropdown-item"><i class='bx bx-printer'></i> Print</button></li>
                                                <li><button type="button" id="excelBtn" class="btn dropdown-item"><i class='bx bx-file'></i> Excel</button></li>
                                                <li><button type="button" id="pdfBtn" class="btn dropdown-item"><i class='bx bxs-file-pdf'></i> Pdf</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="myDataTable">
                                            <thead>
                                                <tr>
                                                <th>Email ID</th>
                                                    <th>Full Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Address</th>
                                                    <th>Position</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                    <th>Resume</th>
                                                    <th>For Processing</th>

                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="Admin/assets/js/core/popper.min.js"></script>
    <script src="Admin/assets/js/core/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="Admin/assets/js/kaiadmin.min.js"></script>
    <script src="Admin/assets/js/setting-demo2.js"></script>
    <script src="https://cdn.sheetjs.com/xlsx-0.20.2/package/dist/xlsx.full.min.js"></script>

    <!-- DataTable Initialization -->
    <script>
    $(document).ready(function() {
        var table = $('#myDataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('get-job-applications') }}",
            columns: [
                { data: 'email', name: 'email' }, // Email ID
                { data: 'name', name: 'name' }, // Full Name
                { data: 'phone', name: 'phone' }, // Mobile Number
                { data: 'address', name: 'address' }, // Address
                { data: 'position', name: 'position' }, // Position
                { data: 'message', name: 'message' }, // Message
                { data: 'status', name: 'status' }, // Status
                { data: 'resume', name: 'resume' }, // Resume
                { data: 'action', name: 'action', orderable: false, searchable: false } // For Processing
            ],
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['print', 'copy', 'csv'],
        });

        $('#printBtn').on('click', function() {
            table.button('.buttons-print').trigger();
        });

        $('#copyBtn').on('click', function() {
            table.button('.buttons-copy').trigger();
        });

        $('#excelBtn').on('click', function() {
            exportToExcel();
        });

        $('#myDataTable tbody').on('click', 'td', function() {
            var cell = table.cell(this);
            var column = cell.index().column;
            var data = table.row(cell.index().row).data();

            if (column === 7) { // Assuming 'resume' is the 8th column
                var resumeUrl = "{{ asset('hiring/') }}/" + data.resume;
                // Open resume link in new tab/window as needed
            }
        });

        function exportToExcel() {
            var wb = XLSX.utils.book_new();
            var ws = XLSX.utils.table_to_sheet($('#myDataTable').get(0));

            table.rows().every(function(index, element) {
                var data = this.data();
                var resumeUrl = "{{ asset('hiring/') }}/" + data.resume;
                var rowIdx = index + 1;
                var resumeCell = 'H' + rowIdx; // Updated column index for Resume

                ws[resumeCell] = {
                    v: "Download Resume",
                    t: 's',
                    l: {
                        Target: resumeUrl,
                        Tooltip: 'Download Resume'
                    }
                };
            });

            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, "Job_Application_Details.xlsx");
        }
    });
</script>

<script src="Admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="Admin/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="Admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="Admin/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->


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

</body>
</html>
