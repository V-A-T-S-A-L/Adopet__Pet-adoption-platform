<?php
    session_start();
    include("db.php");

    $user_id = $_SESSION['user_id'];
    //echo $user_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

/* Navbar Styles */
nav {
    background-color: #eed3af;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}

nav .logo img{
    width: 5%;
    object-fit: cover;
}

nav ul {
    list-style-type: none;
    display: flex;
}

nav ul li {
    margin-left: 1.5rem;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.1rem;
}

nav ul li a:hover {
    text-decoration: underline;
}

/* Header */
header {
    text-align: center;
    padding: 2rem;
    background-color: #eed3af;
    color: white;
}

h1 {
    margin-bottom: 1rem;
}

/* Events Section */
#events-section {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
}

/* Card Styles */
.card {
    display: flex;
    background-color: #eed3af;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 1rem 0;
    overflow: hidden;
}

.card img {
    width: 30%;
    object-fit: cover;
    padding: 10px;
    border-radius: 25px;
}

.card-content {
    padding: 1.5rem;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-content h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.card-content p {
    margin: 0.5rem 0;
}

.card-content .countdown {
    font-size: 1.2rem;
    color: #ff6347;
}

#header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 80px;
  background: #eed3af;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
  z-index: 999;
  position: sticky;
  top: 0;
  left: 0;
}

#navbar {
  display: flex;
  align-items: center;
  justify-content: center;
}

#navbar li {
  list-style: none;
  padding: 0 20px;
  position: relative;
}

#navbar li a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  color: #1a1a1a;
  transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active{
  color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after{
  content: "";
  width: 30%;
  height: 2px;
  background: #088178;
  position: absolute;
  bottom: -4px;
  left: 20px;
}

#mobile {
  display: none;
  align-items: center;
}

#close {
  display: none;
}

.logo{
  height: 50px;
  width: 80px;
  transform: scale(1.2);

}

.timer {
    font-size: 20px;
    font-weight: bold;
    color: #ff5733; /* Bright orange-red color for the timer */
    margin-top: 10px;
    text-align: center;
    padding: 10px;
    border: 1px solid #000; /* Blue border to match the theme */
    border-radius: 8px;
    background-color: #f7f7f7; /* Light gray background */
    width: fit-content;
    display: inline-block;
}

.event-name {
    display: flex;
    width: 780px;
    align-items: center;
    justify-content: space-between;
}

.btn {
    background-color: #333;
    color: #fff;
    border-radius: 8px;
    width: 100px;
    height: 40px;
    cursor: pointer;
}
</style>
<body>

    <!-- Navbar 
    <nav>
        <div class="logo"><img src="../img/logo.png"></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>-->

    <section id="header">
            <a href="#"><img src="../img/logo.png" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Adopt</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a class="active" href="events.php">Events</a></li>
                    <li><a href="#">Contact</a></li>
                    <li id="lg-bag"><a href="#"><i class='bx bx-shopping-bag' ></i></a></li>
                    <a href="#" id="close"><i class='bx bx-x'></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="#"><i class='bx bx-shopping-bag' ></i></a>
                <i id="bar" class='bx bx-menu'></i>
            </div>
        </section>


    <section id="events-section">
        <?php
            $sql = "SELECT * FROM events WHERE date >= NOW() ORDER BY date ASC;";
            $result = mysqli_query($conn, $sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $eventDate = $row['date'];
                    $eventId = $row['id'];
                    $img = $row['img'];
                    //echo '<img class="gallery-img" src="events/' . $row["img"] . '">';
                    ?>
                    <div class="card">
                        <?php 
                            echo '<img class="gallery-img" src="events/' . $row["img"] . '">';
                        ?>
                        <div class="card-content">
                            <div class="event-name">
                                <h3><?php echo $row['title'];?></h3>
                                <div class="btn-div">
                                    
                                    <?php echo "<a href='volunteer_form.php?id=$eventId'><button class='btn'>Get Involved</button></a>";?>
                                </div>
                            </div>
                            <p class="description"><?php echo $row['description']?></p>
                            <p class="location">Location: <?php echo $row['location'];?></p>
                            <p class="event-date">Date: <?php echo $row['date'];?></p>
                            <div id="timer-<?php echo $eventId; ?>" class="timer"></div>
                        </div>
                        <script>
                        // Timer functionality
                        (function() {
                            var eventDate = new Date('<?php echo $eventDate; ?>').getTime(); // Convert event date to time
                            var timerId = "timer-<?php echo $eventId; ?>"; // Unique ID for each timer

                            // Update the countdown every second
                            var x = setInterval(function() {
                                var now = new Date().getTime();
                                var distance = eventDate - now;

                                // Time calculations for days, hours, minutes, and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the corresponding timer div
                                document.getElementById(timerId).innerHTML = days + "d " + hours + "h " +
                                    minutes + "m " + seconds + "s ";

                                // If the countdown is finished, clear the timer and hide it
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById(timerId).style.display = "none"; // Hides the timer
                                }
                            }, 1000);
                        })();
                    </script>
                    </div>
                    <?php
                }
            }
        ?>
    </section>

</body>
</html>
