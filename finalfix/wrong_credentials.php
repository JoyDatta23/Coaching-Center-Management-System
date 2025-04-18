

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrong Username or Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        background-size: cover;
        }
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: fit-content;
            flex-direction: column;
            padding: 20px; /* Add some padding to give space between content and border */
            max-width: 500px; /* Set a maximum width for the container */
            margin: auto; /* Center the container horizontally */
            margin-top: 50px; /* Add some space from the top */
            text-align: center; /* Center the text */
        }
        
    .btn-outline-success:hover {
    transform: scale(1.45); /* Increase the size on hover */
    transition: transform 0.5s ease; /* Add a smooth transition */
    }



    </style>
</head>
<body >
    <div class="center-container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Wrong Username or Password</h4>
        <p>Please enter the correct credentials.</p>
        <hr>
        <a href="login.php" class="btn btn-outline-success">Return to Log in</a>
    </div>
    </div>
</body>
</html>
