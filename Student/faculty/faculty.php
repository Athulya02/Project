<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Faculty</title>
  <link rel="stylesheet" href="../sidebar/sidebar.css">
  <link rel="stylesheet" href="faculty.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <?php
  session_start();
  $title = 'faculty';
  $page = "faculty";
  include_once('../sidebar/sidebar.php');
  ?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Faculty</span>
      </div>

      <div class="profile-details">
        <img src="https://img.icons8.com/?size=512&id=98957&format=png" alt="">
        <span class="admin_name">
          <?php if (isset($_SESSION['user_id'])) {
            echo $_SESSION['user_id'];
          } else {
            echo "GUEST";
          } ?>
        </span>
      </div>
    </nav>

    <!-- Content-section starts-->
    <div class="home-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Dr. BIBIN VINCENT</h5>
              <p class="card-text">bibin.v@providence.edu.in</p>
              <p class="card-text">8934568492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Dr. PRAMOD MATHEW JACOB</h5>
              <p class="card-text">pramod.j@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">JENI MONI</h5>
              <p class="card-text">jeni.m@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">NISHA ANIYAN</h5>
              <p class="card-text">nisha.a@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">RENISHA P SALIM</h5>
              <p class="card-text">renisha.s@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">SALEEMA D</h5>
              <p class="card-text">saleema.d@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">SUMISHA SAMUEL</h5>
              <p class="card-text">sumisha.s@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">SURJIMOL RAJAN</h5>
              <p class="card-text">surjimol.r@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">SYAMRAJ BS</h5>
              <p class="card-text">syamraj.b@providence.edu.in</p>
              <p class="card-text">8946638492</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Content-section ends -->

  </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


</body>

</html>
