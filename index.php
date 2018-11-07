<?php
    session_start();
    
    //include 'inc/dbConnection.php';
    include 'inc/functions.php';
    //$dbConn = startConnection("project");
    
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    if(isset($_POST['itemName'])) {
        //Storing the POST values into an array for later use
        $newItem = array();
        $newItem['name'] = $_POST['itemName'];
        $newItem['year'] = $_POST['itemYear'];
        $newItem['director'] = $_POST['itemDirector'];
        $newItem['actors'] = $_POST['itemActors'];
        $newItem['rating'] = $_POST['itemRating'];
        $newItem['image'] = $_POST['itemImage'];
        $newItem['id'] = $_POST['itemId'];
        
        //Checking to see if this is already in our cart
        //We use &$item to pass by reference
        foreach($_SESSION['cart'] as &$item) {
            if ($newItem['id'] == $item['id']) {
                $item['quantity'] += 1;
                $found = true;
            }
        }
        
        if ($found != true) {
            $newItem['quantity'] = 1;
            array_push($_SESSION['cart'], $newItem);
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <title>Bootleg</title>
        <!--<link rel="stylesheet" href="css/styles.css" type="text/css" />-->
        <style>
            h1, form{
                text-align:center;
            }
            footer {
                text-align: center;
                padding: 10px;
                margin-top: 250px;
            }
        </style>
    </head>
    <body>
        
        <!-- Bootstrap Navagation Bar -->
        <nav class='navbar navbar-default - navbar-fixed-top'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <a class='navbar-brand' href='#'>Bootleg</a>
                </div>
                  <ul class='nav navbar-nav'>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='scart.php'>
                    <span class ='glyphicon glyphicon-shopping-cart' aria-hidden ='true'></span>
                    </span>Cart: <?php displayCartCount(); ?></a></li>
                </ul>
            </div>
        </nav>
        <br /> <br /> <br />
        
        <h1> Bootleg </h1>
        
        <form>
            
            Search: <input type="text" name="movieName" placeholder="Search by title, director, or actor" style="width: 250px" />
            
            
            <br><br>
            Genre:
                <select name="genre">
                    <option value=""> Select one </option>
                    <?=displayGenres()?>
                </select>
            <br><br>
            Search By:
            <br>
            Year <input type="radio" name="searchBy" value="yearOrder">
            Name  <input type="radio" name="searchBy" value="nameOrder">
            Rating  <input type="radio" name="searchBy" value="ratingOrder">
            <br><br>
            Order By:
            <br>
            ASC <input type="radio" name="orderBy" value="ac">
            DESC <input type="radio" name="orderBy" value="dc">
            <br><br>
            <input type="submit" name="searchForm" value="Search"/>
        </form>
        <br>
        <hr>
        
        <?= filterMovies() ?>
        
        <br /><br />
        <footer>
            <!--<span class = "current">CST 336 &copy; 2018 Isaac Avila</span> <br />-->
            
            <br />
            <strong> Disclaimer:</strong> The information in this website is fake. It is used for academic purposes only.
            <br />
            
            <!--<figure>-->
            <!--    <img src = "img/buddy.png" width = '70'> -->
            <!--</figure>-->
        </footer>
        
    </body>
</html>