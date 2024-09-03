<!DOCTYPE html>
<html>
<head>
    <title>Interview Rescheduled</title>
    <style>
        /* Add some basic styling for the message */
        .container {
            padding: 20px;
        }
        .message {
            padding: 15px;
            border-radius: 5px;
            background-color: #d4edda; /* Light green background for success message */
            color: #155724; /* Dark green text color */
            border: 1px solid #c3e6cb; /* Light green border */
            margin-bottom: 20px;
        }
        .button {
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            background-color: #007bff; /* Blue color for button */
            border: none;
        }
        .button:hover {
            background-color: #0056b3; /* Darker blue for hover effect */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Interview Rescheduled</h2>
        
        <div class="message">
            <p>I am requesting to reschedule my interview on {{ $newDate }}.</p>
        </div>

        
    </div>
</body>
</html>
