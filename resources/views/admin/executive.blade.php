<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    
    <!-- Fonts and icons -->
    <script src="Admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <script>
        WebFont.load({
            google: { "families": ["Public Sans:300,400,500,600,700"] },
            custom: {
                "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['Admin/assets/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="Admin/assets/css/demo.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
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
                                    <span class="profile-username"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="images/logo-removebg-preview.png" alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text"></div>
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

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3"></h3>
                        <ul class="breadcrumbs mb-3">
                            <!-- Breadcrumbs -->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Details</h4>
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                        Click to add profile
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="myDataTable">
                                            <thead>
                                                <tr>
                                                    <th>Executive Name</th>
                                                    <th>Executive Position</th>
                                                    <th>Executive Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($executives as $executive)
                                                    <tr>
                                                        <td>{{ $executive->companyname }}</td>
                                                        <td>{{ $executive->position }}</td>
                                                        <td>
                                                            @if ($executive->companyimage)
                                                                <a href="{{ asset($executive->companyimage) }}" data-lightbox="executive-images" data-title="{{ $executive->companyname }}">
                                                                    <img src="{{ asset($executive->companyimage) }}" alt="{{ $executive->companyname }}" width="220" height="120">
                                                                </a>
                                                            @else
                                                                <p>No image available</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-sm update-btn" data-bs-toggle="modal" data-bs-target="#updateModal{{ $executive->id }}" data-id="{{ $executive->id }}" data-companyname="{{ $executive->companyname }}" data-position="{{ $executive->position }}" data-companyimage="{{ $executive->companyimage }}">
                                                                Update
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteManpowerModal{{ $executive->id }}">
                                                                Delete
                                                            </button>
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

            <!-- Add Profile Modal -->
            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadModalLabel">Upload Executive Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('executive.store') }}" enctype="multipart/form-data" id="uploadForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Executive Name</label>
                                    <input type="text" class="form-control" id="companyName" name="companyname" placeholder="Enter executive name">
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Executive Position</label>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter position">
                                </div>
                                <div class="mb-3">
                                    <label for="companyImage" class="form-label">Executive Image</label>
                                    <input type="file" class="form-control" id="companyImage" name="companyimage">
                                    <div id="fileSizeWarning" style="color: red; display: none; margin-top: 10px;">
                                        The file size exceeds 10MB. Please choose a smaller file.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Executive Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Profile Modal (Example) -->
            @foreach($executives as $executive)
            <div class="modal fade" id="updateModal{{ $executive->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel{{ $executive->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel{{ $executive->id }}">Update Executive Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('executives.update', $executive->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="updateCompanyName{{ $executive->id }}" class="form-label">Executive Name</label>
                                    <input type="text" class="form-control" id="updateCompanyName{{ $executive->id }}" name="companyname" value="{{ $executive->companyname }}" placeholder="Enter executive name">
                                </div>
                                <div class="mb-3">
                                    <label for="updatePosition{{ $executive->id }}" class="form-label">Executive Position</label>
                                    <input type="text" class="form-control" id="updatePosition{{ $executive->id }}" name="position" value="{{ $executive->position }}" placeholder="Enter position">
                                </div>
                                <div class="mb-3">
                                    <label for="updateCompanyImage{{ $executive->id }}" class="form-label">Executive Image</label>
                                    <input type="file" class="form-control" id="updateCompanyImage{{ $executive->id }}" name="companyimage">
                                    <div id="updateFileSizeWarning{{ $executive->id }}" style="color: red; display: none; margin-top: 10px;">
                                        The file size exceeds 10MB. Please choose a smaller file.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Executive Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Delete Profile Modal (Example) -->
            @foreach($executives as $executive)
            <div class="modal fade" id="deleteManpowerModal{{ $executive->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteManpowerModalLabel{{ $executive->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteManpowerModalLabel{{ $executive->id }}">Delete Executive</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this executive?</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ route('executives.destroy', $executive->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- JS Files -->
    <script src="Admin/assets/js/core/jquery.3.6.0.min.js"></script>
    <script src="Admin/assets/js/core/popper.min.js"></script>
    <script src="Admin/assets/js/core/bootstrap.min.js"></script>
    <script src="Admin/assets/js/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="Admin/assets/js/plugin/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="Admin/assets/js/plugin/lightbox2/lightbox.min.js"></script>
    <script src="Admin/assets/js/atlantis.min.js"></script>
    
    <!-- DataTable Initialization -->
    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable({
                "pagingType": "full_numbers"
            });

            // File Size Validation
            $('#uploadForm').on('submit', function(e) {
                var fileInput = $('#companyImage')[0];
                var file = fileInput.files[0];
                if (file && file.size > 10 * 1024 * 1024) { // 10MB
                    e.preventDefault();
                    $('#fileSizeWarning').show();
                } else {
                    $('#fileSizeWarning').hide();
                }
            });
        });
    </script>
</body>

</html>
