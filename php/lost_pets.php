<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Pets</title>
    <style>
        /* Navbar Styles */
        body {
            background-color: whitesmoke;
        }

        .navbar {
            display: flex;
            justify-content: right;
            background-color: #eed3af;
            padding: 10px;
        }
        .navbar a {
            color: black;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s;
        }
        .navbar a:hover {
            background-color: #333;
            color: white;
        }

        /* Filter Section Styles */
        .filter-container {
            margin: 20px;
            padding: 10px;
            background-color: #eed3af;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .filter-container select, .filter-container input {
            padding: 10px;
            margin-right: 10px;
            border-radius: 25px;
            cursor: pointer;
        }

        .filter-btn {
            cursor: pointer;
            border-radius: 25px;
            height: 35px;
            width: 70px;
            background-color: white;
        }

        /* Lost Pets Card Grid */
        .pets-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin: 20px;
        }
        
        /* Card Styles */
        .pet-card {
            background-color: #eed3af;
            border: 1px solid black;
            border-radius: 25px;
            padding: 20px;
            height: 450px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: 0.3s ease;
        }

        .pet-card:hover {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .pet-card img {
            max-width: 250px;
            object-fit: cover;
            height: 250px;
            border-radius: 25px;
        }
        .pet-card h3 {
            margin: 10px 0;
        }
        .pet-card p {
            color: #777;
        }
        .home {
            align-items: center;
            text-decoration: none;
            color: black;
            font-size: large;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    

    <!-- Filter Section -->
    <div class="filter-container">
        <div class="home-div">
            <a href="#" class="home">Home</a>
        </div>
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

    <!-- Lost Pets Grid -->
    <div class="pets-container">
        <?php 
            // Database connection
            include("db.php");

            // Check for filters
            $where = [];
            if (!empty($_GET['breed'])) {
                $breed = $_GET['breed'];
                $where[] = "breed = '$breed'";
            }
            if (!empty($_GET['color'])) {
                $color = $_GET['color'];
                $where[] = "color = '$color'";
            }
            // Build query
            $query = "SELECT * FROM lost_pets";
            if (count($where) > 0) {
                $query .= " WHERE " . implode(" AND ", $where);
            }

            // Fetch lost pets from the database
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="pet-card">
                    <?php 
                        $user_id = $row['user_id'];
                        $phoneSQL = "SELECT phone FROM users WHERE user_id = '$user_id'";
                        $phoneRes = mysqli_query($conn, $phoneSQL);
                        $phoneVal = mysqli_fetch_assoc($phoneRes);

                        echo '<img class="gallery-img" src="lost/' . $row["image_path"] . '">';
                    ?>
                        <h3><?php echo $row['name']; ?></h3>
                        <p><strong>Breed:</strong> <?php echo $row['breed']; ?></p>
                        <p><strong>Color:</strong> <?php echo $row['color']; ?></p>
                        <p><strong>Last Seen:</strong> <?php echo $row['last_seen_location']; ?></p>
                        <p><strong>Date:</strong> <?php echo $row['last_seen_date']; ?></p>
                        <p><strong>Contact Owner:</strong> <?php echo $phoneVal['phone']; ?></p>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No lost pets found.</p>";
            }

            $conn->close();
        ?>
    </div>

</body>
</html>
