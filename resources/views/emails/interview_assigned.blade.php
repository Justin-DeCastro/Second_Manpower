<!DOCTYPE html>
<html>
<head>
    <title>Interview Invitation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
            position: relative;
        }
        .buttons {
            display: flex;
            justify-content: flex-start; /* Align items to the start (left side) */
            gap: 20px; /* Increased space between buttons */
            margin-top: 20px;
        }
        .button {
            padding: 15px 30px; /* Increased padding */
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: inline-block; /* Ensure buttons respect padding and margins */
        }
        .button:hover {
            transform: translateY(-2px);
        }
        .accept {
            background-color: #28a745; /* Green color for accept */
        }
        .accept:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .decline {
            background-color: #dc3545; /* Red color for decline */
        }
        .decline:hover {
            background-color: #c82333; /* Darker red on hover */
        }
        .reschedule {
            background-color: #D12765; /* Light pink color for reschedule */
        }
        .reschedule:hover {
            background-color: #a01a5e; /* Slightly darker pink on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dear {{ $name }},</h2>

        <p>We are pleased to inform you that your interview has been scheduled for <strong>{{ $date }}</strong>.</p>
        <p>Please ensure that you are available at the given time. If you need to reschedule, kindly let us know as soon as possible.</p>

        <p>Best regards,</p>
        <p>ABIC Manpower Service Corp</p>

        <div class="buttons">
            <a href="{{ route('interview.accept', $application->id) }}" class="button accept">Accept</a>
            <a href="{{ route('interview.decline', $application->id) }}" class="button decline">Decline</a>
            <a href="{{ route('interview.reschedule', $application->id) }}" class="button reschedule">Reschedule</a>
        </div>
    </div>
</body>
</html>
