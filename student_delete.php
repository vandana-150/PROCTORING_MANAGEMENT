<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta head="viewport" content="width=device-width,initial-scale=1.0">
        <title>Delete student</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script>
          function valid()
          {
            var studentid=document.student.studentid.value;
            if(studentid==null || studentid.trim()=="")
            {
              alert("Studentid can't be blank");
              return false;
            }
            return true;
          }
          </script>
    
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
  }
  body{
    background: #243b55;
 }
 #search form
 {
  margin-left: 38%;
  margin-top: 8%;
   
 }
 #search input
 {
   height: 35px;
   width: 200px;
 }
 #search form button{
   color: white;
   width: 10%;
   height: 35px;
   top: 1px;
   border: none;
   border-radius:5px;
   background: rgba(0,0,0,0.9);
   color: #fff;
   font-size: 20px;
   position: relative;
 
 }
 #search table {
 
 margin-top: 5%;
 }
 #search table th {
 background: rgba(0,0,0,0.9);
   color: white;
   border-radius: 5px;
   width: 1%;
   height: 35px;
   font-size: 22px;
 }
 #search table
 {
   border-spacing: 10px;
   color: #fff;
 }
 #search tr td
 {
   text-align: center;
   font-size: 19px;
 }
 #search table tr td button
 {
     
   position: relative;
   top: -25px;
     height: 30px;
     width: 80px;
     border-radius: 5px;
     background: rgba(0,0,0,0.9);
     margin-right: 54%;
    
 }
 #search table tr td button:hover
 {
    background: linear-gradient(to right, #1034ff5b,#06cdff);
     
 }   
        </style>
    <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <div id="search">
            <form action="student_delete.php" name="student" onsubmit="return valid();" method="post">
              <input type="text" name="studentid" placeholder="enter student_id" required>
              <button type="submit" name="search">search</button>
            </form>
            <div class="searchresults">
                <centre>
                    <table>
                        <tr>
                            <th>Studentid</th>
                            <th>Delete</th>
                        </tr>
                <?php
                 $con=mysqli_connect('localhost','root',"","project");
                 if(!$con)
                 {
                     echo "db not connected";
                 }
                 if(isset($_POST['search']) && isset($_POST['studentid']))
                 {
                     $b=$_POST['studentid'];
                     $s="select studentid from studentlogin where studentid='$b'";
                 }
                 else
                  {
                      $s="select studentid from studentlogin";
                  }
                  $query=mysqli_query($con,$s);
                  while($row=mysqli_fetch_assoc($query))
                  {
                      ?>
                      <tr>
                      <td><centre><?php echo $row['studentid']?></centre></td>
                      <centre>
                      <td><form action="student_delete.php" method="post">
                   <centre><button type="submit" name="delete" value="<?php echo $row['studentid']?>">Delete</button></centre>
                      </form>
                      </td>
                      </centre>
                      </tr>
                      <?php
                  }
                  ?>
                    </table>
                </centre>
                <?php
                if(isset($_POST['delete']))
                {
                    $query=$_POST['delete'];
                    $s="delete from studentlogin where studentid='$query'";
                    $res=mysqli_query($con,$s);
                    echo '<script>window.location.href="student_delete.php"</script>';
                }
               ?>
            </div>
        </div>
    </body>
</html>