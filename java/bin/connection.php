<?php
  $link = mysqli_connect("localhost", "root", "", "ankaa");
 
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
   
  // Attempt insert query execution
  $sql = "INSERT INTO participants (ParticipantID, Name ,Password ,DateOfBirth) VALUES (1, 'Parker', 'peterparker@mail.com',23-01-2001)";
  if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
   
  // Close connection
  mysqli_close($link);
      
?>