<?php

session_start();

//include 'inc/dbConnection.php';
include 'inc/functions.php';
//$dbConn = startConnection("project");

// function displayCart(){
//     if(isset($_SESSION['cart'])) {
        
//         echo "<table class='table'>";
//         foreach ($_SESSION['cart'] as $item) {

//             $itemId = $item['id'];
//             $itemQuant = $item['quantity'];
            
//             echo "<tr>";
            
//             //display data for item
//             echo "<td><img src ='" .$item['img']. "'></td>";
//             echo "<td><h4>" .$item['name']. "</h4></td>";
//             echo "<td><h4>" .$item['price']. "</h4></td>";
            
//             //update for this item
//             echo '<form method = "post">';
//             echo "<input type ='hidden' name='itemId' value ='$itemId'>";
//             echo "<td><input type='text' name ='update' class = 'form-control' placeHolder= '$itemQuant'></td>";
//             echo '<td><button class = "btn btn-danger">Update</button></td>';
//             echo '</form>';
            
//             //deletion
//             echo "<form method = 'post'>";
//             echo "<input type = 'hidden' name='removeId' value = '$itemId'>";
//             echo "<td><button class = 'btn btn-danger'>Remove</button></td>";
//             echo '</form>';
        
//             echo '</tr>';
//         }
//         echo "</table>";
        
//         //delete all
//         echo "<form method = 'post'>";
//         echo "<input type = 'hidden' name='removeAll' value = '1'>";
//         echo "<button class = 'btn btn-danger'>Remove All</button>";
//         echo '</form>';
//     }
// }

// function displayCartCount() {
//     echo count($_SESSION['cart']);
// }

// function addRemove() {
//     //if rmoveId sent, search cart for itemId
//     if (isset($_POST['removeId'])) {
//         foreach ($_SESSION['cart'] as $itemKey => $item){
//             if($item['id'] == $_POST['removeId']) {
//                 unset($_SESSION['cart'][$itemKey]);
//             }
//         }
//     }
    
//     if(isset($_POST['itemId'])) {
//         foreach ($_SESSION['cart'] as &$item) {
//             if ($item['id'] == $_POST['itemId']) {
//                 $item['quantity'] = $_POST['update'];
//             }
//         }
//     }
    
//     if (isset($_POST['removeAll'])) {
//         if($_POST['removeAll'] == 1) {
//             $_SESSION['cart'] = array();
//             unset($_POST['removeAll']);
//         }
        
//     }
    
//     //Calling addRemove so it always runs.
//     //addRemove();
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Shopping Cart</title>
    </head>
    <body>
        <div class='container'>
            <div class='text-center'>
                
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
                <h2>Shopping Cart</h2>
                <!-- Cart Items -->
                <?php 
                    displayCart();
                    addRemove(); 
                    if($_POST['removeAll']) {
                        $rem = $_POST['removeAll'];
                        echo "$rem <br />";
                    }
                ?>
            </div>
        </div>
    </body>
</html>