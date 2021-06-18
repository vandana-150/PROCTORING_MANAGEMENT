<html>
    <head>
        <meta charset="UTF-8">
        <title>proctor form</title>
        <link rel="stylesheet" href="coordinator_proctor.css">
        <script>
         function valid()
         {

            var proctorid=document.addstudent.proctorid.value;
            var studentid=document.addstudent.studentid.value;
            var numbers=/^[0-9]*$/;
            if(proctorid==null || proctorid.trim()=="")
            {
                alert("Proctorid can't be blank");
                return false;
            }
            else if(studentid==null || studentid.trim()=="")
            {
                alert("Studentid can't be blank");
                return false;
            }
            else if(!proctorid.match(numbers))
            {
                alert("Proctorid should be numerical only");
                return false;
            }
            else if(!studentid.match(numbers))
            {
                alert("Studentid should be numerical only");
                return false;
            }
            else if(studentid.length!=12)
            {
                alert("Enter valid studentid");
                return false;
            }
            return true;
         }
           </script> 
    </head>
    <body>
        <div class="hero">
            <div class="form-box">

            <form action="coordinator_student.php" name="addstudent" onsubmit="return valid();" method="post" id="mid1form" class="input-group">
        <label>Proctor Id</label><input type="text" name="proctorid" class="input-field" required>
        <label>Student Id</label><input type="text" name="studentid" class="input-field" required>
               <button type="submit" name="submit" class="submit-btn">ADD</button>
            </form>
            </div>
        </div>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo "not connected";
}
if(isset($_POST['submit']))
{
    $proctorid=$_POST['proctorid'];
    $studentid=$_POST['studentid'];
    $query="insert into studentlogin values('$proctorid','$studentid','anits')";
    $check=mysqli_query($con,"select * from proctorlogin where proctorid='$proctorid'");
    $checks=mysqli_query($con,"select * from studentlogin where studentid='$studentid'");
    if(mysqli_num_rows($check)<=0)
    {
        echo "<script>alert('Proctorid is not present in given data');</script>";

    }
    else if(mysqli_num_rows($checks)>0)
    {
        echo "<script>alert('Already added');</script>";
    }
  else if(!mysqli_query($con,$query))
{
    echo "not inserted";
}
else
{
    
    mysqli_query($con,"insert into mid1 (studentid) values('$studentid')");
    mysqli_query($con,"insert into mid2 (studentid) values('$studentid')");
    mysqli_query($con,"insert into sem1 (studentid) values('$studentid')");
    echo "<script>alert('inserted successfully');</script>";
}
}
?>
