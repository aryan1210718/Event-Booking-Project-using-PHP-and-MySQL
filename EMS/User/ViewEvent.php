

<?php
include "../loginreg/partials/db_conn.php";
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['username'])) {
  header("Location: ../loginreg/login(user).php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php include "partials/header.php"?>

<br><br><br>

      <main>
        <section class="section featured-car" id="featured-car">
            <div class="container">
    
              
                <h2 class="h2 section-title" style="text-align: center;">Our Events</h2>
<br>    
<section class="section featured-car" id="featured-car">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Events</h2>

            <a href="ViewEvent.php" class="featured-car-link">
              <span>View more</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list">


          <?php

        
      $sql="SELECT * FROM event_tbl";
      $result=mysqli_query($conn,$sql);



        while($row=mysqli_fetch_assoc($result)){
          
          $eventname = $row['event_name'];
          $eventimg = $row['event_img'];
          $eventpeople = $row['event_people'];
          $eventprice = $row['event_price'];
          $eventid = $row['event_id'];
            echo'<li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="'.$eventimg.'" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">'.$eventname.'</a>
                    </h3>

                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">'.$eventpeople.'</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>INR:'.$eventprice.'</strong> / Ticket
                    </p>

                    <a href="bookticket.php?id='.$eventid.'"><button class="btn">Buy Ticket</button></a>

                  </div>

                </div>

              </div>
            </li>';


        }
            ?>

</div>

</div>
</li>

</ul>

</div>
</section>
    
      </main>
    

      <footer class="footer">
        <div class="container">
    
          <div class="footer-top">
    
            <div class="footer-brand">
              <a href="#" class="logo">
                <p style="color: black;font-weight: bolder;">Event Mangment System</p>
              </a>
    
              <p class="footer-text">
                Search for Events in New York. With a diverse of 200 Events, Waydex offers its
                consumers an
                attractive and fun selection.
              </p>
            </div>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Company</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">About us</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Pricing plans</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Our blog</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Contacts</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Support</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Help center</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Ask a question</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Privacy policy</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Terms & conditions</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Neighborhoods in New York</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Manhattan</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Central New York City</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Upper East Side</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Queens</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Theater District</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Midtown</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">SoHo</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Chelsea</a>
              </li>
    
            </ul>
    
          </div>
    
          
    
        </div>
      </footer>
      <script src="./assets/js/script.js"></script>

      <!-- 
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>