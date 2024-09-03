<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reschedule Interview</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-danger {
            font-size: 0.875rem;
        }
        .text-success {
            color: #28a745;
            font-size: 0.875rem;
        }
        .note {
            font-size: 0.875rem;
            color: #6c757d;
            margin-top: 1rem;
            border: 1px solid #d6d6d6;
            border-radius: 0.25rem;
            padding: 0.75rem;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="mb-4">Reschedule Interview</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('interview.reschedule.submit', $application->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="new_date">New Date</label>
                    <input type="date" name="new_date" id="new_date" class="form-control" value="{{ old('new_date') }}" required>
                    @error('new_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="note">
                 <p><strong>Important:</strong> You may only reschedule your interview at intervals of 7 days after the originally scheduled date. Rescheduling outside this interval is not allowed.</p>
                </div>

                <button type="submit" class="btn btn-primary">Reschedule</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newDateInput = document.getElementById('new_date');
            const today = new Date();
            const sevenDaysLater = new Date(today);
            sevenDaysLater.setDate(today.getDate() + 7);

            // Format dates to YYYY-MM-DD
            const formattedToday = today.toISOString().split('T')[0];
            const formattedSevenDaysLater = sevenDaysLater.toISOString().split('T')[0];

            // Set min and max attributes
            newDateInput.setAttribute('min', formattedToday);
            newDateInput.setAttribute('max', formattedSevenDaysLater);
        });
    </script>
</body>
</html>
