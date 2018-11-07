<?php

session_start();
//include 'inc/dbConnection.php';
include 'inc/functions.php';
//$dbConn = startConnection("project");

// function displayProductInfo(){
//     global $dbConn;
    
    
//     $movId = $_GET['movId'];
//     $sql = "SELECT *
//             FROM proj_movies
//             WHERE movId = $movId";
//     //NATURAL RIGHT JOIN om_product
    
//     //$np = array();
//     //$np[$movId] = $movId;
    
//     $stmt = $dbConn->prepare($sql);
//     $stmt->execute();
//     $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll returns an Array of Arrays
    
//     //echo $records[0]['productName'] . "<br>";
//     echo "<img src='" . $records[0]['image'] . "'  width='150'/><br>";
    
//     foreach ($records as $record) {
//         echo "<strong>Title</strong>";
//         echo "<br>";
//         echo $record[title];
//         echo "<br><br>";
//         echo "<strong>Year:</strong> ";
//         echo $record[year]; 
//         echo "<br><br>";
//         echo "<strong>Directed by:</strong>"; 
//         echo "<br>";
//         echo $record[director]; 
//         echo "<br><br>";
//         echo "<strong>Starring:</strong>"; 
//         echo "<br>";
//         echo $record[actors]; 
//         echo "<br><br>";
//     }
    
//     // echo "<table>";
//     // echo "<tr>";
//     // echo "<th>Title </th><th>Year </th><th>Actors</th>";
        
//     // foreach ($records as $record) {
//     //     echo "<tr>";    
//     //     echo "<td>" . $record[title] . "</td>";
//     //     echo "<td>" . $record[year] . "</td>";
//     //     echo "<td>" . $record[actors] . "</td>";
//     //     echo "</tr>";
//     // }
//     // echo "</table>";
    
    
//     //print_r($records);
// }


?>


<!DOCTYPE html>
<html>
    <head>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        
        <title> Movie Info </title>
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

        <div class='container'>
            <div class='text-center'>
                <h2>Movie Info</h2>
                
                <?=displayProductInfo()?>
            </div>
        </div>
        
    </body>
</html>