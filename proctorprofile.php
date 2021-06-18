<?php
  session_start();
        $con=mysqli_connect('localhost','root','','project');
        if(!$con)
        {
          echo "problem in connecting database";
        }
        $reg=$_SESSION["email"];
        $s="select * from proctorlogin where email='$reg'";
        $qu=mysqli_query($con,$s);
        $row=mysqli_fetch_assoc($qu);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
   $(document).ready(function(){

  
  $('#eye1').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#curpass').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#curpass').attr('type','password');
        }
      
    });

    $('#eye2').click(function(){
       
       if($(this).hasClass('fa-eye-slash')){
          
         $(this).removeClass('fa-eye-slash');
         
         $(this).addClass('fa-eye');
         
         $('#newpass').attr('type','text');
           
       }else{
        
         $(this).removeClass('fa-eye');
         
         $(this).addClass('fa-eye-slash');  
         
         $('#newpass').attr('type','password');
       }
     
   });
});
    </script>

    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Trade+Winds&display=swap');

.p-1 {
  padding: 5px !important;
}

.p-2 {
  padding: 15px !important;
}

.p-3 {
  padding: 25px !important;
}

.p-4 {
  padding: 35px !important;
}

.p-5 {
  padding: 45px !important;
}

.pl-1 {
  padding-left: 5px !important;
}

.pl-2 {
  padding-left: 15px !important;
}

.pl-3 {
  padding-left: 25px !important;
}

.pl-4 {
  padding-left: 35px !important;
}

.pl-5 {
  padding-left: 45px !important;
}

.pr-1 {
  padding-right: 5px !important;
}

.pr-2 {
  padding-right: 15px !important;
}

.pr-3 {
  padding-right: 25px !important;
}

.pr-4 {
  padding-right: 35px !important;
}

.pr-5 {
  padding-right: 45px !important;
}

.pt-1 {
  padding-top: 5px !important;
}

.pt-2 {
  padding-top: 15px !important;
}

.pt-3 {
  padding-top: 25px !important;
}

.pt-4 {
  padding-top: 35px !important;
}

.pt-5 {
  padding-top: 45px !important;
}

.pb-1 {
  padding-bottom: 5px !important;
}

.pb-2 {
  padding-bottom: 15px !important;
}

.pb-3 {
  padding-bottom: 25px !important;
}

.pb-4 {
  padding-bottom: 35px !important;
}

.pb-5 {
  padding-bottom: 45px !important;
}

.px-1 {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.px-2 {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.px-3 {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.px-4 {
  padding-left: 35px !important;
  padding-right: 35px !important;
}

.px-5 {
  padding-left: 45px !important;
  padding-right: 45px !important;
}

.py-1 {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}

.py-2 {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.py-3 {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.py-4 {
  padding-top: 35px !important;
  padding-bottom: 35px !important;
}

.py-5 {
  padding-top: 45px !important;
  padding-bottom: 45px !important;
}

.m-1 {
  margin: 5px !important;
}

.m-2 {
  margin: 10px !important;
}

.m-3 {
  margin: 15px !important;
}

.m-4 {
  margin: 25px !important;
}

.m-5 {
  margin: 35px !important;
}

.ml-1 {
  margin-left: 5px !important;
}

.ml-2 {
  margin-left: 10px !important;
}

.ml-3 {
  margin-left: 15px !important;
}

.ml-4 {
  margin-left: 25px !important;
}

.ml-5 {
  margin-left: 35px !important;
}

.mr-1 {
  margin-right: 5px !important;
}

.mr-2 {
  margin-right: 10px !important;
}

.mr-3 {
  margin-right: 15px !important;
}

.mr-4 {
  margin-right: 25px !important;
}

.mr-5 {
  margin-right: 35px !important;
}

.mt-1 {
  margin-top: 5px !important;
}

.mt-2 {
  margin-top: 10px !important;
}

.mt-3 {
  margin-top: 15px !important;
}

.mt-4 {
  margin-top: 25px !important;
}

.mt-5 {
  margin-top: 35px !important;
}

.mb-1 {
  margin-bottom: 5px !important;
}

.mb-2 {
  margin-bottom: 10px !important;
}

.mb-3 {
  margin-bottom: 15px !important;
}

.mb-4 {
  margin-bottom: 25px !important;
}

.mb-5 {
  margin-bottom: 35px !important;
}

.mx-1 {
  margin-left: 5px !important;
  margin-right: 5px !important;
}

.mx-2 {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.mx-3 {
  margin-left: 15px !important;
  margin-right: 15px !important;
}

.mx-4 {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.mx-5 {
  margin-left: 35px !important;
  margin-right: 35px !important;
}

.my-1 {
  margin-top: 5px !important;
  margin-bottom: 5px !important;
}

.my-2 {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.my-3 {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.my-4 {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.my-5 {
  margin-top: 35px !important;
  margin-bottom: 35px !important;
}



button .focus,
a .focus {
  outline: 0;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

button:focus,
a:focus {
  outline: 0;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

[data-component="navbar"] .navbar {
  background-color: #fff;
  margin-left: -43%;
  margin-top: -7px;

}

[data-component="navbar"] .navbar-toggler {
  line-height: 2.4;
  margin-left: 75px;
}

[data-component="navbar"] .navbar-toggler span {
  text-transform: uppercase;
  font-size: 1em;
  font-weight: 400;
  font-family: "Lato", sans-serif;
  display: none;
}

[data-component="navbar"] .navbar-toggler[aria-expanded="true"] {
  color: #009fff;
}

[data-component="navbar"] .navbar-toggler[aria-expanded="true"] span {
  display: initial;
  color: #009fff;
}

[data-component="navbar"] .navbar-toggler[aria-expanded="true"] i {
  color: #009fff;
}

[data-component="navbar"] .navbar-collapse {
  background-color: #292a2c;
  margin-left: 75px;
}

[data-component="navbar"] .navbar-nav {
  height: 100vw;
}

[data-component="navbar"] .collapsing {
  -webkit-transition: height 0.3s ease;
  transition: height 0.3s ease;
}

[data-component="navbar"] .navbar-brand {
  background-color: #009fff;
  height: 60px;
  width: 75px;
  text-align: center;
}

[data-component="navbar"] ::-webkit-scrollbar {
  width: 0px;
  background: transparent;
}

[data-component="navbar"] .right-links i {
  color: #000;
  font-size: 20px;
  line-height: 2.8;
}

[data-component="navbar"] .home {
  border-right: 1px solid #ababab;
}

[data-component="navbar"] .dropdown-toggle::after {
  display: none;
}

[data-component="navbar"] .dropdown-item {
  color: #292b2c;
  font-size: 0.75em;
}

[data-component="navbar"] .dropdown {
  position: relative;
}

[data-component="navbar"] .dropdown span {
  color: #fff;
  position: absolute;
  width: 15px;
  height: 15px;
  top: -8px;
  right: -3px;
  background-color: red;
  border-radius: 50%;
  text-align: center;
  font-size: 0.625em;
  font-weight: 600;
}

[data-component="navbar"] .dropdown img {
  border-radius: 50%;
  height: 40px;
}

[data-component="navbar"] .list-group .lg {
  height: 500px;
  width: 270px;
  overflow: auto;
}

[data-component="navbar"] .list-group .list-group-item {
  border-radius: 0;
  letter-spacing: 0.5px;
}

[data-component="navbar"] .list-group h5 {
  font-size: 0.6875em;
  font-weight: 700;
  line-height: 2;
}

[data-component="navbar"] .list-group p {
  font-size: 0.5625em;
  font-weight: 400;
  line-height: 2;
}

[data-component="navbar"] .megamenu #menuOne,
[data-component="navbar"] .megamenu #menuTwo,
[data-component="navbar"] .megamenu #menuThree {
  position: absolute;
  width: 100%;
  z-index: 1;
}

[data-component="navbar"] .megamenu .megamenu-links {
  background-color: #eeeeee;
  height: 100vh;
  overflow: hidden;
}

[data-component="navbar"] .megamenu .btn {
  font-size: 0.875em;
  font-weight: 400;
  letter-spacing: 0.5px;
}

[data-component="navbar"] .megamenu .btn:hover {
  background-color: #292a2c;
  color: #fff;
}

[data-component="navbar"] .megamenu a[aria-expanded="true"] .fa-plus {
  display: none;
}

[data-component="navbar"] .megamenu a[aria-expanded="false"] .fa-minus {
  display: none;
}

[data-component="navbar"] .megamenu [aria-expanded="true"] {
  background-color: #292a2c;
  color: #fff;
}

[data-component="navbar"] .megamenu [aria-expanded="true"] i {
  color: #fff;
  font-size: 1.25em;
}

[data-component="navbar"] .megamenu [aria-expanded="false"] {
  background-color: #eee;
  color: #292a2c;
  border-radius: 0;
}

[data-component="navbar"] .megamenu [aria-expanded="false"] i {
  color: #009fff;
  font-size: 1.25em;
}

[data-component="navbar"] .megamenu .list-group {
  height: 100vw;
  background-color: #292a2c;
}

[data-component="navbar"] .megamenu .list-group-item {
  border-radius: 0;
  background-color: #292a2c;
  font-size: 0.75em;
  color: #fff;
}

[data-component="navbar"] .megamenu .list-group-item:hover {
  background-color: #009fff;
}

[data-component="sidebar"] .sidebar {
  position: fixed;
  z-index: 9999;
}

[data-component="sidebar"] .first-menu {
  position: fixed;
  background-color: #292a2c;
  height: 100vw;
  width: 75px;
  top: 60px;
  overflow: hidden;
  -webkit-transition: width 0.5s;
  transition: width 0.5s;
  list-style: none;
}

[data-component="sidebar"] .first-menu a {
  color: #fff;
}
[data-component="sidebar"] .first-menu i {
  font-size: 24px;
}

[data-component="sidebar"] .first-menu span {
  font-size: 14px;
  white-space: nowrap;
  font-family: "Open Sans", sans-serif;
  opacity: 0;
  visibility: hidden;
}

[data-component="sidebar"] .first-menu:hover span {
  opacity: 1;
  visibility: visible;
}

[data-component="sidebar"] .first-menu .list-group-item {
  border-radius: 0;
}

[data-component="sidebar"] .first-menu .list-group-item:hover {
  background-color: #009fff;
}

[data-component="sidebar"] .first-menu:hover {
  width: 160px;
}

[data-component="sidebar"] .list-group-item {
  font-size: 14px;
}

[data-component="sidebar"] .submenu {
  position: fixed;
  left: 160px;
  width: 195px;
  top: 60px;
  background-color: #009fff;
  height: 100vw;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 600ms opacity 600ms, 600ms visibility 600ms;
  transition: 600ms opacity 600ms, 600ms visibility 600ms;
}

[data-component="sidebar"] .submenu .list-group-item {
  margin-top: 8px;
  list-style: none;
}
[data-component="sidebar"] .first-menu li:hover .submenu {
  visibility: visible;
  opacity: 1;
}

[data-component="sidebar"] .sub-submenu {
  position: fixed;
  background-color: #fff;
  left: 355px;
  top: 60px;
  height: 100vw;
  width: 195px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 600ms opacity 600ms, 600ms visibility 600ms;
  transition: 600ms opacity 600ms, 600ms visibility 600ms;
}

[data-component="sidebar"] .sub-submenu a {
  color: #009fff;
}

[data-component="sidebar"] .sub-submenu .list-group-item:hover {
  background-color: transparent;
}

[data-component="sidebar"] .submenu li:hover .sub-submenu {
  visibility: visible;
  opacity: 1;
}

[data-component="sidebar"] .list-group-item {
  background-color: transparent;
  border: none;
  border-radius: 0;
}

[data-component="sidebar"] .arrow {
  position: fixed;
  left: 329px;
  width: 0;
  height: 0;
  border-top: 27px solid transparent;
  border-bottom: 27px solid transparent;
  border-right: 27px solid white;
}

[data-component="sidebar"] .arrow:nth-child(3) {
  top: 20px;
}
.n1{
    height: 10px;
    margin-left: 30%;
}
.right-links{
    display: flex;
    align-items: space-around;
    float: right;
}
.n2{
    width: 100%;
    
}

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: 'Montserrat';
}

body{
  background: #dfecff;
  color: #7f8db0;
}

a{
   color: #7f8db0;
}

.wrapper{
  width: 100%;
  height: 100%;
}

.navbar1{
  background: #fff;
  width: 100%;
  height: 60px;
  padding: 0 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.navbar1 .navbar_left .logo a{
   font-family: 'Trade Winds';
   font-size: 20px;
}

.navbar1 .navbar_right{
   display: flex;
}

.navbar1 .navbar_right img{
  width: 35px;
}

.navbar1 .navbar_right .icon_wrap{
  cursor: pointer;
}

.navbar1 .navbar_right .notifications{
  margin-right: 25px;
}

.navbar1 .navbar_right .notifications .icon_wrap{
  font-size: 28px;
}

.navbar1 .navbar_right .profile,
.navbar1 .navbar_right .notifications{
  position: relative;
}

.navbar1 .profile .profile_dd,
.notification_dd{
  position: absolute;
  top: 48px;
  right: -15px;
  user-select: none;
  background: #fff;
  border: 1px solid #c7d8e2;
  width: 350px;
  height: auto;
  display: none;
  border-radius: 3px;
  box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
              -10px -10px 35px rgba(0,0,0,0.125);
}

.navbar1 .profile .profile_dd:before,
.notification_dd:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 15px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}


.navbar1 .navbar_right .profile .icon_wrap{
  display: flex;
  align-items: center;
}

.navbar1 .navbar_right .profile .name{
  display: inline-block;
  margin: 0 10px;
}

.navbar1 .navbar_right .icon_wrap:hover,
.navbar1 .navbar_right .profile.active .icon_wrap,
.navbar1 .navbar_right .notifications.active .icon_wrap{
  color: #3b80f9;
}
 
.navbar1 .profile .profile_dd{
  width: 225px;
  z-index: 2;
}
.navbar1 .profile .profile_dd:before{
  right: 10px;
}

.navbar1 .profile .profile_dd ul li {
    border-bottom: 1px solid #f1f2f4;
}

.navbar1 .profile .profile_dd ul li  a{
    display: block;
    padding: 15px 35px;
    position: relative;
}

.navbar1 .profile .profile_dd ul li  a .picon{
  display: inline-block;
  width: 30px;
}

.navbar1 .profile .profile_dd ul li  a:hover{
  color: #3b80f9;
  background: #f0f5ff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.navbar1 .profile .profile_dd ul li.profile_li a:hover {
    background: #f0f5ff;
    color: #7f8db0;
}

.navbar1 .profile .profile_dd ul li .btn{
    height: 32px;
    padding: 7px 10px;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    background: #3b80f9;
    width: 125px;
    margin: 5px auto 15px;
}

.navbar1 .profile .profile_dd ul li .btn:hover{
  background: #6593e4;
}

.navbar1 .profile.active .profile_dd,
.navbar1 .notifications.active .notification_dd{
  display: block;
}

.student-profile .card {
  border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  margin: 10px auto;
  border: 10px solid #ccc;
  border-radius: 50%;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th,
.student-profile .table td {
  font-size: 14px;
  padding: 5px 10px;
  color: #000;
}

</style>
</head>

<script>
      $(document).ready(function(){
    $(".profile .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
  $(".notifications").removeClass("active");
});

$(".notifications .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
   $(".profile").removeClass("active");
});

$(".show_all .link").click(function(){
  $(".notifications").removeClass("active");
  $(".popup").show();
});

$(".close, .shadow").click(function(){
  $(".popup").hide();
});
      });
</script>

<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
  <div class="navbar1">
    <div class="navbar_left">
      <div class="logo">
        <a href="#">Proctoring Management</a>
      </div>
    </div>

    <div class="navbar_right">
      <div class="profile">
        <div class="icon_wrap">
        <img src= "uploads/<?=$row['profilepic']?>" alt="user">
          <span class="name"><?php echo $row['name']?></span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i> </span>Profile</a>
            </li>
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div data-component="sidebar">
      <div class="sidebar">
        <ul class="list-group flex-column d-inline-block first-menu">
          <li class="list-group-item pl-3 py-2">
            <a href="viewdetails.php"><i class="fas fa-user"></i><span class="ml-2 align-middle">Details</span></i></a>
          </li> <!-- /.list-group-item -->
    
          <li class="list-group-item pl-3 py-2">
            <a href="#"><i class="fas fa-user"></i><span class="ml-2 align-middle">Marks</span></i></a>
            <ul class="list-group flex-column d-inline-block submenu" style="margin-top: 1%;">
              <li class="list-group-item pl-4" style="margin-top:20%;">
                <a href="#" class="">1st Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:90px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="viewsem1.php">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="viewsem2.php">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Posts -->
    
              <li class="list-group-item pl-4">
                <a href="#" class="">2nd Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:130px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Blog Assist -->
    
              <li class="list-group-item pl-4">
                <a href="#" class="">3rd Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:180px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Pages -->
    
              <li class="list-group-item pl-4">
                <a href="#" class="">4th Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:220px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="#">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Area Content -->
            </ul> <!-- /.submenu -->
          </li> <!-- /.list-group-item -->
    
          <li class="list-group-item pl-3 py-2">
            <a href="proctorattendance.php">
              <i class="fas fa-user"></i><span class="ml-2 align-middle">Attendance</span></i>
            </a>
          </li> <!-- /.list-group-item -->
    
          <li class="list-group-item pl-3 py-2">
            <a href="viewcomplaints.php"><i class="fas fa-user"></i><span class="ml-2 align-middle">Complaints</span></i></a>
          </li>
    
        </ul> <!-- /.first-menu -->
      </div> <!-- /.sidebar -->
    </div>
    
   <!-- Student Profile -->

   <?php
        if(isset($_SESSION['status']) && $_SESSION['status']!='')
        {
          echo '<p>'.$_SESSION['status'].'</p>';
          unset($_SESSION['status']);
        }
        if(isset($_SESSION['status1']) && $_SESSION['status1']!='')
        {
          echo '<p>'.$_SESSION['status1'].'</p>';
          unset($_SESSION['status1']);
        }
     ?>
 

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4" style="border:2px solid #ccc;">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
          <img class="profile_img" src= "uploads/<?=$row['profilepic']?>"alt="user" width="100px" height="100px">
            <h3><?php echo $row['name']?></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
     <div class="col-lg-7" style="border:2px solid #ccc;">
        <div class="card shadow-sm" style="z-index:1;">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td><?php echo $row['name']?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $row['email']?></td>
              </tr>
              <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo $row['phone']?></td>
              </tr>
              <tr>
                <th width="30%">Experience</th>
                <td width="2%">:</td>
                <td><?php echo $row['experience']?></td>
              </tr>
            
            </table>
          </div>
          <button type="button" style="position:relative;top:-10px;margin-left:10%"id="edit-bnt" class="btn btn-primary" data-toggle="modal" data-target="#edit"> Edit </button>
          <button type="button" style="position:relative;top:-10px; margin-left:10%" id ="change-bnt" class="btn btn-primary" data-toggle="modal" data-target="#change"> Change Password </button>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Student Profile -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Edit Profile</h5>

      </div>
      <form action="proctorprofile.php" onsubmit="return validateImage();"name="update" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
              <label class="form-label" style="color: black;">Name</label>
              <input type="text" class="form-control" name='name' id="name" value="<?php  echo $row['name']?>" placeholder="enter name" >
            </div>
            <div class="form-group">
              <label class="form-label" style="color: black;">Email:</label>
              <input type="text" class="form-control" name='email' id="email" value="<?php  echo $row['email']?>" placeholder="enter email" >
            </div>
            <div class="form-group">
              <label class="form-label" style="color: black;">Phone:</label>
              <input type="text" class="form-control" name='phone' id="phone" value="<?php  echo $row['phone']?>" placeholder="enter email" >
            </div>
            <div class="form-group">
              <label class="form-label" style="color: black;">Experience:</label>
              <input type="text" class="form-control" name='experience' id="experience" value="<?php  echo $row['experience']?>" placeholder="enter email" >
            </div>
            
        
            
            
            <div class="form-group">
              <label class="form-label" style="color: black;">Picture</label>
              <input type="file" name="my_image" id="my_image" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button type="submit" id="save" name="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>


        
      
    </div>
  </div>
</div> 
<div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Change Password</h5>
      </div>
      <form name='change' action="" method="POST">
        <div class="modal-body">
            <div class="form-group">
              <label class="form-label" style="color: black;">Current Password:</label>
              <em style="cursor:pointer; position:relative;left:72%;top:30px;"class="fas fa-eye-slash" id="eye1"></em>
              <input type="password" class="form-control" name='curpass' id="curpass"  pattern="<?php echo $v?>" placeholder="enter Current Password" required>
              <p id="cur"></p>
            </div>
            <div class="form-group">
              
              <label class="form-label" style="color: black;">New Password:</label>
              <em style="cursor:pointer; position:relative;left:76%;top:30px;"class="fas fa-eye-slash" id="eye2"></em>
              <input type="password" class="form-control" name='newpass'  id="newpass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" placeholder="enter New Password" required>
            </div>                                                                   
            <div class="form-group">
              <label class="form-label" style="color: black;">Re-Enter New Password:</label>
              <input type="password" class="form-control" name='connewpass' id="connewpass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" placeholder="Re-Enter New Password" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <form action="proctorprofile.php" method="POST">
            <button type="submit" name="changebnt" class="btn btn-primary">Save changes</button>
          </form>
          <?php
            if(isset($_POST['changebnt']))
            {
              $before=$row['email'];
              $new_cur=$_POST['curpass'];
              $new_pass=$_POST['newpass'];
              $connew_pass=$_POST['connewpass'];
              $query="update proctorlogin set password='$new_pass' where email= '$before'";
              $res=mysqli_query($con,$query);
              $_SESSION['status1']='<div style="background-color:green; color-white; margin-left:20%; width:50%;" class="alert alert-success alert-dismissible">  <a href="#" style="color:black;" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:white;>Success!Password updated Sucessfully.</strong></div>';
              echo '<script>window.location.href="proctorprofile.php"</script>';
              
            }
          ?>
             <script>
                  var phone_input = document.getElementById("curpass");
                  phone_input.addEventListener('input', () => {
                  phone_input.setCustomValidity('');
                  phone_input.checkValidity();
                  });

                  phone_input.addEventListener('invalid', () => {
                  if(phone_input.value === '') {
                  phone_input.setCustomValidity('Enter Current Password!');
                  } else {
                  phone_input.setCustomValidity('Incorrect  Password');
                  }
            });
            var pass=document.getElementById('newpass');
                pass.addEventListener('input',() =>{
                    pass.setCustomValidity('');
                    pass.checkValidity();
                }
                );
                pass.addEventListener('invalid', () => {
                if(pass.value === '') {
                pass.setCustomValidity('Enter New password!');
                } else {
                pass.setCustomValidity('should contain 1 upper,1lowercase ,numerical,1special char');
                }
                });
                var pass1=document.getElementById('connewpass');
                pass1.addEventListener('input',() =>{
                    pass1.setCustomValidity('');
                    pass1.checkValidity();
                }
                );
                pass1.addEventListener('invalid', () => {
                if(pass1.value === '') {
                pass1.setCustomValidity('Re-Enter New Password!');
                } 
                else if(pass.value!=pass1.value){
                pass1.setCustomValidity('Password and Confirm password shoul be same');
                }
                });
            </script>


        </div>
      </form>
    </div>
  </div>
</div>  
    <script>
      function validateImage() {
    var formData = new FormData();
    var file = document.getElementById("my_image").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png") {
      $("#my_image").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong> On1ly jpeg , png and jpg are allowed.</div>');
        document.getElementById("my_image").value = '';
        return false;
    }
    if (file.size > 1024000) {
      $("#my_image").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong1> Image size should be less than 1MB.</div>');
        document.getElementById("my_image").value = '';
        return false;
    }
    return true;
}
    </script>
</body>
</html>


<?php
  if(isset($_POST['submit'])){
   
    $modified_name=$_POST['name'];
    $modified_address=$_POST['email'];
    $modified_phone=$_POST['phone'];
    $modified_blood=$_POST['experience'];
   

    $query="update proctorlogin set name='$modified_name',email='$modified_address',phone='$modified_phone',experience='$modified_blood'";
    if(mysqli_query($con,$query)){
      $_SESSION['status']='<div style="background-color:green; color-white; margin-left:20%; width:50%;" class="alert alert-success alert-dismissible">  <a href="#" style="color:black;" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:white;>Success!Profile updated Sucessfully.</strong></div>';
    }
    echo '<script>window.location.href="proctorprofile.php"</script>';
  }
          if(isset($_FILES['my_image']))
            { 
              $img_name = $_FILES['my_image']['name'];
              $img_size = $_FILES['my_image']['size'];
              $tmp_name = $_FILES['my_image']['tmp_name'];
              $error = $_FILES['my_image']['error'];

              if ($error == 0) {
                if ($img_size > 1024000) {
                  $em = "Sorry, your file is too large.";
                }
                else {
                  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                  $img_ex_lc = strtolower($img_ex);

                  $allowed_exs = array("jpg", "jpeg", "png"); 

                  if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    $user=$_SESSION["email"];
                    $query="update proctorlogin set profilepic='$new_img_name' where email= '$user'";
                   mysqli_query($con,$query);
                   
                  }
                  else {
                    $em = "You can't upload files of this type";
                      
                  }
                }
              }
              else
              {
                $em = "Sorry, your file is too large.";
            
              }
            }           
  
?>

