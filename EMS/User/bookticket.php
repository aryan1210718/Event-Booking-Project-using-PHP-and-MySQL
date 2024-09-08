<?php
include "../loginreg/partials/db_conn.php";
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../loginreg/login(user).php");
  exit; // Ensure that script stops executing after redirection
}
$eventid = $_GET['id'];

$sql = "SELECT * FROM event_tbl WHERE event_id='$eventid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberOfTickets = $_POST['numberOfTickets'];

    $totalPrice = $numberOfTickets * $row['event_price'];

    header("Location: payment.php?price=$totalPrice&id=$eventid&No_Of_Ticket=$numberOfTickets");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">
  
    <!-- 
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        th, td {
      padding: 15px;
      text-align: left;
      color: black;
    }
    select{
    width: 100%;
    padding: 4px;
    outline: none;
    border: 2px solid black;
}
input{
    padding: 4px;
    outline: none;
    border: 2px solid black;

}
.button-1 {
  background-color: green;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  width: 100%;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-1:hover,
.button-1:focus {
  background-color: green;
}
    </style>
</head>
<body>
<?php include "partials/header.php"?>

<br><br><br>

      <main>
        <section class="section featured-car" id="featured-car">
            <div class="container">
    
              
                <h2 class="h2 section-title" style="text-align: center;">Book Event</h2>
<br>    
              <ul class="featured-car-list" style="display: block;">
    
                <li>
                  <div class="featured-car-card" style="border: 2px solid green;">
                    <div class="card-content">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>Event Name</td>
                                <td><input type="text" value="<?php echo $row['event_name']; ?>" disabled></td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td><input type="text" value="<?php echo $row['Duration']; ?>" disabled></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td><input type="text" value="<?php echo $row['Date']; ?>" disabled></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea name="" id="" cols="30" rows="3" disabled><?php echo $row['Description']; ?></textarea></td>
                            </tr>
                            <tr>
                              <td>Ticket Price</td>
                              <td><input type="text" value="<?php echo $row['event_price']; ?>" disabled></td>
                            </tr>
                            <tr>
                              <td>Location</td>
                              <td><input type="text" value="<?php echo $row['Location']; ?>" disabled></td>
                            </tr>
                            <tr>
                <td>Number Of Tickets</td>
                <td><input type="number" name="numberOfTickets" id="numberOfTickets"></td>
            </tr>
                            <tr>
                            <td><button type="submit" class="button-1" role="button">Buy Ticket</button></td>
                            </tr>
                        </table>    
                        </form>
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