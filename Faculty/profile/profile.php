
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Profile</title>
    <link rel="stylesheet" href="../sidebar/sidebar.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  
<?php
//session_start();
$title = 'Profile';
$page = "profile";
include_once('../sidebar/sidebar.php');
?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Profile</span>
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


    <!-- Content-section starts-->
    <div class="home-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="student-info">
            <p>Name : Bibin Vincent</p>
            <p>Branch : CSE</p>
            <p>Role : HOD</p>
            <p>College : Providence College of Engineering</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="profile-banner">
            <img src="images/students.jpg" alt="">
            
          </div>
        </div>
      </div>
      <div class="row buttons">
        <div class="col-lg-6 text-center buttons">
          <button type="button" class="btn btn-secondary">Edit profile</button>
          <button type="button" class="btn btn-secondary">Update password</button>
        </div>
        
        
      </div>
    </div>
      <!-- Content-section ends -->


    </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function()
    {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active"))
      {
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }
      else{sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");}
    }
    </script>

    



</body>
</html>