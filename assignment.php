<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>

<body>
    <form action="assignment.php" method="POST">
        <label for ="username">Name:</label>
        <input type="text" name="username" id="username" required></input> <br><br>

        <label for ="pass">Password:</label>
        <input type="password" name="pass" id="pass" required></input> <br><br>

        <label for ="conpass">Conform Password:</label>
        <input type="password" name="conpass" id="conpass" required></input> <br><br>

        <label for ="mobile">Phone Number:</label>
        <input type="text" name="mobile" id="mobile" required></input> <br><br>

        <label for ="email">Email:</label>
        <input type="email" name="email" id="email" required></input> <br><br>

        <label for ="dob">DATE Of Birth:</label>
        <input type="date" name="dob" id="dob" required></input> <br><br>

        <label for ="Gender">Gender:</label>
        <input type="radio" name="Gender" id="Male" value ="Male" required><label for ="Male">Male</label></input>
        <input type="radio" name="Gender" id="Female" value ="Female" required><label for ="Female">Female</label></input> <br><br>

        <label for ="marraige">Divorce:</label>
        <input type="radio" name="marraige" id="YES" value ="YES" required><label for ="YES">YES</label></input>
        <input type="radio" name="marraige" id="NO" value ="NO" required><label for ="NO">NO</label></input> <br><br>

        <input type="submit" name="submit" value="register"></input>
        <input type="reset" value="clear"></input>

    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $user=$_POST['username'];
        $password=$_POST['pass'];
        $conform=$_POST['conpass'];
        $dob=$_POST['dob'];
        $phone=$_POST['mobile'];
        $email=$_POST['email'];
        $today = date("Y-m-d");
        $divorce = $_POST["marraige"];
        $diff = date_diff(date_create($dob), date_create($today));
        $age=$diff->format('%y');

        if(strlen($user) <= 6)
        {
            echo "<span style='color:red'; font-size:'small'> Username should be above six characters <br><br> </span>";     
        }

        if(strlen($user) > 10)
        {
            echo "<span style='color:red'; font-size:'small'> Username should be below ten characters <br><br> </span>";    
        }
        if (preg_match('/\s/',$user)){
            echo "<span style='color:red'; font-size:'small'> Username should not contain white spaces <br><br> </span>";    
        } 

        if( strlen($password ) < 8 ) 
        {
            echo "<span style='color:red'; font-size:'small'> Password is too short <br><br> </span>"; 
        }
        if(!preg_match("#[0-9]+#", $password ) ) 
        {
            echo "<span style='color:red'; font-size:'small'> Password must include at least one number! <br><br> </span>"; 
        }
        if(!preg_match("#[a-z]+#", $password ) ) 
        {
            echo "<span style='color:red'; font-size:'small'> Password must include at least one letter! <br><br> </span>"; 
        }
        if(!preg_match("#[A-Z]+#", $password ) ) 
        {
            echo "<span style='color:red'; font-size:'small'> Password must include at least one CAPS! <br><br> </span>"; 
        }
        if($conform != $password) 
        {
            echo "<span style='color:red'; font-size:'small'> Conform Password and Password should Match!! <br><br> </span>"; 
        }

        if(!preg_match("#[7-9][0-9]{9}#", $phone)) 
        {
            echo "<span style='color:red'; font-size:'small'> Invalid Phone Number!! <br><br> </span>"; 
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<span style='color:red'; font-size:'small'> Invalid EmailId!! <br><br> </span>"; 
        }

        if($age > 28)
        {
            echo "<span style='color:red'; font-size:'small'> Age should be lessthan 28!! <br><br> </span>"; 
        }

        if($divorce == 'YES')
        {
            echo "<span style='color:red'; font-size:'small'> Divorced candidates are not allowed!! <br><br> </span>"; 
        }

    }
?>