<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
      $name=$_REQUEST['username'];
      $password=$_REQUEST['password'];
      if(empty($name) || empty($password))
      {
         echo "Please fill out the fields";
      }
  }
  ?>