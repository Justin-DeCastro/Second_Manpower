<!DOCTYPE html>
<html>
<head>
    <title>Interview Status Update</title>
    <style>
        .container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            background-color: #007bff; /* Blue color for confirm button */
        }
        .message {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dear {{ $name }},</h2>

        <p class="message">We would like to inform you that your interview status has been updated to <strong>Pending</strong>.</p>

        <p class="message">To confirm your interview and finalize your status, please click the button below:</p>

        <a href="{{ route('interview.accept', $application->id) }}" class="button">Confirm Interview</a>

        <p>If you have any questions or need to reschedule, please contact us as soon as possible.</p>

        <p>Best regards,</p>
        <p>ABIC Manpower Service Corp</p>
    </div>
</body>
</html>
