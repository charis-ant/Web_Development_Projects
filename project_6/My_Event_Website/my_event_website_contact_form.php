<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'eventdb');

    
    $dbhost = DB_SERVER;
    $dbuser = DB_USERNAME;
    $dbpass = DB_PASSWORD;
    $dbname = DB_DATABASE;

    $dbConnection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $content = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$content')";

    mysqli_query($dbConnection, $sql);
    
    header("Location: my_event_website_contact.html");
    exit();
?>