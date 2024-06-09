<!DOCTYPE html>
<html>
<head>
    <title>Travel Itinerary Planner</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">

    <style>
        /* General styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #e2f899;
    margin: 0;
    padding: 0;
    color: #333;
}

h1, h2 {
    text-align: center;
    color: #333;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Container */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin-top: 50px;
}

/* Form styles */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="text"], input[type="password"], input[type="email"], input[type="number"], textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

button[type="submit"], .button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 10px 0;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover, .button:hover {
    background-color: #0056b3;
}

/* Plan display */
.plan {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 20px;
    margin: 20px 0;
    background-color: #f9f9f9;
}

.plan h2 {
    margin-top: 0;
}

.plan p {
    line-height: 1.6;
}

.plan .price {
    font-size: 1.2em;
    color: #007bff;
}

.plan a {
    display: inline-block;
    margin-top: 10px;
}

/* Navigation */
nav {
    background-color: #007bff;
    padding: 10px 0;
    color: white;
}

nav a {
    color: white;
    margin: 0 15px;
}

nav a:hover {
    text-decoration: underline;
}

/* Footer */
footer {
    text-align: center;
    padding: 20px 0;
    background-color: #007bff;
    color: white;
    margin-top: 50px;
}

footer a {
    color: white;
    margin: 0 15px;
}

footer a:hover {
    text-decoration: underline;
}

        </style>
</head>
<body>
    <h1>Welcome to the Travel Itinerary Planner</h1>
    <a href="admin/register.php">Admin Register</a>
    <a href="admin/login.php">Admin Login</a>
    <a href="user/register.php">User Register</a>
    <a href="user/login.php">User Login</a>
</body>
</html>
