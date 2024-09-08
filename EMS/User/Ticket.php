

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
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>
<?php include "partials/header.php"?>

<br><br><br><br><br>
<div class="main" style="margin-left: 70px;margin-right: 70px;">
<table>
  <tr>
    <th>Event Name</th>
    <th>Duration</th>
    <th>Date</th>
    <th>Description</th>
    <th>Ticket Price</th>
    <th>Location</th>
    <th>No Of Tickets</th>
    <th>Total Amount</th>
    <th>QR Code</th>
  </tr>
  <?php 
  include "../loginreg/partials/db_conn.php";



  $User_id = $_SESSION["u_id"];
  // Fetch data from ticket_data table
  $sql = "SELECT `id`, `event_img`, `event_name`, `No_Of_Tickets`, `event_price`, `duration`, `date`, `location`, `description`, `total_price`, `qr_code_path` FROM `ticket_data` WHERE user_id=$User_id";
  $result = mysqli_query($conn, $sql);
            // Loop through the result set and display data in table rows
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['event_name']}</td>";
                echo "<td>{$row['duration']}</td>";
                echo "<td>{$row['date']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>{$row['event_price']}</td>";
                echo "<td>{$row['location']}</td>";
                echo "<td>{$row['No_Of_Tickets']}</td>";
                echo "<td>{$row['total_price']}</td>";
                echo "<td><img src='{$row['qr_code_path']}' alt='QR Code' width='100'></td>";
                echo "</tr>";
            }
            ?>
</table>
</div>

<br><br><br><br><br>
<?php include "partials/footer.php"?>
      <script src="./assets/js/script.js"></script>

      <!-- 
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>