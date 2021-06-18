<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background: #f2f2f2;
    width: 100%; height: 100vh;
    background-repeat: repeat;
    background-size: cover;

}
nav{
  background: black;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  padding-left: 60px;
}
nav .logo img{
    margin-top: 10px;
    border-radius:25px;
}
nav ul li img{
  top: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  display: inline-block;
  background: black;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  line-height: 70px;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 15px;
 
}
nav ul li a:hover{
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
               0 0 10px #66ffff;
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid cyan;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
.show,.icon{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
@media all and (max-width: 968px) {
  nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
  }
  .show:hover{
    color: cyan;
  }
  .icon{
    display: block;
    color: white;
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}
.content{
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: 0px;
  padding: 0px;
  transform: translate(-50%,-50%);
  text-align: center;
  width: 100%;
 
}
.content header{
  font-size: 45px;
  font-weight: 600;
  padding: 10px 0;
  color:white;
}
p{
  font-size: 45px;
  font-weight: 500;
  color:white;
}

html{
    height: 100%;
}
body{
    margin: 0;
    padding: 0;
    width: 100%; height: 100vh;
    font-family: arial,sens-serif;
    background: white;
    background-image: url('backgroundproctor.jpg');
    background-size: cover;
}
.login-box
{
    position: absolute;
    top: 55%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%,-50%);
    background: black;
    box-sizing: border-box;
    box-shadow: 0px 15px 25px rgba(0,0,0,10);
    border-radius: 10px;
}
   .avatar{
    text-align: center;
    margin: 0 0 20px;
    margin-left: 90px;
    border-radius: 50%;
}
.login-box .user-box{
      position: relative;
      height: 60px;
}

.login-box .user-box input
{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #f1eee6;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #f1eee6;
    outline: none;
    background: transparent;
}
.login-box .user-box label{
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    color: #f1eee6;
    pointer-events: none;
    transition: .6s;
}
.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label

{
    top: -20px;
    left: 0px;
    color: #03e9f4;
    font-size: 12px;
}
.login-box form button
{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    overflow: hidden;
    margin-top: 40px;
    letter-spacing: 4px;
    background: black;
}
.login-box form button:hover{
    background: #03e9f4;
    color: #f1eee6;
    border-radius: 5px;
    box-shadow: 0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4,
}

.login-box button span{
    position: absolute;
    display: block;
}
.login-box button span:nth-child(1)
{
    top: 0;
    left: -100px;
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg,transparent,#03e9f4);
    animation: btn-animi 2s linear infinite;
}

@keyframes btn-animi{
    0%
    {
        left: -100%;
    }
    50%,100%
    {
         left: 100%;
        
    }
}
.login-box button span:nth-child(2)
{
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#03e9f4);
    animation: btn-anim2 1s infinite;
    animation-delay: .25s;
}
@keyframes btn-anim2
{
    0%
    {
        top: -100%;
    }
    50%,100%
    {
        top: 100%;
    }
}
.login-box button span:nth-child(3)
{
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(9270deg,transparent,#03e9f4);
    animation:  btn-anim3 1s linear infinite;
    animation-delay: .5s;
}
@keyframes btn-anim3
{
    0%
    {
        right: -100%;
    }
    50%,100%
    {
        right: 100%;
    }
}
.login-box button span:nth-child(4)
{
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .25s;
}
@keyframes btn-anim4
{
    0%
    {
        bottom: -100%;
    }
    50%,100%
    {
       bottom: 100%;
    }
}
.login-box .login-form{
    display: flex;
     justify-content: space-around;
}
.login-box .login-form button:nth-child(2)
{
    transform:translate(18px,2px);
}

  </style>
   <script>
           function valid()
           {
               var username=document.login.username.value;
               var password=document.login.password.value;
               if(username==null || username.trim()=="")
               {
                   alert("Username can't be blank");
                   return false;
               }
               if(password==null || password.trim()=="")
               {
                   alert("Password can't be blank");
                   return false;
               }
               return true;
           }
           </script>
   </head>
   <body>
    <nav>
        <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
        </label>
        <ul>
               <li><i class="fa fa-home" aria-hidden="true" style="color:white; font-size: 25px;"></i><a href="dropdown.html">Home</a></li>
           <li>
           <label for="btn-2" class="show">About Us</label>
              <a href="aboutus.html">About Us</a>
             
           </li>
           <li><i class="fa fa-phone" style="color:white; font-size: 20px;"></i><a href="contactus.html">Contact Us</a></li>
        </ul>
     </nav>
      <div class="login-box">
        <img src="avatar.png" alt="avatar" class="avatar" width="150px" height="150px">
        <form method="post" name="login" onsubmit="return valid();" action="loginproctor.php">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="Password" name="password" required>
                <label>Password</label>
            </div>
            <div class="login-form">
            <button type="submit" name="submit">
                <span></span>
                <span></span>
                <span></span>
                 <span></span>
            Login
           </button>
            <button onclick="location.replace('forgotproctor.php')">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            ForgotPassword
          </button>
        </div>
        </form>
    </div>
      <script>
         $('.icon').click(function(){
           $('span').toggleClass("cancel");
         });
      </script>
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
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select * from proctorlogin where email='$username' and password='$password'");
if(mysqli_num_rows($query)<=0)
{
  echo "<script>alert('check your login credentials');</script>";
}
else
{
  $_SESSION["email"]=$username;
    echo "<script>alert('logged in successfully');</script>";
    echo '<script>window.location.href="proctorsidebar.php"</script>';
}
}
?>