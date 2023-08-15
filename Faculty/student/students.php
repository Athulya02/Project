<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Faculty  </title>
    <link rel="stylesheet" href="../sidebar/sidebar.css">        
    <link rel="stylesheet" href="students.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  
<?php
//session_start();
$title = 'student';
$page = "student";
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
        <span class="admin_name"><?php if (isset($_SESSION['user_id'])) {
                                    echo $_SESSION['user_id'];
                                  } else {
                                    echo "GUEST";
                                  } ?></span>
      </div>
    </nav>

    <!-- Content-section starts-->
    
    <div class="form-section">
      <form action="#" method="post" class="form-inline semform">
        <div class="form-group mr-2 text-dark ml-5">
          <label for="rollNo" class="mr-2">Roll No:</label>
          <input type="text" class="form-control" id="rollNo" name="rollNo" required>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>


    <!--Form end-->







    <div class="result-div">
        <div class="marksdiv mb-5">
          <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="http://eeee.com" style="color: #fff;">Students</a></button>
          <table class="table text-dark">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Roll no</th>
                <th scope="col">Semester</th>
                <th scope="col">Department</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cyril K U</td>
                <td>PRC20CS022</td>
                <td>6</td>
                <td>CSE</td>
              </tr>
              <tr>
                <td>Athulya</td>
                <td>PRC20CS020</td>
                <td>6</td>
                <td>CSE</td>
              </tr>
              <tr>
                <td>Cyril K U</td>
                <td>PRC20CS022</td>
                <td>6</td>
                <td>CSE</td>
              </tr>
            </tbody>
          </table>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>