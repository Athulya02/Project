<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Home </title>
  <link rel="stylesheet" href="../sidebar/sidebar.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


<?php
session_start();
$title = 'dashboard';
$page = "dashboard";
include_once('../sidebar/sidebar.php');
?>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search searchbtn'></i>
      </div>
      <div class="profile-details">
        <img src="https://img.icons8.com/?size=512&id=98957&format=png" alt="">
        <span class="admin_name"><?php if (isset($_SESSION['user_id'])) {
                                    echo $_SESSION['user_id'];
                                  } else {
                                    echo "GUEST";
                                  } ?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Attendence</div>
            <div class="number">89%</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Duty leave</span>
            </div>
          </div>
          <i class='bx bx-coin-stack'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Supplies</div>
            <div class="number">3</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Remaining Chances</span>
            </div>
          </div>
          <i class='bx bxs-spreadsheet'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Assignments</div>
            <div class="number">80%</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Pending - 2</span>
            </div>
          </div>
          <i class='bx bx-message-square'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Subjects</div>
            <div class="number">5</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt down'></i>
              <span class="text">Current Semester</span>
            </div>
          </div>
          <i class='bx bxs-book-content four'></i>
        </div>
      </div>


      <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else {
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
          }
        }
      </script>



</body>

</html>