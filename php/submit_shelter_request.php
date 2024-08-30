<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelter Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light background color */
            color: #333; /* Dark text color for contrast */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 100%;
            max-width: 500px; /* Maximum width of the form */
        }
        h2 {
            text-align: center;
            color: #4a90e2; /* Blue color for the heading */
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc; /* Light border */
            border-radius: 4px; /* Slightly rounded corners */
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4a90e2; /* Blue background for the button */
            color: white;
            border: none;
            padding: 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #357ABD; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Shelter Request Form</h2>
        <form method="post" action="submit_shelter_request_landing.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
            
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            
            <input type="submit" value="Submit Shelter Request">
        </form>
    </div>
</body>
</html>
