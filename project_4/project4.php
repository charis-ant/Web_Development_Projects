<!DOCTYPE html>
<html>
  <head>
    <title>project4</title>
    <style>
        header{
            width: 100%;
            color: cadetblue;
            text-align: center;
        }

        footer{
            height: 90px;
            width: 100%;
            background-color: cadetblue;
            position: fixed;
            left: 0;
            bottom: 0;
            text-align: center;
        }

        table{
            width:50%;
            margin-left:auto;
            margin-right: auto;
        }

        h4{
            text-align: center;
        }

        form{
            justify-content: center; 
            display: flex;
        }

        div{
            margin-top: 5px;
            justify-content: center; 
            display: flex;
        }

        input{
            margin-left:5px;
        }
    </style>
  </head>
  <body>
    <header>
      <h1>Html experimentation with PHP</h1>
    </header>
    <?php 
            $products = array("Apples","Pears","Bannanas","Oranges");
            $prices = array(1, 1.5, 1, 2);
        ?>
    <section>
        <h4>Drop Down List</h4>
        <form method="post" action="">
            <label for="products">Choose a product:</label>
            <select name="products" id="products">
                <option value="">Select...</option>
                <option value="Apple">Apple</option>
                <option value="Pear">Pear</option>
                <option value="Bannana">Bannana</option>
                <option value="Orange">Orange</option>
            </select>
            <input type="submit" name="submit" class="btn" value="submit"/>
        </form>
        <div>
            <?php 
            if (isset( $_POST['submit'])) { 
                $selected = $_POST['products'];
                
                if ($selected == 'Apple'){
                    echo 'You have chosen: ' . $selected . ', ' . $prices[0] . '&euro; per kg';
                }
                if ($selected == 'Pear'){
                    echo 'You have chosen: ' . $selected . ', ' . $prices[1] . '&euro; per kg';
                }
                if ($selected == 'Bannana'){
                    echo 'You have chosen: ' . $selected . ', ' . $prices[2] . '&euro; per kg';
                }
                if ($selected == 'Orange'){
                    echo 'You have chosen: ' . $selected . ', ' . $prices[3] . '&euro; per kg';
                }
            }
            ?>
        </div>
    </section>
    <section>
        <h4>Prices Table</h4>
        <table border="1">
            <tr>
                <th>Product</th>
                <th>Price (per kg)</th>
            </tr>
        
            <tr>
                <td><?php echo $products[0]; ?></td>
                <td><?php echo $prices[0]; ?> &euro;</td>
            </tr>
        
            <tr>
                <td><?php echo $products[1]; ?></td>
                <td><?php echo $prices[1]; ?> &euro;</td>
            </tr>
        
            <tr>
                <td><?php echo $products[2]; ?></td>
                <td><?php echo $prices[2]; ?> &euro;</td>
            </tr>
        
            <tr>
                <td><?php echo $products[3]; ?></td>
                <td><?php echo $prices[3]; ?> &euro;</td>
            </tr>
        </table>
    </section><br>
    <footer>
        <h4>Contact Us</h4>
        <a href="tel:+30210 4142000">Telephone</a>
        <a href="mailto:harisantoniadi@gmail.com">Email</a>
        <a href="https://www.google.gr/maps/dir//University+of+Piraeus,+Karaoli+%26+Dimitriou+St.+80,+Pireas+185+34/@37.9416186,23.6179915,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x14a1bbe5bb8515a1:0x3e0dce8e58812705!2m2!1d23.6528681!2d37.9415137?hl=el" target="_blank">Location</a>
    </footer>
  </body>
</html>