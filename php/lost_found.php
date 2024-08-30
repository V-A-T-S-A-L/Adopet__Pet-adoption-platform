<?php 
    session_start();
    include("db.php");

    $user_id = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Pets</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #ececea;
    color: #333;
}

header {
    text-align: center;
    padding: 2rem;
    background-color: #eed3af;
    color: black;
}

h1 {
    margin-bottom: 0.5rem;
}

p {
    font-size: 1.2rem;
}

.buttons-section {
    text-align: center;
    margin: 2rem 0;
}

.button-container button {
    background-color: wheat;
    color: #333;
    padding: 0.8rem 1.5rem;
    margin: 0 1rem;
    border: 2px dashed #333;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1.1rem;
    transition: all 0.3s;
}

.button-container button:hover {
    background-color: #333;
    color: white;
    border: 2px dashed #fff;
}

.cards-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

h2, h4 {
    margin: 2rem 0 1rem;
    text-align: center;
}

.card {
    display: flex;
    align-items: center;
    background-color: #eed3af;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 1rem auto;
    border-radius: 10px;
    overflow: hidden;
    max-width: 800px;
}

.card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.card-content {
    padding: 1rem;
}

.card-content h3 {
    margin-bottom: 0.5rem;
}

.card-content p {
    margin: 0.3rem 0;
}

.slogan {
    font-size: 16px;
    color: #465b52;
    margin: 15px 0 20px 0;
}

</style>
<body>

    <header>
        <h1>Lost and Found Pets</h1>
        <p class="slogan">"Help reunite pets with their owners"</p>
    </header>

    <section class="buttons-section">
        <div class="button-container">
            <button onclick="window.location.href='new_lost.php'">Register Lost Pet</button>
            <button onclick="window.location.href='register-found.html'">Register Found Pet</button>
            <button onclick="window.location.href='lost_pets.php'">View Lost Pets</button>
            <button onclick="window.location.href='register-found.html'">View Found Pets</button>
        </div>
    </section>

    <section class="cards-section">
        <h2>Your Lost Pets</h2>
        <?php 
            $sql = "SELECT * FROM lost_pets WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $sql);
            
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="card">
                            <?php echo '<img class="gallery-img" src="lost/' . $row["image_path"] . '">';?>
                            <div class="card-content">
                                <h3><?php echo $row['name']?></h3>
                                <p>Breed: <?php echo $row['breed'];?></p>
                                <p>Last Seen: <?php echo $row['last_seen_location'];?></p>
                                <p>Date: <?php echo $row['last_seen_date'];?></p>
                            </div>
                        </div>
                    <?php
                }
            } else {
                echo '<h4>"You haven\'t registered any lost pets."</h4>';
            }
        ?>
        

        <h2>Your Found Pets</h2>
        <?php 
            $sql = "SELECT * FROM found_pets WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $sql);
            
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="card">
                            <?php echo '<img class="gallery-img" src="lost/' . $row["image_path"] . '">';?>
                                <div class="card-content">
                                    <p>Breed: <?php echo $row['breed'];?></p>
                                    <p>Last Seen: <?php echo $row['found_location'];?></p>
                                    <p>Date: <?php echo $row['found_date'];?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            } else {
                echo '<h4>"You haven\'t registered any lost pets."</h4>';
            }
        ?>
    </section>

</body>
</html>
