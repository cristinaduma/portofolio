<?php
$my_all_pages=array
(
    "p2.php"=>"Pagina principala",
    "despre-noi.php"=>"Despre noi",
    "contact.php"=>"Contact",
    "blog.php"=>"Blogul meu",
    "shop.php"=>"Cumparaturi",
    "primul-blog.php"=>"Primul blog",
    "ofer-carti.php"=>"Ia o carte"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        echo $my_all_pages[basename($_SERVER['PHP_SELF'])];
    ?></title>
    <link rel="stylesheet" href="stylep2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bara_navigare">
        <ul class="lista" id="menu">

         
      <li> <a href="http://book-talking.local/demo/p2.php">HOME</a></li>
     
 <li> <a href="http://book-talking.local/demo/despre-noi.php">DESPRE NOI</a></li>
     <li><a href="http://book-talking.local/demo/contact.php">CONTACT</a></li> 
     <li><a href="http://book-talking.local/demo/ofer-carti.php">OFER CARTI</a></li> 
      
    </ul>
    <div class="phonec"><a href="tel:+40767507317">&#9742;</a></div>
   
</div>
