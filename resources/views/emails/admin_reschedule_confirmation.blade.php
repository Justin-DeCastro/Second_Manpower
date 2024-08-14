<!DOCTYPE html>
<html>
<head>
    <title>Reschedule Accepted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .message {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Interview Reschedule Confirmation</h1>
        </div>
        <div class="message">
            <p>Your rescheduled interview date on  {{ $newDate }} has been accepted successfully!</p>
            <p>Thank you for your prompt response.</p>
        </div>
        
    </div>
</body>
</html>
