<?php
  session_start();
  include("db.php");

  $p_id = $_GET['id'];

  $sql = "SELECT * FROM pets where p_id = '$p_id'";
  $result = mysqli_query($conn, $sql);
  $ans = mysqli_fetch_assoc($result);

  $user_id = $ans['user_id'];
  $q = "SELECT * FROM users WHERE user_id = '$user_id'";
  $r = mysqli_query($conn, $q);
  $a = mysqli_fetch_assoc($r);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Profile</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="profile-container">
    <!-- Header Section -->
    <div class="hero-section">
      <div class="hero-text">
        <h1 style="color: black;"><?php echo $ans['name'];?></h1>
        <span class="status-badge">Available</span>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="profile-content">
      <!-- Left Column: Dog's Info -->
      <div class="dog-info">
        <h2>About <?php echo $ans['name'];?></h2>
        <ul>
          <li><strong>Species:</strong><?php echo " ".$ans['species'];?></li>
          <li><strong>Breed:</strong><?php echo " ".$ans['breed'];?></li>
          <li><strong>Age:</strong><?php echo " ".$ans['age'];?></li>
          <li><strong>Gender:</strong> <?php echo " ".$ans['gender'];?></li>
          <li><strong>Weight:</strong> <?php echo " ".$ans['weight'];?></li>
          <li><strong>Color:</strong> <?php echo " ".$ans['color'];?></li>
          <li><strong>Contact:</strong> <?php echo " ".$a['phone'];?></li>
        </ul>
        <p>
          <?php echo $ans['p_description'];?>
        </p>
        <button class="adopt-button">Adopt <?php echo $ans['name'];?></button>
      </div>

      <!-- Right Column: Image Gallery -->
      <div class="image-gallery">
        <h2><?php echo $ans['name'];?>'s Gallery</h2>
        <div class="gallery">
          <?php 
            echo '<img class="gallery-img" src="pet-img/' . $ans["img"] . '">';
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>

<style>
/* Basic Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

/* Profile Container */
.profile-container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Hero Section */
.hero-section {
  position: relative;
  width: 100%;
  height: 150px;
}

.hero-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.hero-text {
  position: absolute;
  bottom: 20px;
  left: 30px;
  color: #fff;
}

.hero-text h1 {
  font-size: 48px;
  margin-bottom: 10px;
}

.status-badge {
  background-color: #28a745;
  padding: 8px 15px;
  border-radius: 20px;
  font-size: 16px;
  text-transform: uppercase;
}

/* Profile Content Layout */
.profile-content {
  display: flex;
  margin-top: 30px;
  gap: 30px;
}

/* Dog Info */
.dog-info {
  flex: 1;
  background-color: #eed3af;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.dog-info h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.dog-info ul {
  list-style-type: none;
  margin-bottom: 20px;
}

.dog-info li {
  font-size: 18px;
  margin-bottom: 8px;
}

.dog-info p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.adopt-button {
  background-color: #007bff;
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.adopt-button:hover {
  background-color: #0056b3;
}

/* Image Gallery */
.image-gallery {
  flex: 1;
  background-color: #eed3af;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.gallery {
  display: flex;
  gap: 10px;
}

.gallery-img {
  width: 100%;
 
  height: 400px;
  object-fit: cover;
  border-radius: 10px;
  transition: transform 0.3s;
}

.gallery-img:hover {
  transform: scale(1.05);
}
</style>