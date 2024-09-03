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
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    Upload Company Details
                </button>
            </div>
            <ul class="breadcrumbs mb-3">
                <!-- Breadcrumb items can be added here if needed -->
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Accredited Company</h4>
                        <div class="dt-buttons btn-group d-flex justify-content-end gap-2">
                            <!-- Uncomment and adjust if needed -->
                            <!-- <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-export'></i> Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button type="button" id="copyBtn" class="btn dropdown-item"><i
                                                class='bx bx-copy'></i> Copy</button></li>
                                    <li><button type="button" id="printBtn" class="btn dropdown-item"><i
                                                class='bx bx-printer'></i> Print</button></li>
                                    <li><button type="button" id="excelBtn" class="btn dropdown-item"><i
                                                class='bx bx-file'></i> Excel</button></li>
                                    <li><button type="button" id="pdfBtn" class="btn dropdown-item"><i
                                                class='bx bxs-file-pdf'></i> Pdf</button></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="myDataTable">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Company Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->name }}</td>
                                        <td><img src="{{ asset($company->image) }}" alt="Company Image" style="max-width: 100px;"></td>
                                        <td>
                                            <!-- Update Button -->
                                          

                                            <!-- Delete Button -->
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCompanyModal{{ $company->id }}">Delete</button>
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
    </div>
</div>


<!-- Add this code inside the <body> tag, preferably after the main panel div -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="companyname" placeholder="Enter company name">
                        </div>
                        <div class="mb-3">
                            <label for="companyImage" class="form-label">Company Image</label>
                            <input type="file" class="form-control" id="companyImage" name="companyimage">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Company Details</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Add this button where you want to trigger the modal -->
@foreach($companies as $company)
<div class="modal fade" id="editCompanyModal{{ $company->id }}" tabindex="-1" aria-labelledby="editCompanyModalLabel{{ $company->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editCompanyForm{{ $company->id }}" method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editCompanyModalLabel{{ $company->id }}">Edit Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editCompanyName{{ $company->id }}" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="editCompanyName{{ $company->id }}" name="companyname" value="{{ $company->companyname }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCompanyImage{{ $company->id }}" class="form-label">Company Image</label>
                        <input type="file" class="form-control" id="editCompanyImage{{ $company->id }}" name="companyimage">
                        <img src="{{ asset('storage/' . $company->companyimage) }}" alt="Company Image" class="img-fluid mt-2" style="max-height: 150px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!--delete-->
@foreach($companies as $company)
<div class="modal fade" id="deleteCompanyModal{{ $company->id }}" tabindex="-1" aria-labelledby="deleteCompanyModalLabel{{ $company->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteCompanyModalLabel{{ $company->id }}">Delete Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this company?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach



    <script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="Admin/assets/js/core/popper.min.js"></script>
    <script src="Admin/assets/js/core/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
    // Edit company
    $('form[id^="editCompanyForm"]').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);
        var companyId = form.attr('id').replace('editCompanyForm', '');

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message,
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    $('#editCompanyModal' + companyId).modal('hide');
                    location.reload(); // Reload page or update table row
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to update company details. Please try again.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true
                });
            }
        });
    });

    // Delete company
    $('form[id^="deleteCompanyForm"]').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message,
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    location.reload(); // Reload page or update table
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to delete company. Please try again.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true
                });
            }
        });
    });
});

</script>
    <script>
        $(document).ready(function () {

            var dataTable = $('#myDataTable').DataTable({

                responsive: true, // Enable Responsive extension
                inlineEditing: true,

                buttons: [
                    'print', 'copy', 'csv', 'pdf'
                ],

                "language": {
                    "search": "Search: ",
                    "searchPlaceholder": "Search here..."
                }
            });
            // responsive: true
            // autoFill: true

            // Button click events
            $('#printBtn').on('click', function () {
                dataTable.button('.buttons-print').trigger();
            });
            $('#copyBtn').on('click', function () {
                dataTable.button('.buttons-copy').trigger();
            });

            $('#excelBtn').on('click', function () {
                dataTable.button('.buttons-csv').trigger();
            });

            $('#pdfBtn').on('click', function () {
                dataTable.button('.buttons-pdf').trigger();
            });


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
