<html>
<head>
    <title>Registration Page</title>
    <style>
        /* Add some styling to the body */
        body {
            background-image: url("https://free4kwallpapers.com/uploads/originals/2020/05/11/gradient-wallpaper.jpg");

            background-size: cover; /* Make the background image cover the entire page */
        }
        
        /* Add some styling to the form container */
        .form-container {
            width: 500px;
            margin: 50px auto; /* Center the form container on the page */
            background-color: rgba(255, 255, 255, 0.8); /* Add a transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px #ccc;
        }
        
        /* Add some styling to the form elements */
        input[type="text"], input[type="password"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9f9f9; /* Add a light gray background to the input fields */
        }
        
        /* Add some styling to the submit button */
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s; /* Add a transition effect to the submit button */
        }
        
        /* Add some styling to the form title */
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #4CAF50;
        }
        
        /* Add some styling to the error message */
        .error {
            color: red;
            font-size: 14px;
        }
        
        /* Add some hover effect to the submit button */
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration</h2>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
                    <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone">
            <br>
            <input type="submit" name="register" value="Register">
        </form>
        <?php
        if(isset($_POST['register'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $conn = new mysqli("host", "username", "password", "database");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "INSERT INTO users (name,username, password, email,phone) VALUES ('$name','$username', '$password', '$email','$phone')";
            $result = $conn->query($query);

            if($result) {
                echo "<div class='success'>Registration successful. You can now log in.</div>";
            } else {
                echo "<div class='error'>An error occurred. Please try again.</div>";
            }
        }
        ?>
    </div>
</body>
</html>

