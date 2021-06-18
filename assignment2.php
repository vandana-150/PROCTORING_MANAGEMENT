<!DOCTYPE html>
<html>
    <body>
        <form action="assignment2.php" method="post" enctype = "multipart/form-data">
            
            <input type="file" name="image"/><br><br>
            <input type="submit" value="upload" name="submit"/>
</form>
</body> 
        </html>
<?php
  if(isset($_POST['submit']))
  {
      if(!isset($_FILES['image']))
      {
        echo "<script>alert('Upload the file');</script>";
      }
      else
      {
      $type=array();
      $name=$_FILES['image']['name'];
      $file_ext=strtolower(end(explode('.',$name)));
      $extensions= array("jpeg","jpg","png");
     if($_FILES['image']['size'] > 20971520)
     {
        echo "<script>alert('File size less than 20MB');</script>";
     }
     else if(in_array($file_ext,$extensions)=== false)
     {
        echo "<script>alert('File should be jpeg or jpg or png format');</script>";
     }
     else
     {
        echo "<script>alert('Uploaded successfully');</script>";
     }
    }
  }
?>