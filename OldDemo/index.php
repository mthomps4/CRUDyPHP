<?php
  //Connect to DB
  try {
    $db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=3306","root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
  } catch (Exception $e) {
    echo "Could not connect to the database.";
    exit;
  }
  // Query DB
  try{
    $results = $db->query("SELECT name, price FROM products ORDER BY price");
    echo "Ran Successfully. <br>\n";
  } catch(Exception $e){
    echo "Data could not be reached.";
    exit;
  }

  // echo "<pre>";
  // var_dump($results->fetchAll(PDO::FETCH_ASSOC)); //FETCH_ASSOC = Associative array instead of Numerical id

  $products = $results->fetchAll(PDO::FETCH_ASSOC);


  // for($i=0; $i<count($products); $i++){
  //   echo $products[$i]["name"] . "--";
  //   echo "$" . $products[$i]["price"] . "<br>\n";
  //   $i++;
  // }
  
  foreach($products as $row => $innerArray){
    $names[] = $innerArray["name"];
    $prices[] = $innerArray["price"];

    echo "Name: " . $innerArray["name"] . " -- Cost: " . $innerArray["price"] . "<br>";
  }

  // var_dump($names);
  // var_dump($prices);



?>
