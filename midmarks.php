<?php
include("security1.php");
$con=mysqli_connect('localhost','root',"","project");
$query=$_SESSION["regno"];

      $row1=mysqli_query($con,"select * from mid1 where studentid='$query'");
     $row2=mysqli_query($con,"select * from mid2 where studentid='$query'");
     $row3=mysqli_query($con,"select * from sem1 where studentid='$query'");
     $query1=mysqli_fetch_assoc($row1);
     $query2=mysqli_fetch_assoc($row2);
     $query3=mysqli_fetch_assoc($row3);
     $s="select * from details where studentid='$query'";
     $qu=mysqli_query($con,$s);
     $row=mysqli_fetch_assoc($qu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
  position: fixed;
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
  color: blue;
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
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    color: white;
    
}
.hero{
    height: 100%;
    width: 100%;
  
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    top: -5px;
    width: 450px;
    height: 580px;
    position: relative;
    margin: 8% auto;
    background: #fff;
    background: rgba(0,0,0,0.9);
    padding: 5px;
    overflow: hidden;
    color: #fff;
}
.button-box{
    width: 225px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 16.6px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
    color: #fff;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 70px;
    height: 100%;
    background: linear-gradient(to right, #1034ff5b,#06cdff);
    border-radius: 30px;
    transition: .5s;
}

label{
    width: 200px;
    display: inline-block;
    text-align: left;
}
input{
    float: right;
    transform:translate(15px,-33px); ;
}



.input-group{
    top: 90px;
    position: absolute;
    width: 280px;
    transition: .8s;
}
.input-field{
    
    padding: 5px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 50%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #1034ff5b,#06cdff);
    border: 0;
    outline: none;
    border-radius: 30px;
}
#mid1form{
    top : 120px;
    left: 50px;
}
#mid1form .submit-btn{
    width: 65%;
    transform:translate(30px,20px);
}

#mid2form{
    top : 120px;
    left: -450px;
}
#mid2form .submit-btn{
    width: 65%;
    transform:translate(30px,20px);
}
#sem1form
{   
    top :  95px;
    left: -450px;
}
#sem1form .submit-btn{
    transform:translate(120px,-10px);
}
input[type="file"]{
    display: none;
}
.upload label{
    padding: 10px 10px;
    width: 50%;
    cursor: pointer;
    background: linear-gradient(to right, #1034ff5b,#06cdff);
    border: 0;
    outline: none;
    border-radius: 25px;
    text-align: center;
    font-size: 13px;
    transform:translate(4px,-45px);
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
          <img src="uploads/<?=$row['profilepic']?>" alt="user">
          <span class="name"><?php echo $row['name']?></span>
          <i class="fas fa-chevron-down" style="color:blue;"></i>
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
            <div class="modal-footer" style="display:flex; justify-content:space-around; margin-left:70%;">
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
    <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="mid1form()">MID 1</button>
                    <button type="button" class="toggle-btn" onclick="mid2form()">MID 2</button>
                    <button type="button" class="toggle-btn" onclick="sem1form()">SEM 1</button>
                </div>
            <form id="mid1form" name="mid1" action="midmarks.php" method="post" onsubmit="return valid1();" class="input-group">
        <label>ENGLISH</label><input type="text" name="english1" class="input-field" value="<?php echo $query1["english"];?>" required>
        <label>M1</label><input type="text" name="m11" class="input-field" value="<?php echo $query1["m1"];?>" required>
        <label>CHEMISTRY</label><input type="text" name="chemistry1" class="input-field" value="<?php echo $query1["chemistry"];?>" required>
        <label>BEE</label><input type="text" name="bee1" class="input-field" value="<?php echo $query1["bee"];?>" required>
        <label>PEHV</label><input type="text" name="pehv1" class="input-field" value="<?php echo $query1["pehv"];?>" required>
               <button type="submit" name="mid1submit" class="submit-btn">Submit</button>
            </form>

            <form id="mid2form" name="mid2" action="midmarks.php" method="post" onsubmit="return valid2();" class="input-group">
            <label>ENGLISH</label><input type="text" name="english2" class="input-field" value="<?php echo $query2["english"];?>" required><br>
            <label>M1</label><input type="text" name="m12" class="input-field" value="<?php echo $query2["m1"];?>" required><br>
            <label>CHEMISTRY</label><input type="text" name="chemistry2" class="input-field" value="<?php echo $query2["chemistry"];?>" required><br>
            <label>BEE</label><input type="text" name="bee2" class="input-field" value="<?php echo $query2["bee"];?>" required><br>
            <label>PEHV</label>   <input type="text" name="pehv2" class="input-field" value="<?php echo $query2["pehv"];?>" required><br>
               <button type="submit" name="mid2submit" class="submit-btn">Submit</button>
            </form>

            <form id="sem1form" name="sem1" action="midmarks.php" enctype="multipart/form-data" method="post" onsubmit="return valid3();" class="input-group">
                <label>ENGLISH</label><input type="text" name="english3" class="input-field" value="<?php echo $query3["english"];?>" required><br>
                <label>M1</label><input type="text" name="m13" class="input-field" value="<?php echo $query3["m1"];?>" required><br>
                <label>CHEMISTRY</label><input type="text" name="chemistry3" class="input-field" value="<?php echo $query3["chemistry"];?>" required><br>
                <label>BEE</label><input type="text" name="bee3" class="input-field" value="<?php echo $query3["bee"];?>" required><br>
                <label>PEHV</label><input type="text" name="pehv3" class="input-field" value="<?php echo $query3["pehv"];?>" required><br>
                <label>CHEMISTRY LAB</label><input type="text" name="chemistrylab3" class="input-field" value="<?php echo $query3["chemistrylab"];?>" required><br>
                <label>C LAB</label><input type="text" name="clab3" class="input-field" value="<?php echo $query3["clab"];?>" required><br>
               
                <button type="submit" name="sem1submit" class="submit-btn">Submit</button>

                <input type="file" id="file" name="memo" accept="pdf/*"/>
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
    $query="update mid1 set english='$english',m1='$m1',chemistry='$chemistry',bee='$bee',pehv='$pehv' where studentid='$regno'";
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
    $query="update mid2 set english='$english',m1='$m1',chemistry='$chemistry',bee='$bee',pehv='$pehv' where studentid='$regno'";
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
    $img_name = $_FILES['memo']['name'];
    $img_size = $_FILES['memo']['size'];
    $tmp_name = $_FILES['memo']['tmp_name'];
    $error = $_FILES['memo']['error'];
    $new_img_name;
    $new_cover_name;
    if ($error == 0) {
      if ($img_size > 10240000) {
        $em = "Sorry, your file is too large.";
      }
      else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed = ['pdf', 'txt', 'doc', 'docx'];

        if (in_array($img_ex_lc, $allowed)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'memouploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
        }
      }
    }
    $query="update sem1 set english='$english',m1='$m1',chemistry='$chemistry',bee='$bee',pehv='$pehv',chemistrylab='$chemistrylab',clab='$clab',s1memo='$new_img_name' where studentid='$regno'";
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