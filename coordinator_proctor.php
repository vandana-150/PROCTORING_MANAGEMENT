<html>
    <head>
        <meta charset="UTF-8">
        <title>proctor form</title>
        <link rel="stylesheet" href="coordinator_proctor.css">
        <script>
            function validate()
            {
                var proctorid=document.addproctor.proctorid.value;
                var name=document.addproctor.name.value;
                var email=document.addproctor.email.value;
                var numbers=/^[0-9]*$/;
                var characters=/^[A-Za-z]+$/;
                var mail=/^[a-zA-Z0-9+_.-]+@anits.edu.in+$/;
                if(proctorid==null || proctorid.trim()=="")
                {
                    alert("Proctorid can't be blank");
                    return false;
                }
                else if(name==null || name.trim()=="")
                {
                    alert("Name can't be blank");
                    return false;
                }
                else if(email==null || email.trim()=="")
                {
                    alert("Email can't be blank");
                    return false;
                }
               else if(!proctorid.match(numbers))
               {
                alert("Proctorid should be numerical only");
                return false;
               }
               else if(!name.match(characters))
               {
                   alert("Name should be in chacters");
                   return false;
               }
               else if(!email.match(mail))
               {
                   alert("Enter valid anits mail-id");
                   return false;
               }
                return true;
            }
            </script>
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
            <form action="coordinator_proctor.php" name="addproctor" onsubmit="return validate();" method="post" id="mid1form" class="input-group">
        <label>Proctor Id</label><input type="text" name="proctorid" class="input-field" required>
        <label>Name</label><input type="text" name="name" class="input-field" required>
        <label>Email</label><input type="text" name="email" class="input-field" required>
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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $query="insert into proctorlogin values('$proctorid','$name','$email','anits')";
    $check=mysqli_query($con,"select * from proctorlogin where proctorid='$proctorid'");
    if(mysqli_num_rows($check)>0)
    {
        echo "<script>alert('Already added');</script>";
    }
else if(!mysqli_query($con,$query))
{
    echo "not inserted";
}
else
{
    echo "<script>alert('inserted successfully');</script>";

}
}
?>