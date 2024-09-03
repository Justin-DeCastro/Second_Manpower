<!DOCTYPE html>
<html>
<head>
    <title>Reschedule Interview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-top: 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            max-width: 300px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        p.success {
            color: green;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reschedule Your Interview</h2>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <!-- resources/views/reschedule.blade.php -->
<form action="{{ route('interview.process_reschedule', ['id' => $application->id]) }}" method="POST">
    @csrf
    <label for="new_date">New Interview Date:</label>
    <input type="date" id="new_date" name="new_date" required>
    <button type="submit">Submit Reschedule Request</button>
</form>

    </div>
</body>
</html>
