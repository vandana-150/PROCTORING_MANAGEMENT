<?php
session_start();
$con=mysqli_connect('localhost','root',"","project");
$query=$_SESSION["regno"];

      $row1=mysqli_query($con,"select * from mid1 where studentid='$query'");
     $row2=mysqli_query($con,"select * from mid2 where studentid='$query'");
     $row3=mysqli_query($con,"select * from sem1 where studentid='$query'");
     $query1=mysqli_fetch_assoc($row1);
     $query2=mysqli_fetch_assoc($row2);
     $query3=mysqli_fetch_assoc($row3);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>marks form</title>
        <link rel="stylesheet" href="sem3edit.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="mid1form()">MID 1</button>
                    <button type="button" class="toggle-btn" onclick="mid2form()">MID 2</button>
                    <button type="button" class="toggle-btn" onclick="sem1form()">SEM 6</button>
                </div>
            <form id="mid1form" action="midmarks.php" class="input-group">

        <label>CD</label><input type="text" class="input-field" value="<?php echo $query1["cd"];?>">
        <label>SE</label><input type="text" class="input-field" value="<?php echo $query1["se"];?>">
        <label>WT</label><input type="text" class="input-field" value="<?php echo $query1["wt"];?>">
        <label>CA</label><input type="text" class="input-field" value="<?php echo $query1["ca"];?>">
        <label>PE 1</label><input type="text" class="input-field" value="<?php echo $query1["pe1"];?>">
               <button type="submit" class="submit-btn">Edit</button>
            </form>

            <form id="mid2form"action="midmarks.php" class="input-group">
            <label>CD</label><input type="text" class="input-field" value="<?php echo $query2["cd"];?>"><br>
            <label>SE</label><input type="text" class="input-field" value="<?php echo $query2["se"];?>"><br>
            <label>WT</label><input type="text" class="input-field" value="<?php echo $query2["wt"];?>"><br>
            <label>CA</label><input type="text" class="input-field" value="<?php echo $query2["ca"];?>"><br>
            <label>PE 1</label>   <input type="text" class="input-field" value="<?php echo $query2["pe1"];?>"><br>
               <button type="submit" class="submit-btn">Edit</button>
            </form>

            <form id="sem1form" action="midmarks.php"class="input-group">
                <label>CD</label><input type="text" class="input-field" value="<?php echo $query3["cd"];?>"><br>
                <label>SE</label><input type="text" class="input-field" value="<?php echo $query3["se"];?>"><br>
                <label>WT</label><input type="text" class="input-field" value="<?php echo $query3["wt"];?>"><br>
                <label>CA</label><input type="text" class="input-field" value="<?php echo $query3["ca"];?>"><br>
                <label>PE 1</label><input type="text" class="input-field" value="<?php echo $query3["pe1"];?>"><br>
                <label>OST LAB</label><input type="text" class="input-field" value="<?php echo $query3["ostlab"];?>"><br>
                <label>SE LAB</label><input type="text" class="input-field" value="<?php echo $query3["selab"];?>"><br>
                <label>QA & VA</label><input type="text" class="input-field" value="<?php echo $query3["qava2"];?>"><br>
               <button type="submit" class="submit-btn">Edit</button>
               <input type="file" id="file" accept="pdf/*"/>
               <div class="upload"><label for="file">Download memo</label></div> 
            </form>
            </div>
        </div>
      <script>
          var x = document.getElementById("mid1form");
          var y = document.getElementById("mid2form");
          var z = document.getElementById("sem1form");
          var w = document.getElementById("btn");
          function sem1form(){
              x.style.left = "-450px";
              z.style.left = "50px";
              y.style.left = "-450px";
              w.style.left = "150px";
          }
          function mid1form(){
              x.style.left = "50px";
              z.style.left = "-450px";
              w.style.left = "0px";
              y.style.left = "-450px";
          }
          function mid2form(){
              x.style.left = "-450px";
              y.style.left = "50px";
              w.style.left = "70px";
              z.style.left = "-450px";
          }
      </script>
    </body>
</html>