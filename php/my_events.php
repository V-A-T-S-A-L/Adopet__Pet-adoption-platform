<?php 
    session_start();
    include("db.php");

    $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shelter Events</title>
</head>

<style>
    /* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #ececea;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../img/bg-img.jpg);
  color: #333;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Header Section */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
}

.header h1 {
  font-size: 36px;
  color: #fff;
}

h2 {
    color: #fff;
}

.create-event-button {
  background-color: #007bff;
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.create-event-button:hover {
  background-color: #0056b3;
}

/* Previous Events Section */
.previous-events {
  margin-top: 20px;
}

.previous-events h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.events-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

/* Event Card */
.event-card {
  display: flex;
  background-color: #eed3af;
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: all 0.3s ease;
  border: 1px solid;
}

.event-card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    transform: scale(1.01);
}

.event-img {
  width: 30%;
  padding: 10px;
  border-radius: 25px;
  object-fit: cover;
}

.event-details {
  padding: 20px;
  flex: 1;
}

.event-details h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.event-description {
  font-size: 16px;
  line-height: 1.5;
}

.event-name {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.edit-btn {
    border-radius: 25px;
    width: 50px;
    height: 30px;
    cursor: pointer;
}

.del-btn {
    border-radius: 25px;
    width: 50px;
    height: 30px;
    cursor: pointer;
    background-color: red;
    color: white;
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
</style>
<body>
  <div class="container">
    <!-- Header Section with Create Event Button -->
    <header class="header">
      <h1>Shelter Events</h1>
      <button class="create-event-button" onclick="window.location.href='new_event.php'">Create New Event</button>
    </header>

    <!-- Previous Events Section -->
    <section class="previous-events">
      <div class="events-container">
        <?php 
            $sql = "SELECT * FROM events WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $eventDate = $row['date'];
                    $eventId = $row['id'];
                    $img = $row['img'];
                    ?>
                    <div class="event-card">
                        <?php 
                            echo '<img class="event-img" src="events/' . $row["img"] . '">';
                        ?>
                        <div class="event-details">
                            <div class="event-name">
                                <h3><?php echo $row['title'];?></h3>
                                <div class="btn-div">
                                    <?php echo "<a href='edit_event.php?id=$eventId'><button class='edit-btn'>Edit</button></a>";?>
                                    <?php echo "<a href='del_event.php?id=$eventId'><button class='del-btn'>Delete</button></a>";?>
                                </div>
                            </div>
                            <p class="event-description"><?php echo "Date: ".$row['date'];?></p>
                            <p class="event-description"><?php echo $row['description'];?></p>
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
            } else {
                echo "Start creating a new event!";
            }
        ?>
      </div>
    </section>
  </div>
</body>

</html>
