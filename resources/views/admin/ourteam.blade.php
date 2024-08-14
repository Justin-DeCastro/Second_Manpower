<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Fonts and icons -->
    <script src="Admin/assets/js/plugin/webfont/webfont.min.js"></script>
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
    <link rel="shortcut icon" type="xicon" href="images/logo-removebg-preview.png">
    <!-- CSS Files -->
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="Admin/assets/css/demo.css">
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
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
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
    <!-- Update Modal -->
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

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteManpowerModal{{ $executive->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteManpowerModalLabel{{ $executive->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteManpowerModalLabel{{ $executive->id }}">Delete Executive</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="deleteManpowerTitle">Are you sure you want to delete this executive?</p>
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



    <!-- Scripts -->
    <script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="Admin/assets/js/core/popper.min.js"></script>
    <script src="Admin/assets/js/core/bootstrap.min.js"></script>
    <script src="Admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="Admin/assets/js/plugin/chart.js/chart.min.js"></script>
    <script src="Admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="Admin/assets/js/plugin/chart-circle/circles.min.js"></script>
    <script src="Admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="Admin/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="Admin/assets/js/plugin/jsvectormap/world.js"></script>
    <script src="Admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="Admin/assets/js/kaiadmin.min.js"></script>
    <script src="Admin/assets/js/setting-demo.js"></script>
    <script src="Admin/assets/js/demo.js"></script>


<script>
    $(document).ready(function () {
        // Initialize DataTable for #myDataTable
        $('#myDataTable').DataTable({
            responsive: true,
            pageLength: 10, // Set the number of rows per page
            lengthMenu: [10, 25, 50, 100], // Options for page length
            buttons: ['print', 'copy', 'csv', 'pdf'],
            language: {
                search: "Search: ",
                searchPlaceholder: "Search here..."
            }
        });

        // Populate Update Modal
        $(document).on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var executiveId = button.data('id'); // Extract info from data-* attributes
            var executiveName = button.data('name');
            var executivePosition = button.data('position');
            var executiveImage = button.data('image');

            if (button.hasClass('edit-btn')) {
                var modal = $('#updateModal' + executiveId);
                var form = modal.find('form');
                var actionUrl = form.attr('action').replace(':id', executiveId);
                form.attr('action', actionUrl);

                modal.find('#updateCompanyName' + executiveId).val(executiveName);
                modal.find('#updatePosition' + executiveId).val(executivePosition);

                if (executiveImage) {
                    modal.find('#updateCompanyImage' + executiveId).val(''); // Clear the input to show new image
                    modal.find('#updateImagePreview' + executiveId).attr('src', '/' + executiveImage).show();
                } else {
                    modal.find('#updateImagePreview' + executiveId).hide();
                }
            } else if (button.hasClass('delete-btn')) {
                var modal = $('#deleteManpowerModal' + executiveId);
                var form = modal.find('form');
                var actionUrl = form.attr('action').replace(':id', executiveId);
                form.attr('action', actionUrl);

                modal.find('#deleteManpowerTitle').text('Are you sure you want to delete ' + executiveName + '?');
            }
        });

        // Validate file size on file input change
        $(document).on('change', 'input[type="file"]', function () {
            var file = this.files[0];
            if (file && file.size > 10 * 1024 * 1024) { // 10MB
                $('#fileSizeWarning').show();
            } else {
                $('#fileSizeWarning').hide();
            }
        });
    });
</script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>

</html>
