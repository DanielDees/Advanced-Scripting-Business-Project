<?php
    // Author:      Dylan Porter
    // Date:        11/16/2017
    // Purpose:     Add a user to the database

    // TODO: change POST variables to match the form
    // TODO: redirect page to the correct place
    // TODO: add error catching for matching passwords and valid inputs

    // open connection to database
    require_once('connect.php');
    
    // grab all posted variables
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $account = $_POST['account'];
    var_dump($_POST);
    // sanitize user input
    $firstname = trim($firstname);
    $lastname = trim($lastname);
    $email = trim($email);
    $username = trim($username);
    $password = trim($password);
    $repassword = trim($repassword);
    $account = trim($account);
    
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $repassword = mysqli_real_escape_string($conn, $repassword);
    $account = mysqli_real_escape_string($conn, $account);
    $salt = strtoupper(bin2hex(openssl_random_pseudo_bytes(20)));
    
    // update database with the new user information
    $sql = 'INSERT INTO users (Id, first_name, last_name, email, username, account_type)
        VALUES (NULL, "' . $firstname . '", "' . $lastname . '", "' . $email . '", "' . $username . '", "' . strtoupper($account) . '")';
    
    $result = $conn->query($sql);
    
    $sql = 'INSERT INTO logins (id, username, password_hash, password_salt)
        VALUES (NULL, "' . $username . '", PASSWORD("' . $password . '"), "' . $salt . '" )';
    
    $result = $conn->query($sql);
    
    mysqli_close($conn);
    
    header("Location: dashboard.php");
?>