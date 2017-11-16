<?php
    session_start();
       
    // Author:      Dylan Porter
    // Date:        11/15/2017
    // Purpose:     Verify the login credentials of the user    
    
    
    //TODO: change the headers to redirect to the correct pages
    
  
    // open connection to database
    require_once('connect.php');
    
    // get user input and sanitize it
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // sanitize user input
    $username = trim($username);
    $password = trim($password);
    
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
    // get the password info from the database
    $sql = 'SELECT username, password_hash, password_salt 
            FROM logins 
            WHERE username="' . $username . '"';
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $db_hash = $row['password_hash'];
    $db_salt = $row['password_salt'];
    
    // hash the given password and store it
    $sql = 'SELECT PASSWORD("' . $password . '")';
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $hash = substr($row['PASSWORD("' . $password . '")'], 0, 40);
     
    // compare the database data to the provided password
    if ($hash . $db_salt == $db_hash . $db_salt)
    {
        // get the user information
        $sql = 'SELECT account_type, first_name, last_name, email
                FROM users
                WHERE username="' . $username . '"';
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        $account = $row['account_type'];
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $email = $row['email'];
        
        mysqli_close($conn);
        
        // check what permissions the user has
        // set session variables for user info
        if ($account == "AUTHOR")
        {
            $_SESSION['account'] = "author";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            
            echo "success";
            //header("Location: AUTHORPAGE.PHP");
        }
        else if ($role == "EDITOR")
        {
            $_SESSION['account'] = "editor";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            
            //header("Location: EDITORPAGE.PHP");
        }
        else if ($role == "ADMIN")
        {
            $_SESSION['account'] = "admin";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            
            //header("Location: ADMINPAGE.PHP");
        }
    }
    else
    {
        // tell user that the login information is incorrect
        header("Location: fhp_login.php?error=true");
        
        mysqli_close($conn);
    }
?>