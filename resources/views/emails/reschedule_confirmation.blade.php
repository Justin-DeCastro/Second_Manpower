<!DOCTYPE html>
<html>
<head>
    <title>Interview Rescheduled</title>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        .decline-button {
            background-color: #f44336; /* Red */
        }
    </style>
</head>
<body>
    <p>Dear Hiring Admin,</p>

    <p>I would like to reschedule my interview to {{ $date }}.</p>

    



    <p>Thank you!</p>
        <a href="{{ route('acceptreschedule', ['applicationId' => $application->id]) }}" class="button">Accept</a>
   <a href="{{ route('decline.reschedule', ['id' => $application->id]) }}" class="button decline-button">Decline</a>

</body>
</html>
