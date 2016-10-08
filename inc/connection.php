<?php
try{
  // $db = new PDO("sqlite:" . __DIR__ . "/database.db");
  $db = new PDO('mysql:host=localhost;dbname=timetracker',"root","");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
  echo $e->getMessage();
  exit;
}

//Two Tables
//Projects
//project_id, title, category

//Tasks
//task_id, title, Date, time, project_id (links each task to specific project)
?>
