<?php

// Starting Session
session_start();

// Variable To Store Error Message
$error = '';


if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {

        $error = "Username or Password is invalid";
    } else {

        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        // mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost", "root", "", "srsomgcd_piclick");

        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT username, password from users where username=? AND password=?";

        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        //fetching the contents of the row
        if ($stmt->fetch()) {

            // Initializing Session
            $_SESSION['login_user'] = $username;

            // Redirecting To Profile Page
            $text="Email and Password Does not Match!";
            header("location:  sign_in.php?text=$text");
        }
    }

    // Closing Connection
    mysqli_close($conn);
}