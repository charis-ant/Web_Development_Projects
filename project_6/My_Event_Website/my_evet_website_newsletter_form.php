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

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $cookie_username = 'username';
    $cookie_username_value = $username;
    $cookie_name = 'name';
    $cookie_name_value = $name;
    $cookie_email = 'email';
    $cookie_email_value = $email;

    $sql = "INSERT INTO users (username, name, email) VALUES ('$username', '$name', '$email')";

    setcookie($cookie_username, $cookie_username_value, time() + (86400 * 10), "/");
    setcookie($cookie_name, $cookie_name_value, time() + (86400 * 10), "/");
    setcookie($cookie_email, $cookie_email_value, time() + (86400 * 10), "/");

    mysqli_query($dbConnection, $sql);

    if (isset($_COOKIE[$cookie_username]) && isset($_COOKIE[$cookie_name]) && isset($_COOKIE[$cookie_email])){
        echo "Cookies named '" .$cookie_username ."', '". $cookie_name ."' and '". $cookie_email . "' are set. Now redirecting...";
    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'my_event_website_newsletter.html';
    },3000);
</script>