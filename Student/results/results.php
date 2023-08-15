<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
  <link rel="stylesheet" href="../sidebar/sidebar.css">
  <link rel="stylesheet" href="results.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
  <?php
  session_start();
  $title = 'Result';
  $page = "result";
  include_once('../sidebar/sidebar.php');
  ?>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Results</span>
      </div>
      
      <div class="profile-details">
        <img src="https://img.icons8.com/?size=512&id=98957&format=png" alt="">
        <span class="admin_name">
          <?php 
          if (isset($_SESSION['user_id'])) {
            echo $_SESSION['user_id'];
          } else {
            echo "GUEST";
          } 
          ?>
        </span>
      </div>
    </nav>

    <!-- Content-section starts-->
    <div class="home-content">
      
    <!--Form start-->

      <form action="#" method="post" class="form-inline semform">
  <div class="form-group mr-2 text-dark ml-5">
    <label for="inputText" class="mr-2">Semester : </label>
    <select class="form-control" id="inputText" name="inputText">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>

    </select>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
    
    <!--Form end-->


      <div class="result-div">
        <div class="marksdiv mb-5">
          <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="http://eeee.com" style="color: #fff;">Series 1 Results</a></button>
          <table class="table text-dark">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Subject</th>
                <th scope="col">Course Code</th>
                <th scope="col">Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>LINEAR ALGEBRA AND CALCULUS</td>
                <td>CST101</td>
                <td>78</td>
              </tr>
              <tr>
                <td>02</td>
                <td>ENGINEERING PHYSICS A</td>
                <td>CST102</td>
                <td>68</td>
              </tr>
              <tr>
                <td>03</td>
                <td>ENGINEERING GRAPHICS</td>
                <td>CST103</td>
                <td>58</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="marksdiv mb-5">
          <button type="button" class="btn btn-danger btn-lg btn-block"><a href="http://eeee.com" style="color: #fff;">Series 2 Results</a></button>
          <table class="table text-dark">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Subject</th>
                <th scope="col">Course Code</th>
                <th scope="col">Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>VECTOR CALCULUS , DIFFERENTIAL EQUATIONS AND TRANSFORMS</td>
                <td>CST101</td>
                <td>78</td>
              </tr>
              <tr>
                <td>02</td>
                <td>ENGINEERING CHEMISTRY</td>
                <td>CST102</td>
                <td>68</td>
              </tr>
              <tr>
                <td>03</td>
                <td>ENGINEERING MECHANICS</td>
                <td>CST103</td>
                <td>58</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="marksdiv mb-5">
          <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="http://eeee.com" style="color: #fff;">University Results</a></button>
          <table class="table text-dark">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Subject</th>
                <th scope="col">Course Code</th>
                <th scope="col">Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>English</td>
                <td>CST101</td>
                <td>78</td>
              </tr>
              <tr>
                <td>02</td>
                <td>Hindi</td>
                <td>CST102</td>
                <td>68</td>
              </tr>
              <tr>
                <td>03</td>
                <td>Physics</td>
                <td>CST103</td>
                <td>58</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="marksdiv mb-5">
          <button type="button" class="btn btn-danger btn-lg btn-block"><a href="http://eeee.com" style="color: #fff;">Assignment Results</a></button>
          <table class="table text-dark">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Subject</th>
                <th scope="col">Course Code</th>
                <th scope="col">Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>English</td>
                <td>CST101</td>
                <td>78</td>
              </tr>
              <tr>
                <td>02</td>
                <td>Hindi</td>
                <td>CST102</td>
                <td>68</td>
              </tr>
              <tr>
                <td>03</td>
                <td>Physics</td>
                <td>CST103</td>
                <td>58</td>
              </tr>
            </tbody>
          </table>
        </div>


       </div>
    </div>
    <!-- Content-section ends -->
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
