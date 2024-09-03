<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
    <link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="Admin/assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Components.admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <!-- Logo Header and Navbar Header omitted for brevity -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Job Offer</h3>
                        <ul class="breadcrumbs mb-3">
                            <!-- Breadcrumbs -->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Job Offer Details</h4>
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addJobModal">
                                        Add Job Offer
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="jobOffersTable">
                                            <thead>
                                                <tr>
                                                    <th>Location</th>
                                                    <th>Job Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($joboffer as $job)
                                                <tr>
                                                    <td>{{ $job->location }}</td>
                                                    <td>{{ $job->title }}</td>
                                                    <td>
        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editJobModal{{ $job->id }}" data-id="{{ $job->id }}" data-location="{{ $job->location }}" data-title="{{ $job->title }}">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteJobModal{{ $job->id }}" data-id="{{ $job->id }}">Delete</button>
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

            <!-- Add Job Modal -->
            <div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="addJobModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="addJobForm" method="POST" action="{{ route('adminjob.add') }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addJobModalLabel">Add Job Offer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="mb-3">
                                    <label for="job_title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" id="job_title" name="title" required>
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

            <!-- Edit Job Modal -->
           <!-- Edit Job Modal -->
@foreach($joboffer as $job)
<div class="modal fade" id="editJobModal{{ $job->id }}" tabindex="-1" aria-labelledby="editJobModalLabel{{ $job->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editJobForm{{ $job->id }}" method="POST" action="{{ route('adminjob.update', $job->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editJobModalLabel{{ $job->id }}">Edit Job Offer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editLocation{{ $job->id }}" class="form-label">Location</label>
                        <input type="text" class="form-control" id="editLocation{{ $job->id }}" name="location" value="{{ $job->location }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editJobTitle{{ $job->id }}" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="editJobTitle{{ $job->id }}" name="title" value="{{ $job->title }}" required>
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


            <!-- Delete Job Modal -->
            @foreach($joboffer as $job)
            <div class="modal fade" id="deleteJobModal{{ $job->id }}" tabindex="-1" aria-labelledby="deleteJobModalLabel{{ $job->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('adminjob.destroy', $job->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteJobModalLabel{{ $job->id }}">Delete Job Offer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this job offer?</p>
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

        </div>
    </div>

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
    <script src="Admin/assets/js/plugin/jsvectormap/maps/world.js"></script>
    <script src="Admin/assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="Admin/assets/js/plugin/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="Admin/assets/js/kaiadmin.min.js"></script>
    <script src="Admin/assets/js/demo.js"></script>

    <!-- Custom Scripts -->
  <!-- Include SweetAlert2 -->
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.min.js"></script>


<script>

$(document).ready(function() {
    // Add job
    $('#addJobForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

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
                    location.reload(); // Reload page or update the table with the new job offer
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to add job offer. Please try again.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true
                });
            }
        });
    });

    // Edit job
    $('form[id^="editJobForm"]').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);
        var jobId = form.attr('id').replace('editJobForm', '');

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
                    $('#editJobModal' + jobId).modal('hide');
                    location.reload(); // Reload page or update table row
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to update job offer. Please try again.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true
                });
            }
        });
    });

    // Delete job
    $('form[id^="deleteJobForm"]').on('submit', function(e) {
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
                    text: 'Failed to delete job offer. Please try again.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true
                });
            }
        });
    });
});
</script>



</body>
</html>
