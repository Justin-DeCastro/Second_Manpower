<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interview Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
            text-align: center;
        }
        .message {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello, {{ $data['name'] }}</h2>
        <div class="message">
            <p>Congratulations! We are pleased to inform you that you have been selected for an interview. Please find the details below:</p>
            <ul>
                <li><strong>Name:</strong> {{ $data['name'] }}</li>
                <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                {{-- <li><strong>Interview Date:</strong> {{ $data['interview_date'] }}</li>
                <li><strong>Interview Time:</strong> {{ $data['interview_time'] }}</li>
                <li><strong>Interview Location:</strong> {{ $data['interview_location'] }}</li> --}}
            </ul>
            <p>We look forward to meeting you!</p>
        </div>
    </div>
</body>
</html>
