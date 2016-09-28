<?php
//application functions
function get_project_list(){
  include 'connection.php';

  try{
    $results = $db->query('SELECT project_id, title, category FROM projects');
    return $results;
  }catch(Exception $e){
    echo "Error: " . $e->getMessage() . "<br>";
    return array();
  }
}

?>
