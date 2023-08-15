<?php
session_start();
?>

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
//session_start();
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
        <div class="row">
          <button type="button" class="btn btn-primary col-lg-4"><a href="../attendance/attendance.php">Attendance</a></button>
          <button type="button" class="btn btn-secondary col-lg-4">Class List</button>
          <button type="button" class="btn btn-success col-lg-4">Time Table</button>

          <button type="button" class="btn btn-danger col-lg-4">Exam</button>
          <button type="button" class="btn btn-warning col-lg-4">Calendar</button>
          <button type="button" class="btn btn-info col-lg-4"> <a href="../notices/notice.php">Notices</a></button>

          <button type="button" class="btn btn-secondary col-lg-4"><a href="../results/results.php">Exam Results</a></button>
          <button type="button" class="btn btn-primary col-lg-4">Settings</button>
        </div><br>
      </div>
    </div>
  </section>


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