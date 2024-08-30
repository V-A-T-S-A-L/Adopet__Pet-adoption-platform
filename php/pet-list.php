<?php
    session_start();
    include("db.php");

    $user_id = $_SESSION['user_id'];
?>

<style>
    .view-btn {
        border: 1px solid black;
        border-radius: 15px;
        width: 55px;
        height: 25px;
        cursor: pointer;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="icon" type="image/x-icon" href="./img/icon12.png">
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
    

    
    
        <!-- Navbar -->
        <div class="navbar">
            

            <button id="openDrawerBtn" class="drawerBtn">☰</button>
           
            <img src="../img/logo.png" class="logo" alt=""></a>
            <div class="filter-container">
                <form action="" method="GET">
                    <select name="breed">
                        <option value="">All Breeds</option>
                        <option value="Labrador">Labrador</option>
                        <option value="Golden Retriever">Golden Retriever</option>
                        <option value="German Shepherd">German Shepherd</option>
                        <!-- Add more breeds -->
                    </select>
        
                    <select name="color">
                        <option value="">All Colors</option>
                        <option value="Black">Black</option>
                        <option value="White">White</option>
                        <option value="Brown">Brown</option>
                        <!-- Add more colors -->
                    </select>
                    <button type="submit" class="filter-btn">Filter</button>
                </form>
            </div>
           
            
        </div>
    
        <!-- The Drawer -->
        <div id="myDrawer" class="drawer">
            <a href="javascript:void(0)" class="closebtn" id="closeDrawerBtn">&times;</a>
            <a href="#">Home</a>
            <a href="#">Pets</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        
        
        
        <script src="HomePage.js"></script>

    <!-- Main Content -->
    <section class="featured-pets">
        <h2></h2>
        <p>Find Your Forever Friend Today!</p>
        <div class="pet-cards-container">
            <?php 
                $sql = "SELECT * FROM pets";
                $result = mysqli_query($conn, $sql);

                while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="pet-card">
                            <?php 
                                $p_id = $row["p_id"];
                                echo '<img class="" src="pet-img/' . $row["img"] . '">';
                            ?>
                            <h3><?php echo $row['name'];?></h3>
                            <?php echo "<a href='pet_profile.php?id=$p_id'><button class='view-btn'>View</button></a>";?>
                            </a>
                        </div>
                    <?php
                }
            ?>
        </div>
    </section>
            
   
    </div>
</body>
</html>
