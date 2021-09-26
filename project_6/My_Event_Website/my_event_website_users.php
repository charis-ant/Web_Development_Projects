<!DOCTYPE html>
<html>
  <head>
        <title>Synedrio - Subscribed Users</title>
        <script src="my_event_website.js" defer></script>
        <link rel="stylesheet" href="my_event_website.css">
        <style>
            table{
                margin-top: 20px;
            }

            tbody{
                display: table;
                margin: auto;
                justify-content: center;
                align-items: center;
                width: 70%;
            }

            tr{
                text-align: center;
                border: 1px solid #5a6431;
            }

            th{
                padding: 10px;
                background-color: #5a6431;
            }

            td{
                padding: 10px;
                background-color: rgb(253, 252, 252);
                border: 1px solid #5a6431;
            }

            .c-t-a{
                border-radius: 25px;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="navigation">
            <a href="my_event_website_home.html"><img src="images_e18011/synedrio_logo2.png" alt="company logo"/></a>
            <nav>
                <div class="icon-bar" onclick="Show()">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <span id="nav-menu"> 
                    <a href="my_event_website_home.html" target="_self">HOME</a>
                    <a href="my_event_website_company.html" target="_self">COMPANY</a>
                    <a href="my_event_website_calculate_cost.html" target="_self">CALCULATE COST</a>
                    <a href="my_event_website_contact.html" target="_self">CONTACT</a>
                    <a href="my_event_website_newsletter.html" target="_self">NEWSLETTER</a>
                </span>
            </nav>
        </div>
        <div class="container">
            <header class="section-name">Subscribed Newsletter Users</header>
            <div class="button">
                <button class="c-t-a" type="button" onclick="display_table_function()">Show Newsletter Users</button>
            </div>
            <div>
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
                
                $result = mysqli_query($dbConnection, "SELECT * FROM users");
                
                echo "<table id='users-table' cellpadding='0' cellspacing='0' style='display:none'>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>";
                    while ($data = mysqli_fetch_row($result)){
                        echo "<tr>";
                        echo "<td align=center>$data[0]</td>";
                        echo "<td align=center>$data[1]</td>";
                        echo "<td align=center>$data[2]</td>";
                        echo "</tr>";
                    }
                echo "</table>";
                ?>
                <script>
                    function display_table_function()
                    {
                        if (document.getElementById("users-table").style.display === "none")
                            document.getElementById("users-table").style.display="block";
                    }
                </script>
            </div>
        </div>
        <footer>
            <button class="button-footer">
                <a href="my_event_website_users.php" target="_self">Subscribed Users</a>
            </button>
        </footer>
  </body>
</html>