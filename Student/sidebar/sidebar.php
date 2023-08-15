<!--Sidebar Start-->
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-sass'></i>
      <span class="logo_name">SRMS</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../dashboard/dashboard.php" class="<?php if($page == 'dashboard'){ 	echo "active";}?>">
          <i class='bx bx-home'></i>
          <span class="links_name">Home</span>
        </a>
      </li>

      <li>
        <a href="../profile/profile.php"  class="<?php if($page == 'profile'){ 	echo "active";}?>" >
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Profile</span>
        </a>
      </li>
      <li>
        <a href="../results/results.php" class="<?php if($page == 'result'){ 	echo "active";}?>">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Results</span>
        </a>
      </li>
      <li>
        <a href="../attendance/attendance.php"  class="<?php if($page == 'attendance'){ 	echo "active";}?>">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Attendence</span>
        </a>
      </li>
      <li>
        <a href="../assignment/assignment.php"  class="<?php if($page == 'assignment'){ 	echo "active";}?>">
          <i class='bx bx-message'></i>
          <span class="links_name">Assignment</span>
        </a>
      </li>
      <li>
        <a href="../faculty/faculty.php"  class="<?php if($page == 'faculty'){ 	echo "active";}?>">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Faculty</span>
        </a>
      </li>
      <li>
        <a href="../subject/subject.php"  class="<?php if($page == 'subject'){ 	echo "active";}?>">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Subjects</span>
        </a>
      </li>
      <li>
        <a href="../notices/notice.php"  class="<?php if($page == 'notice'){ 	echo "active";}?>">
          <i class='bx bx-heart'></i>
          <span class="links_name">Notice</span>
        </a>
      </li>
      
      <li class="log_out">
        <?php require_once '../logout_list.php'?>
      </li>
    </ul>
  </div>
  <!--Sidebar end-->