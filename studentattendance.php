<?php
  include("security1.php");
        $con=mysqli_connect('localhost','root','','project');
        if(!$con)
        {
          echo "problem in connecting database";
        }
        $reg=$_SESSION["regno"];
        $s="select * from details where studentid='$reg'";
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
  background-image: url('backgroundproctor.jpg');
  background-size: cover;
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
table{
    margin-top: 30px;
    text-align: center;
    background: rgba(0,0,0,0.9);
    color: #fff;
    }
    #show th,#show td{
    padding: 13px;
    }
    #btno td input{
    width:100%;
    }


</style>
</head>
<script>
           function valid()
           {
               var username=document.login.studentid.value;
               var password=document.login.name.value;
               if(username==null || username.trim()=="")
               {
                   alert("Studentid can't be blank");
                   return false;
               }
               if(password==null || password.trim()=="")
               {
                   alert("Name can't be blank");
                   return false;
               }
               return true;
           }
           </script>
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
          <img src="uploads/<?=$row['profilepic']?>" alt="profile_pic">
          <span class="name"><?php echo $row['name']?></span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="profile.php"><span class="picon"><i class="fas fa-user-alt"></i> </span>Profile</a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a></li>
          </ul>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer"  style="display:flex; justify-content:space-around; margin-left:70%;">
              <button class="btn btn-warning" type="button" data-dismiss="modal" style="position:relative; left:-30px;">Cancel</button>
              <form action="logout1.php" method="POST"> 
                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </form>
            </div>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div data-component="sidebar">
      <div class="sidebar">
        <ul class="list-group flex-column d-inline-block first-menu">
          <li class="list-group-item pl-3 py-2">
            <a href="detailsedit.php"><i class="fas fa-user"></i><span class="ml-2 align-middle">Details</span></i></a>
          </li> <!-- /.list-group-item -->
    
          <li class="list-group-item pl-3 py-2">
            <a href="#"><i class="fas fa-user"></i><span class="ml-2 align-middle">Marks</span></i></a>
            <ul class="list-group flex-column d-inline-block submenu" style="margin-top: 1%;">
              <li class="list-group-item pl-4" style="margin-top:20%;">
                <a href="#" class="">1st Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:90px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="midmarksedit.php">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="sem2edit.php">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Posts -->
    
              <li class="list-group-item pl-4">
                <a href="#" class="">2nd Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:130px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="sem3edit.php">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="sem4edit.php">Semester 2</a>
                  </li>
                </ul>
              </li> <!-- end Blog Assist -->
    
              <li class="list-group-item pl-4">
                <a href="#" class="">3rd Year</a><br><br>
    
                <ul class="list-group flex-column d-inline-block sub-submenu" style="margin-top: 1%;">
                  <span class="arrow" style="top:180px;"></span>
                  <li class="list-group-item pl-4">
                    <a href="sem5edit.php">Semester 1</a><br><br>
                  </li>
                  <li class="list-group-item pl-4">
                    <a href="sem6edit.php">Semester 2</a>
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
            <a href="studentattendance.php">
              <i class="fas fa-user"></i><span class="ml-2 align-middle">Attendance</span></i>
            </a>
          </li> <!-- /.list-group-item -->
    
          <li class="list-group-item pl-3 py-2">
            <a href="complaints.php"><i class="fas fa-user"></i><span class="ml-2 align-middle">Complaints</span></i></a>
          </li>
    
        </ul> <!-- /.first-menu -->
      </div> <!-- /.sidebar -->
    </div>
    
    <center>
<table border = "3">
<thead>
<tr>
<form name="login" method="post" onsubmit="return valid();" action="studentattendance.php">
<th>Enter Registration number</th>
<td><input type="text" name="studentid" required></td>
</tr>
<tr>
<th>Enter name of student</th>
<td><input type="text" name="name" required></td>
</thead>
<tbody>
<tr id="btno">
<td colspan="2"><button type="submit" name="search" style="color:black;"><strong>search</strong></td>
</form>
</tr>
</tbody>
</table>
<br>
<br>
<br>
<br>
<br>
<p> <strong style="color:black;">The Attendance details of the student</strong> </p>
           <table border="3" id="show">
            <thead>
            <tr>
            <th>registration number</th>
            <th>name of the student</th>
            <th>attendance percentage</th>
            </tr>
            </thead>
            <?php
            $con=mysqli_connect('localhost','root',"","project");
            if(!$con)
            {
                echo "db not connected";
            }
            if(isset($_POST['search']))
            {
                $b=$_POST['studentid'];
                $s="select * from attendance where studentid='$b'";
          
            $query=mysqli_query($con,$s);
            if(mysqli_num_rows($query)<=0)
            {
                echo "<script>alert('check your studentid');</script>";
            }
            else
            {
                $row=mysqli_fetch_assoc($query);
                ?>
                <tr>
                    <td><?php echo $row['studentid']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['percentage']?></td>
            </tr>
            <?php
            }
        }
           ?>
           </table>

       </center>

    
</body>
</html>

