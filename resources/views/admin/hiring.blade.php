<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Job Applications - Admin Dashboard</title>
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="Admin/assets/css/demo.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
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
                        <a href="../index.html" class="logo">
                            <img src="Admin/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
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
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="Admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span> <span class="fw-bold">ABIC MANPOWER</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg"><img src="Admin/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p>
                                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Status</th>
                                                    <th>Position</th>
                                                    <th>Message</th>
                                                    <th>Resume</th>
                                                    <th>For Processing</th>
                                                    <th>Phone</th>
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
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'address', name: 'address' },
                    { data: 'status', name: 'status' },
                    { data: 'position', name: 'position' },
                    { data: 'message', name: 'message' },
                    { data: 'resume', name: 'resume' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: 'phone', name: 'phone' }
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

                if (column === 6) { // Assuming 'resume' is the 7th column
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
                    var resumeCell = 'G' + rowIdx;

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

    
</body>
</html>
