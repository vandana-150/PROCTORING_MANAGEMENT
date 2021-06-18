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
        <title>marks form</title>
        <link rel="stylesheet" href="sem3edit.css">
        <script>
            function valid1()
            {
                var english=document.mid1.english1.value;
                var m1=document.mid1.m11.value;
                var chemistry=document.mid1.chemistry1.value;
                var bee=document.mid1.bee1.value;
                var pehv=document.mid1.pehv1.value;
                var numbers=/^[0-9]*$/;
                if(english==null || english.trim()=="" || m1==null || m1.trim()=="" || chemistry==null || chemistry.trim()=="" || bee==null || bee.trim()=="" || pehv==null || pehv.trim()=="")
                {
                    alert("Please fill all subject marks");
                    return false;
                }
                else if(!english.match(numbers) || !m1.match(numbers) || !chemistry.match(numbers) || !bee.match(numbers) || !pehv.match(numbers))
                {
                    alert("Marks should be numerical only");
                    return false;
                }
                else if(english<0 || english>20 || m1<0 || m1>20 || chemistry<0 || chemistry>20 || bee<0 || bee>20 || pehv<0 || pehv>20)
                    {
                        alert("Enter valid marks");
                        return false;
                    }
                return true;
            }
            function valid2()
            {
                var english=document.mid2.english2.value;
                var m1=document.mid2.m12.value;
                var chemistry=document.mid2.chemistry2.value;
                var bee=document.mid2.bee2.value;
                var pehv=document.mid2.pehv2.value;
                var numbers=/^[0-9]*$/;
                if(english==null || english.trim()=="" || m1==null || m1.trim()=="" || chemistry==null || chemistry.trim()=="" || bee==null || bee.trim()=="" || pehv==null || pehv.trim()=="")
                {
                    alert("Please fill all subject marks");
                    return false;
                }
                else if(!english.match(numbers) || !m1.match(numbers) || !chemistry.match(numbers) || !bee.match(numbers) || !pehv.match(numbers))
                {
                    alert("Marks should be numerical only");
                    return false;
                }
                 else if(english<0 || english>20 || m1<0 || m1>20 || chemistry<0 || chemistry>20 || bee<0 || bee>20 || pehv<0 || pehv>20)
                    {
                        alert("Enter valid marks");
                        return false;
                    }
                return true;
            }
            function valid3()
            {
                var english=document.sem1.english3.value;
                var m1=document.sem1.m13.value;
                var chemistry=document.sem1.chemistry3.value;
                var bee=document.sem1.bee3.value;
                var pehv=document.sem1.pehv3.value;
                var chemistrylab=document.sem1.chemistrylab3.value;
                var clab=document.sem1.clab3.value;
                var numbers=/^[0-9]*$/;
                var characters=/^[A-Za-z]+$/;
                if(english==null || english.trim()=="" || m1==null || m1.trim()=="" || chemistry==null || chemistry.trim()=="" || bee==null || bee.trim()=="" || pehv==null || pehv.trim()=="" || chemistrylab==null || chemistrylab.trim()=="" || clab==null || clab.trim()=="")
                {
                    alert("Please fill all subject marks");
                    return false;
                }
                else if(!english.match(characters) || !m1.match(characters) || !chemistry.match(characters) || !bee.match(characters) || !pehv.match(characters) || !chemistrylab.match(characters) || !clab.match(characters))
                {
                    alert("Marks should be in grade format only");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="mid1form()">MID 1</button>
                    <button type="button" class="toggle-btn" onclick="mid2form()">MID 2</button>
                    <button type="button" class="toggle-btn" onclick="sem1form()">SEM 3</button>
                </div>
            <form id="mid1form" name="mid1" action="midmarks.php" method="post" onsubmit="return valid1();" class="input-group">
        <label>DS</label><input type="text" name="english1" class="input-field" value="<?php echo $query1["ds"];?>" required>
        <label>DLD</label><input type="text" name="m11" class="input-field" value="<?php echo $query1["dld"];?>" required>
        <label>DMS</label><input type="text" name="chemistry1" class="input-field" value="<?php echo $query1["dms"];?>" required>
        <label>JAVA</label><input type="text" name="bee1" class="input-field" value="<?php echo $query1["java"];?>" required>
        <label>PSQT</label><input type="text" name="pehv1" class="input-field" value="<?php echo $query1["psqt"];?>" required>
               <button type="submit" name="mid1submit" class="submit-btn">Submit</button>
            </form>

            <form id="mid2form" name="mid2" action="midmarks.php" method="post" onsubmit="return valid2();" class="input-group">
            <label>DS</label><input type="text" name="english2" class="input-field" value="<?php echo $query2["ds"];?>" required><br>
            <label>DLD</label><input type="text" name="m12" class="input-field" value="<?php echo $query2["dld"];?>" required><br>
            <label>DMS</label><input type="text" name="chemistry2" class="input-field" value="<?php echo $query2["dms"];?>" required><br>
            <label>JAVA</label><input type="text" name="bee2" class="input-field" value="<?php echo $query2["java"];?>" required><br>
            <label>PSQT</label>   <input type="text" name="pehv2" class="input-field" value="<?php echo $query2["psqt"];?>" required><br>
               <button type="submit" name="mid2submit" class="submit-btn">Submit</button>
            </form>

            <form id="sem1form" name="sem1" action="midmarks.php" method="post" onsubmit="return valid3();" class="input-group">
                <label>DS</label><input type="text" name="english3" class="input-field" value="<?php echo $query3["ds"];?>" required><br>
                <label>DLD</label><input type="text" name="m13" class="input-field" value="<?php echo $query3["dld"];?>" required><br>
                <label>DMS</label><input type="text" name="chemistry3" class="input-field" value="<?php echo $query3["dms"];?>" required><br>
                <label>JAVA</label><input type="text" name="bee3" class="input-field" value="<?php echo $query3["java"];?>" required><br>
                <label>PSQT</label><input type="text" name="pehv3" class="input-field" value="<?php echo $query3["psqt"];?>" required><br>
                <label>DS LAB</label><input type="text" name="chemistrylab3" class="input-field" value="<?php echo $query3["dslab"];?>" required><br>
                <label>DLD LAB</label><input type="text" name="clab3" class="input-field" value="<?php echo $query3["dldlab"];?>" required><br>
                <label>JAVA LAB</label><input type="text" name="javalab" class="input-field" value="<?php echo $query3["javalab"];?>" required><br>
               
                <button type="submit" name="sem1submit" class="submit-btn">Submit</button>
                <input type="file" id="file" accept="pdf/*"/>
                <div class="upload"><label for="file">Upload memo</label></div> 
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
<?php
$regno=$_SESSION["regno"];
if(isset($_POST['mid1submit']))
{
    $english=$_POST['english1'];
    $m1=$_POST['m11'];
    $chemistry=$_POST['chemistry1'];
    $bee=$_POST['bee1'];
    $pehv=$_POST['pehv1'];
    $query="update mid1 set ds='$english',dld='$m1',dms='$chemistry',java='$bee',psqt='$pehv' where studentid='$regno'";
    if(!mysqli_query($con,$query))
    {
        echo "not inserted";
    }
    else
    {
        echo "<script>alert('inserted successfully');</script>";

    }
}
else if(isset($_POST['mid2submit']))
{
    $english=$_POST['english2'];
    $m1=$_POST['m12'];
    $chemistry=$_POST['chemistry2'];
    $bee=$_POST['bee2'];
    $pehv=$_POST['pehv2'];
    $query="update mid2 set ds='$english',dld='$m1',dms='$chemistry',java='$bee',psqt='$pehv' where studentid='$regno'";
    if(!mysqli_query($con,$query))
    {
        echo "not inserted";
    }
    else
    {
        echo "<script>alert('inserted successfully');</script>";

    }
}
else if(isset($_POST['sem1submit']))
{
    $english=$_POST['english3'];
    $m1=$_POST['m13'];
    $chemistry=$_POST['chemistry3'];
    $bee=$_POST['bee3'];
    $pehv=$_POST['pehv3'];
    $chemistrylab=$_POST['chemistrylab3'];
    $clab=$_POST['clab3'];
    $javalab=$_POST['javalab'];
    $query="update sem1 set ds='$english',dld='$m1',dms='$chemistry',java='$bee',psqt='$pehv',dslab='$chemistrylab',dldlab='$clab',javalab='$clab' where studentid='$regno'";
    if(!mysqli_query($con,$query))
    {
        echo "<script>alert('not inserted successfully');</script>";

    }
    else
    {
        echo "<script>alert('inserted successfully');</script>";

    }
}
?>