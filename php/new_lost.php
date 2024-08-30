<?php
session_start();

    include("db.php");

    $user_id = $_SESSION['user_id'];

    if($_SERVER['REQUEST_METHOD'] == "POST") {

            $name = $_POST['name'];
            $breed = $_POST['breed'];
            $color = $_POST['color'];
            $loc = $_POST['loc'];
            $date = $_POST['date'];
            
            $filename = $_FILES["pic"]["name"];
            
            $tempname = $_FILES["pic"]["tmp_name"];  
            
            $folder = "lost/".$filename;
            
            /*$sql = "INSERT INTO profile_pic (roll_no, pic) VALUES ('$userId', '$filename')";
            $check = "SELECT * FROM profile_pic WHERE roll_no = '$userId'";
            $checkres = mysqli_query($conn, $check);
            
            if($checkres && mysqli_fetch_assoc($checkres) == 0) {
                mysqli_query($conn, $sql);       
                
                if (move_uploaded_file($tempname, $folder)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
        }
        }*/
        
        $query = "INSERT INTO lost_pets (user_id, name, breed, color, last_seen_location, last_seen_date, image_path) VALUES('$user_id', '$name', '$breed', '$color', '$loc', '$date', '$filename')";
        
        mysqli_query($conn, $query);
        move_uploaded_file($tempname, $folder);
        /*if(move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        }
        if($result) {
            header("Location: lost_found.php");
        }*/
    }
?>
<link rel="stylesheet" type="text/css" href="../css/MStudentLogin.css">
</head>
<body>
  <div class="wrapper">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
      <h1>Lost Pet's Details</h1>
      <div class="input-box">
        <input type="text" name="name" placeholder="Name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" name="breed" placeholder="Breed" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" name="color" placeholder="Color" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" name="loc" placeholder="Last seen at" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="date" name="date" placeholder="Date" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="file" name="pic" id="pic" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn" name="upload">Report</button><br><br>
    </form>
  </div>
</body>
</html> 

<style>
  body {
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../images/back.avif);
  }
  

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 420px;
  background: #FAF9F6;
  
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: black;
  border-radius: 12px;
  padding: 30px 40px;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;

  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: black;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: black;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}

.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.SignUp{
  text-decoration: none;
  color: black;
}
</style>