<?php
include("connection.php");

$db= $conn;
$tableName="details";
$tableName2 = "token";
$columns= ['id', 'name','address','birthday','parentName', 'phoneNumber','token','paidStat'];
$columns2 = ['id','token'];
$fetchData = fetch_data($db, $tableName, $columns);
$fetchData2 = fetch_data2($db, $tableName, $columns);
$fetchData3 = fetch_data3($db, $tableName2, $columns2);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
 }
 else{

   $columnName = implode(", ", $columns);
   $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id ASC";
   $result = $db->query($query);

   if($result== true){ 
   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Data Found"; 
   }
   }else{
   $msg= mysqli_error($db);
   }
   }
   return $msg;
   }

   function fetch_data2($db, $tableName, $columns){
      if(empty($db)){
       $msg= "Database connection error";
      }elseif (empty($columns) || !is_array($columns)) {
       $msg="columns Name must be defined in an indexed array";
      }elseif(empty($tableName)){
        $msg= "Table Name is empty";
      }
      else{
     
        $columnName = implode(", ", $columns);
        $query = "SELECT * FROM details WHERE  paidStat = 1";
        $result = $db->query($query);
     
        if($result== true){ 
        if ($result->num_rows > 0) {
           $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
           $msg= $row;
        } else {
           $msg= "No Data Found"; 
        }
        }else{
        $msg= mysqli_error($db);
        }
        }
        return $msg;
        }

        function fetch_data3($db, $tableName2, $columns){
         if(empty($db)){
          $msg= "Database connection error";
         }elseif (empty($columns) || !is_array($columns)) {
          $msg="columns Name must be defined in an indexed array";
         }elseif(empty($tableName2)){
           $msg= "Table Name is empty";
         }
         else{
        
           $columnName = implode(", ", $columns);
           $query = "SELECT * FROM token";
           $result = $db->query($query);
        
           if($result== true){ 
           if ($result->num_rows > 0) {
              $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
              $msg= $row;
           } else {
              $msg= "No Data Found"; 
           }
           }else{
           $msg= mysqli_error($db);
           }
           }
           return $msg;
           }
?>