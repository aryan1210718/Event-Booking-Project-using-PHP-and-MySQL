<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <p style="color: black;font-weight: bolder;">Event Mangment System</p>
        
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="ViewEvent.php" class="navbar-link" data-nav-link>Explore Events</a>
          </li>

          <li>
            <a href="Ticket.php" class="navbar-link" data-nav-link>Ticket</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">


       
<?php       

      include "../loginreg/partials/db_conn.php";      
      if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
 <?php if(isset($_SESSION['username'])): ?>
  
  <a href="" class="btn" aria-labelledby="aria-label-txt">
          <span id="aria-label-txt"><?php  echo $_SESSION['username'];?></span>
        </a>

    <a href="./logout.php" class="btn user-btn" aria-label="Profile">
        <i class="fa fa-sign-out"></i>
    </a>
<?php else: ?>
    <a href="../loginreg/login(user).php" class="btn user-btn" aria-label="Sign In">Sign In</a>
<?php endif; ?>


      </div>

    </div>
  </header>

