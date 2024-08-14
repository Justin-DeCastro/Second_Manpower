<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

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
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-removebg-preview.png">
    <!-- CSS Files -->
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
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
                        <h3 class="fw-bold mb-3">Update Profile Information</h3>
                        <ul class="breadcrumbs mb-3">
                            <!-- Breadcrumbs -->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addProfileModal">
                                       Click to add  profile
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="profilesTable">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Professions</th>
                                                    <th>Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Populate with profile data -->
                                                @foreach($profiles as $profile)
    <tr>
        <td>{{ $profile->title }}</td>
        <td>{{ $profile->description }}</td>
        <td>{{ $profile->profession }}</td>
        <td>
            @if($profile->image)
                <img src="{{ asset($profile->image) }}" alt="Profile Image" height="100">
            @endif
        </td>
     <td>
    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal{{ $profile->id }}" data-id="{{ $profile->id }}" data-title="{{ $profile->title }}" data-description="{{ $profile->description }}" data-profession="{{ $profile->profession }}" data-image="{{ $profile->image }}">Edit</button>
    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProfileModal{{ $profile->id }}">Delete</button>
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
           <div class="modal fade" id="addProfileModal" tabindex="-1" aria-labelledby="addProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('companyprofiles.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addProfileModalLabel">Add Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <div class="form-text text-muted" style="color:red;">File must be 5MB or less.</div>
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

           @foreach ($profiles as $profile)
    <div class="modal fade" id="editProfileModal{{ $profile->id }}" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel{{ $profile->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editProfileForm{{ $profile->id }}" method="POST" action="{{ route('companyprofiles.update', $profile->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfileModalLabel{{ $profile->id }}">Update Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editTitle{{ $profile->id }}">Title</label>
                            <input type="text" class="form-control" id="editTitle{{ $profile->id }}" name="title" value="{{ $profile->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="editDescription{{ $profile->id }}">Description</label>
                            <textarea class="form-control" id="editDescription{{ $profile->id }}" name="description" required>{{ $profile->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="editProfession{{ $profile->id }}">Profession</label>
                            <input type="text" class="form-control" id="editProfession{{ $profile->id }}" name="profession" value="{{ $profile->profession }}" required>
                        </div>
                        <div class="form-group">
                            <label for="editImage{{ $profile->id }}">Image</label>
                            <input type="file" class="form-control" id="editImage{{ $profile->id }}" name="image">
                            @if($profile->image)
                                <img src="{{ asset($profile->image) }}" id="editImagePreview{{ $profile->id }}" height="100" class="mt-2">
                            @endif
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

            <!-- End Edit Profile Modal -->

        </div>
    </div>
@foreach ($profiles as $profile)
<div class="modal fade" id="deleteProfileModal{{ $profile->id }}" tabindex="-1" aria-labelledby="deleteProfileModalLabel{{ $profile->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteProfileForm{{ $profile->id }}" method="POST" action="{{ route('companyprofiles.destroy', $profile->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProfileModalLabel{{ $profile->id }}">Delete Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this profile?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
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
    
</script>
    <script>
$(document).ready(function () {
    // Initialize DataTable
    $('#profilesTable').DataTable({
        responsive: true,
        buttons: ['print', 'copy', 'csv', 'pdf'],
        language: {
            search: "Search: ",
            searchPlaceholder: "Search here..."
        }
    });

    // Optional: Bind the function to the form submit event for better user experience
    $(document).on('submit', 'form[id^="editProfileForm"]', function(e) {
        e.preventDefault();
        var formId = $(this).attr('id');
        var profileId = formId.replace('editProfileForm', '');
        updateProfile(profileId);
    });
});

function updateProfile(profileId) {
    // Create a FormData object from the form
    var formData = new FormData($('#editProfileForm' + profileId)[0]);

    // Construct the URL for the AJAX request
    var url = "{{ route('companyprofiles.update', ':id') }}".replace(':id', profileId);

    $.ajax({
        url: url,
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Display success message on the page
            $('#successMessage').text(response.message);
            $('#successMessage').show(); // Show the success message div

            // Optionally, you can hide the modal if needed
            $('#editProfileModal' + profileId).modal('hide');

            // Optionally, you can reload the page after a delay
            setTimeout(function() {
                location.reload();
            }, 3000); // Reload after 3 seconds (3000 milliseconds)
        },
        error: function(xhr, status, error) {
            console.error('Error updating Profile:', error);
            // Optionally, display an error message
            $('#errorMessage').text('Failed to update Profile. Please try again.');
            $('#errorMessage').show(); // Show the error message div
        }
    });
}
    </script>

</body>

</html>
